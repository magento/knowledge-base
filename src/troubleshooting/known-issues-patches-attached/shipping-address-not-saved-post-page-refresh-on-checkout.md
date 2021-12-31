---
title: Shipping address not saved post page refresh on checkout
labels: 2.2.3,Magento Commerce,known issues,patch,shipping address not saved,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a patch for the known Adobe Commerce 2.2.3 issue where the customer's already populated shipping address form was blank again after refreshing the browser page on guest checkout. The issue was experienced when the persistent shopping cart was enabled.

## Issue

Customers go through guest checkout and complete all forms including the shipping address. They get to the Review and payments section and reload the page. The form is empty, and they need to re-enter the shipping address again. Persistent shopping cart functionality is enabled.

<span class="wysiwyg-underline">Steps to reproduce</span> :

**Prerequisites**: The persistent shopping cart functionality is enabled. Check if it is enabled in the Admin, under **Stores** > **Configuration** > **Customers** or **Stores** > **Configuration** > **Sales,** depending on your Adobe Commerce version.

1. Go to the storefront.
1. Add products to the shopping cart.
1. Proceed to checkout as a guest.
1. Fill in your shipping address, choose shipping options, and continue to secure payment.
1. Get redirected to the Review and payments section of checkout.
1. Double check that you see the shipping address in the Ship to section.
1. Refresh the page.

<span class="wysiwyg-underline">Expected result</span>:

You are able to continue checkout and all data is saved.

<span class="wysiwyg-underline">Actual result</span>:

Shipping address is empty, you need to-renter it.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-9718\_EE\_2.2.3\_COMPOSER\_v1.patch](assets/MDVA-9718_EE_2.2.3_COMPOSER_v1.patch.zip)

### Compatible Adobe Commerce versions

**The patch was created for:**

* Adobe Commerce 2.2.3

**The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:**

* Adobe Commerce on cloud infrastructure 2.1.13 - 2.1.18
* Adobe Commerce on cloud infrastructure 2.2.0 - 2.2.5
* Adobe Commerce on-premises 2.0.X
* Adobe Commerce on-premises 2.1.X
* Adobe Commerce on-premises 2.2.0 - 2.2.2, and 2.2.4 - 2.2.5

## How to apply the patch

For instructions, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

## Attached Files
