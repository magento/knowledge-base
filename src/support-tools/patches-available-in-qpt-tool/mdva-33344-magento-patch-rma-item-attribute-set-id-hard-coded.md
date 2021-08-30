---
title: 'MDVA-33344 Magento patch: "rma-item" attribute set ID hard-coded'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.2,API,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,rma_item,support tools
---

The MDVA-33344 Magento patch fixes the issue where the hard coded "rma\_item" entity default attribute set ID is used instead of the value from the database. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue was fixed/is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.0-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The `/rest/default/V1/returnsAttributeMetadata` WebAPI endpoint returns empty result, if the "rma\_item" entity default attribute set ID is different from the default installation ID.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

Make an API call to `/rest/default/V1/returnsAttributeMetadata` .

 <span class="wysiwyg-underline">Expected result:</span> 

Data is returned.

 <span class="wysiwyg-underline">Actual result:</span> Empty result is returned.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
