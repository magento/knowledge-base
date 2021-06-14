---
title: "MDVA-30782 Magento patch: dynamic block is displayed regardless of cart rule"
labels: "2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,MQP 1.0.7,MQP patches,Magento Commerce,Magento Commerce Cloud,cart_rules,dynamic block,support tools"
---

The MDVA-30782 Magento patch fixes the issue where a dynamic block is displayed regardless of the cart rule. This patch is available when the<a>Magento Quality Patch (MQP) tool</a>1.0.7 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1

 **Compatible with Magento versions:** Magento Commerce/ Magento Commerce Cloud >=2.3.5 <2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Dynamic block is displayed on the page even when the related catalog price rule condition is not satisfied.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create two products.
1. Create a catalog price rule applicable only for one of these products.
1. Create a dynamic block and assign the newly created catalog price rule to it.
1. Create a widget with the following parameters:
    * Type = Dynamic Block Rotator
    * Dynamic Blocks to Display = Specified Dynamic Blocks
    * Specify Dynamic Blocks = block form step \#3Layout Updates (can be any)
    * Display on = All Product Types
    * Container = Product auxiliary info
1. Perform reindex and flush cache.
1. Check both product pages for dynamic block form step \#3

 <span class="wysiwyg-underline">Expected result:</span> Dynamic block appears on the first product page only.

 <span class="wysiwyg-underline">Actual result:</span> Dynamic block appears on both product pages.With Dynamic Blocks to Display = Catalog Price Rule Related on step \#3 the result is the same.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.