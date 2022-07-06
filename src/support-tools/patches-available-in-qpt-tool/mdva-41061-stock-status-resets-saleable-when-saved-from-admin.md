---
title: "MDVA-41061: Stock status resets to saleable when product saved from Admin"
labels: Support Tools,QPT patches,Quality Patches Tool,Magneto Commerce Cloud,QPT 1.1.5,QPT 1.1.15,Adobe Commerce,cloud infrastructure,on-premises,stock status,saleable,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2
---

The MDVA-41061 patch fixes the issue where the stock status resets to saleable when the product is saved from the Admin. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.5 is installed. The patch ID is MDVA-41061. The latest patch version is available in QPT 1.1.15 with MDVA-41061-V3 patch ID. Please note that the issue is fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.2 - 2.4.2-p2, 2.4.3 - 2.4.3-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Stock status resets to saleable when the product is saved from the Admin.

<ins>Prerequisites</ins>:

Inventory modules is installed.

<ins>Steps to reproduce</ins>:

1. Create a simple product with Qty = 1.
1. Place an order using the product created in step 1.
1. Run cron - make sure `inventory.reservations.updateSalabilityStatus` queue is executed and product stock status has been changed to zero in the `cataloginventory_stock_status` table.
1. Check product on the frontend. It should be marked as **Out of Stock**.
1. Save product in the Admin without any changes.

<ins>Expected results</ins>:

* Stock status should not be updated.
* The product should be **Out of Stock** on the frontend.

<ins>Actual results</ins>:

* Simple product is marked as **In Stock** on the frontend.
* Users get *The requested qty is not available* message when trying to add it to the cart.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
