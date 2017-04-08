---
title: 'Console tramite cavo seriale'
date: '08-04-2017 00:00'
product: articles
depth: 1
summary: 'Accesso alla console tramite un cavo seriale'
---

![](console-1.png?classes=center)

E' possibile avere l'accesso alla console del MLWG2 tramite un cavo seriale da collegare ai contatti posti sul PCB (*printed circuit board* in altre parole la scheda col circuito stampato) del dispositivo dopo [averlo disassemblato](../disassemblare-mlwg2). L'accesso alla console permetterà di avere il pieno controllo del sistema operativo in esso installato.

L'utilizzo della console richiede il collegamento di un cavo seriale **TTL** (*transistor-transistor logic*), ce ne sono tantissimi in circolazione, di tutti i prezzi e tipi. Io ho acquistato [questo su Amazon][B01I4ZY5BW] [shortcode-offline-copy]amazon-B01I4ZY5BW.pdf[/shortcode-offline-copy] ad un costo molto contenuto.

![](serial-1.jpg?lightbox&resize=360,270&classes=center)

Questo tipo di cavo offre separatamente i cavi e l'adattatore seriale USB, per cui sarà necessario effettuare alcune saldature dai contatti sul PCB ai poli del cavo collegato all'adattatore seriale.

L'adattatore seriale possiede 8 contatti, disposti come segue:
1. **DTR** (*Data Terminal Ready*) controlla quando un dispositivo è pronto a comunicare
1. **RXI** (*Receive Input*) riceve i dati dal dispositivo verso la seriale
1. **TXO** (*Transmit Output*) trasmette i dati dalla seriale verso il dispositivo
1. **VCC** trasmette una carica elettrica (da 3.3V o da 5V) dalla seriale verso il dispositivo
1. **CTS** (*Clear To Send*) coordina il controllo di flusso dei dati
1. **GND** (*Ground*) rappresenta il voltaggio neutro

![](serial-2.jpg?lightbox&resize=360,270&classes=center)

I contatti sul PCB sono 4, disposti come segue:
1. **VCC** (Corrente a 3.3V), **non va collegato** all'adattatore seriale
1. **TX** (Trasmissione dal PCB) che andrà collegato al polo **RXI** dell'adattatore seriale
1. **RX** (Ricezione dal PCB) che andrà collegato al polo **TXO** dell'adattatore seriale
1. **GND** che andrà collegato al polo **GND** dell'adattatore seriale

>>> Collegando il polo VCC dell'adattatore seriale su un qualsiasi polo del circuito stampato si farà passare corrente sulla piastra col rischio di danneggiarla. Quel polo non va assolutamente collegato con questo dispositivo.

![](serial-3.jpg?lightbox&resize=360,270&classes=center)

Per agevolare la connessione tra PCB e cavi dell'adattatore di rete ho usato dei normalissimi spilli di quello usati in abbigliamento per fermare dei punti. In alternativa avrei potuto tagliare il termine dei cavi e collegarli direttamente alla piastra.

![](serial-4.jpg?lightbox&resize=360,270&classes=center)

Fatto questo, collegando l'adattatore seriale alla porta USB immediatamente si illuminerà il led rosso a conferma dell'operatività.

Sul mio sistema Arch Linux il dispositivo USB viene rilevato come ttyUSB0 ma per sapere esattamente con quale dispositivo l'adattatore seriale viene riconosciuto basterà eseguire il comando ``dmesg``:

    usb 2-1: new full-speed USB device number 2 using xhci_hcd
    usbcore: registered new interface driver usbserial
    usbcore: registered new interface driver usbserial_generic
    usbserial: USB Serial support registered for generic
    usbcore: registered new interface driver cp210x
    usbserial: USB Serial support registered for cp210x
    cp210x 2-1:1.0: cp210x converter detected
    usb 2-1: cp210x converter now attached to ttyUSB0

Prima di procedere ad utilizzare il dispositivo seriale diamo una verifica ai permessi:

    $ ls -l /dev/ttyUSB0
    crw-rw---- 1 root uucp 188, 0  8 apr 20.19 /dev/ttyUSB0

Dal dispositivo possono leggere e scrivere l'utente root e i membri del gruppo uucp, questo significa che per accedere sarà necessario eseguire comandi con root oppure aggiungersi al gruppo uucp col comando:

    sudo useradd -G uucp $USER

>>>>>> Per applicare il nuovo gruppo all'utente corrente sarà necessario disconnettersi e riconnettersi al sistema oppure in alternativa riavviare il sistema.

Una volta avuto accesso alla porta seriale basterà avviare un terminale seriale con i seguenti parametri:

*  porta ttyUSB0 (ovvero quella rilevata in precedenza)
*  velocità 57600 baud
*  parità nessuna
*  bit dati 8
*  bit di stop 1

In questo esempio io utilizzo picocom:

    $ picocom --baud 57600 --parity none --databits 8 --stopbits 1 /dev/ttyUSB0
    
    picocom v2.2
    
    port is        : /dev/ttyUSB0
    flowcontrol    : none
    baudrate is    : 57600
    parity is      : none
    databits are   : 8
    stopbits are   : 1
    escape is      : C-a
    local echo is  : no
    noinit is      : no
    noreset is     : no
    nolock is      : no
    send_cmd is    : sz -vv
    receive_cmd is : rz -vv -E
    imap is        : 
    omap is        : 
    emap is        : crcrlf,delbs,
    
    Type [C-a] [C-h] to see available commands
    
    Terminal ready

In caso di necessità per disconnettersi dal terminale seriale basterà premere i tasti <kbd>CTRL</kbd>+<kbd>A</kbd>.

Se il dispositivo era già avviato al momento del collegamento seriale premendo invio sarà mostrato ``#`` che è il prompt di root dal quale sarà possibile immettere comandi Linux per gestire il MLWG2, ad esempio con ``uname -a`` si vedrà la versione installata del kernel e il tipo di architettura (MIPS).

    # uname -a
    Linux (none) 2.6.36+ #2 Thu Sep 18 10:05:08 CST 2014 mips unknown

Se si riavvia il dispositivo sarà possibile visualizzare la sequenza di avvio del sistema e persino gestire le preferenze per il ripristino in caso di guasto al firmware. E' possibile visualizzare il [log completo della sequenza di avvio](picocom.txt) del sistema standard.

[B01I4ZY5BW]: https://www.amazon.it/gp/product/B01I4ZY5BW/