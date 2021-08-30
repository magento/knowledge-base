---
title: "MDVA-33559 Magento patch: PayflowPro payment declined error"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PayPal PayflowPro,ampersand sign,equal sign,error,payment declined
---

The MDVA-33559 Magento patch solves the issue where PayPal PayflowPro payments are declined.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The issue concerns the ampersand sign (&) and equal sign (=) special characters being used in names.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Add a simple product to the cart.
1. Go to checkout.
1. Set shipping address.( Example shipping address: **First Name** = ** *John's* **  **Last Name** = ** *Apples & Oranges, Inc* **  **Street Address** = *1234 E Nameless St*  **Country** = *US*  **State/Province** = *Anystate*  **City** = *Anytown*  **Zip** = *12345*  **Phone** = *1234567890* )
1. Set payment to **PayPal PayflowPro** and attempt to complete checkout.

 <span class="wysiwyg-underline">Expected results</span> :

The transaction results in a successful payment or a correct error message, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The transaction is declined, and the customer receives an email saying, "Transaction has been Declined."

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.