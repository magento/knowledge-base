---
title: Install latest patches to fix Redis issues for Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360046678631-Install-latest-patches-to-fix-Redis-issues-for-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,patch,Redis,performance,troubleshooting,memory,2.3.4,2.3.3,CPU,Redis 5
---

This article provides information on the latest Redis-related patches available in [Magento Cloud Patches](https://devdocs.magento.com/cloud/project/project-patch.html) package.

## Affected products and versions

Magento Commerce Cloud 2.3.3, 2.3.4

## Issue

Extra CPU and memory consumption by Redis might decrease the Magento performance and thus the overall performance of your website.

## Solution

Apply the latest patches provided by Magento Cloud Patches package. For detailed instructions, refer to [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in Magento Developer Documentation.

The latest Redis patches delivered by Magento Cloud Patches package, contribute to the following:

* reducing the size of networking communication for Redis

* fixing race conditions that lead to extra memory consumption

* changing Cache Adapter to cover eviction cases

* decreasing Redis CPU consumption

Magento also recommends upgrading to Redis 5, if you are running Magento Commerce Cloud 2.3.3 or higher.

