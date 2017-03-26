---
title: 'Aggiornamento del firmware'
product: articles
depth: 1
summary: 'Aggiornamento del firmware sul Kingston MLWG2'
---

![](../utilizzo-con-android/mobilelite-app-05.png?lightbox&resize=216,384&classes=center)

Dall'[applicazione per Android][MobileLite App], nella sezione impostazioni è possibile verificare la versione del firmware installato nel dispositivo.

>>>>> La presente guida è una semplice documentazione sulla procedura di aggiornamento. L'autore di questo sito non si assume la responsabilità di eventuali guasti, difetti o malfunzionamenti dovuti alla procedura di aggiornamento del firmware.

Per aggiornare il firmware del Kingston MLWG2 all'ultime versione basterà collegarsi alla pagina [Firmware sul sito Kingston][Firmware] e scaricare il file in fondo alla pagina, ad oggi si tratta del file *mlwG2_v2.0.0.6.zip* [shortcode-offline-copy]mlwG2_v2.0.0.6.zip[/shortcode-offline-copy].

Decomprimere quindi il file zip e al suo interno si troverà un file con estensione .bin (ad oggi si tratta del file mlwG2_v2.0.0.6.bin).

Salvare il file .bin in un dispositivo USB vuoto e **formattato con file system FAT32** e inserirlo nel MLWG2, assicurandosi di aver tolto tutti gli altri dispositivi di memoria (come le memory card SD).

![](mobilelite-app-13.png?crop=0,0,540,350&classes=center)

Avviando l'applicazione MobileLite sarà possibile verificare che il file .bin sia rilevato correttamente dal dispositivo.

>>>>>> Assicurarsi che la sezione **Scheda SD** sia ombreggiata, a conferma che non siano inseriti altri dispositivi di memoria che potrebbero causare problemi durante la procedura di aggiornamento.

&nbsp;

>>> Durante tutto il processo di aggiornamento del firmware non utilizzare il dispositivo e soprattutto **non spegnerlo** prima che l'operazione sia conclusa. In caso contrario potrebbe danneggiarsi il dispositivo.

Se il file del firmware viene correttamente visualizzato dall'applicazione è possibile procedere a riavviare il Kingston MLWG2 spegendo e riaccendendo dallo stesso pulsante.

Alla riaccensione si accenderà il led WiFi e lampeggerà per circa 5 minuti fino a quando la procedura di aggiornamento non sia completata.

Al termine dell'operazione di aggiornamento il sistema si riavvierà spontaneamente e dall'applicazione MobileLite si potrà verificare che il file .bin del firmware sarà stato eliminato dalla memoria USB.

A completezza, qui di seguito si possono trovare i log del processo di aggiornamento, recuperati tramite console seriale:
* [Procedura di aggiornamento](flashing-1.txt)
* [Primo avvio dopo l'aggiornamento](flashing-2.txt)

[Firmware]: https://support.kingston.com/it/support/technical/downloads?product=mlwg2&filename=mlwG2_v2
[MobileLite App]: ../utilizzo-con-android