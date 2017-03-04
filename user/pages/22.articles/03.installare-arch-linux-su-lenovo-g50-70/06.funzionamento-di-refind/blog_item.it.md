---
title: 'Funzionamento di rEFInd'
description: 'Funzionamento di rEFInd'
date: '16-06-2015 00:00'
taxonomy:
    tag:
        - arch
        - linux
        - lenovo
        - ideapad
        - g50-70
        - uefi
        - 'secure boot'
        - efibootmgr
        - loader
        - refind
        - prebootloader
summary: 'Installare Arch Linux su Lenovo IdeaPad G50-70 con UEFI e Secure Boot (parte 6 - Funzionamento di rEFInd)'
product: articles
depth: 2
---

![](refind.png?classes=center)

Il gestore di avvio rEFInd offre numerose possibilità e con molta semplicità permette l'avvio di sistemi operativi differenti.

Il suo funzionamento è assai semplice e generalmente basta spostarsi con le freccette e confermare la scelta premendo Invio. E' anche possibile premere il tasto corrispondente al numero del sistema da avviare, 1 per la prima icona visualizzata, 2 per la seconda e così via.

Nella finestra di rEFInd sono visibili varie icone.

# Icone dei sistemi avviabili

La prima fila di icone rappresenta un sistema operativo avviabile.

|**Icona**                   |**Significato**                                  |
|----------------------------|:------------------------------------------------|
|![](refind_os_arch.png)     |Indica l'avvio di un sistema Arch Linux          |
|![](refind_os_linux.png)    |Indica l'avvio di un generico sistema GNU/Linux  |
|![](refind_os_win.png)      |Indica l'avvio di un sistema Microsoft Windows   |
|![](refind_os_win8.png)     |Indica l'avvio di un sistema Microsoft Windows 8 |
|![](refind_os_unknown.png)  |Indica l'avvio di un sistema operativo generico  |
|![](refind_arrow_right.png) |Scorre l'elenco dei sistemi verso destra         |
|![](refind_arrow_left.png)  |Scorre l'elenco dei sistemi verso sinistra       |

L'elenco delle icone dei sistemi operativi non si esaurisce qui ma ne esistono anche tante altre disponibili nella directory icons di rEFInd.

Premendo **F2** sopra un sistema avviabile saranno mostrate opzioni aggiuntive riguardo l'avvio, come la modalità single.

Premendo **ESC** in qualsiasi parte viene aggiornato l'elenco dei sistemi rilevati.

# Icone aggiuntive dei sistemi avviabili

Nell'angolo destro di ogni icona di un sistema avviabile è presente un'icona aggiuntiva che indica dove si trovi il sistema operativo da avviare.

|**Icona**                    |**Significato**                                  |
|-----------------------------|:------------------------------------------------|
|![](refind_vol_internal.png) |Indica un sistema avviato da un disco interno    |
|![](refind_vol_optical.png)  |Indica un sistema avviato da un'unità ottica     |
|![](refind_vol_external.png) |Indica un sistema avviato da un disco esterno    |
|![](refind_vol_net.png)      |Indica un sistema avviato da rete                |

# Icone delle utilità aggiuntive

La fila di icone in basso rappresenta una serie di utilità aggiuntive. Quelle non supportate o non disponibili non saranno mostrate.

|**Icona**                           |**Significato**                                  |
|------------------------------------|:------------------------------------------------|
|![](refind_tool_windows_rescue.png) |Avvia la partizione di ripristino di Windows     |
|![](refind_tool_mok_tool.png)       |Avvia uno degli strumenti di firma di PreLoader  |
|![](refind_tool_memtest.png)        |Avvia l'utilità di controllo della memoria RAM   |
|![](refind_tool_shell.png)          |Avvia una shell EFI                              |
|![](refind_func_about.png)          |Mostra le informazioni sulla versione di rEFInd  |
|![](refind_func_shutdown.png)       |Spegne il computer                               |
|![](refind_func_reset.png)          |Riavvia il computer                              |
|![](refind_func_exit.png)           |Esce da rEFInd e torna alla Shell EFI            |
|![](refind_func_firmware.png)       |Avvia l'utilità di configurazione di UEFI        |
