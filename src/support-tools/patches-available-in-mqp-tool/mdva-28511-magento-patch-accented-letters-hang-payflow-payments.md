---
title: "MDVA-28511 Magento patch: accented letters hang Payflow payments"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.14,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PayFlow Pro,accented letters,customer name,payment
---

The MDVA-28511 Magento patch solves the issue when payments through **Payflow Pro** don't complete for customer names with accented letters.

This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue was fixed in Magento version 2.3.6.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.5 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisite</span> :

Enable **Payflow Pro** credit card payment method.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Add a product to the cart and continue to the checkout page.
1. Set a customer name with accented letters. (Example: **Ãtienne Ãillin** )
1. Continue to the payment steps.
1. Select **Payflow Pro** as **Credit Card** and fill in the credit card details.
1. Click the **Place Order** button.

 <span class="wysiwyg-underline">Expected results</span> :

The order completes without any issue, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The order does not complete and logs will show a similar error as this example:

```php
[2020-06-12 07:50:23] report.CRITICAL: String to be escaped was not valid UTF-8 or could not be converted: �?tienne �?illini [] []
```

 
## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.