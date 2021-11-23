---
title: 'MDVA-34850: swatches not strike-through inventory reaches "0"'
labels: Inventory,QPT 1.0.17,QPT patches,Magento Commerce,Magento Commerce Cloud,configuration,inventory source,out of stock,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-34850 patch fixes the issue where the swatches are not stricken through when the inventory reaches "0" and are not visible in the  Product Details Page (PDP) link to any other In-Stock swatches. The **Display Out-of-Stock Products** is also set to *Yes* in admin configuration. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.1 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Out-of-Stock Product options do not display on the PDP page when the default inventory stock is not in use and **Display Out-of-Stock Products** configuration is enabled.

<ins>Prerequisites</ins>:

* Install Multi-Source Inventory (MSI).
* Enable Display Out-of-Stock Products in [Inventory Stock Options](https://docs.magento.com/user-guide/configuration/catalog/inventory.html).

<ins>Steps to reproduce</ins>:

1. Create new inventory stock \[New Stock\], assigning all the websites to it and the above source. Now the Default Stock should not be in use.
1. Create a [configurable product](https://docs.magento.com/user-guide/catalog/product-create-configurable.html) adding three size options \[S,M,L\].
1. Open each option and add quantities by assigning only the custom source \[new\_source\] created. Also, set \[Source Status\] to \[In Stock\].
1. Reindex and check the configurable product from the frontend. All three options should be visible.
1. Open a simple product assigned to \[size:S\] from the backend and set the \[Source Status\] to \[Out of Stock\], also update the quantity to 0. Reindex and check the configurable product from the frontend.

<ins>Expected results</ins>:

Since the Display Out-of-Stock Products option is enabled, all three options should display. The Out-of-Stock option \[S\] should be disabled and crossed out. It should display 2 x of 1 option product with price = 12x2 in order details on the frontend and backend.

<ins>Actual results</ins>:

The Out-of-Stock option is hidden.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
