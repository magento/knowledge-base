---
title: "MDVA-34665: bundle products disappear storefront category page"
labels: 2.3.4,2.3.4-p2,QPT 1.0.21,Quality Patches Tool,Magento Commerce,Magento Commerce Cloud,bundle product,category pages,indexers,missing products,stock status,store,Support Tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-34665 patch fixes the issue with missing bundled products on category pages. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-34665. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.4-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4-2.3.4-p2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

**Case 1:**

<ins>Prerequisites</ins>:

1. Create 15,000 bundled products with one simple product as a bundle option. Do not use the same simple product with multiple bundled products.
1. Simple products should be set to *Not visible individually*.

<ins>Steps to reproduce</ins>:

1. Assign 15k bundled products into two categories, 7,500 each.
1. Select all simple products (15k) and update the stock using product mass attribute updates. Our goal is to have many ids in the search cl table (cl tables are the tables that are used by the indexer to know which records need to be updated.)
1. Make sure you have 15K ids in the `catalogsearch_fulltext_cl` table.
1. Make sure the `indexer_update_all_views` indexer is executed.
1. Query the category page continuously and observe the product count.

<ins>Expected results</ins>:

The product count should remain as it was after the reindexing.

<ins>Actual results</ins>:

The product counts drops to 7,450 after a while. It remains in 7,450 even after the indexing is finished.

**Case 2:**

<ins>Steps to reproduce</ins>:

1. Create a bundle product with an associated simple product as an option.
1. Change the indexer modes to *update on schedule*.
1. Assign the bundle product to a category.
1. Change the stock status of the simple product to *out of stock*.
1. Execute cron; the bundle product disappears from the storefront.
1. Add stock back to the simple product and save.
1. Execute cron indexer.
1. Refresh the category page.

<ins>Expected results</ins>:

The product is still absent.

<ins>Actual results</ins>:

Bundle product reappears.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
