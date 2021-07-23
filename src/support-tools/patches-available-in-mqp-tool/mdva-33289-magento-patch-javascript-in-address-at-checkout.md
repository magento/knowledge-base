---
title: "MDVA-33289 Magento patch: Javascript in address at checkout"
labels: 2.3.6,2.3.6-p1,2.4.0-p1,2.4.1,2.4.2,Google Tag Manager,MQP 1.0.19,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,address,checkout,error,javascript,support tools
---

The MDVA-33289 Magento patch fixes the problem where Javascript shows in address at payment. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-33289. Please note that the issue was scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Commerce Cloud 2.4.0 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

When checking out with Google Tag Manager (GTM) enabled, Javascript shows in the address field.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Enable GTM. See [Google Tag Manager](https://docs.magento.com/user-guide/marketing/google-tag-manager.html) in Magento Developer Documentation for details.
1. In the storefront, add some products to the cart.
1. Check out.

 <span class="wysiwyg-underline">Actual result:</span>

The address section updates but includes a lot of Javascript code text.

 <span class="wysiwyg-underline">Expected result:</span>

Address is shown.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
