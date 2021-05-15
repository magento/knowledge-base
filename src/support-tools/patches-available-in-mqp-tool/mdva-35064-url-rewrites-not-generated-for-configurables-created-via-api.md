---
title: MDVA-35064: URL rewrites not generated for configurables created via API
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,MQP 1.0.17,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools
---

The MDVA-35064 Magento patch fixes the issue where URL rewrites are not being generated for "All store views" for products created via API.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.3-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

When configurable products are created via API, the URL rewrites are not generating.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a new website, store, and store view.
1. Create a new category.
1. Create a new product and assign to the newly created category.
1. Assign the product to the main website and the new website.
1. Check the URL table and make sure it contains entries for the product, category/product for each store in each website.
1. Remove product for the second website.

 <span class="wysiwyg-underline">Actual result:</span> 

The URL table contain URL rewrites for all stores on all websites.

 <span class="wysiwyg-underline">Expected result:</span> 

The URL table contains entries for product, category/product only for the stores on the first website.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.