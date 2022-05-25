---
title: "MDVA-43102: Salable quantity not updated correctly"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.14,refund,REST API,order,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.4
---

The MDVA-43102 patch fixes the issue where the salable quantity is not updated correctly when a refund is done via REST API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.14 is installed. The patch ID is MDVA-43102. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.1 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Salable quantity is not updated correctly when a refund is done using REST API.

<ins>Steps to reproduce</ins>:

1. Add an item to the cart.
1. Check the Stock Qty and Salable Qty.
1. Create an order.
1. Create an invoice if needed.
1. Submit a REST request to refund the invoice using the following payload:

    * offline method/order/<order_id>/refund
    * online method/invoice/<invoice_id>/refund

    ```rest
    {
      "items": [
      {
        "order_item_id": <order_item_id>,
        "qty": 1
      }
      ],
      "notify": true,
      "arguments": {
        "shipping_amount": 5,
        "extension_attributes": {
          "return_to_stock_items": [
          <order_item_id>
          ]
        }
      }
    }

1. Do not ship the items.
1. Compare the Stock Qty and the Salable Qty from before. They should both be updated by the same amount.

<ins>Expected results</ins>:

Salable quantity is updated correctly when a refund is issued before shipping the order, and the product is returned to the stock.

<ins>Actual results</ins>:

Salable quantity is not updated when a refund is issued before shipping the order, and the product is returned to the stock.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
