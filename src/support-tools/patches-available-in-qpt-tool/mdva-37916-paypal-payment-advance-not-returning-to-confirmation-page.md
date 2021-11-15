---
title: "MDVA-37916: PayPal Payments Advanced not returning to confirmation page"
labels: QPT patches,Quality Patches Tool,Support Tools,MDVA-37916,QPT fixes,Magento Commerce,Magento Commerce Cloud,QPT 1.0.25,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce
---

The MDVA-37916 quality patch for Adobe Commerce fixes the issue of PayPal Payments Advanced not returning to the confirmation page after payment. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-37916. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.3.6-p1

**Compatible with Adobe Commerce versions:**
Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.6-2.4.2-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The customer is not taken to the Payment Confirmation page after payment when using the PayPal Payments Advanced method.

<ins>Steps to reproduce</ins>: [Screencast](https://assets.adobe.com/public/025d479b-5796-4772-6f3d-adc86306a799)

1. Add product to cart and navigate to the payment step of the checkout page.
1. Select **Credit Card (Payflow Advanced)** payment option.
1. Click **Continue** to bring up the iframe with the payment form.
1. Fill the payment form with sandbox credit card details.
    * Card number: 4444 3333 2222 1111 or 4111 1111 1111 1111
    * Expiration date: 12/23
    * CSC: 123
1. Click **Pay Now**.

<ins>Expected results</ins>:  

After the payment is processed and the payment is successful, you are redirected to the Order Confirmation page.

<ins>Actual results</ins>:

* You are NOT redirected to the Order Confirmation page.
* But the order has been created in Adobe Commerce.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html)
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html)

## Related reading

To learn more about Quality Patches Tool in our support knowledge base, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492)
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252)

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section in our support knowledge base.
