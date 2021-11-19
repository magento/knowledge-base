---
title: "MDVA-32776: Stock status not updated with order placement"
labels: Support Tools,QPT patches,Quality Patches Tool,Magneto Commerce Cloud,QPT 1.1.6,Adobe Commerce,cloud infrastructure,on-premises,stock status,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2
---

The MDVA-32776 patch fixes the issue where the stock status is not updated when an order is placed but not shipped. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.6 is installed. The patch ID is MDVA-32776. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.0

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.0 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The stock status is not updated when an order is placed but not shipped.

<ins>Prerequisites</ins>:

1. Inventory module is installed.
1. Display Out-of-Stock Products is set to *Yes*. 
  * To set, go to **Stores** > **Configuration** > **Catalog** > **Inventory** > **Display Out-of-Stock Products** = *Yes*.

<ins>Steps to reproduce</ins>:

1. Create two simple products with qty = 11 and 22.
1. Create a grouped product using the simple products created in step one.
1. Add grouped products to the cart by setting one of the product qty to 11 and making the other simple product go out of stock.
1. Complete the checkout and place the order.

<ins>Expected results</ins>:

Grouped products display `out-of-stock` labels when associated simple products go out of stock.

<ins>Actual results</ins>:

1. The simple product with qty = 11 shows out of stock.
1. The grouped product does not show an *out-of-stock* message for the product with qty = 11. Though, adding this product to the cart gives an *out-of-stock* error.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
