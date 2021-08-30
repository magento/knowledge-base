---
title: "MDVA-33992: B2B custom pricing for wholesaler not displayed in cart"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,B2B,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,custom price,support tools
---

The MDVA-33992 Magento patch fixes the issue where the custom pricing for a B2B customer is not reflected when a product is added to a cart. This patch is available when the Quality Patches Tool (QPT) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1 with B2B

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.4.1-p1 with B2B

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Custom pricing for a B2B customer is not reflected when a product is added to a cart.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

The issue is reproducible for B2B version with Shared Catalog enabled.

1. Create a B2B company with a custom shared catalog assigned.
1. Create a product in the company's custom catalog with a custom price (tier price).
1. As a B2B customer check that the custom product price is displayed in catalog.
1. As a B2B customer add the product to the cart.

 <span class="wysiwyg-underline">Expected result:</span> 

The correct price is displayed in the shopping cart, and matches the price in the catalog.

 <span class="wysiwyg-underline">Actual result:</span> 

The custom price disappears and the regular price from the default catalog is displayed.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.