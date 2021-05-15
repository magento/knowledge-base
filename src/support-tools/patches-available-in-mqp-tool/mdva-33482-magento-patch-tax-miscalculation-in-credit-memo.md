---
title: MDVA-33482 Magento patch: tax miscalculation in credit memo
labels: 2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,credit memo,tax miscalculated
---

The MDVA-33482 Magento patch solves the issue where tax is miscalculated in credit memos.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.5 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Configure **Taxes** .
1. Create an order using 2 products in the backend using any online payment method (Example: Paypal Payment Pro). Make sure that taxes are applied to all the products.
1. Create 2 invoices for the order.
1. Create a credit memo against one of the invoices.
1. Check the credit memo totals.

 <span class="wysiwyg-underline">Expected results</span> :

Only a partially-invoiced tax amount is in the credit memo, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The full tax amount is displayed in the credit memo.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.