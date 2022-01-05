---
title: "MDVA-38827: Customers receive order shipment error via email"
labels: QPT patches,Quality Patches Tool,QPT,QPT 1.1.0,Magento Commerce 2.4.4,Adobe Commerce 2.4.4,error message,on-premises,cloud infrastructure,order shipment,error,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-38827 patch fixes the issue where customers receive an order shipment email containing the following error message: *We're sorry, an error has occurred while generating this content*. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.0 is installed. The patch ID is MDVA-38827. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.2-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.3-p1 – 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When the Notify Customers by Email option for shipment is selected, customers receive an email containing the following error message: *We're sorry, an error has occurred while generating this content*.

<ins>Steps to reproduce</ins>:

1. Go to **Marketing** > **Communications** > **Email Templates** and select **Add New Template**.
   * Select **Magento Sales** > **New Shipment**.
   * Click on **Load Template**.
   * Add a template name (e.g., Core Shipping Template) and click **Save**.
1. Go to **Store** > Settings > **Configuration** > **Sales** > **Sales Email**:
   * Enable **Shipment Comments**.
   * Select **Core Shipping Template** (refer to the "Add a template name" part of Step 1) under Shipment Comment Email Template and Shipment Comment Email Template for Guest.
1. Place an order. Go to the Admin panel > **Sales** > **Order**, click **View**, and then ship the order.
1. The order state will change from Pending to Processing.
1. Click **Shipments** on the left sidebar menu and then click **View** to see the order.
1. Add a comment in **Comment Text** below **Shipment History** and check the checkbox **Notify Customer by Email**.
1. Click **Submit Comment**.

<ins>Expected results</ins>:

Sales email with shipment comments is generated.

<ins>Actual results</ins>:

The following error message is received in the email: *We're sorry, an error has occurred while generating this content.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
