---
title: Orders not displayed in the Orders grid in the Admin
labels: 2.2.1,known issue,orders,patch,Commerce Admin,Adobe Commerce,cloud infrastructure,on-premises,Magento Commerce,Magento Commerce Cloud
---

This article provides a patch for the known Adobe Commerce 2.2.1 issue related to the orders not being displayed in the Orders grid in the Commerce Admin.

## Issue

In the Adobe Commerce 2.2.1 with B2B extension installed, orders created on the storefront by a registered customer are not displayed in the list of orders in the customer's account in the Commerce Admin. In the debug log (`./var/log/debug.log`), the following error is logged:

`report.CRITICAL: You cannot define a correlation name ‘company_order’ more than once`

<ins>Prerequisites</ins>:

Your store catalog contains products, not Adobe Commerce sample data, and the B2B extension is installed.

<ins>Steps to reproduce</ins>:

1. Navigate to the store front and create a customer account.
1. Add a product to the shopping cart, complete checkout and submit an order.
1. Log in to the Admin.
1. Navigate to **Customers,** then choose **All Customers**.
1. For the newly created customer click **Edit**.
1. Click **Orders** in the panel on the left.

<ins>Expected result</ins>:

The recently submitted order is listed in the grid.

<ins>Actual result</ins>:

The Orders grid does not display. A blank page displays instead.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-7868\_EE\_2.2.1\_v1\_composer.patch](assets/MDVA-7868_EE_2.2.1_v1_composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on-premises 2.2.1

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure from 2.2.0 to 2.2.3
* Adobe Commerce on-premises 2.2.0, and 2.2.2 to 2.2.3

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base, for instructions.

## Attached Files
