---
title: "MDVA-37068: Incorrect tax rate displays on checkout for virtual products"
labels: MQP patches,Magento Quality Patches,
---

The MDVA-37068 Magento patch fixes the issue of incorrect tax rate displays on checkout for virtual products. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.26 is installed. The patch ID is MDVA-37068. Please note that the issue is scheduled to be fixed in Magento 2.4.4.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.5-p2

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.1-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

Incorrect tax rate displays when the shopping cart has only virtual products.

<ins>Prerequisites</ins>:

1. Create 2 separate Tax rates and tax rules for 2 different countries - for example 10% and 1%.
1. Create virtual product.
1. Run reindex and clean cache.

<ins>Steps to reproduce</ins>:

1. Create a customer.
1. Add different billing and shipping addresses.
1. Add virtual product to the cart.
1. Check the cart page and checkout page.

<ins>Expected results</ins>:

The tax displayed on the cart and checkout page are the same.

<ins>Actual results</ins>:

Different taxes on the cart and checkout page.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
