---
title: Performance issues caused by excessive Ajax requests
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,banner,known issues,patch,performance,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the known Adobe Commerce performance issue caused by excessive Ajax requests. The issue was fixed in Adobe Commerce 2.3.4.

## Issue

Adobe Commerce might be sending redundant [Ajax requests](https://support.magento.com/hc/en-us/articles/360039286472-High-throughput-AJAX-requests-cause-poor-performance) from the storefront to the server to get the banner information and customer information. These Ajax requests have a performance impact, especially in high-load (high-volume and high-traffic) conditions. So if the Banner functionality is not used, it is recommended that you completely [disable the Adobe Commerce Banner module output](https://support.magento.com/hc/en-us/articles/360035285852) and apply the patch to improve retrieving customer information.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [Download the MDVA-24597\_EE\_2.2.9\_COMPOSER\_v1.patch](assets/MDVA-24597_EE_2.2.9_COMPOSER_v1.patch.zip)

### Compatible Adobe Commerce versions

The patch is valid for the following products and versions:

* Adobe Commerce on cloud infrastructure 2.2.9
* Adobe Commerce on-premises 2.2.9

If you have a different version of Adobe Commerce, consider updating to the latest 2.3.x release. If this is not an option currently, please [contact Adobe Commerce Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) and request a patch for your version.

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files
