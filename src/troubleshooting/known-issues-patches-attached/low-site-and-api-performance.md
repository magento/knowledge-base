---
title: Low site and API performance
labels: 2.2.1,API,Magento Commerce Cloud,known issues,patch,performance,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,2.2.0,2.2.2,2.2.3
---

This article provides a patch for the known Adobe Commerce on cloud infrastructure 2.2.1 issue related to having a low site and API performance caused by a long time required to write `debug.log`.

## Issue

Site performance is slow. API operations run slowly, for example updating products using the `PUT` method. When you take a closer look at the operations using New Relic, most memory and CPU are consumed by writing to `/var/log/debug.log`.

## Solution

To solve the issue, apply the patch. The patch splits and writes the log, payment, and shipping methods logs to separate files.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [Download MDVA-8371\_EE\_2.2.1\_COMPOSER\_v2.patch](assets/MDVA-8371_EE_2.2.1_COMPOSER_v2.patch.zip)

### Compatible Adobe Commerce versions

The patch was created for:

* Adobe Commerce on cloud infrastructure 2.2.1

The patch is also compatible (but might not solve the issue) with the following Adobe versions and editions:

* Adobe Commerce on cloud infrastructure 2.2.0, 2.2.2, 2.2.3
* Adobe Commerce on-premises 2.2.0, 2.2.2, 2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.

## Attached Files
