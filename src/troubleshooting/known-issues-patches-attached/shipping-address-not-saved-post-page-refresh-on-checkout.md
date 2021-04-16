---
title: Shipping address not saved post page refresh on checkout 
labels: 2.2.3,Magento Commerce,known issues,patch,shipping address not saved,troubleshooting
---

This article provides a patch for the known Magento Commerce 2.2.3 issue where the customer's already populated shipping address form was blank again after refreshing the browser page on guest checkout. The issue was experienced when the persistent shopping cart was enabled.

## Issue

Customers go through guest checkout and complete all forms including the shipping address. They get to the Review and payments section and reload the page. The form is empty, and they need to re-enter the shipping address again. Persistent shopping cart functionality is enabled.

Steps to reproduce:

Prerequisites: The persistent shopping cart functionality is enabled. Check if it is enabled in the Admin, under Stores > Configuration > Customers or Stores > Configuration > Sales, depending on your Magento version.

1. Go to the store front.
1. Add products to the shopping cart.
1. Proceed to checkout as a guest.
1. Fill in your shipping address, choose shipping options, and continue to secure payment.
1. Get redirected to the Review and payments section of checkout.
1. Double check that you see the shipping address in the Ship to section.
1. Refresh the page.

Expected result:  
 You are able to continue checkout and all data is saved.

Actual result:  
 Shipping address is empty, you need to-renter it.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-9718\_EE\_2.2.3\_COMPOSER\_v1.patch](assets/MDVA-9718_EE_2.2.3_COMPOSER_v1.patch)

### Compatible Magento versions

The patch was created for:

* Magento Commerce 2.2.3

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce Cloud from 2.1.13 to 2.1.18
* Magento Commerce Cloud from 2.2.0 to 2.2.5
* Magento Commerce 2.0.X
* Magento Commerce 2.1.X
* Magento Commerce from 2.2.0 to 2.2.2, and from 2.2.4 to 2.2.5

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files