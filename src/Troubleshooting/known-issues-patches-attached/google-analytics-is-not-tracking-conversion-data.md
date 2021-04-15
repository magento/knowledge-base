---
title: Google Analytics is not tracking conversion data
labels: Magento Commerce,patch,troubleshooting,known issues,2.2.6,Google Analytics
---

This article provides a patch for the known Magento Commerce 2.2.4 issue related to Google Analytics not tracking the conversion data.

<p class="info">The issue was fixed in Magento Commerce 2.2.6.</p>

## Issue

The conversion data was not tracked by Google Analytics due to an error in the Google Analytics component code.

Steps to reproduce:

1. Enable and configure the Google Analytics functionality in Magento Admin under Stores > Settings > Configuration > Sales > Google API > Google Analytics
1. Click Save Config.
1. Place an order on the storefront. 
1. Go to Google Analytics dashboard > Conversions > Overview.
1. Set the date range to the current date.

Expected result:

The order appears in the conversions data.

Actual result:

The order does not appear in the conversion data.

## Solution

The patch fixes the error in the Google Analytics component code. After applying the patch conversion data will be tracked by Google Analytics.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-11263\_EE\_2.2.4\_v1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360025558831/MDVA-11263_EE_2.2.4_v1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce 2.2.4

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce 2.2.5
* Magento Commerce Cloud 2.2.4, 2.2.5

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files