---
title: Install latest patches to fix Adobe Commerce Redis issues
labels: 2.3.3,2.3.4,CPU,Magento Commerce Cloud,Redis,Redis 5,memory,patch,performance,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides information on the latest Redis-related patches available in [Adobe Commerce on cloud infrastructure Patches](https://devdocs.magento.com/cloud/project/project-patch.html) package.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.3.3, 2.3.4

## Issue

Extra CPU and memory consumption by Redis might decrease the Adobe Commerce performance and thus the overall performance of your website.

## Solution

Apply the latest patches provided by Adobe Commerce on cloud infrastructure Patches package. For detailed instructions, refer to [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

The latest Redis patches delivered by Adobe Commerce on cloud infrastructure Patches package, contribute to the following:

* reducing the size of networking communication for Redis
* fixing race conditions that lead to extra memory consumption
* changing Cache Adapter to cover eviction cases
* decreasing Redis CPU consumption

Adobe Commerce also recommends upgrading to Redis 5, if you are running Adobe Commerce on cloud infrastructure 2.3.3 or higher.
