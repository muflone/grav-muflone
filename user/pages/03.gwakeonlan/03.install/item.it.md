---
title: Installazione
product: gwakeonlan
depth: 1
---

# Installazione su Debian, Ubuntu e derivate

E' possibile scaricare il pacchetto **deb** dalla pagina [Scarica](../download) e installarlo utilizzando:

	cd "~/cartella con il file scaricato"
    sudo dpkg -i "nome del file.deb"

# Installazione su Arch Linux e derivate

Nel repository ufficiale **community** è possibile trovare l'ultima versione disponibile, e può essere installata usando il comando ```pacman -S gwakeonlan```.

E' anche disponibile la versione di sviluppo in AUR e può essere installata utilizzando yaourt (o un analogo gestore per AUR) con ```yaourt -S gwakeonlan-git```.

E' anche possibile scaricare il pacchetto **tar.xz** dalla pagina [Scarica](../download) e installarlo utilizzando:

	cd "~/cartella con il file scaricato"
    sudo pacman -U "nome del file.pkg.tar.xz"

# Installazione dal codice sorgente

Se non fosse disponibile il pacchetto preassemblato per la propria distribuzione è possibile utilizzare il pacchetto col codice sorgente per installare gWakeOnLAN utilizzando:

    cd "~/cartella con il file scaricato"
    mkdir build
    tar xzf "nome del file.pkg.tar.gz" -C build
    cd build/gwakeonlan-*
    python2 setup.py build
    sudo python2 setup.py install
    sudo gtk-update-icon-cache -q /usr/share/icons/hicolor/
    sudo xdg-icon-resource forceupdate
    sudo xdg-desktop-menu forceupdate
    cd ..

Al termine dell'installazione, se non sono stati riportati errori sarà possibile eliminare la cartella build da root oppure tramite ```sudo rm -rf "build"``` e il file sorgente scaricato.

>>> Dopo aver eseguito la procedura di installazione manuale da codice sorgente non sarà possibile disinstallare automaticamente il software ma sarà necessario eliminare manualmente tutti i files installati che sono indicati durante l'ultimo passaggio del processo di installazione.
