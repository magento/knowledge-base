---
title: "MDVA-35773: Tax appears on invoice with 100% discount"
labels: "100% discount,2.3.6,2.3.6-p1,2.3.7,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,MQP 1.0.22,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,grand total,invoice,tax miscalculated"
---

The MDVA-35773 Magento patch fixes the issue with the Grand Total not being shown as zero on the invoice for orders with 100% discount.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-35773. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.6

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.6-2.3.7 and 2.4.1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Navigate to **Stores > Settings > Configuration > Sales > Tax** .
1. Set **Catalog Prices** and **Apply Discount on Prices** to *Including Tax* .
1. Navigate to **Stores > Tax Rules > Add New Tax Rule** .
1. Create a tax rule (Example: all USA with 10% tax rate), and apply it.
1. Navigate to **Marketing > Cart Price Rules** , and **Add New Rule** .
1. Create a rule with **100% discount for all users** .
1. Make an order on the Storefront:

* Choose **Free Shipping** .
* Apply **Coupon Code** .

1. Navigate to **Sales > Orders** , and open your order.

1. Create an invoice for the order, and open it.

 <span class="wysiwyg-underline">Expected results</span> :

The invoice Grand Total = *$0.00* , as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The invoice with the a Grand Total = *tax amount* is created.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.