---
title: MDVA-32545 Magento patch: order invoices don't send automatically
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,MQP 1.0.13,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,order invoices,sale transaction type,send automatically
---

The MDVA-32545 Magento patch fixes the issue where Invoice emails don't automatically send to the customer for orders placed from the Admin. This affects any payment method with the **Sale** transaction type, like **Braintree** or **PayPal Payflow Pro** .

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.13 is installed. Please note that the issue was fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Enable any payment method with the **Sale** transaction type. (For example: **Braintree** or **PayPal Payflow Pro** .)
1. Create a simple product.
1. Create a customer account in the frontend.
1. Place an order from the Admin.

 <span class="wysiwyg-underline">Expected results:</span> 

The invoice email is sent to the customer automatically, as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The invoice email is not sent to the customer automatically.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.