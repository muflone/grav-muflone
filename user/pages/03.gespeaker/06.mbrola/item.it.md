---
title: 'Motore MBROLA'
product: gespeaker
depth: 1
---

# Introduzione
Gespeaker supporta due differenti motori di sintetizzazione vocale: **espeak** è quello predefinito e nativo e [**MBROLA**](http://tcts.fpms.ac.be/synthesis/), un motore aggiuntivo che offre delle voci più realistiche.

È possibile consultare la pagina [voci dimostrative](../demo) per ascoltare alcuni esempi di entrambi i motori vocali.

Per utilizzare **espeak** non è necessario nessun tipo di configurazione da fare, Gespeaker lo utilizzerà nativamente, basterà scegliere la lingua desiderata e regolare i parametri della voce.

# Installazione di MBROLA
Per utilizzare MBROLA è necessario prima installare il pacchetto ```mbrola``` e almeno una voce di MBROLA come ad esempio ```mbrola-en1``` o ```mbrola-us3``` (il nome esatto del pacchetto da installare dipende dalla propria distribuzione).

# Utilizzo di MBROLA
![Preferences window for MBROLA](/resources/gespeaker/archive/latest/italian/mbrola.png?classes=center)

Dopo aver installato i pacchetti necessari sarà necessario controllare nella finestra delle preferenze la scheda Voci MBROLA assicurandosi che il percorso delle voci sia quello dove sono state installate e cliccare il pulsante **Aggiorna** per ricercare le voci nel nuovo percorso. Il percorso predefinito delle voci MBROLA è ```/usr/share/mbrola```.

Dopo aver installato le voci MBROLA oppure dopo aver cambiato il percorso delle voci sarà necessario riavviare Gespeaker per poter vedere le nuove voci.
