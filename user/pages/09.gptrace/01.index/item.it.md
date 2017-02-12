---
title: Introduzione
product: gptrace
depth: 1
---

# Descrizione

**gpTrace** è un'applicazione libera basata sulle GTK+ per tracciare le attività di un processo esterno. Basterà scegliere il programma esterno da eseguire, premere il pulsante **Esegui** ed osservare i risultati dell'operazione. Ogni syscall (chiamata a funzione del sistema operativo) sarà mostrata ed ogni processo esterno avviato sarà tracciato nella finestra di gpTrace.

![](/resources/gptrace/archive/latest/italian/main.png?classes=center)

E' possibile decidere quali syscall intercettare per includere o escludere per limitare i risultati.

![](/resources/gptrace/archive/latest/italian/expanded.png?classes=center)

Per ciascuna syscall intercettata si potrà vedere quante chiamate sono state effettuate.

![](/resources/gptrace/archive/latest/italian/counts.png?classes=center)

Sarà anche possibile vedere un elenco di tutti i file richiesti dall'applicazione, indipendentemente dalla loro esistenza.

![](/resources/gptrace/archive/latest/italian/files.png?classes=center)

Se l'applicazione richiesta fa uso di processi multipli esterni sarà possibile vedere l'elenco dei processi, incluse alcune informazioni basilari.

![](/resources/gptrace/archive/latest/italian/processes.png?classes=center)

[muflone-install type="index" package="gptrace" name="gpTrace"][/muflone-install]

[muflone-translations type="index" package="gptrace" name="gpTrace"]
* Inglese
* Italiano
* Bulgaro

[/muflone-translations]

[muflone-license type="index" package="gptrace" name="gpTrace"][/muflone-license]
