---
title: "MDVA-36572: New inventory reservation created after updating credit memo"
labels: QPT Patches,Quality Patches Tool,QPT,Support Tools,QPT 1.0.25,Magento Commerce Cloud,Magento Commerce,Adobe Commerce,on-premises,cloud infrastructure,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---
The MDVA-36572 patch fixes the issue where a new inventory reservation is created after updating the credit memo. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-36572. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**
Adobe Commerce (all deployment types) 2.3.5-2.4.2-p1
>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue
Credit Memo reservation update observer is triggered every time the credit memo is updated. As per agreement with PO changed the logic of reservation update to only be triggered upon the credit memo created. The possibility of the credit memo edits over API will be reviewed by PO as well in the scope of separate tickets.

<ins>Steps to reproduce</ins>:

1. Create customer account.
1. Create simple product.
1. Create new order, invoice and credit memo for the order.
1. Create new Integration.
1. Check inventory_reservation table:
    ```SQL
       select * from inventory_reservation;
       +----------------+----------+----------+----------+-------------------------------------------------------------------------------------------------------------+
       | reservation_id | stock_id | sku      | quantity | metadata                                                                                                    |
       +----------------+----------+----------+----------+-------------------------------------------------------------------------------------------------------------+
       |              1 |        1 | simple_1 |  -1.0000 | {"event_type":"order_placed","object_type":"order","object_id":"","object_increment_id":"000000001"}        |
       |              2 |        1 | simple_1 |   1.0000 | {"event_type":"creditmemo_created","object_type":"order","object_id":"1","object_increment_id":"000000001"} |
       +----------------+----------+----------+----------+-------------------------------------------------------------------------------------------------------------+
       2 rows in set (0.00 sec)
    ```
1. Send GET request to: `../rest/default/V1/creditmemo/3`
1. Copy response (example):
   ```JSON
       {
       "adjustment": 0,
       "adjustment_negative": 0,
       "adjustment_positive": 0,
       "base_adjustment": 0,
       "base_adjustment_negative": 0,
       "base_adjustment_positive": 0,
       "base_currency_code": "USD",
       "base_discount_amount": 0,
       "base_grand_total": 105,
       "base_discount_tax_compensation_amount": 0,
       "base_shipping_amount": 5,
       "base_shipping_incl_tax": 5,
       "base_shipping_tax_amount": 0,
       "base_subtotal": 100,
       "base_subtotal_incl_tax": 100,
       "base_tax_amount": 0,
       "base_to_global_rate": 1,
       "base_to_order_rate": 1,
       "billing_address_id": 2,
       "created_at": "2021-04-05 23:43:45",
       "discount_amount": 0,
       "entity_id": 1,
       "global_currency_code": "USD",
       "grand_total": 105,
       "discount_tax_compensation_amount": 0,
       "increment_id": "000000001",
       "order_currency_code": "USD",
       "order_id": 1,
       "shipping_address_id": 1,
       "shipping_amount": 5,
       "shipping_incl_tax": 5,
       "shipping_tax_amount": 0,
       "state": 2,
       "store_currency_code": "USD",
       "store_id": 1,
       "store_to_base_rate": 0,
       "store_to_order_rate": 0,
       "subtotal": 100,
       "subtotal_incl_tax": 100,
       "tax_amount": 0,
       "updated_at": "2021-04-05 23:43:45",
       "items": [
        {
            "base_cost": null,
            "base_discount_tax_compensation_amount": 0,
            "base_price": 100,
            "base_price_incl_tax": 100,
            "base_row_total": 100,
            "base_row_total_incl_tax": 100,
            "base_tax_amount": 0,
            "base_weee_tax_row_disposition": 0,
            "entity_id": 1,
            "discount_tax_compensation_amount": 0,
            "name": "simple_1",
            "order_item_id": 1,
            "parent_id": 1,
            "price": 100,
            "price_incl_tax": 100,
            "product_id": 1,
            "qty": 1,
            "row_total": 100,
            "row_total_incl_tax": 100,
            "sku": "simple_1",
            "tax_amount": 0,
            "weee_tax_applied": "[]",
            "weee_tax_applied_row_amount": 0,
            "weee_tax_row_disposition": 0
        }
       ],
       "comments": []
      }
    ```
1. Send POST request to: `../rest/default/V1/creditmemo`
   ```JSON
       {
       "entity":
        --paste full response from previous step here--
       }
   ```
      >![info]
      >
    >Note:
such payload used only for simplifying reproducing - customer get the same issue after updating their custom attribute

1. Check inventory_reservation table:

<ins>Actual results</ins>:
```sql

select * from inventory_reservation;
+----------------+----------+----------+----------+-------------------------------------------------------------------------------------------------------------+
| reservation_id | stock_id | sku      | quantity | metadata                                                                                                    |
+----------------+----------+----------+----------+-------------------------------------------------------------------------------------------------------------+
|              1 |        1 | simple_1 |  -1.0000 | {"event_type":"order_placed","object_type":"order","object_id":"","object_increment_id":"000000001"}        |
|              2 |        1 | simple_1 |   1.0000 | {"event_type":"creditmemo_created","object_type":"order","object_id":"1","object_increment_id":"000000001"} |
|              3 |        1 | simple_1 |   1.0000 | {"event_type":"creditmemo_created","object_type":"order","object_id":"1","object_increment_id":"000000001"} |
+----------------+----------+----------+----------+-------------------------------------------------------------------------------------------------------------+
3 rows in set (0.00 sec)
```

<ins>Expected results</ins>:

No second reservation for the same credit memo is created.

## Apply the patch

To apply individual patches use the following links depending on your deployment type:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
