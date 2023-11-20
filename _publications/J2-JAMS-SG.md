---
title: "JAMS-SG: A Framework for Jitter-Aware Message Scheduling for Time-Triggered Automotive Networks"
label: "J2"
collection: publications
categories: JournalPaper
permalink: /publication/J2-JAMS-SG
excerpt: ''
date: 2019-09-17
venue: 'ACM Transactions on Design Automation of Electronic Systems (TODAES)'
paperurl: ''
citation: 'V. K. Kukkala, S. Pasricha, and T. Bradley, &quot;JAMS-SG: A Framework for Jitter-Aware Message Scheduling for Time-Triggered Automotive Networks,&quot; in <i>ACM Transactions on Design Automation of Electronic Systems (TODAES)</i>, Vol. 24, Iss. 6, September 2019.'
---

### Abstract
Time-triggered automotive networks use time-triggered protocols (FlexRay, TTEthernet, etc.) for periodic message transmissions that often originate from safety and time-critical applications. One of the major challenges with time-triggered transmissions is jitter, which is the unpredictable delay-induced deviation from the actual periodicity of a message. Failure to account for jitter can be catastrophic in time-sensitive systems, such as automotive platforms. In this article, we propose a novel scheduling framework (JAMS-SG) that satisfies timing constraints during message delivery for both jitter-affected time-triggered messages and high-priority event-triggered messages in automotive networks. At design time, JAMS-SG performs jitter-aware frame packing (packing of multiple signals from Electronic Control Units (ECUs) into messages) and schedules synthesis with a hybrid heuristic. At runtime, a Multi-Level Feedback Queue (MLFQ) handles jitter-affected time-triggered messages and high-priority event-triggered messages that are scheduled using a runtime scheduler. Our simulation results, based on messages and network traffic data from a real vehicle, indicate that JAMS-SG is highly scalable and outperforms the best-known prior work in the area in the presence of jitter.
{: style="text-align: justify"}

[Download full paper here](https://dl.acm.org/doi/10.1145/3355392)