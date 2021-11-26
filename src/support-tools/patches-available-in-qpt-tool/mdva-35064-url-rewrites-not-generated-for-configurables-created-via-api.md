---
title: "MDVA-35064: URL rewrites not generated for configurables created via API"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.17,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-35064 patch fixes the issue where URL rewrites are not being generated for "All store views" for products created via API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.3-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When configurable products are created via API, the URL rewrites are not generated.

<ins>Steps to reproduce</ins>:

1. Create a new website, store, and store view.
1. Create a new category.
1. Create a new product and assign it to the newly created category.
1. Assign the product to the main website and the new website.
1. Check the URL table and make sure it contains entries for the product, category/product for each store on each website.
1. Remove product for the second website.

<ins>Expected results</ins>:

The URL table contains entries for product, category/product only for the stores on the first website.

<ins>Actual results</ins>:

The URL table contains URL rewrites for all stores on all websites.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
