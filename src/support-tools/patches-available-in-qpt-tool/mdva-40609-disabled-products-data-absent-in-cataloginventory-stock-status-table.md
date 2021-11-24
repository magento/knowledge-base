---
title: "MDVA-40609: Disabled products data absent in cataloginventory_stock_status table"
labels: QPT patches,Quality Patches Tool,MQP,QPT 1.1.6,Magento,Adobe Commerce,on-premises,cloud infrastructure,Support Tools,index,incorrect table,disabled product,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-40609 patch solves the issue where the disabled products data is not shown in the `cataloginventory_stock_status` index table leading to displaying incorrect product quantities. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.6 is installed. The patch ID is MDVA-40609. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Disabled products data is not shown in the `cataloginventory_stock_status` index table leading to displaying incorrect product quantities.

<ins>Prerequisites</ins>:

Inventory module is installed.

<ins>Steps to reproduce</ins>:

1. Set up two websites with stores and store views.
1. Create an additional source and stock.
1. Add a simple product:
    * Set Enable Product to *No*.
    * Assign two sources with Source Item Status = Instock and Qty greater than zero.
1. Save the product.
1. Check the **Product Salable Quantity** tab.

<ins>Expected results</ins>:

Both stocks have entered values greater than zero.

<ins>Actual results</ins>:

One stock has zero value.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
