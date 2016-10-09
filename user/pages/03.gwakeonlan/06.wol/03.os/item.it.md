---
title: 'Nel Sistema Operativo'
product: gwakeonlan
depth: 2
---

# Introduzione
Dopo aver [abilitato il Wake on LAN nel BIOS](../bios) il sistema operativo deve essere informato di abilitarlo prima dello spegnimento altrimenti la macchina non si riaccenderà anche se tutto il resto è stato fatto nella maniera corretta.

# GNU/Linux
Per controllare se la scheda di rete supporta il Wake On LAN il seguente comando può essere utilizzato:

    # ethtool eth0
    Settings for eth0:
        ....
        Supports Wake-on: pumbg
        Wake-on: d
        .....

Se il campo **Supports Wake-on** contiene **g** allora il Wake On LAN con Magic Packet può essere utilizzato:

	# ethtool -s eth0 wol g
    # ethtool eth0
    Settings for eth0:
    	....
        Wake-on: g
        ....

Il comando deve essere eseguito prima dello spegnimento della macchina.
# Apple OS X
Nei sistemi Apple OS X l'impostazione del Wake On LAN si trova nelle **Preferenze di sistema** e quindi nella sezione **Risparmio energia**.

![Apple OS X 1](/resources/gwakeonlan/wol_os/osx-1.png?lightbox)

# Microsoft Windows
Nei principali sistemi operativi Microsoft Windows il Wake On LAN è abilitato in maniera predefinita quindi in linea generale non è necessario eseguire nessuna operazione.
Se la macchina ancora non si accende allora può essere necessario verificare se il sistema operativo ha il Wake On LAN attivato col **Magic Packet**.

Le specifiche seguenti potrebbero essere differenti in quanto dipendenti dal driver in uso.

## Microsoft Windows XP
![Windows XP 1](/resources/gwakeonlan/wol_os/windows_xp-1.jpg?lightbox)
![Windows XP 2](/resources/gwakeonlan/wol_os/windows_xp-2.jpg?lightbox)
## Microsoft Windows 2000/2003 Server
![Windows 2000 1](/resources/gwakeonlan/wol_os/windows_2000-1.jpg?lightbox)
## Microsoft Windows Vista/7/8/2008 Server
![Windows Vista 1](/resources/gwakeonlan/wol_os/windows_vista-1.png?lightbox)
![Windows Vista 2](/resources/gwakeonlan/wol_os/windows_vista-2.png?lightbox)

![Windows Vista 3](/resources/gwakeonlan/wol_os/windows_vista-3.png?lightbox)
![Windows Vista 4](/resources/gwakeonlan/wol_os/windows_vista-4.png?lightbox)

![Windows Vista 5](/resources/gwakeonlan/wol_os/windows_vista-5.png?lightbox)
![Windows Vista 6](/resources/gwakeonlan/wol_os/windows_vista-6.jpg?lightbox)

![Windows Vista 7](/resources/gwakeonlan/wol_os/windows_vista-7.png?lightbox)