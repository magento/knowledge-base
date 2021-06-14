---
title: "MDVA-27664 Magento patch: date of birth account error"
labels: "2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,date of birth,validation error"
---

The MDVA-27664 Magento patch solves the issue where a customer account's date of birth could be greater than today.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue was fixed in Magento version 2.3.6.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.4 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Login to Admin.
1. Set **Locale** = *en\_GB* (UK) for a user.
1. Edit a customer.
1. Select a date of birth after the 12th of a month this year.

 <span class="wysiwyg-underline">Expected results</span> :

The date of birth is valid, so the customer information can be saved, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The customer information cannot be saved because a validation error occurs:

```php
The Date of Birth should not be greater than today.
```

where instead of the DD/MM/YYYY date format, the date is treated as the MM/DD/YYYY date format.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.