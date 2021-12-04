---
title: "MDVA-32313 patch: products added to wishlist with wrong configuration"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,QPT 1.0.10,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,configurable product,product listing,wishlist,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-32313 patch solves the issue where configurable products are not able to be added to the wishlist correctly, because they are assigned wrong configurations when they are added to the wishlist. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.10 is installed. Please note that the issue was fixed in Adobe Commerce version 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.0

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.3.3-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Create a customer.
1. Log into the customer account.
1. Navigate to the **Product Listing** page.
1. Choose a configurable product (Example: *configurable\_1* ) and select preferred color and size options on the **Product Listing** page (**Do not open the product page.**).
1. Click on the wishlist icon of another configurable product (Example: *configurable\_2*) on the same page without selecting any color/size options.

<ins>Expected results</ins>:

The *configurable\_2* product is added to the wishlist without selected options, as expected.

<ins>Actual results</ins>:

The *configurable\_2* product added to the wishlist with the configuration from the *configurable\_1* product.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
