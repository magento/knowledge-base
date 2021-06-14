---
title: "MDVA-31021 Magento patch: slow import and export if many product options"
labels: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,MQP 1.0.7,MQP patches,Magento Commerce,Magento Commerce Cloud,export,fail,import,product options,support tools"
---

The MDVA-31021 patch solves the issue when Import / Export takes a longer than the expected amount of time with large numbers of product options. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.7 is installed.

## Affected products and versions

 **The patch was designed for:** Magento Commerce Cloud 2.3.1.

 **The patch is also compatible with versions** Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

If there are 100,000 records or more in `catalog_product_option` table, the Import / Export function file validation takes a longer than the expected amount of time. Before import/export, to check option validation, Magento loads product options for all existing products.

 <span class="wysiwyg-underline">Prerequisite</span> :

Magento store with 5000 products with custom options. Each product should have at least 4 custom options with 2 or more options to choose from, so that there are 100,000 records in `catalog_product_option` table.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. For an **Import** example: create a CSV import file with one of the SKUs from Magento admin.
1. Add 4 custom options to the CSV import file.
1. Try to import the CSV file from Magento admin.

 <span class="wysiwyg-underline">Expected results:</span> 

The Import or Export function completes as expected. Validation takes less than 10 seconds to complete with one product.

 <span class="wysiwyg-underline">Actual results:</span> 

The Import or Export function takes longer than expected. Validation takes more than 10 seconds to complete with only one product.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.