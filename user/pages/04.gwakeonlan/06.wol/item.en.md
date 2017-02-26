---
title: 'Wake On LAN'
product: gwakeonlan
depth: 1
---

# Wake On LAN
gWakeOnLAN uses the [Wake On LAN] system to turn on a machine in both local network or through Internet.

The Wake On LAN type used by gWakeOnLAN is called [Magic Packet] and is accomplished by sending to the target machine a special crafted [UDP packet][UDP] containing some data. The sleeping machine must be configured to receive the packets even in turned off state so that when the special Magic Packet is received the machine will automatically turned on.

To allow gWakeOnLAN to work all the system [requirements](requirements) must be met.

# Local usage
![Local usage](/resources/gwakeonlan/usage/english/local.png?classes=center)

When the request type made from gWakeOnLAN is **Local (broadcast)** the Magic Packet is sent to the whole local network via a broadcast request made to the special IP address **255.255.255.255**.
In a normal network environment where the broadcast packets are not blocked in any level, all the machines in the local network will receive the packet.

# Internet usage
![Internet usage](/resources/gwakeonlan/usage/english/internet.png?classes=center)
When the request type is **Internet** a destination host is required and the Magic Packet will be sent to such host which must provide to send it to the correct turned off machine.

The destination host is not meant to be the machine to turn on but a reachable network peer that could receive the UDP packet and forward it to the machine to turn on using the Wake On LAN.

[Wake On LAN]: http://en.wikipedia.org/wiki/Wake_on_LAN
[Magic Packet]: http://en.wikipedia.org/wiki/Wake_on_LAN#Magic_packet
[UDP]: http://en.wikipedia.org/wiki/User_Datagram_Protocol
