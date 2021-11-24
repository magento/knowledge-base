---
title: "MDVA-37182: inconsistent search results in ElasticSearch 6 and 7"
labels: 2.4.1,2.4.1-p1,2.4.2,Elasticsearch version,QPT 1.0.22,Quality Patches Tool,search,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Commerce,Magento Open Source
---

The MDVA-37182 patch fixes the issue with inconsistent search behavior across versions 6 and 7 of ElasticSearch. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-37182. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure  2.4.1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.4.1-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Inconsistent search behavior.

<ins>Steps to reproduce</ins>:

1. Create products with the following details:
    * Names:  "5127AC", "5127SS", "5127AB"
    * SKUs: "product1", "product2", "product3"
1. Set search engine to ElasticSearch 6 (ES6).
1. Run full reindex.
1. On the storefront, search for "5127s".
1. Set search engine to ElasticSearch 7 (ES7).
1. Run full reindex.
1. On the storefront, search for "5127s".

<ins>Actual result:</ins>:

ES6: search returns no results.ES7: search returns three products.

<ins>Expected result:</ins>:

Search returns one product for both versions.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
