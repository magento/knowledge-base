---
title: "MDVA-32632: Orders in payment system but not in Magento"
labels: "1.0.12,2.3.0,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,MQP 1.0.12,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,orders,payments,support tools"
---

The MDVA-32632 solves the issue where orders are in a payment system but not in Magento. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that the issue was fixed in Magento 2.3.5.

## Affected products and versions

* **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2-p2.
* **The patch is also compatible with Magento version:** Magento Commerce and Magento Commerce Cloud 2.3.2 - 2.3.4-p2.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Payment is processed in a payment system, but the order is not created in Magento. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Place order using an online payment method. 2. Check the order in Magento Admin.

 <span class="wysiwyg-underline">Actual result:</span> The orders was processed successfully by the payment system but not in Magento.

 <span class="wysiwyg-underline">Expected result:</span> Completed orders now appear in the payment system and Magento.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.