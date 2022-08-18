---
title: "ACSD-45241: Virtual product's stock quantity miscalculated"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.17,credit memo,stock,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.4
---

The ACSD-45241 patch fixes the issue where the virtual product's stock quantity is miscalculated after creating a credit memo. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.17 is installed. The patch ID is ACSD-45241. Please note that the issue was fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.5 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Stock quantity for a virtual product is miscalculated after creating a credit memo.

<ins>Steps to reproduce</ins>:

1. Create a configurable product with a virtual product as a child product in the Commerce Admin.
1. Make sure both products created in step one are in stock.
1. Mark the quantity for the virtual product created in step one as 100 and keep the salable quantity 100 as well.
1. Add the product to the shopping cart.
1. Place an order with the virtual product created in step one.
1. Keep the order status as "Pending". No need to process the payment.
1. `order_created` record created in `inventory_reservation`. The virtual product quantity shows 100 with salable quantity as 99.
1. Open the order and go to **Invoice** > **Submit Invoice**.
1. `invoice_created` record created in `inventory_reservation`. The virtual product quantity is now 99, and the salable quantity is also 99.
1. Create a credit memo without selecting **Return to Stock**.

<ins>Expected results</ins>:

No new record is created in `inventory_reservation`, and the stock quantity for the virtual product is unchanged.

<ins>Actual results</ins>:

A `creditmemo_created` record is created in `inventory_reservation`, and the virtual product stock quantity is adjusted to 98 with salable quantity as 99.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
