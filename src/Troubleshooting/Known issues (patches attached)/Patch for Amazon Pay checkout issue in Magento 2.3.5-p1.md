---
title: Patch for Amazon Pay checkout issue in Magento 2.3.5-p1
link: https://support.magento.com/hc/en-us/articles/360042646332-Patch-for-Amazon-Pay-checkout-issue-in-Magento-2-3-5-p1
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,Amazon Pay,2.3.5-p1
---

This patch resolves the issue with inability to change a payment method on checkout "Review & Payments" step from the payments widget, while checking out with Amazon Pay in Magento.

## Affected products and versions

* Magento Commerce Cloud version 2.3.5-p1

* Magento Commerce version 2.3.5-p1

## Issue

When a shopper checks out with Amazon Pay, logs in, proceeds to the payment step, and tries to change their payment credit card from the payments widget, an error message appears.  
 The checkout cannot be completed if the shopper ignores the error and proceeds to checkout.

To resolve this issue and remove the error, we have created a [patch](https://support.magento.com/hc/en-us/article_attachments/360056411111/BUNDLE-2554_EE_2.3.5-p1.composer.patch).

Steps to reproduce:

1. Start checkout with Amazon Pay.

1. Login as Amazon Pay customer.

1. Select shipping method and proceed to payment step.

1. Try to change credit card to a different one.

Expected result:  
 A different credit card is selected as payment method without an error.

Actual result:  
 The error message appears: *"Please contact this merchant for help completing your order."*

## Solution

[Apply the patch](https://support.magento.com/hc/en-us/article_attachments/360056411111/BUNDLE-2554_EE_2.3.5-p1.composer.patch) below.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[Download BUNDLE-2554\_EE\_2.3.5-p1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360056411111/BUNDLE-2554_EE_2.3.5-p1.composer.patch)

### Compatible Magento versions:

The patch was created for:

* Magento Commerce Cloud version 2.3.5-p1

* Magento Commerce version 2.3.5-p1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

* Magento Commerce Cloud version 2.3.5

* Magento Commerce version 2.3.5

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files

