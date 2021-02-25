---
title: Performance issues caused by excessive Ajax requests 
link: https://support.magento.com/hc/en-us/articles/360041095391-Performance-issues-caused-by-excessive-Ajax-requests-
labels: Magento Commerce Cloud,Magento Commerce,patch,performance,troubleshooting,known issues,banner,2.3.x,2.2.x
---

This article provides a patch for the known Magento Commerce performance issue caused by excessive Ajax requests.

The issue was fixed in Magento Commerce 2.3.1. ## Issue

Magento might be sending redundant Ajax requests from the storefront to the server, to get the banner information and customer information. These Ajax requests have a performance impact, especially in high-load (high-volume and high-traffic) conditions. So if the Banner functionality is not used, it is recommended that you completely [disable the Magento Banner module output](https://support.magento.com/hc/en-us/articles/360035285852) and apply the patch to improve retrieving customer information.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download the MDVA-24597\_EE\_2.2.9\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360052613331/MDVA-24597_EE_2.2.9_COMPOSER_v1.patch)

### Compatible Magento versions

The patch is valid for the following products and versions:

* Magento Commerce Cloud 2.2.9 and Magento Commerce 2.2.9

If you have a different version of Magento Commerce, consider updating to the latest 2.3.x release. If this is not an option currently, please [contact Magento Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) and request a patch for your version.

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files