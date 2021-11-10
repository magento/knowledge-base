---
title: "MDVA-32632: Orders in payment system but not in Magento"
labels: 1.0.12,2.3.0,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,QPT 1.0.12,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,orders,payments,support tools
---

The MDVA-32632 solves the issue where orders are in a payment system but not in Magento. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that the issue was fixed in Magento 2.3.5.

## Affected products and versions

* **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2-p2.
* **The patch is also compatible with Magento version:** Magento Commerce and Magento Commerce Cloud 2.3.2 - 2.3.4-p2.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Payment is processed in a payment system, but the order is not created in Magento. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Place order using an online payment method. 2. Check the order in Magento Admin.

 <span class="wysiwyg-underline">Actual result:</span> The orders was processed successfully by the payment system but not in Magento.

 <span class="wysiwyg-underline">Expected result:</span> Completed orders now appear in the payment system and Magento.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.