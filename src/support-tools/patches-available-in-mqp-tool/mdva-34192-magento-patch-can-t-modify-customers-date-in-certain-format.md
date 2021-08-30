---
title: "MDVA-34192 Magento patch: can't modify customers date in certain format"
labels: 2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,date of birth,support tools
---

The MDVA-34192 Magento patch fixes the issue where it is impossible to modify/specify customer date of birth using dd/mm/yyyy format. This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1

 **Compatible with Magento versions:** 2.3.4-2.3.6

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The patch solves several issues. Following are the description and steps to reproduce for one of them.

The product grid filter does not work correctly when we filter using custom date attribute and the admin user locale is en\_GB.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create an admin user whose **Interface Locale** is set to *English (United Kingdom)* 
1. Create a date attribute with the following configuration:
    * **Catalog Input Type for Store Owner** : *Date* 
    * **Use in Filter Options** : *Yes* 
    * **Add to Column Options** : *Yes* 
1. Assign the attribute to an attribute set.
1. Go to the product edit page, select a date for the new attribute using the date picker and save.
1. Try to filter the product grid using the new date attribute.

 <span class="wysiwyg-underline">Expected result:</span> 

Product filter works correctly for a custom date attribute when the admin user locale is en\_GB.

 <span class="wysiwyg-underline">Actual result:</span> 

Product filter does not work correctly for a custom date attribute when the admin user locale is en\_GB.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.