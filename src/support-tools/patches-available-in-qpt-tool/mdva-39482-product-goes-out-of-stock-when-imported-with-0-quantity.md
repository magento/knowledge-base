---
title: "MDVA-39482: Product goes out of stock if imported with '0' quantity with backorders enabled"
labels: QPT patches,Quality Patches Tool,QPT 1.1.4,Magento Commerce 2.4.4,Adobe Commerce 2.4.4,on-premises,cloud infrastructure,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.1,2..4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-39482 fixes the issue where the product goes out of stock if imported with "0" quantity when MSI and backorders are enabled and the Out-of-Stock Threshold is set to a minus value. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.4 is installed. The patch ID is MDVA-39482. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.1-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.6 – 2.3.7-p2, 2.4.1 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The product goes out of stock if imported with "0" quantity when MSI and backorders are enabled and the Out-of-Stock Threshold is set to a minus value.

<ins>Prerequisites</ins>:

1. MSI and sample data must be installed.
1. Go to **Stores** > **Configurations** > **Catalog** > **Inventory**:
    * Set Backorders to "Allow Qty Below 0"
    * Set Out-of-Stock Threshold to "-10"

<ins>Steps to reproduce</ins>:

1. Make sure the SKU is **In Stock** and has quantity **24-MB01**.
1. Import the Stock Sources' CSV. Make sure you select "Stock Sources" in Entity Type:

    ```code panel
    sku,qty,out_of_stock_qty
    24-MB01,0,-10
    ```
1. Check the product's stock status after the Stock Sources have been imported.

<ins>Expected results</ins>:

24-MB01 is **In Stock** in Storefront.

<ins>Actual results</ins>:

24-MB01 is **Out-of-Stock** in Storefront.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
