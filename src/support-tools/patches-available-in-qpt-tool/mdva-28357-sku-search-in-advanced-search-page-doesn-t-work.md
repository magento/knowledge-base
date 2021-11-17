---
title: MDVA-28357 SKU search in Advanced Search page doesn't work
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,Advanced search,QPT 1.0.8,QPT patches,Magento Commerce,Magento Commerce Cloud,search,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-28357 solves the issue where search by a product SKU in the Advanced Search page does not lead to the relevant product displaying in search results. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.8 is installed. Please note that the issue is fixed in Adobe Commerce version 2.4.1.

## Affected products and versions

* This patch was designed for Adobe Commerce on-premises 2.3.4-p2.
* The patch is also compatible with Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0 to 2.3.5-p2, and 2.4.0 to 2.4.0-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

In advanced search, searching using a SKU queries the SKU field using a wildcard. But a wildcard can only be used with `sku.keyword`, so this does not return the expected product.

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. Go to Advanced Search page.
1. Search by a SKU number.

 <span class="wysiwyg-underline">Actual result</span>

 Error message displays: *We can't find any items matching these search criteria. Modify your search*.

 <span class="wysiwyg-underline">Expected result</span>

 One product item displays with a message: *1 item were found using the following search criteria*  *SKU: XX-XXXX*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
