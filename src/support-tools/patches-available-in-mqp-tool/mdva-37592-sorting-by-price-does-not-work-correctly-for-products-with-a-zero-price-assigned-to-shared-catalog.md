---
title: "MDVA-37592: Sorting by price not working for products with a zero price"
labels: MQP patches,Magento Quality Patches,MQP,Support Tools,Magento Commerce Cloud,Magento Commerce,Adobe Commerce on our cloud architecture,Adobe Commerce on-premise,Adobe Commerce,sorting,zero price,shared catalog,MQP 1.1.0,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-37592 Adobe Commerce patch solves the issue where sorting by price does not work correctly for products with a zero price assigned to shared catalog. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.0 is installed. The patch ID is MDVA-37592. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on our cloud architecture 2.4.0-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment types) 2.3.6-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Adobe Commerce version, run `./vendor/bin/magento-patches status`.

## Issue

Sorting by not working correctly for products with a zero price assigned to shared catalog.

<ins>Prerequisites</ins>:

B2B is installed.

<ins>Steps to reproduce</ins>:

1. Enable shared catalog.
1. Create four products with the following prices and assign them to a category - $50, $60, $70, $80.
1. Create a shared catalog with the above products.
1. Set the custom price to zero for the product with a price of $70.
1. Now create a company user and assign it to the shared catalog just created.
1. Log in using the company account and browse to the category that the products are assigned to.
1. Try to sort by price.

<ins>Expected results</ins>:

The products with zero price is sorted respectively.

<ins>Actual results</ins>:

The product with price zero is sorted according to the original price.

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:	 

* Adobe Commerce or Magento Open Source on-premise: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Adobe Commerce on our cloud architecture: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
