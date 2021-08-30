---
title: "MDVA-35984: Wrong product Qty in concurrent shipments for same product"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,QPT 1.0.21,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,identical product,multiple concurrent shipments,product Qty,product quantity,same product
---

The MDVA-35984 Magento patch fixes the issue when creating multiple concurrent shipments for the same product gives an incorrect product quantity (Qty).

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-35984. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.0-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Create a simple product with **Qty** = *100* .
1. Create 2 orders with this product.
1. Make concurrent API calls to create shipments for both orders, like this Example:    ```php    POST <host>/rest/<store_code>/V1/order/3/ship    ```    where **order id** = *3* , with a payload like:    ```php    {        "items": [            {                "order_item_id": <order_item_id>,                "qty": 1            }        ],        "tracks": [            {                "track_number": "1Y-9876543210",                "title": "United Parcel Service",                "carrier_code": "ups"            }        ]    }    ```    
1. Check the product Qty in the Admin grid.

 <span class="wysiwyg-underline">Expected results</span> :

The result is product **Qty** = *98* after both shipments, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The result is product **Qty** = *99* after both shipments.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.