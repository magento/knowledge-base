---
title: "MDVA-35254: Checkout CAPTCHA functioning incorrectly"
labels: 2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,3rd-party payment,CAPTCHA,QPT 1.0.19,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,checkout,unsuccessful payment attempts,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-35254 patch fixes the issue with CAPTCHA fields not displaying after an unsuccessful number of attempts in checkout for third-party payment. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35254. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

Configure CAPTCHA:

1. Install and configure third-party payment provider (Example: Braintree).
1. Go to **Store > Configuration > Customer > Customer Configuration > CAPTCHA > Forms**.
1. Select **Checkout/Placing Order**.
1. Keep the **Number of Unsuccessful Attempts to Log in** as default (default = *3*).
1. Log in as a customer.
1. Add any product to the shopping cart.
1. Go to the payment section in checkout.
1. Select **Credit Card** payment method (Example: Braintree).
1. Make three unsuccessful payment attempts.

<ins>Expected results</ins>:

The CAPTCHA field is displayed when the number of failed attempts is reached.

<ins>Actual results</ins>:

The CAPTCHA field never displays, only the error message: *Please provide CAPTCHA code and try again.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
