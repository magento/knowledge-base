---
title: "MDVA-35984: Wrong product Qty in concurrent shipments for same product"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,QPT 1.0.21,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,identical product,multiple concurrent shipments,product Qty,product quantity,same product,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-35984 patch fixes the issue when creating multiple concurrent shipments for the same product gives an incorrect product quantity (Qty). This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-35984. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.0-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Create a simple product with **Qty** = *100*.
1. Create two orders with this product.
1. Make concurrent API calls to create shipments for both orders, like this Example:    

    ```php    
    POST <host>/rest/<store_code>/V1/order/3/ship    ```    where **order id** = *3* , with a payload like:    ```php    {        "items": [            {                "order_item_id": <order_item_id>,                "qty": 1            }        ],        "tracks": [            {                "track_number": "1Y-9876543210",                "title": "United Parcel Service",                "carrier_code": "ups"            }        ]    }    
    ```    

1. Check the product Qty in the Admin grid.

<ins>Expected results</ins>:

The result is product **Qty** = *98* after both shipments.

<ins>Actual results</ins>:

The result is product **Qty** = *99* after both shipments.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
