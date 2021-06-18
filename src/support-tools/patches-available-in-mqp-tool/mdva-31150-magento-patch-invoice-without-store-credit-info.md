---
title: "MDVA-31150 Magento patch: invoice without store credit info"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,API,MQP 1.0.8,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,credit,invoice,order,store,support tools
---

The MDVA-31150 Magento patch fixes the issue where an invoice is created without store credit information. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.8 is installed. Please note that the issue will be fixed in Magento version 2.4.2.

## Affected products and versions

* This patch was designed for Magento Commerce Cloud 2.3.5-p2.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0 to 2.3.5-p2, and 2.4.0 to 2.4.0-p1.

Note: the patch can be applicable to other versions. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

After the invoice order by API the used customer balance and gift card information is not present in the invoice.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Add a store credit amount to a customer account: On the Admin sidebar, go to **Customers** > **All Customers.** 
1. Find the customer record and click on **Edit** in the Action column, then **Store Credit** > Update the balance > **Save Customer** .
1. Go to Storefront and add products to cart.
1. Place an order by applying the store credit or gift card amount as partial payment.
1. Create invoice using `REST API>POST>/rest/V1/order/1/invoice` with payload:    ```clike    { "capture": true, "items": [ { "extension_attributes": {}, "order_item_id": 3, "qty": 1 } ], "notify": true, "appendComment": true, "comment": { "extension_attributes": {}, "comment": "string", "is_visible_on_front": 0 }, "arguments": { "extension_attributes": {} }}    ```    
1. Get the invoice that was just created using `REST API>GET>/rest/V1/invoices/1` .

 <span class="wysiwyg-underline">Expected result</span> 

Store credit and gift card balance are returned by API Call.

 <span class="wysiwyg-underline">Actual result</span> 

Store credit and gift card balance are not returned by API Call.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.