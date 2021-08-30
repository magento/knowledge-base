---
title: "MDVA-22383: target rule indexers slow to index"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,QPT 1.0.20,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,index,product save,support tools,target rule
---

The MDVA-22383 Magento patch solves the issue where reindexing the Product/Target Rule and Target Rule/Product indexers is taking too long. This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-22383. Please note that the issue was fixed in Magento 2.3.5.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Reindexing the Product/Target Rule and Target Rule/Product indexers is taking too long.

 <span class="wysiwyg-underline">Prerequisites:</span> the issue happens when there is a large number of products.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create a target rule with products to match the conditions, the conditions should add more product to collection and should have attributes (not categories or attribute set).
1. Run the following command:    ```bash    bin/magento indexer:reindex targetrule_product_rule    ```    

 <span class="wysiwyg-underline">Actual result:</span>

Reindexing is stuck; product saving is stuck.

 <span class="wysiwyg-underline">Expected result:</span>

Reindexing is completed successfully.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
