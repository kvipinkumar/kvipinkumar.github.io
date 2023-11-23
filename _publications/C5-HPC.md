---
title: "Designing Heterogeneous Systems: Large Scale Architectural Exploration Via Simulation"
label: "C5"
collection: publications
categories: ConferencePaper
permalink: /publications/C5-HPC
excerpt: ''
date: 2021-12-20
venue: 'IEEE/ACM Programming Environments for Heterogeneous Computing (PEHC)'
citation: 'D. Emmot, R. Menhusen, D. Dauwe, V. K. Kukkala, and K. Bresniker, &quot;Designing Heterogeneous Systems: Large Scale Architectural Exploration Via Simulation,&quot; in <i>Proc. of IEEE/ACM Programming Environments for Heterogeneous Computing (PEHC)</i>, December 2021.'
---

### Abstract
The end of Dennard’s scaling in 2005 and the emerging end of Moore’s Law has resulted in a number of heterogeneous design wins, applied to compute (vector processing (GPUs), vector-matrix multiplication, FPGAs, etc.), memory (High Bandwidth Memory (HBM), Fabric Attached Memory (FAM), memory-driven designs, etc.) and interconnects (CXL, Gen-Z, etc.). Designing these heterogeneous systems is becoming increasingly hard due to a plethora of architectural choices. Whole meta-level programming environments are required for designing and architecting heterogeneity of both systems and the applications running on those systems. Hewlett Packard Enterprise™ (HPE) has found Sandia’s Structural Simulation Toolkit (SST) to be a powerful aid to architectural exploration and validation of applications optimized for use with Fabric Attached Memory (FAM) with near memory compute abilities. Standard SST components have been augmented with plug-ins modeling Cray Slingshot™ Network Interface Controller (NIC) and router elements with drivers for OpenSHMEM and OpenFAM APIs. We anticipate future initiatives calling for dramatic improvement across broader HPC application areas to require refined processes in the collaborative invention of new heterogeneous designs. In this article, we present our process of using white-box characterization of applications at a node level to create abstract models and discuss the methodologies that are used to reliably extend simulations to scales of 10’s of thousands of nodes to estimate large scale throughput. Our application and API simulation methodology ensures high communication resource utilization with robust, straightforward interfaces conducive to collaborative heterogeneous accelerator integration. Application and system developers are thus enabled to exploit heterogeneity to support higher system throughput.
{: style="text-align: justify"}

[Download full paper here](https://ieeexplore.ieee.org/document/9651152)