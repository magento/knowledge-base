---
title: "MDVA-31791 Magento patch: improvement for product page with related products and target rules"
labels: "2.3.4,2.3.4-p1,2.3.4-p2,2.4.0,2.4.0-p1,MQP 1.0.9,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,performance,product page,support tools"
---

The MDVA-31791 Magento patch improves the performance of product pages, when [Related products](https://docs.magento.com/user-guide/catalog/settings-advanced-related-products.html) or [Related products rules](https://docs.magento.com/user-guide/marketing/product-related-rules.html) (target rules) are used. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.9 is installed. Please note that the issue was fixed in Magento 2.4.1.

## Affected products and versions

 **The patch was created for Magento version:** Magento Commerce Cloud 2.4.0.

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.4, 2.3.4-p1, 2.3.4-p2, 2.4.0, 2.4.0-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Low performance of products pages if Related products or Target rules are used. Consider applying the MDVA-31791 patch if you will use [Related product](https://docs.magento.com/user-guide/catalog/settings-advanced-related-products.html) or [Related product rules](https://docs.magento.com/user-guide/marketing/product-related-rules.html) functionality.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.