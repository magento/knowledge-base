---
title: "MDVA-31759 Magento patch: CSV import ignores attribute updates"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.9,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,import,support tools
---

The MDVA-31759 Magento patch fixes the issue where CSV import ignores additional attributes with *Dropdown* and *Text Area* types. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.9 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0.

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

CSV import ignores additional attributes with *Dropdown* and *Text Area* types.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in to Magento Admin.
1. Create a product attribute with the following configuration:
    * **Default Label** : *G003* 
    * **Catalog Input Type for Store Owner** : *Text Area* or *Dropdown* 
    * **Attribute Code** : *G003* 
    * **Scope** : *Global* 
1. Add the above attribute to the default attribute set.
1. Create a product with the default attribute set and specify a value for the new attribute.
1. Export the product to CSV.
1. Update the attribute value in the **additional\_attributes** column.
1. Import the updated CSV.

 <span class="wysiwyg-underline">Actual result:</span> The G003 attribute value is not updated.

 <span class="wysiwyg-underline">Expected result:</span> The G003 attribute value is updated.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.