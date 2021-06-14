---
title: "Magento 2.4.0 B2B: wrong purchase order logic when discount expired"
labels: "2.4.0,B2B,Magento Commerce,Magento Commerce Cloud,known issues,patch,purchase order,troubleshooting"
---

This article provides a patch for the known issue of a purchase order (PO) discount not being applied in Magento 2.4.0 B2B. If the PO was placed with a discount code that expired while the PO was in the approval process, the approved order does not reflect the discount.

## Affected products and versions

* Magento Commerce Cloud 2.4.0
* Magento Commerce 2.4.0

## Issue

 <span class="wysiwyg-underline">Prerequisites</span> : a discount coupon is created, and approval rules preventing POs from being processed automatically exist.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Place a PO with a discount applied.
1. Deactivate the discount coupon.
1. Approve PO as a manager.
1. Check the order created as a result.

 <span class="wysiwyg-underline">Expected result:</span> 

Order is created with a discounted total.

 <span class="wysiwyg-underline">Actual result:</span> 

Order is created for the full amount.

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [B2B-709-composer.patch](assets/B2B-709-composer.patch.zip) 

The patch is also available for download in both, `.git` and `.composer` , formats on [Magento Commerce Downloads](https://magento.com/tech-resources/download) page, under **Patches** in the left column navigation. Search for XXX patch.

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

 
 