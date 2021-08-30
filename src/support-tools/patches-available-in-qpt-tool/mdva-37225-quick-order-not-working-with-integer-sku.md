---
title: "MDVA-37225: Quick order not working with integer SKU"
labels: 2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,2.4.2-p1,QPT 1.0.23,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,integer SKU,quick order
---

The MDVA-37225 Magento patch fixes the issue when the page doesn't load when creating a quick order when there is an integer value in imported SKUs. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.23 is installed. The patch ID is MDVA-37225. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.4.1-p1
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.4.1-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

 <ins>Prerequisite</ins>:

 Magento with installed B2B module

 <ins>Steps to reproduce</ins>:

1. Enable B2B quick order functionality.
1. Create 4 simple products with SKUs (Example SKUs: *00100*, *001E002*, *001E02C*, and *7100824*).
1. Go to the ``<storefront_url>/quickorder`` page on the frontend, and try to create an order using a CSV file with this Example content:  

| sku  | qty |
|---|---|
| 00100  | 1 |


 <ins>Expected results</ins>:

The product (Example: product with SKU = *00100*) is added to the cart, as expected.

 <ins>Actual results</ins>:

The page doesn't load, and no products are added to the cart.


## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
