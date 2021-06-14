---
title: "MDVA-33976 Magento patch: bundle Out Of Stock after option removed"
labels: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools"
---

The MDVA-33976 Magento patch fixes the issue where a bundle product is shown as Out Of Stock after one of its options has been removed in Admin. This patch is available when the [Magento Quality Patch (MQP) tool 1.0.15](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.3.6-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 1. Open a bundle product in Magento Admin.2. Remove one of the bundle product options.3. Save changes.4. Open product on the storefront.

 <span class="wysiwyg-underline">Expected result:</span> 

The bundle product stock status is updated according to the child product stock status.

 <span class="wysiwyg-underline">Actual result:</span> 

The bundle product is displayed as Out Of Stock, no matter what is the status of the child product.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.