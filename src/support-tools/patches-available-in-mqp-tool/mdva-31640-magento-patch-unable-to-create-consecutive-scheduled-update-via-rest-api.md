---
title: "MDVA-31640 Magento patch: unable to create consecutive scheduled update via REST API"
labels: 2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,MQP 1.0.9,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,scheduled update,support tools
---

The MDVA-31640 Magento patch fixes the issue where a new scheduled update for the special price cannot be created for multiple stores using REST API, if the start date of the update coincides with the end date of the previously existing update. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.9 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1.

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.1 - 2.3.5-p2, 2.4.0, 2.4.0-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Fixes the issue where a new scheduled update for the special price cannot be created for multiple stores using REST API, if the start date of the update coincides with the end date of the previously existing update.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Set up an additional website, store and store view.
1. Create two simple products: "product1" and "product2".
1. Assign product1 to one website and product2 to both websites.
1. Create a scheduled update for the special price for the product1 on the store view for the store with ID 1. Use REST API `POST` request to `rest/V1/products/special-price` with the following payload:     `{        "prices": [            {                "price": 15,                "store_id": 1,                "sku": "product1",                "price_from": "2021-11-15 04:00:00",                "price_to": "2021-11-15 04:10:00"            }        ]    }`     
1. Create a scheduled update for the special price for the product2 on both store views for stores with ID 1 and 2 using REST API `POST` request to `rest/V1/products/special-price` with the following payload (the `price_from` date is the same as `price_to` date in the previous request):     `{        "prices": [            {                "price": 14,                "store_id": 1,                "sku": "product2",                "price_from": "2021-11-15 04:10:00",                "price_to": "2021-11-15 04:15:00"            },            {                "price": 13,                "store_id": 2,                "sku": "product2",                "price_from": "2021-11-15 04:10:00",                "price_to": "2021-11-15 04:15:00"            }        ]    }`     

 <span class="wysiwyg-underline">Actual result:</span> Magento throws an error. Scheduled update is not created.

 <span class="wysiwyg-underline">Expected result:</span> Scheduled update with the special price change is created on both store views.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.