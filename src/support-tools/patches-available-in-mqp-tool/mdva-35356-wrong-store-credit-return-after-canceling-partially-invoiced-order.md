---
title: MDVA-35356: Wrong store credit return after canceling partially invoiced order
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,MQP 1.0.19,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches
---

The MDVA-35356 Magento patch fixes the issue with incorrect store credit return after partially invoiced order cancellation.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35356. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.0-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Create 3 simple products.
1. Create a new user and assign store credit (Example: store credit = *$10,* simple product prices = *$100* , *$200* , and *$300* ).
1. Login with the above user, and add the three products to the cart.
1. Check out the three products in the cart, and utilize the store credit for a portion of the order (Example: paid with **Check/Money order** ).
1. Perform two invoices on the order through the API, one for Product 1 and one for Product 2:    ```php    //endpoint POST {\{baseUrl}}/V1/order/:orderId/invoice    //1st API call:    {    "capture": true,    "items": [    {    "order_item_id": 1,    "qty": 1    }    ],    "notify": true,    "appendComment": false    }    //2nd API call:    {    "capture": true,    "items": [    {    "order_item_id": 2,    "qty": 1    }    ],    "notify": true,    "appendComment": false    }    ```    
1. Notice that the store credit is fully applied to the first invoice.
1. ​Notice that the store credit balance = *0* .
1. Cancel the order, and see that two items are invoiced, and that the third item is cancelled.
1. Observe the store credit balance.

 <span class="wysiwyg-underline">Expected results</span> :

The store credit balance is still 0 because the $10 of store credit have been invoiced, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The full store credit is returned: the balance is $10.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.