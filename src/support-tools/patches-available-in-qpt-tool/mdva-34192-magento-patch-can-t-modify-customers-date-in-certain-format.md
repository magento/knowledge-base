---
title: "MDVA-34192 patch: can't modify customers date in certain format"
labels: 2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,date of birth,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Commerce,Magento Open Source
---

The MDVA-34192 patch fixes the issue where it is impossible to modify/specify customer date of birth using dd/mm/yyyy format. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.5-p1

 **Compatible with Adobe Commerce versions:** 2.3.4-2.3.6

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The patch solves several issues. Following are the description and steps to reproduce for one of them.

The product grid filter does not work correctly when we filter using custom date attribute and the admin user locale is en\_GB.

<ins>Steps to reproduce:</ins>:

1. Create an admin user whose **Interface Locale** is set to *English (United Kingdom)*.
1. Create a date attribute with the following configuration:
    * **Catalog Input Type for Store Owner**: *Date*
    * **Use in Filter Options**: *Yes*
    * **Add to Column Options**: *Yes*
1. Assign the attribute to an attribute set.
1. Go to the product edit page, select a date for the new attribute using the date picker and save.
1. Try to filter the product grid using the new date attribute.

<ins>Expected result:</ins>:

Product filter works correctly for a custom date attribute when the admin user locale is en\_GB.

<ins>Actual result:</ins>:

Product filter does not work correctly for a custom date attribute when the admin user locale is en\_GB.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
