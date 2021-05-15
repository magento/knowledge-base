---
title: MDVA-37182: inconsistent search results for ElasticSearch 6 and 7
labels: 2.4.1,2.4.1-p1,2.4.2,Elasticsearch version,MQP 1.0.22,Magento Quality Patches,search,support tools
---

The MDVA-37182 Magento patch fixes the issue with inconsistent search behavior across versions 6 and 7 of ElasticSearch. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-37182. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Inconsistent search behavior.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create products with the following details:
    * Names:  "5127AC", "5127SS", "5127AB"
    * SKUs: "product1", "product2", "product3"
1. Set search engine to ElasticSearch 6 (ES6).
1. Run full reindex.
1. On the storefront, search for "5127s".
1. Set search engine to ElasticSearch 7 (ES7).
1. Run full reindex.
1. On the storefront, search for "5127s".

 <span class="wysiwyg-underline">Actual result:</span> 

ES6: search returns no results.ES7: search returns three products.

 <span class="wysiwyg-underline">Expected result:</span> 

Search returns one product for both versions.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.