---
title: MDVA-29148 Patch ArrayBackend does not assign default value on save
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,attribute,products,support tools
---

The MDVA-29148 patch solves the issue where `\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend` does not assign the default value on save. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.7 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

 **This patch was created for:** Magento Commerce Cloud 2.3.3-p1.

 **Compatible with Magento versions:** Magento Commerce/Magento Commerce Cloud >=2.3.0 <2.4.2.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a product is created via an import script or the REST API, attributes that use the `\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend` backend model and have a default value, are not assigned the default value.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Create a new global attribute that uses the `\Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend` backend model and a non-empty default value.
1. Use the REST API to create a new product.
1. Fetch that new product from the REST API and confirm that the attribute is not present in the products custom attributes.

 <span class="wysiwyg-underline">Actual result</span> The custom attribute default value was not saved to the product attribute.

 <span class="wysiwyg-underline">Expected result</span> The custom attribute default value was saved to the product attribute. <span class="wysiwyg-underline"></span> 

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.