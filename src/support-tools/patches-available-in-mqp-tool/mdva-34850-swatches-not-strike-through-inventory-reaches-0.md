---
title: 'MDVA-34850: swatches not strike-through inventory reaches "0"'
labels: Inventory,QPT 1.0.17,QPT patches,Magento Commerce,Magento Commerce Cloud,configuration,inventory source,out of stock,support tools
---

The MDVA-34850 Magento patch fixes the issue where the swatches are not stricken through when the inventory reaches "0", and are not visible in the the Product Details Page (PDP) link to any other In-Stock swatches. The **Display Out Of Stock Products** is also set to *Yes* in admin configuration. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.1 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Fixes the issue where out of stock product options do not display on the PDP page when the default inventory stock is not in use and **Display Out of Stock Products** configuration is enabled.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

 <span class="wysiwyg-underline">Prerequisites:</span> 

* Install Multi Source Inventory (MSI).
* Enable Display Out of Stock Products in [Inventory Stock Options](https://docs.magento.com/user-guide/configuration/catalog/inventory.html) .

1. Create new inventory stock \[New Stock\] assigning all the websites to it and the above source. Now the Default Stock should not be in use.
1. Create a [configurable product](https://docs.magento.com/user-guide/catalog/product-create-configurable.html) adding three size options \[S,M,L\].
1. Open each option and add quantities by assigning only the custom source \[new\_source\] created. Also, set \[Source Status\] to \[In Stock\].
1. Reindex and check the configurable product from the frontend. All three options should visible.
1. Open a simple product assigned to \[size:S\] from the backend and set the \[Source Status\] to \[Out of stock\], also update the quantity to 0. Reindex and check the configurable product from the frontend.

 <span class="wysiwyg-underline">Expected result:</span> 

Since the Display Out of Stock Products option is enabled, all 3 options should display. The out-of-stock option \[S\] should be disabled and crossed out. It should display 2 x of 1 option product with price=12x2 in order details on the frontend and backend. <span class="wysiwyg-underline">Actual result:</span> The out-of-stock option is hidden. <span class="wysiwyg-underline"></span> 

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
