---
title: "Adobe Commerce 2.3.5, 2.3.5-p1 patch: country payment issue"
labels: 2.3.5,2.3.5-p1,Magento Commerce,Magento Commerce Cloud,known issues,patch,payments,storefront,checkout,Amazon Pay,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This patch resolves an issue in Adobe Commerce where the storefront checkout workflow did not display any payment method that has been enabled for specific countries, except for Klarna and Amazon Pay.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.3.5 and 2.3.5-p1
* Adobe Commerce on-premises 2.3.5 and 2.3.5-p1

## Issue

When a store has Amazon Pay and another payment assigned to different countries, and when one of those countries and payment methods is selected, the payment method and place order buttons are not visible.

A web page refresh is a workaround for the issue.

To resolve this issue and remove the error, we have created a [patch](assets/BUNDLE-2546_EE_2.3.5-p1.composer.patch.zip).

<ins>Prerequisites</ins>:

* A simple product is created.
* **Check/Money order** is enabled only for specific countries (at **Store** > **Configuration** > **Sales** > **Payment Methods**).

* Example: Payment from Applicable Countries = Specific Countries
* Example: Payment from Specific Countries = United Kingdom

<ins>Steps to reproduce</ins>:

1. Go to the Storefront as a Guest.
1. Add a simple product to the shopping cart.
1. Go to Checkout.
1. Fill the form with valid data.

    * Country = *United States*

1. Select shipping rate and click **Next**.

    * Payment step is opened.
    * There are no available payments.
    * Message: **No Payment method available.**
    * There is no **Place Order** button.

1. Go back to the **Shipping Step** and change the value to:

    * Country = *United Kingdom*

1. Select shipping rate and click **Next**.

<ins>Expected result</ins>:

 The Payment step opens.

* **Cash On Delivery** appears.
* **Check/Money order** appears.
* The **Place Order** button appears.

<ins>Actual result</ins>:

The Payment step opens.

* There are no available payments.
* Message: *No Payment method available.*
* There is no **Place Order** button.

## Solution

 [Apply the patch](assets/BUNDLE-2546_EE_2.3.5-p1.composer.patch.zip) below.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link:

 [Download BUNDLE-2546\_EE\_2.3.5-p1.composer.patch](assets/BUNDLE-2546_EE_2.3.5-p1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure 2.3.5 and 2.3.5-p1
* Adobe Commerce on-premises 2.3.5 and 2.3.5-p1

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce versions 2.3.4-p2 - 2.2.6

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.

## Attached Files
