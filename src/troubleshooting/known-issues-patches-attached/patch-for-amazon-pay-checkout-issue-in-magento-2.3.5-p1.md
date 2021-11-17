---
title: Patch for Amazon Pay checkout issue in Adobe Commerce 2.3.5-p1
labels: 2.3.5-p1,Amazon Pay,Magento Commerce,Magento Commerce Cloud,known issues,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This patch resolves the issue with inability to change a payment method on checkout "Review & Payments" step from the payments widget, while checking out with Amazon Pay in Adobe Commerce.

## Affected products and versions

* Adobe Commerce on cloud infrastructure version 2.3.5-p1
* Adobe Commerce on-premises version 2.3.5-p1

## Issue

When a shopper checks out with Amazon Pay, logs in, proceeds to the payment step, and tries to change their payment credit card from the payments widget, an error message appears. The checkout cannot be completed if the shopper ignores the error and proceeds to checkout.

To resolve this issue and remove the error, we have created a [patch](assets/BUNDLE-2554_EE_2.3.5-p1.composer.patch.zip).

<ins>Steps to reproduce</ins>:

1. Start checkout with Amazon Pay.
1. Login as Amazon Pay customer.
1. Select shipping method and proceed to payment step.
1. Try to change credit card to a different one.

<ins>Expected result</ins>: A different credit card is selected as payment method without an error.

<ins>Actual result</ins>: The error message appears: *"Please contact this merchant for help completing your order."*

## Solution

 [Apply the patch](assets/BUNDLE-2554_EE_2.3.5-p1.composer.patch.zip) below.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download BUNDLE-2554\_EE\_2.3.5-p1.composer.patch](assets/BUNDLE-2554_EE_2.3.5-p1.composer.patch.zip)

### Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructure version 2.3.5-p1
* Adobe Commerce on-premises version 2.3.5-p1

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure version 2.3.5
* Adobe Commerce on-premises version 2.3.5

## How to apply the patch

See [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.

## Attached Files
