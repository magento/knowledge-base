---
title: "MDVA-26639: no order items in new order confirmation email template"
labels: 2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.20,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,confirmation email template,new order,order items missing,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-26639 patch fixes the issue when a new order is created, the order items are missing in a confirmation email template.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-26639. Please note that the issue was fixed in Adobe Commerce 2.3.6.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.3-p1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.3-p1-2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span>:

1. Go to **Stores** > **Configuration** > **Sales** > **Sales Emails** > **New Order Confirmation** and select **Template: New Pickup Order**.
1. Go to **Sales** > **Order: Select a order**, then go to **Information**, and select **Send Mail**.

 <span class="wysiwyg-underline">Expected results</span>:

The order items show in the customer order email, as expected.

 <span class="wysiwyg-underline">Actual results</span>:

The order items are missing in the customer order email. The same applies if you create a new template and select a template New Order or New Order (Luma).

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
