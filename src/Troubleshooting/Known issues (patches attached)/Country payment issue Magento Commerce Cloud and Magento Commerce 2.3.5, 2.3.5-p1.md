---
title: Country payment issue Magento Commerce Cloud and Magento Commerce 2.3.5, 2.3.5-p1 
link: https://support.magento.com/hc/en-us/articles/360043955991-Country-payment-issue-Magento-Commerce-Cloud-and-Magento-Commerce-2-3-5-2-3-5-p1-
labels: Magento Commerce Cloud,Magento Commerce,patch,payments,troubleshooting,known issues,2.3.5,2.3.5-p1
---

This patch resolves an issue in Magento where the storefront checkout workflow did not display any payment method that has been enabled for specific countries, except for Klarna and Amazon Pay.

## Affected products and versions

* Magento Commerce Cloud versions 2.3.5 and 2.3.5-p1

* Magento Commerce versions 2.3.5 and 2.3.5-p1

## Issue

When a store has Amazon Pay and another payment assigned to different countries, and when one of those countries and payment methods is selected, the payment method and place order buttons are not visible.

A webpage refresh is a workaround for the issue.

To resolve this issue and remove the error, we have created a [patch](https://support.magento.com/hc/en-us/article_attachments/360057950771/BUNDLE-2546_EE_2.3.5-p1.composer.patch).

Prerequisites:

* A simple product is created.

* 
**Check / Money order** are enabled only for specific countries (at **Store** > **Configuration**; **Sales** > **Payment Methods**).

* Example: Payment from Applicable Countries = Specific Countries

* Example: Payment from Specific Countries = United Kingdom

Steps to reproduce:

1. Go to the Storefront as a Guest.

1. Add a simple product to the shopping cart.

1. Go to Checkout.

1. Fill the form with valid data.

* Country = *United States*

* Select shipping rate and go **Next**.

* Payment step is opened.

* There are no available payments.

* Message: **No Payment method available.**

* There is no **Place Order** button.

* Go back to the **Shipping Step** and change the value to:

* Country = *United Kingdom*

* Select shipping rate and go **Next**.

Expected result:  
 **The Payment step opens.**

* 
**Cash On Delivery** appears.

* 
**Check / Money order** appears.

* The **Place Order**button appears**.**

Actual result:  
**The Payment step opens.**

* There are no available payments.

* Message: **No Payment method available**.

* There is no **Place Order** button.

## Solution

[Apply the patch](https://support.magento.com/hc/en-us/article_attachments/360057950771/BUNDLE-2546_EE_2.3.5-p1.composer.patch) below.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download BUNDLE-2546\_EE\_2.3.5-p1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360057950771/BUNDLE-2546_EE_2.3.5-p1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce Cloud versions 2.3.5 and 2.3.5-p1

* Magento Commerce versions 2.3.5 and 2.3.5-p1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce versions 2.3.4-p2 through 2.2.6

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files

