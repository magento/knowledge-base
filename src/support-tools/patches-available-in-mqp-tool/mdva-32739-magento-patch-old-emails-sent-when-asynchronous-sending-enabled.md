---
title: "MDVA-32739 Magento patch: old emails sent when asynchronous sending enabled"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.12,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools
---

The MDVA-32739 Magento patch fixes the issue where enabling [asynchronous email notifications](https://devdocs.magento.com/guides/v2.4/performance-best-practices/configuration.html#asynchronous-email-notifications) sends out old sales emails. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 1. Disable asynchronous email sending.2. Create an order and make sure sending of the email is failing.3. Enable asynchronous sending.

 <span class="wysiwyg-underline">Actual result:</span> The old email will be sent out via the cronjob.

 <span class="wysiwyg-underline">Expected result:</span> Emails are sent out only for those orders, shipments, invoices and credit memos, which were created after the last asynchronous sending update.

## Fix

With the fix included in the patch, Magento will select orders that are created after the asynchronous sending method has been last ran and will send the email for such orders.By default, it will select with an offset of -1 day. You can change this value (to -2 days for example) by modifying `di.xml` .

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.