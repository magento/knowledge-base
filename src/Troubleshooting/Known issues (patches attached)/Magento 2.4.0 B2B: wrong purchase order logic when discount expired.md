---
title: Magento 2.4.0 B2B: wrong purchase order logic when discount expired 
link: https://support.magento.com/hc/en-us/articles/360047251111-Magento-2-4-0-B2B-wrong-purchase-order-logic-when-discount-expired-
labels: Magento Commerce Cloud,Magento Commerce,patch,B2B,troubleshooting,known issues,2.4.0,purchase order
---

This article provides a patch for the known issue of a purchase order (PO) discount not being applied in Magento 2.4.0 B2B. If the PO was placed with a discount code that expired while the PO was in the approval process, the approved order does not reflect the discount. 

 Affected products and versions
------------------------------

 
 * Magento Commerce Cloud 2.4.0
 * Magento Commerce 2.4.0
 
 Issue
-----

 Prerequisites: a discount coupon is created, and approval rules preventing POs from being processed automatically exist. 

 Steps to reproduce:

 
 2. Place a PO with a discount applied.
 4. Deactivate the discount coupon. 
 6. Approve PO as a manager. 
 8. Check the order created as a result.
 
 Expected result:

 Order is created with a discounted total. 

 Actual result:

 Order is created for the full amount.

 Solution
--------

 Apply the patch provided in this article.

 Patch
-----

 The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [B2B-709-composer.patch](https://support.magento.com/hc/en-us/article_attachments/360063988371/B2B-709-composer.patch)

 The patch is also available for download in both, .git and .composer, formats on [Magento Commerce Downloads](https://magento.com/tech-resources/download) page, under **Patches** in the left column navigation. Search for XXX patch. 

 How to apply the patch
----------------------

 See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

  

  

