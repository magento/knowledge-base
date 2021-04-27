---
title: New orders are sent to archive
labels: 2.2.0,Magento Commerce,known issues,orders,patch,troubleshooting
---

This article provides a patch for the known Magento Commerce 2.2.0 issue related to the newly created orders showing in the archive instead of the Orders grid in Magento Admin.

<p class="info">The issue was fixed in 2.2.3 and later. </p>

## Issue

When customers place orders, they appear in the archived orders grid, instead of the regular orders grid.

Steps to reproduce:

1. Add any product to cart on the storefront and proceed through checkout, and place the order.
1. In the Magento Admin, navigate to Sales > Operations > Order.  See the order appear in the grid.
1. Navigate to Sales > Archive > Orders. See the new order in the grid.

Expected result:  
The order is displayed in the Orders grid only.

Actual result:  
The order is displayed in the Orders grid and in the order archive grid.

## Solution

After applying the patch, orders will appear in the Order grid as expected. But you need to manually restore in the Magento Admin the ones that were sent to archive before the patch was applied.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download MDVA-8007\_EE\_2.2.0\_v1.composer.patch](https://support.magento.com/hc/article_attachments/360025565431/MDVA-8007_EE_2.2.0_v1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce 2.2.0

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce, Magento Commerce Cloud
* 2.2.1-2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Useful links

* [Manage Archived orders](https://docs.magento.com/m2/2.2/ee/user_guide/sales/order-archive.html)

## Attached Files