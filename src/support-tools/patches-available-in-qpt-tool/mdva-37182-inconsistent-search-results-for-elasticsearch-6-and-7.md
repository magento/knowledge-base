---
title: "MDVA-37182: inconsistent search results in ElasticSearch 6 and 7"
labels: 2.4.1,2.4.1-p1,2.4.2,Elasticsearch version,QPT 1.0.22,Quality Patches Tool,search,support tools
---

The MDVA-37182 Magento patch fixes the issue with inconsistent search behavior across versions 6 and 7 of ElasticSearch. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-37182. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.1-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

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

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
