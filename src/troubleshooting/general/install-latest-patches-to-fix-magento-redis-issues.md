---
title: Install latest patches to fix Magento Redis issues
labels: 2.3.3,2.3.4,CPU,Magento Commerce Cloud,Redis,Redis 5,memory,patch,performance,troubleshooting
---

This article provides information on the latest Redis-related patches available in [Magento Cloud Patches](https://devdocs.magento.com/cloud/project/project-patch.html) package.

## Affected products and versions

Magento Commerce Cloud 2.3.3, 2.3.4

## Issue

Extra CPU and memory consumption by Redis might decrease the Magento performance and thus the overall performance of your website.

## Solution

Apply the latest patches provided by Magento Cloud Patches package. For detailed instructions, refer to [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in Magento Developer Documentation.

The latest Redis patches delivered by Magento Cloud Patches package, contribute to the following:

* reducing the size of networking communication for Redis
* fixing race conditions that lead to extra memory consumption
* changing Cache Adapter to cover eviction cases
* decreasing Redis CPU consumption

Magento also recommends upgrading to Redis 5, if you are running Magento Commerce Cloud 2.3.3 or higher.