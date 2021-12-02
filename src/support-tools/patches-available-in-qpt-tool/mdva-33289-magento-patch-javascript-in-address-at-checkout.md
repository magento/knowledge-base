---
title: "MDVA-33289 patch: Javascript in address at checkout"
labels: 2.3.6,2.3.6-p1,2.4.0-p1,2.4.1,2.4.2,Google Tag Manager,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,address,checkout,error,javascript,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33289 patch fixes the problem where Javascript shows in address at payment. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-33289. Please note that the issue was scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.4.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When checking out with Google Tag Manager (GTM) enabled, Javascript shows in the address field.

<ins>Steps to reproduce</ins>:

1. Enable GTM. See [Google Tag Manager](https://docs.magento.com/user-guide/marketing/google-tag-manager.html) in our user guide, for details.
1. In the storefront, add some products to the cart.
1. Check out.

<ins>Actual result</ins>:

The address section updates, but includes a lot of Javascript code text.

<ins>Expected result</ins>:

Address is shown.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
