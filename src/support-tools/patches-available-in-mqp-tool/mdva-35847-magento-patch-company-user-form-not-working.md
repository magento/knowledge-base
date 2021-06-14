---
title: "MDVA-35847 Magento patch: Company User form not working"
labels: "2.4.1,2.4.1-p1,2.4.2,500 error,Company User,MQP 1.0.19,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,custom customer attribute,form"
---

The MDVA-35847 Magento patch solves the issue of the Company User form is not working and returns a 500 error on the frontend.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35847. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisite</span> : Magento B2B installed

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Go to **Stores > Attributes > Customer** , and create a new custom customer attribute:

* Input type = *Date* 
* Show on Storefront = *Yes* 
* Sort Order = *0* 
* Forms to Use In = *All forms* 

1. Create a new company.

1. Login as company admin on the frontend.

1. Go to the Company Users sections.

 <span class="wysiwyg-underline">Expected results</span> :

The Company User form loads normally, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The Company User form does not load and returns a 500 error.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.