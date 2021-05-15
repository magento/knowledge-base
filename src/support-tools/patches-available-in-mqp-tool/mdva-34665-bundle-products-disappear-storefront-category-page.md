---
title: MDVA-34665: bundle products disappear storefront category page
labels: 2.3.4,2.3.4-p2,MQP 1.0.21,MQP patches,Magento Commerce,Magento Commerce Cloud,bundle product,category pages,indexers,missing products,stock status,store,support tools
---

The MDVA-34665 Magento patch fixes the issue with missing bundled products on category pages. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-34665. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.4-2.3.4-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 **Case 1:** 

 <span class="wysiwyg-underline">Prerequisites:</span> 

1. Create 15,000 bundled products with one simple as a bundle option. Do not use the same simple product with multiple bundled products.
1. Simple products should be set to *Not visible individually* .

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Assign 15k bundled products into two categories, 7,500 each.
1. Select all simple products (15k) and update the stock using product mass attribute updates. Our goal is to have many ids in the search cl table (cl tables are the tables which are used by the indexer to know which records need to be updated.)
1. Make sure you have 15K ids in the `catalogsearch_fulltext_cl` table.
1. Make sure the `indexer_update_all_views` indexer executed.
1. Query the category page continuously and observe the product count.

 <span class="wysiwyg-underline">Expected results</span> :

The product count should remain as it was after the reindexing.

 <span class="wysiwyg-underline">Actual results</span> :

The product counts drops to 7,450 after a while. It remains in 7,450 even after the indexing is finished. **Case 2:**  <span class="wysiwyg-underline">Steps to reproduce</span> :1. Create a bundle product with an associated simple product as an option.2. Change the indexer modes to *update on schedule* .3. Assign the bundle product to a category.4. Change the stock status of the simple product to *out of stock* .5. Execute cron, the bundle product disappears from the storefront.6. Add stock back to the simple product and save.7. Execute cron indexer.8. Refresh the category page. **** 

 <span class="wysiwyg-underline">Expected results</span> :

The product is still absent.

 <span class="wysiwyg-underline">Actual results</span> :

Bundle product reappears.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.