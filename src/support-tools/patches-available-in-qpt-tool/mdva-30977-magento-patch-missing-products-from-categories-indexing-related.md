---
title: "MDVA-30977: missing products from categories, indexing related"
labels: 2.3.4,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,category,products,support tools,cloud infrastructure,on-premises
---

The MDVA-30977 patch fixes the issues with products displayed on storefront category pages during reindex or mass actions with a big number of products. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.6 is installed. The issues are scheduled to be fixed in Adobe Commerce 2.4.2.

## Affected products and versions

The patch was created for Adobe Commerce on cloud infrastructure 2.3.4. It is also compatible with Adobe Commerce on-premises 2.3.4.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issues

### Issue 1

The number of products displayed on the category page on the storefront is different after each page reload during mass product update.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create at least 30000 products in two categories - at least 15000 products in each category.
1. Go to **Catalog** > **Products** in the Commerce Admin.
1. Select all products from the grid and perform a mass attribute update. For example, set **New** = *Yes* attribute.
1. Run Magento cron job using the `bin/magento cron:run` command twice.
1. Refresh category pages on Storefront while Adobe Commerce performs 30000 products update.

<span class="wysiwyg-underline">Expected result:</span>

The number of products in categories is always 15000 on each category page refresh.

<span class="wysiwyg-underline">Actual result:</span>

The number of products in categories is different on each category page refresh.

### Issue 2

When the full reindex of the inventory is executed, category pages become empty and the *We can't find products matching the selection* message is displayed.

<span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Configure Adobe Commerce with Elasticsearch.
1. Add a new website.
1. Create a new source and assign it to the new website using Manage stock.
1. Create 30000 configurable products.
1. Assign all the products to the new website and also add inventory to the new inventory source.
1. Execute a full reindex.
1. Execute the inventory reindex by running `bin/magento indexer:reindex inventory`
1. Browse a category with big number of products.

<span class="wysiwyg-underline">Expected result:</span>

Category pages display products as usual during reindex.

<span class="wysiwyg-underline">Actual result:</span> 

Category pages become empty during reindex.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
