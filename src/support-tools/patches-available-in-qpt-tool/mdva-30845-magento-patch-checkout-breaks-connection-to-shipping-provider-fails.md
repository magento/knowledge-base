---
title: "MDVA-30845: checkout breaks connection to shipping provider fails"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,QPT 1.0.12,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,checkout,shipping,support tools,cloud infrastructure,on-premises
---

The MDVA-30845 patch fixes the issue where the *Sorry, no quotes are available for this order at this time* error is displayed when failing to connect to UPS XML/USPS/DHL during checkout, and no other shipping method is available. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.2.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.5-p2.

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.5-2.3.6.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

During checkout, the *Sorry, no quotes are available for this order at this time* error is displayed when failing to connect to UPS XML/USPS/DHL, and no other shipping method is not available.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create a product.
1. Enable and configure UPS XML shipping method.
1. Add the product to cart on store front.
1. Make sure that UPS shipping methods and flat rate shipping are available.
1. Edit your hosts file in order to prevent USP connecting to its gateway.
1. On the store front, try to get rates and proceed to checkout again.

<span class="wysiwyg-underline">Actual result:</span>

*Sorry, no quotes are available for this order at this time* error is displayed, and flat rate shipping is not available.

<span class="wysiwyg-underline">Expected result:</span>

No error message displayed and flat rate shipping is available.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.


## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
