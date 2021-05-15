---
title: MDVA-33453: Page Builder preview breaks product price differs across sites
labels: 2.3.6,2.3.6-p1,2.4.0-p1,2.4.1,MQP 1.0.16,MQP patches,Magento Commerce,Magento Commerce Cloud,Page Builder,error,price,product,support tools
---

The MDVA-33453 Magento patch solves the issue where the Page Builder preview is broken if matching products have a different price for each website. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce 2.3.6-2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The Page Builder product preview breaks when there is a product with different prices on different websites. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in to Magento Admin Panel.
1. Create two websites.
1. Create a simple product.
1. Set a different price for the product on each website.
1. Run cron and reindex.
1. Create or edit a CMS page, and use the product block to add the product.

 <span class="wysiwyg-underline">Actual result:</span> The below error occurs: <span class="wysiwyg-underline"></span> 

 *Error filtering template: Item (Magento\\Catalog\\Model\\Product\\Interceptor) with the same ID "2" already exists.* 

 <span class="wysiwyg-underline">Expected result:</span> No errors are displayed.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.