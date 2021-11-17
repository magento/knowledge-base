---
title: "MDVA-27664 patch: date of birth account error"
labels: 2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,date of birth,validation error,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-27664 patch solves the issue where a customer account's date of birth could be greater than today.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue was fixed in Adobe Commerce version 2.3.6.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.4-p2

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.4 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span>:

1. Log in to the Admin.
1. Set **Locale** = *en\_GB* (UK) for a user.
1. Edit a customer.
1. Select a date of birth after the 12th of a month this year.

 <span class="wysiwyg-underline">Expected results</span>:

The date of birth is valid, so the customer information can be saved, as expected.

 <span class="wysiwyg-underline">Actual results</span>:

The customer information cannot be saved because a validation error occurs:

```php
The Date of Birth should not be greater than today.
```

where instead of the DD/MM/YYYY date format, the date is treated as the MM/DD/YYYY date format.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
