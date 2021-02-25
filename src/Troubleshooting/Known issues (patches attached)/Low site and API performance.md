---
title: Low site and API performance
link: https://support.magento.com/hc/en-us/articles/360026142471-Low-site-and-API-performance
labels: Magento Commerce Cloud,API,patch,performance,2.2.1,troubleshooting,known issues
---

This article provides a patch for the known Magento Commerce Cloud 2.2.1 issue related to having low site and API performance caused by a long time required to write `` debug.log ``.

## Issue

Site performance is slow. API operations run slowly, for example updating products using the `` PUT `` method. When you take a closer look at the operations using NewRelic, most memory and CPU is consumed by writing to `` /var/log/debug.log ``.

## Solution

To solve the issue, apply the patch. The patch splits and writes the log, payment, and shipping methods logs to separate files.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-8371\_EE\_2.2.1\_COMPOSER\_v2.patch](https://support.magento.com/hc/en-us/article_attachments/360025304332/MDVA-8371_EE_2.2.1_COMPOSER_v2.patch)

### Compatible Magento versions

The patch was created for:

* Magento Commerce Cloud 2.2.1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce Cloud, Magento Commerce
* 2.2.0, 2.2.2, 2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files