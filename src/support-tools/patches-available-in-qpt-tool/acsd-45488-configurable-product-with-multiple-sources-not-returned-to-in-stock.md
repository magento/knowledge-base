---
title: "ACSD-45488: Configurable product with multiple sources not returned to in stock automatically"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.18,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3,2.4.4,2.4.4-p1,2.4.5,configurable product,multiple sources,in stock
---

The ACSD-45488 patch solves the issue where a configurable product with multiple sources is not returned to in stock automatically. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.18 is installed. The patch ID is ACSD-45488. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.5

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

A configurable product with multiple sources is not returned to in stock automatically.

<ins>Steps to reproduce</ins>:

1. Create a secondary stock source.
1. Create a configurable product with two associated virtual products.
1. Assign the associated products to the default stock source and set the quantity to one.
1. Check the `stock_status` from `cataloginventory_stock_status`.
1. Set both the associated products to be *out of stock*.
1. Check the `stock_status` from `cataloginventory_stock_status`.
1. Set both associated products to be *in stock*.
1. Check the `stock_status` from `cataloginventory_stock_status`.

<ins>Expected results</ins>:

The stock status of the configurable product is updated to *in stock* when the associated products are set to be in stock.

<ins>Actual results</ins>:

The stock status of the configurable product is not updated to *in stock* when the associated products are set to be in stock.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
