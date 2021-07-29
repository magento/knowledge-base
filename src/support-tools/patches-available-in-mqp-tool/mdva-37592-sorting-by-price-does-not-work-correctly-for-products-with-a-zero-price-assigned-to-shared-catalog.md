---
title: "MDVA-37592: Sorting by price doesn't work correctly for products with a zero price assigned to shared catalog"
labels: MQP patches,Magento Quality Patches,MQP,Support Tools,MQP 1.1.0,Magento Commerce,Magneto Commerce Cloud,Adobe Commerce,Adobe Commerce on cloud architecture,
---
The MDVA-37592 Adobe Commerce patch solves the issue

where downloadable products are not saved after creating a staging update. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.0 is installed. The patch ID is MDVA-38799. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.3 ***(Magento version 2.4.3)***.

## Affected products and versions

**The patch is created for ***Magento version*** :**

Adobe Commerce on cloud architecture 2.4.1 ***(Magento Commerce Cloud 2.4.1)***

**Compatible with ***Magento versions***:**

Adobe Commerce and Adobe Commerce on cloud architecture 2.3.0-2.4.2-p1 ***(Magento Commerce and Magneto Commerce Cloud 2.3.0-2.4.2-p1)***

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

Downloadable products are not saved after creating a staging update. Users get the error message: *The downloadable sample is not related to the product. Verify the link and try again*.  

<ins>Prerequisites</ins>

B2B installed.

<ins>Steps to reproduce</ins>:

1. Navigate to **Catalog** > **Products**.
1. Click the dropdown next to Add Product and select Downloadable Product.
   * Fill out the name, SKU, price, and quantity of the product.
1. Scroll down to the Downloadable Information page.
1. Under Samples, click **Add Link**.
   * Fill out the Title, Upload File (the type of file does not matter).
1. Click **Save**. You will get the message: *You saved the product*.
1. Click **Schedule New Update** at the top of the page.
   * Fill out the Update Name, and a legal Start Date and End Date.
1. Click **Save** on the staging update.
1. Click **Save** on the product.

<ins>Expected results</ins>:

Product is saved without any error.

<ins>Actual results</ins>:

You get the error message: *The downloadable sample is not related to the product. Verify the link and try again*.

## Apply the patch

To apply individual patches use the following links depending on your Adobe Commerce ***(Magento)*** product:

* Adobe Commerce Developer Guide ***(Magento Commerce: DevDocs)*** [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Adobe Commerce User Guide: ***(Magento Commerce Cloud: DevDocs)*** [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce ***Magento*** issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
