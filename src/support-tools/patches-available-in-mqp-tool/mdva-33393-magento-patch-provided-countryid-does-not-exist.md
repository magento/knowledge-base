---
title: "MDVA-33393 Magento patch: provided countryId does not exist"
labels: 2.3.0,2.4.1,2.4.1-p1,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,address,data,error,exception log,id,log,support tools,validation
---

The MDVA-33393 Magento patch solves the issue where the error message: *Provided countryId does not exist.* displays in the exception log.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The user sees the error message: *Provided countryId does not exist* in the exception log. The error can be thrown under different circumstances (including when a user is selecting a shipping method). This happens when there are many countries missing postal code validation. This means the zip-code validation configuration file is incomplete.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.