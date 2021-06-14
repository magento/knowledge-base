---
title: "MDVA-30845 Magento patch: checkout breaks connection to shipping provider fails"
labels: "2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,MQP 1.0.12,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,checkout,shipping,support tools"
---

The MDVA-30845 Magento patch fixes the issue where the *Sorry, no quotes are available for this order at this time* error is displayed when failing to connect to UPS XML/USPS/DHL during checkout, and no other shipping method is available. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.5-2.3.6.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

During checkout, the *Sorry, no quotes are available for this order at this time* error is displayed when failing to connect to UPS XML/USPS/DHL, and no other shipping method is not available.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a product.
1. Enable and configure UPS XML shipping method.
1. Add the product to cart on store front.
1. Make sure that UPS shipping methods and flat rate shipping are available.
1. Edit your hosts file in order to prevent USP connecting to its gateway.
1. On the store front, try to get rates and proceed to checkout again.

 <span class="wysiwyg-underline">Actual result:</span>  *Sorry, no quotes are available for this order at this time* error is displayed, and flat rate shipping is not available.

 <span class="wysiwyg-underline">Expected result:</span> No error message displayed and flat rate shipping is available.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.