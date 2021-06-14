---
title: "MDVA-30428 Magento patch: wishlist not working with the MSI"
labels: "2.3.5,2.3.5-p1,2.3.5-p2,2.4,2.4.0,2.4.1,Inventory,MQP 1.0.5,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools,wishlist"
---

The MDVA-30428 patch solves the Wishlist not working with the Magento Inventory (MSI). This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v1.0.5 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce v2.3.5-p1.
* The patch is also compatible with the following Magento versions and editions: Magento Commerce and Magento Commerce Cloud v2.3.3–2.3.3-p1 (MQP 1.0.6) and v2.3.5 – 2.4.1 (MQP 1.0.5).

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

On adding a product to the wishlist, when the product is assigned to a custom inventory source, the following message shows " *We can't add the item to Wish List right now: Cannot add product without stock to wishlist.* "

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a new inventory source in the Magento Admin. For steps, refer to the Magento User Guide [Catalog > Adding a New Source](https://docs.magento.com/user-guide/catalog/inventory-sources-add.html?itm_source=merchdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=new%20inventory%20source) .
1. Create a new stock inventory in the Magento Admin, assign the new source and default website to the new stock. For steps, refer to Magento User Guide [Catalog > Adding a New Stock](https://docs.magento.com/user-guide/catalog/inventory-stock-add.html#add-new-stock) .
1. Create a simple product and only assign the new stock as inventory.
1. Visit the simple product details page in the frontend.
1. Add the product to the wishlist. The following error shows: *We can't add the item to Wish List right now: Cannot add product without stock to wishlist* .

 <span class="wysiwyg-underline">Expected result:</span> 

The product should be added to the wishlist with the custom stock. <span class="wysiwyg-underline">Actual result:</span> The product is not added to the wishlist and an error message shows.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* KB [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* KB [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.