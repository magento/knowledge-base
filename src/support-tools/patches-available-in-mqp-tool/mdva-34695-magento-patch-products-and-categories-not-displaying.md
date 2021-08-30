---
title: "MDVA-34695 Magento patch: Products and categories not displaying"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,QPT 1.0.18,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,catalog_category_entity,categories grid,children_count,display,products
---

The MDVA-34695 Magento patch solves the issue where products and categories don't display in the categories grid in Admin.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-34695. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.0-2.4.0-p1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Negative values for `children_count` appear in the database after deleting categories.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Log in into the Admin backend.
1. Navigate to **Catalog > Categories** .
1. Click **Add Subcategory** .
1. Set **category name** = *Parent 1* , then Save.
1. Click **Add Subcategory** .
1. Set **category name** = *Child 1* , then Save.
1. Click **Add Subcategory** .
1. Set **category name** = *Child 2* , then Save.
1. Click **Add Subcategory** .
1. Set **category name** = *Child 3* , then Save. At this point this category should have level = *5* .
1. Click on the **Child 1** category.
1. Delete the category.

 <span class="wysiwyg-underline">Expected results</span> :

The categories grid shows products and categories, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The categories grid is empty.Check the `catalog_category_entity` table in the database. Note that `children_count` became negative.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.