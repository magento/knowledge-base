---
title: MDVA-26639: no order items in new order confirmation email template
labels: 2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,MQP 1.0.20,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,confirmation email template,new order,order items missing
---

The MDVA-26639 Magento patch fixes the issue when a new order is created, the order items are missing in a confirmation email template.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-26639. Please note that the issue was fixed in Magento version 2.3.6.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3-p1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.3-p1-2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Go to **Stores > Configuration > Sales > Sales Emails > New Order Confirmation** and select **Template: New Pickup Order** .
1. Go to **Sales > Order: Select a order** , then go to **Information** , and select **Send Mail** .

 <span class="wysiwyg-underline">Expected results</span> :

The order items show in the customer order email, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The order items are missing in the customer order email. The same applies if you create a new template and select a template New Order or New Order (Magento Luma).

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.