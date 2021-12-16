---
title: 'MDVA-35910: form validation broken when "Login as Customer" disabled'
labels: 2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,Login as Customer extension,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,disabled,form validation,javascript error,js error,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-35910 patch solves the issue where the create customer account form validation is broken when the **Login as Customer** extension is disabled. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35910. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.1-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Navigate to **Stores > Configuration > Customers**. Disable **Login as Customer** in the Admin.
1. Under **Login as Customer**, set **Enable Extension** = *No*.
1. Save the Config, and flush the cache.
1. Navigate back to the storefront, and click **Register** (Create a customer account).
1. Fill out the account form, and confirm if the validation under **Confirm Email** is working or not.

<ins>Expected results</ins>:

The customer account creation process completes with no errors.

<ins>Actual results</ins>:

The customer account creation process does not complete, and javascript console errors show instead.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
