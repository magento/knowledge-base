---
title: "MDVA-37478: Can't create partial invoice via REST API"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,QPT 1.0.23,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,Payment on account,REST API,order,partial invoice
---

The MDVA-37478 Magento patch fixes the issue when you're unable to create a partial invoice via REST API for an order placed with payment method **Payment on Account**. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.23 is installed. The patch ID is MDVA-37478. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.3-p1
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0-2.3.7

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

 <ins>Prerequisite</ins>:

 Magento with installed B2B module

 <ins>Steps to reproduce</ins>:

1. Enable **B2B company**.
1. Enable **Payment on Account** payment method.
1. Create 2 simple products.
1. Create a company account.
1. Add company credits exceeding the total price of 2 products created.
1. Login to the frontend using the company account created.
1. Add the 2 products created to the cart, and checkout using the **Payment on Account** payment method.
1. Try to create a partial invoice for the order created via REST API:
    ```php
    POST /rest/V1/order//invoice
    {
      "items": [
        {
          "order_item_id": 2,
          "qty": 1
        }
      ]
    }
    ```

 <ins>Expected results</ins>:

The partial invoice is created for an order made using the **Payment on Account** payment method, as expected.

 <ins>Actual results</ins>:

The following error is returned from the REST API:  
```php
{"message":"Invoice Document Validation Error(s):\nAn invoice for partial quantities cannot be issued for this order. To continue, change the specified quantity to the full quantity."}
```


## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
