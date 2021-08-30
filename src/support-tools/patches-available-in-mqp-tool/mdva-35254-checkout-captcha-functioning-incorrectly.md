---
title: "MDVA-35254: Checkout CAPTCHA functioning incorrectly"
labels: 2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,3rd-party payment,CAPTCHA,QPT 1.0.19,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,checkout,unsuccessful payment attempts
---

The MDVA-35254 Magento patch fixes the issue with CAPTCHA fields not displaying after unsuccessful number of attempts in Checkout for 3rd-party payment.

This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35254. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :Configure CAPTCHA:

1. Install and configure 3rd-party payment provider (Example: Braintree).
1. Go to **Store > Configuration > Customer > Customer Configuration > CAPTCHA > Forms** .
1. Select **Checkout/Placing Order** .
1. Keep the **Number of Unsuccessful Attempts to Login** as default (default = *3* ).
1. Login as a customer.
1. Add any product to shopping cart.
1. Go to the payment section in checkout.
1. Select **Credit Card** payment method (Example: Braintree).
1. Make 3 unsuccessful payment attempts.

 <span class="wysiwyg-underline">Expected results</span> :

The CAPTCHA field is displayed when the number of failed attempts is reached, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The CAPTCHA field never displays, only the error message: *Please provide CAPTCHA code and try again.* 

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.