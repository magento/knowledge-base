---
title: "MCP-87 Magento patch: storefront broken"
labels: "2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,MQP 1.0.13,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,catalog,index,performance,products,reindex,slow response,store,support tools"
---

The MCP-87 Magento patch fixed the issue where stock reindexing of catalogs is slow. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed.

## Affected products and versions

 **The patch is created for Magento version:** 

Magento Commerce Cloud 2.4.0. **Compatible with Magento versions:** 

Magento Commerce Cloud and Magento Cloud 2.3.1 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The stock reindex of catalogs with large profiles is very slow. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in to the Admin Panel.
1. Navigate to: **Products** > **Catalog** .
1. Select all items in the Products grid.
1. Select **Update Attributes** in the Select Product Actions dropdown list. Click **Submit** .
1. Click on **Advanced Inventory** from the Advanced Settings tab. Change **Stock Availability** to *In Stock* . Click **Save** .
1. Perform full reindex manually, execute the following command from the magento root:

<pre>php bin/magento indexer:reindex</pre>

 <span class="wysiwyg-underline">Expected result:</span> 

Stock indexer reindexes quickly.

 <span class="wysiwyg-underline">Actual result:</span> 

Stock indexer is very slow and/or does not complete.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.