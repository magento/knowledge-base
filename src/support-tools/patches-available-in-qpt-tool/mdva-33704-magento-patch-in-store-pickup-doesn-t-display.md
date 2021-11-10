---
title: "MDVA-33704 Magento patch: In-store pickup doesn't display"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,checkout,in-store pickup,shipping method
---

The MDVA-33704 Magento patch solves the issue where products with in-store pickup option will not display as a shipping method.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-33704. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0-p1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.0-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Prerequisite</span> : **Pick in Store** enabled

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Add a product to the cart.
1. Go to Checkout.
1. Add shipping information, and choose any shipping method other than in-store pickup.
1. Select **Proceed to payment** , but then do not proceed to the payment page.
1. Instead go back to the **Contact & Shipping** section.
1. Select **Pickup** .
1. Select **Store** and **Click to Payment** .
1. Note that your shipping address is automatically entered as a billing address.
1. Refresh the webpage.

 <span class="wysiwyg-underline">Expected results</span> :

The in-store pickup option will display as a shipping method, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The in-store pickup option will not display as a shipping method.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.