---
title: "MDVA-30972 Magento Patch: order status incorrect shipment created via REST API"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,order,security,shipping,support tools
---

The MDVA-30972 patch solves the issue where the order status is changed incorrectly during shipment creation via REST API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.7 is installed.

## Affected products and versions

* This patch was designed for Magento Commerce Cloud 2.3.5-p2.
* The patch is also compatible with the following Magento versions and editions: Magento Commerce / Magento Commerce Cloud >= 2.3.0 < 2.4.2.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a partial shipment is created from Admin via REST API for an order with *Suspected Fraud* order status, the order status is changed to *Processing.* It should stay at *Suspected Fraud* .

 <span class="wysiwyg-underline">Prerequisites</span> 

* PayPal EC or another online payment method is set up.
* Integration for REST API is set up.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Create order with two or more items.
1. Log in to **Admin** > **Sales** > **Orders** . Open the order you just created.
1. On the order details page, scroll down to **Order Total** . Click on the **Status** drop down and select *Suspected Fraud.* Then *c* lick the **Submit Comment** button.
1. Check that the order has *Suspected Fraud* status now.
1. Create a shipment for one item from the order using REST API:

    * Method = `Post` 
    * Header = `"{host}/rest/V1/orders/ {order_id}/ship"` 
    * Body =    ```clike    {      "items": [        {          "extension_attributes": {},          "order_item_id": {order_item_id},          "qty": 1        }      ]    }    ```    
1. Open the order in Admin again and check its status.

 <span class="wysiwyg-underline">Actual Results</span> 

Order Status = *Processing.* 

 <span class="wysiwyg-underline">Expected Results</span> 

* Order Status = *Suspected Fraud.* 
* Order status is not changed if the same shipment is created from Admin.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.