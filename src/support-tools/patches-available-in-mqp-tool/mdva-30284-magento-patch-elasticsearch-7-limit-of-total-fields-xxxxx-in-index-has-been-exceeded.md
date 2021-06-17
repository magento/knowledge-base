---
title: "MDVA-30284 Magento Patch: Elasticsearch 7 - Limit of total fields [XXXXX] in index has been exceeded"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,Elasticsearch problem,MQP 1.0.5,MQP patches,Magento Commerce,Magento Commerce Cloud,index,products,support tools
---

The MDVA-30284 patch solves the issue where you receive an error message that "Limit of total fields \[XXXXX\] in index has been exceeded" when using Elasticsearch 7. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.5 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.5-p2.
* Elasticsearch 7 is only compatible with Magento 2.3.5 and 2.4.x.

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

The Elasticsearch fields limit is wrong resulting in the following error when executing \[catalogsearch\_fulltext \] indexer:

<pre>Limit of total fields [xxx] in index [xxxxxx] has been exceeded</pre>

This issue occurs when you have a large number of product attributes. The issue is triggered by the way Elasticsearch calculates the field count. Sometimes when there are attributes that have fields assigned to them these fields will index as separate indexers. This results in the limit having been exceeded warning.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

 <span class="wysiwyg-underline">Prerequisites</span> 

* Installed module-elasticsearch 100.3.5.
* Elasticsearch 7 installed.
* Set up Elasticsearch as a search backend.

1. Create more than 1000 attributes for products.
1. Create products for each family.
1. Run indexer.

 <span class="wysiwyg-underline">Expected result:</span> 

All products are available in the Elasticsearch index.

 <span class="wysiwyg-underline">Actual result:</span> 

1. Elasticsearch error:

 `{"error":{"root_cause":[{"type":"illegal_argument_exception","reason":"Limit
  of total fields [3000] in index [magento2_product_2_v11] has been exceeded"}],"type":"illegal_argument_exception","reason":"Limit
  of total fields [3000] in index [magento2_product_2_v11] has been exceeded"},"status":400}` 

1. New product was not indexed.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.