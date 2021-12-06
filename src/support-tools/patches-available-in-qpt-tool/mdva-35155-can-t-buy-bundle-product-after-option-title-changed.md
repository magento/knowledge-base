---
title: "MDVA-35155: Can't buy bundle product after option title changed"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,bundle product,can't buy,option title change,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-35155 patch solves the issue where a bundle product can't be bought after the option title is changed. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35155. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0-2.3.5-p2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Bundle products can't be bought after the option title is changed.

<ins>Steps to reproduce</ins>:

1. Create a new bundle product via **Product Import**.
1. The product is normal in both the Admin and frontend (in stock and can be added to the cart).
1. Update the same product with changes in the name in `bundle_values` and re-import the product.

<ins>Expected results</ins>:

The existing bundle option is updated to the new name and keeps the same items in it.

<ins>Actual results</ins>:

* Admin attempts to merge products with the same SKU into a single bundle-option section, resulting in an empty option section.
* The product is out of stock on the frontend (even after a reindex).

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
