---
title: New orders are sent to archive
labels: 2.2.0,Magento Commerce,known issues,orders,patch,troubleshooting,Adobe Commerce,cloud infrastructure,admin,on-premises
---

This article provides a patch for the known Adobe Commerce 2.2.0 issue related to the newly created orders showing in the archive instead of the Orders grid in the Commerce Admin.

>![info]
>
>The issue was fixed in 2.2.3 and later.

## Issue

When customers place orders, they appear in the archived orders grid instead of the regular orders grid.

<ins>Steps to reproduce</ins>:

1. Add any product to the cart on the storefront, proceed through checkout, and place the order.
1. In the Commerce Admin, navigate to **Sales** > **Operations** > **Order**. See the order appear in the grid.
1. Navigate to **Sales** > **Archive** > **Orders**. See the new order in the grid.

<ins>Expected results</ins>:

The order is displayed in the Orders grid only.

<ins>Actual results</ins>:

The order is displayed in the Orders grid and in the order archive grid.

## Solution

After applying the patch, orders will appear in the Order grid as expected. But you need to manually restore in the Commerce Admin the ones that were sent to archive before the patch was applied.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-8007\_EE\_2.2.0\_v1.composer.patch](assets/MDVA-8007_EE_2.2.0_v1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce 2.2.0

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on-premises, Adobe Commerce on cloud infrastructure 2.2.1 - 2.2.3

## How to apply the patch

For instructions, see [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

## Useful links in our user guide

* [Manage Archived orders](https://docs.magento.com/user-guide/sales/order-archive.html)

## Attached Files
