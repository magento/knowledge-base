---
title: Checkout pages not loading when ad blocker is enabled
labels: 2.2.2,Magento Commerce Cloud,adblock,checkout,known issues,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the known Adobe Commerce on cloud infrastructure 2.2.2 issue related to the failure to load checkout pages caused by uBlock or other ad blockers.

## Issue

If Google Analytics is enabled for the store, when a customer with installed uBlock or other ad blocker proceeds to checkout, the `trackingCode.js` file is blocked from loading and RequireJS breaks the JS execution flow. This causes problems with loading the checkout page.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

Prerequisites: An ad blocker must be installed and active in browser.

1. In the Commerce Admin, enable and configure the Google Analytics functionality.
1. Open a product page on the storefront.
1. Add products to the cart.
1. Click the **Go to Checkout** link.

 <span class="wysiwyg-underline">Expected result</span>: Checkout page loads and the customer can complete checkout.

 <span class="wysiwyg-underline">Actual result</span>: Checkout page does not load; the loading spinner never disappears.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-9353\_EE\_2.2.2\_v1.composer.patch](assets/MDVA-9353_EE_2.2.2_v1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure 2.2.2

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure from 2.1.0 to 2.1.14
* Adobe Commerce on cloud infrastructure from 2.2.0 to 2.2.1 and 2.2.3 to 2.2.5
* Adobe Commerce on-premises from 2.1.0 to 2.1.14
* Adobe Commerce on-premises from 2.2.0 to 2.2.5

## How to apply the patch

For instructions, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

## Useful links

* [The issue discussed on GitHub](https://github.com/magento/magento2/pull/13061)

## Attached Files
