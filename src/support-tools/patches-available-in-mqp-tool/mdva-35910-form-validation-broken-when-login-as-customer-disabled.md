---
title: "MDVA-35910: form validation broken when \"Login as Customer\" disabled"
labels: 2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,Login as Customer extension,MQP 1.0.19,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,disabled,form validation,javascript error,js error
---

The MDVA-35910 Magento patch solves the issue where the create customer account form validation is broken when the **Login as Customer** extension is disabled.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35910. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Navigate to **Stores > Configuration > Customers** . Disable **Login as Customer** in the Admin.
1. Under **Login as Customer** , set **Enable Extension** = *No* .
1. Save the Config, and flush the cache.
1. Navigate back to the storefront, and click **Register** (Create a customer account).
1. Fill out the account form, and confirm if the validation under **Confirm Email** is working or not.

 <span class="wysiwyg-underline">Expected results</span> :

The customer account creation process completes with no errors, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The customer account creation process does not complete, and javascript console errors show instead.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
