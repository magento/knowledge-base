---
title: "MDVA-38799: Downloadable products not saved after creating a staging update"
labels: QPT patches,Quality Patches Tool,QPT,Support Tools,QPT 1.1.0,Magento Commerce,Magento Commerce Cloud,Adobe Commerce,on-premises,cloud infrastructure,Magento,downloadable products,staging,update,error,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-38799 patch solves the issue where downloadable products are not saved after creating a staging update. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.0 is installed. The patch ID is MDVA-38799. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Downloadable products are not saved after creating a staging update. Users get the error message: *The downloadable sample is not related to the product. Verify the link and try again*.  

<ins>Steps to reproduce</ins>:

1. Navigate to **Catalog** > **Products**.
1. Click the dropdown next to Add Product and select Downloadable Product.
    * Fill out the name, SKU, price, and quantity of the product.
1. Scroll down to the Downloadable Information page.
1. Under Samples, click **Add Link**.
    * Fill out the Title, Upload File (the type of file does not matter).
1. Click **Save**. You will get the following message: *You saved the product*.
1. Click **Schedule New Update** at the top of the page.
    * Fill out the Update Name and a legal Start Date and End Date.
1. Click **Save** on the staging update.
1. Click **Save** on the product.

<ins>Expected results</ins>:

The product is saved without any error.

<ins>Actual results</ins>:

You get the error message: *The downloadable sample is not related to the product. Verify the link and try again*.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
