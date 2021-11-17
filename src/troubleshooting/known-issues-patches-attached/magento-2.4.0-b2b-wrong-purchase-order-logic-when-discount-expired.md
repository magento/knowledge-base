---
title: "Adobe Commerce 2.4.0 B2B: wrong purchase order logic when discount expired"
labels: 2.4.0,B2B,Magento Commerce,Magento Commerce Cloud,known issues,patch,purchase order,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the known issue of a purchase order (PO) discount not being applied in Adobe Commerce 2.4.0 B2B. If the PO was placed with a discount code that expired while the PO was in the approval process, the approved order does not reflect the discount.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.0
* Adobe Commerce on-premises 2.4.0

## Issue

 <ins>Prerequisites</ins>: a discount coupon is created, and approval rules preventing POs from being processed automatically exist.

<ins>Steps to reproduce:</ins>

1. Place a PO with a discount applied.
1. Deactivate the discount coupon.
1. Approve PO as a manager.
1. Check the order created as a result.

 <ins>Expected result:</ins>

Order is created with a discounted total.

 <ins>Actual result:</ins>

Order is created for the full amount.

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [B2B-709-composer.patch](assets/B2B-709-composer.patch.zip)

The patch is also available for download in both, `.git` and `.composer` , formats on [Adobe Commerce Downloads](https://magento.com/tech-resources/download) page, under **Patches** in the left column navigation. Search for XXX patch.

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base for instructions.
