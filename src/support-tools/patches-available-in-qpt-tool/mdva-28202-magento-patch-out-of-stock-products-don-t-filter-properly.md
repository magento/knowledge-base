---
title: "MDVA-28202 patch: out of stock products don't filter properly"
labels: 2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,configurable product,display price,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-28202 patch solves the issue where out of stock products aren't filtered properly using **Price** filter on a Adobe Commerce store frontend. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.6 is installed.

## Affected products and versions

* The patch was designed for Adobe Commerce on cloud infrastructure 2.3.5-p1.
* The patch is also compatible with Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Out of stock products do not filter properly using **Price** filter in the Commerce Admin.

 <span class="wysiwyg-underline">Prerequisite:</span>

* Set **Display Out of Stock Products** = "*Yes*" under **Stores > Configuration > CATALOG > Inventory > Stock Options**.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create a configurable product with two simple products (Example: set **Price** = *$1500*).
1. Both simple products should "out of stock" while creating the configurable product.
1. Assign this configurable product to a category.
1. Reindex and check `catalog_product_index_price` table using entity id of the above configurable product.
1. Save all the product prices = *$0*.
1. Load the category and confirm the availability of the product.
1. Open the **Price** filter from layered navigation.
1. Notice that the **Price** filter has an option of " *$0.00 - $9.99* ".
1. Click on this above **Price** filter option and set the **Price** = *$1500*, and you will get the configurable product we created above.

 <span class="wysiwyg-underline">Expected result:</span>

The product filters under the correct price range as expected.

 <span class="wysiwyg-underline">Actual result:</span>

The product falls under wrong price range filter.

## Apply the patch

To apply individual patches use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.

To learn more about configurable products, refer to this article in our developer documentation: [Create a configurable product tutorial](https://devdocs.magento.com/guides/v2.4/rest/tutorials/configurable-product/config-product-intro.html) in our developer documentation. 
