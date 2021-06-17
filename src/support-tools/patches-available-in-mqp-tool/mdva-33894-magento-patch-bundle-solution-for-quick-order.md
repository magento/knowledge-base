---
title: "MDVA-33894 Magento patch: bundle solution for Quick Order"
labels: 2.4.0,2.4.0-p1,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,order by SKU,quick order,support tools
---

The MDVA-33894 Magento patch fixes multiple issues for the Quick Order functionality including adding and removing multiple products and SKU case sensitivity. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0.

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.4.0-2.4.1-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

MDVA-33894 Magento patch is a bundle solution with fixes for the following issues:

* **My Account** > **Order by SKU** functionality is case sensitive: if you enter a valid SKU but the case is not correct (uppercase instead of lowercase and so on), Magento throws an error.
* When a shopper uses Quick Order to add multiple products to their cart, and tries to remove a product, the product does not get removed.
* Case sensitivity issues when adding multiple SKUs to a bulk order.
* Quick Order page cache issue with previously entered SKUs.
* Quick Order quantity is not reflected in cart.
* SKU duplication is not validated properly.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.