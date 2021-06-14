---
title: "MDVA-23426 Magento patch: emails sent as attachments from Outlook"
labels: "2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,MQP 1.0.13,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,Outlook,attachements,email,order email,orders,shipping,support tools"
---

The MDVA-23426 Magento patch fixes the issue where emails are sent as attachments by Magento from MS Outlook. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed. Please note that the issue was fixed in Magento 2.3.5.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.3 - 2.3.4-p2.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Emails are received with a blank body, and the content is included as an attachment.

 <span class="wysiwyg-underline">Prerequisites:</span> Outlook/Exchange is being used as the client/server combination.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 1. Submit an order, the order notification or shipment notification is sent.2. The email is received.

 <span class="wysiwyg-underline">Actual result:</span> The email shows with a blank body, and the content included as an ATT\*-labeled attachment to the email. <span class="wysiwyg-underline">Expected result:</span> 

The email is received with no attachment and the body of the email contains the content.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.