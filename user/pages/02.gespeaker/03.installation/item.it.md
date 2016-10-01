---
title: Installazione
product: gespeaker
depth: 1
---

# Installazione su Debian, Ubuntu e derivate

E' possibile scaricare il pacchetto **deb** dalla pagina [Scarica](../download) e installarlo utilizzando:

	cd "~/cartella con il file scaricato"
    sudo dpkg -i "nome del file.deb"

# Installazione su Arch Linux e derivate

In AUR è presente l'ultima versione disponibile, è possibile scaricarla e compilarla utilizzando yaourt (o un analogo gestore per AUR) con ```yaourt -S gespeaker``` e seguire le istruzioni del gestore di AUR.

E' anche disponibile la versione di sviluppo in AUR e può essere installata utilizzando yaourt (o un analogo gestore per AUR) con ```yaourt -S gespeaker-git```.

Per chi non volesse impiegare AUR è possibile scaricare il pacchetto **tar.xz** dalla pagina [Scarica](../download) e installarlo utilizzando:

	cd "~/cartella con il file scaricato"
    sudo pacman -U "nome del file.pkg.tar.xz"

# Installazione dal codice sorgente

Se non fosse disponibile il pacchetto preassemblato per la propria distribuzione è possibile utilizzare il pacchetto col codice sorgente per installare Gespeaker utilizzando:

    cd "~/cartella con il file scaricato"
    mkdir build
    tar xzf "nome del file.pkg.tar.gz" -C build
    cd build/gespeaker-*
    python2 setup.py build
    sudo python2 setup.py install
    sudo gtk-update-icon-cache -q /usr/share/icons/hicolor/
    sudo xdg-icon-resource forceupdate
    sudo xdg-desktop-menu forceupdate
    cd ..

Al termine dell'installazione, se non sono stati riportati errori sarà possibile eliminare la cartella build da root oppure tramite ```sudo rm -rf "build"``` e il file sorgente scaricato.

>>> Dopo aver eseguito la procedura di installazione manuale da codice sorgente non sarà possibile disinstallare automaticamente il software ma sarà necessario eliminare manualmente tutti i files installati che sono indicati durante l'ultimo passaggio del processo di installazione.