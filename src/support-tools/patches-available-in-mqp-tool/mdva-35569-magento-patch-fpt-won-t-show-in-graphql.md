---
title: "MDVA-35569 Magento patch: FPT won't show in GraphQL"
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,FPT,GraphQL,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,fixed product tax
---

The MDVA-35569 Magento patch solves the issue when FPT (fixed product tax) doesn't show in GraphQL when the state is specified in the cart.

This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35569.  Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.4-2.4.1-p2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Enable FPT.
1. Create an attribute (Example: *weee\_tax* ).
1. Create test product (Exanple: *weeetax* ) with the *weee\_tax* attribute added.
1. Assign FPT to California or to another state on the *weee\_tax* attribute.
1. Create a customer in GraphQL.
1. Create a cart in GraphQL.
1. Add the *weetax* product to the cart with GraphQL.
1. Query the cart:    ```php    {cart(cart_id: "xxx") {    items {    id    product {    name    sku    price_range {    minimum_price {    final_price {    value    }    fixed_product_taxes {    label    amount {    value    }    }    }    maximum_price {    final_price {    value    }    fixed_product_taxes {    label    amount {    value    }    }    }    }    }    prices {    price {    value    }    }    quantity    }    prices {    subtotal_excluding_tax {    value    }    applied_taxes {    amount {    value    }    }    grand_total {    value    currency    }    discounts {    amount {    value    }    label    }    }}}    ```    

 <span class="wysiwyg-underline">Expected results</span> :

The FPT would be populated normally, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

* The FPT does not populate with data and is empty.
* The cart query gives this response:

```php
{
 "data": {
 "cart": {
 "items": [
 {
 "id": "1",
 "product": {
 "name": "fpt",
 "sku": "fpt",
 "price_range": {
 "minimum_price": {
 "final_price": {
 "value": 10
 },
 "fixed_product_taxes": []
 },
 "maximum_price": {
 "final_price": {
 "value": 10
 },
 "fixed_product_taxes": []
 }
 }
 },
 "prices": {
 "price": {
 "value": 10
 }
 },
 "quantity": 1
 }
 ],
 "prices": {
 "subtotal_excluding_tax": {
 "value": 10
 },
 "applied_taxes": [],
 "grand_total": {
 "value": 21,
 "currency": "USD"
```

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.