---
title: Installation
product: gespeaker
depth: 1
---

# Installation on Debian, Ubuntu and derivatives

It's possible to download the **deb** package from the [Download page](../download) and install it using:

	cd "~/folder with the downloaded file"
    sudo dpkg -i "file name.deb"

# Installation on Arch Linux and derivatives

In the official **community repository** you can find the latest available version, it can be installed using the command ```pacman -S gespeaker```.

The development version is also available in the AUR and can be installed using yaourt (or a similar AUR helper) with ```yaourt -S gespeaker-git```.

It's also possibile to download the **tar.xz** package from the [Download page](../download) and install it using:

	cd "~/folder with the downloaded file"
    sudo pacman -U "file name.pkg.tar.xz"

# Installation from source code

If the prebuilt package will not be available for your distribution you can use the source code package to install Gespeaker using:

	cd "~/folder with the downloaded file"
	mkdir build
	tar xzf "file name.pkg.tar.gz" -C build
	cd build/gespeaker-*
	python2 setup.py build
	sudo python2 setup.py install
	sudo gtk-update-icon-cache -q /usr/share/icons/hicolor/
	sudo xdg-icon-resource forceupdate
	sudo xdg-desktop-menu forceupdate
	cd ..

After the installation, if no errors were reported the folder build can be removed from root or via ```sudo rm -rf "build"``` and the same for the downloaded source package.

>>> After executing the manual installation from source code an automatic software uninstall will not be possibile but you will have to manually delete all the installed files that were reported during the last installation step.