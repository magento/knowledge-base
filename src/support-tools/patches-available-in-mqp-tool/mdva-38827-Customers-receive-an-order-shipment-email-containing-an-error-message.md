---
title: "MDVA-38827: Order shipment email error"
labels: MQP patches,Magento Quality Patches,MQP,MQP 1.1.0,Magento Commerce 2.4.4,Adobe Commerce 2.4.4,error message,on-premise,cloud infrastructure,order shipment
---

The MDVA-38827 Adobe Commerce patch fixes the issue where customers receive an order shipment email containing an error message. This patch is available when the [quality patches for Adobe Commerce (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.0 is installed. The patch ID is MDVA-38827. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on our cloud infrastructure 2.4.2-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premise and Adobe Commerce on our cloud infrastructure 2.3.3-p1 – 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Adobe Commerce version, run `./vendor/bin/magento-patches status`.

## Issue

An error message is received when the “Notify Customers by Email” option for shipment is selected.

<ins>Steps to reproduce</ins>:

1. Go to **Marketing** > **Communications** > **Email Templates** and select **Add New Template**.
   * Select **Magento Sales** > **New Shipment**.
   * Click on **Load Template**.
   * Add a template name (e.g., Core Shipping Template) and click **Save**.
1. Go to **Store** > Settings > **Configuration** > **Sales** > **Sales Email**:
   * Enable **Shipment Comments**.
   * Select **Core Shipping Template** (refer to the "Add a template name" part of Step 1) under Shipment Comment Email Template and Shipment Comment Email Template for Guest.
1. Place an order. Go to the Admin panel **Sales** > **Order**, click **View**, and then ship the order.
1. The order state will change from Pending to Processing.
1. Click **Shipments** on the left sidebar menu and then click **View** to see the order.
1. Add a comment in **Comment Text** below **Shipment History** and check the checkbox **Notify Customer by Email**.
1. Click **Submit Comment**.

<ins>Expected results</ins>:

Sales email with shipment comments will be generated.

<ins>Actual results</ins>:

The following error message is received in the email: *"We're sorry, an error has occurred while generating this content."*

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:

* Adobe Commerce or Magento Open Source on-premise: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Cloud for Adobe Commerce: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about quality patches for Adobe Commerce, refer to:

* [Quality patches for Adobe Commerce released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using quality patches for Adobe Commerce](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
