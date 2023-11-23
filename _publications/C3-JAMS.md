---
title: "JAMS: Jitter-Aware Message Scheduling for FlexRay Automotive Networks"
label: "C3"
collection: publications
categories: ConferencePaper
permalink: /publications/C3-JAMS
excerpt: ''
date: 2017-10-20
venue: 'IEEE/ACM International Symposium on Network-on-Chip (NOCS)'
citation: 'V. K. Kukkala, S. Pasricha, and T. Bradley, &quot;JAMS: Jitter-Aware Message Scheduling for FlexRay Automotive Networks,&quot; in <i>Proc. of IEEE/ACM International Symposium on Network-on-Chip (NOCS)</i>, October 2017.'
---

### Abstract
FlexRay is becoming a popular in-vehicle communication protocol for the next generation x-by-wire applications such as drive-by-wire and steer-by-wire. The protocol supports both time-triggered and event-triggered transmissions. One of the important challenges with time-triggered transmissions is jitter, which is the unpredictable delay-induced deviation from the actual periodicity of a message. Failure to account for jitter can be catastrophic for time critical automotive applications. In this paper we propose a novel scheduling framework (JAMS) that handles both jitter affected time-triggered messages and high priority event-triggered messages to ensure message delivery while satisfying timing constraints. At design time, JAMS handles packing of multiple signals from Electronic Control Units (ECUs) into messages, and synthesizes a schedule using intelligent heuristics. At runtime, a Multi-Level Feedback Queue handles jitter affected time-triggered messages, and high priority event-triggered messages. We also propose a runtime scheduler that packs these messages into the FlexRay static segment slots depending on available slack. Experimental analysis indicates that JAMS improves the response time by 25.3% on average and up to 41% compared to the best-known prior work in the area.
{: style="text-align: justify"}

[Download full paper here](https://ieeexplore.ieee.org/document/8368591)