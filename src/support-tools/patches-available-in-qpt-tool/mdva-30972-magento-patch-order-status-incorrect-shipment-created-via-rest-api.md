---
title: "MDVA-30972: order status incorrect shipment created via REST API"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,order,security,shipping,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30972 patch solves the issue where the order status is changed incorrectly during shipment creation via REST API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 to 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a partial shipment is created from Admin via REST API for an order with *Suspected Fraud* order status, the order status is changed to *Processing*. It should stay at *Suspected Fraud*.

<ins>Prerequisites</ins>:

* PayPal EC or another online payment method is set up.
* Integration for REST API is set up.

<ins>Steps to reproduce</ins>:

1. Create an order with two or more items.
1. Log in to **Admin** > **Sales** > **Orders**. Open the order you just created.
1. On the order details page, scroll down to **Order Total**. Click on the **Status** drop-down and select *Suspected Fraud*. Then click the **Submit Comment** button.
1. Check that the order has *Suspected Fraud* status now.
1. Create a shipment for one item from the order using REST API:

    * Method = `Post`
    * Header = `"{host}/rest/V1/orders/ {order_id}/ship"`
    * Body =    
    ```clike   
     {      "items": [        {          "extension_attributes": {},          "order_item_id": {order_item_id},          "qty": 1        }      ]    }   
     ```    

1. Open the order in Admin again and check its status.

<ins>Expected results</ins>:

* Order Status = *Suspected Fraud*.
* Order status is not changed if the same shipment is created from Admin.

<ins>Actual results</ins>:

Order Status = *Processing*.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
