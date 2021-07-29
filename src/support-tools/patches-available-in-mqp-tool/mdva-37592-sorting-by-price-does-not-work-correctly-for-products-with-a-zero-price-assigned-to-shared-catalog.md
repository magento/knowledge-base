---
title: "MDVA-37592: Sorting by price doesn't work correctly for products with a zero price assigned to shared catalog"
labels: MQP patches,Magento Quality Patches,MQP,Support Tools,MQP 1.1.0,Magento Commerce,Magneto Commerce Cloud,Adobe Commerce,Adobe Commerce on cloud architecture,
---
The MDVA-37592 Adobe Commerce patch solves the issue where sorting by price does not work correctly for products with a zero price assigned to shared catalog. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.0 is installed. The patch ID is MDVA-37592. Please note that the issue is yet to fix.

## Affected products and versions

**The patch is created for ***Magento version*** :**

Adobe Commerce on cloud architecture 2.4.0-p1 ***(Magento Commerce Cloud 2.4.0-p1)***

**Compatible with ***Magento versions***:**

Adobe Commerce and Adobe Commerce on cloud architecture 2.3.6-2.4.2-p1 ***(Magento Commerce and Magneto Commerce Cloud 2.3.6-2.4.2-p1)***

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

Sorting by price doesn't work correctly for products with a zero price assigned to shared catalog.

<ins>Prerequisites</ins>

B2B installed.

<ins>Steps to reproduce</ins>:

1. Enable shared catalog.
1. Create four products with the following prices and assign them to a category - $50, $60, $70, $80.
1. Create a shared catalog with the above products.
1. Set the custom price to 0 for the product with a price of $70.
1. Create a company user and assign it to the shared catalog just created.
1. Log in using the company account and browse to the category that the products are assigned to.
1. Try to sort by price.

<ins>Expected results</ins>:

The products with zero price is sorted respectively.

<ins>Actual results</ins>:

The product with price 0 is sorted according to the original price.

## Apply the patch

To apply individual patches use the following links depending on your Adobe Commerce ***(Magento)*** product:

* Adobe Commerce Developer Guide ***(Magento Commerce: DevDocs)*** [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Adobe Commerce User Guide: ***(Magento Commerce Cloud: DevDocs)*** [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce ***Magento*** issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
