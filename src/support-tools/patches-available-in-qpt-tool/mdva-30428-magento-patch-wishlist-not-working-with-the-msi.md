---
title: "MDVA-30428: wishlist not working with Inventory Management"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,2.4,2.4.0,2.4.1,Inventory,QPT 1.0.5,QPT patches,Inventory Management,MSI,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,wishlist,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30428 patch solves the wishlist not working with Inventory Management (MSI). This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.5 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.5-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.3 – 2.3.3-p1 (QPT 1.0.6) and 2.3.5 – 2.4.1 (QPT 1.0.5)

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

On adding a product to the wishlist, when the product is assigned to a custom inventory source, the following message shows "*We can't add the item to Wish List right now: Cannot add product without stock to wishlist.*"

<ins>Steps to reproduce</ins>:

1. Create a new inventory source in the Commerce Admin. For steps, refer to [Catalog > Adding a New Source](https://docs.magento.com/user-guide/catalog/inventory-sources-add.html?itm_source=merchdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=new%20inventory%20source) in our user guide.
1. Create a new stock inventory in the Commerce Admin, assign the new source and default website to the new stock. For steps, refer to [Catalog > Adding a New Stock](https://docs.magento.com/user-guide/catalog/inventory-stock-add.html#add-new-stock) in our user guide.
1. Create a simple product and only assign the new stock as inventory.
1. Visit the simple product details page in the frontend.
1. Add the product to the wishlist. The following error shows: *We can't add the item to Wish List right now: Cannot add product without stock to wishlist*.

<ins>Expected results</ins>:

The product should be added to the wishlist with the custom stock.

<ins>Actual results</ins>:

The product is not added to the wishlist, and an error message shows.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
