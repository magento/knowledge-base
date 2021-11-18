---
title: "MDVA-34695: Products and categories not displaying"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,QPT 1.0.18,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,catalog_category_entity,categories grid,children_count,display,products,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-34695 patch solves the issue where products and categories don't display in the categories grid in Admin. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-34695. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.4

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0-2.4.0-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Negative values for `children_count` appear in the database after deleting categories.

<ins>Steps to reproduce</ins>:

1. Log in to the Admin backend.
1. Navigate to **Catalog > Categories**.
1. Click **Add Subcategory**.
1. Set **category name** = *Parent 1*, then Save.
1. Click **Add Subcategory**.
1. Set **category name** = *Child 1*, then Save.
1. Click **Add Subcategory**.
1. Set **category name** = *Child 2*, then Save.
1. Click **Add Subcategory**.
1. Set **category name** = *Child 3*, then Save. At this point, this category should have a level = *5*.
1. Click on the **Child 1** category.
1. Delete the category.

<ins>Expected results</ins>:

The categories grid shows products and categories, as expected.

<ins>Actual results</ins>:

The categories grid is empty. Check the `catalog_category_entity` table in the database. Note that `children_count` became negative.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
