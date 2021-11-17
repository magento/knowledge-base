---
title: "MDVA-28511: accented letters hang Payflow payments"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.14,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PayFlow Pro,accented letters,customer name,payment,on-premises,cloud infrastructure
---

The MDVA-28511 patch solves the issue when payments through **Payflow Pro** don't complete for customer names with accented letters.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue was fixed in Adobe Commerce version 2.3.6.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.5-p1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.5 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Prerequisite</span>:

Enable **Payflow Pro** credit card payment method.

 <span class="wysiwyg-underline">Steps to reproduce</span>:

1. Add a product to the cart and continue to the checkout page.
1. Set a customer name with accented letters. (Example: **Ãtienne Ãillin**)
1. Continue to the payment steps.
1. Select **Payflow Pro** as **Credit Card** and fill in the credit card details.
1. Click the **Place Order** button.

 <span class="wysiwyg-underline">Expected results</span>:

The order completes without any issue, as expected.

 <span class="wysiwyg-underline">Actual results</span>:

The order does not complete and logs will show a similar error as this example:

```php
[2020-06-12 07:50:23] report.CRITICAL: String to be escaped was not valid UTF-8 or could not be converted: �?tienne �?illini [] []
```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
