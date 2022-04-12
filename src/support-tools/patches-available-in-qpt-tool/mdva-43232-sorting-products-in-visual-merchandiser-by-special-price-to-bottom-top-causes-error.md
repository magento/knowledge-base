---
title: "MDVA-43232: Sorting products in visual merchandiser by Special Price to Top (or Bottom) causes an error"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.12,Special Price,visual merchandiser,sorting products,Bottom,Top,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-43232 patch fixes the issue where sorting products in visual merchandiser by Special Price to Top (or Bottom) causes an error while saving category. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.12 is installed. The patch ID is MDVA-43232. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.4 - 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Sorting products in visual merchandiser by Special Price to Top (or Bottom) causes an error while saving category.

<ins>Steps to reproduce</ins>:

1. Make sure there are two websites.
1. Navigate to **Stores** > **Configuration** > **Catalog** > **Price** and set Catalog Price Scope = Website.
1. Again, navigate to **Stores** > **Configuration** > **Catalog** > **Visual Merchandiser** > **Visible Attributes for Category Rules** > and add Special Price.
1. Create a simple product and assign the products to both websites.
1. Add a special price to the default scope of the product.
1. Switch to the other store's scope and override both the Price and Special Price of that product.
1. Do a `catalog_product_price` reindex.
1. Go to **Catalog** > **Categories** and create a new category.
1. Add a category rule to filter products that have a special price.
1. Save the category.
1. Under the Products in Category section, set Sort Order = Special Price to Top (or Bottom).
1. Save the category again.

<ins>Expected results</ins>:

The category is saved without errors.

<ins>Actual results</ins>:

An exception is thrown:

```php
[2022-02-07T05:58:46.297621+00:00] report.CRITICAL: Exception: Item (Magento\Catalog\Model\Product\Interceptor) with the same ID "1" already exists. in /lib/internal/Magento/Framework/Data/Collection.php:407
```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
