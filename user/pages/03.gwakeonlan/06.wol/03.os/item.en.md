---
title: 'In the Operating System'
product: gwakeonlan
depth: 2
---

# Introduction
After [enabling the Wake on LAN in the BIOS](../bios) the operating system must be informed to enable it before the shutdown otherwise the machine will not turn on even if everything else is done properly.

# GNU/Linux
To check if the network card supports the Wake On LAN then the following command can be used:

    # ethtool eth0
    Settings for eth0:
        ....
        Supports Wake-on: pumbg
        Wake-on: d
        .....

If the **Supports Wake-on** field contains **g** then the Wake On LAN by magic-packet can be used:

	# ethtool -s eth0 wol g
    # ethtool eth0
    Settings for eth0:
    	....
        Wake-on: g
        ....

The command must be performed before the machine shutdown.
# Apple OS X
In the Apple OS X systems the Wake On LAN setting can be found in the **System Preferences** under the section **Energy Saver**.

![Apple OS X 1](/resources/gwakeonlan/wol_os/osx-1.png?lightbox)

# Microsoft Windows
On major Microsoft Windows OS the Wake On LAN is enabled by default so generally nothing to be done is needed.
If the machine still doesn't turn itself on then you should check if the operating system has the Wake On LAN enabled with the **magic-packet**.

The following specifications can be different, they depends from the used driver.

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