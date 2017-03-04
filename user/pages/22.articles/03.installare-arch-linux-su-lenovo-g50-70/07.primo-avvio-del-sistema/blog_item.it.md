---
title: 'Primo avvio del sistema'
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
        - hashtool
        - refind
        - enroll
        - mok
        - utility
        - validation
summary: 'Installare Arch Linux su Lenovo IdeaPad G50-70 con UEFI e Secure Boot (parte 7 - Primo avvio del sistema)'
product: articles
depth: 2
---

Avviando per la prima volta Arch Linux dal menu di rEFInd sarà mostrato un avviso riguardo un errore di Secure Boot per il kernel **vmlinux-linux**.

![](refind-secure-boot-failed.png)

**Secure Boot validation failure loading vmlinuz-linux!**

Il messaggio di errore fornisce anche la soluzione, utilizzare l'utilità MOK per registrare il file vmlinuz-linux. Premendo un tasto qualsiasi si tornerà a rEFInd.

![](refind_tool_mok_tool.png) **Start MOK utility at EFI\refind\HashTool.efi on SYSTEM_DRV**

Dalla seconda riga utilizzare l'icona per aggiungere un file al database MOK.

![](hashtool-2.png)

Sarà mostrato nuovamente il menu di **HashTool**, già visto durante la fase di [preparazione](../preparazione-del-sistema).

Scegliere quindi la voce dal menu **Enroll Hash** e selezionare il file **vmlinuz-linux** posto sulla radice della partizione. Quando richiesto  (**Enroll this hash into MOK database?**) rispondere confermando su **Yes** e al termine uscire dall'utilità scegliendo **Exit**.

Ritornati al menu di rEFInd sarà adesso possibile avviare Arch Linux normalmente.