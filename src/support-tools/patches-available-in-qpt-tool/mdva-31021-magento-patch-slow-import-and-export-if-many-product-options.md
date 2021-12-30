---
title: "MDVA-31021: slow import and export if many product options"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,export,fail,import,product options,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-31021 patch solves the issue when Import/Export takes longer than expected with large numbers of product options. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.0 - 2.4.1

 >![info]
 >
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

If there are 100,000 records or more in the `catalog_product_option` table, the Import/Export function file validation takes longer than expected. Before Import/Export, to check option validation, Adobe Commerce loads product options for all existing products.

<ins>Prerequisites</ins>:

Adobe Commerce store with 5000 products with custom options. Each product should have at least four custom options with two or more options to choose from so that there are 100,000 records in `catalog_product_option` table.

<ins>Steps to reproduce</ins>:

1. For an **Import** example: create a CSV import file with one of the SKUs from the Commerce Admin.
1. Add four custom options to the CSV import file.
1. Try to import the CSV file from the Commerce Admin.

<ins>Expected results</ins>:

The Import or Export function completes as expected. Validation takes less than 10 seconds to complete with one product.

<ins>Actual results</ins>:

The Import or Export function takes longer than expected. Validation takes more than 10 seconds to complete with only one product.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
