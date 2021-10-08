---
title: Best practice for number of products in cart in Adobe Commerce
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,cart,minicart,products,Adobe Commerce,on-premises
---

This article provides best practices for the number of products in a cart in Adobe Commerce. The maximum recommended number of products is 100.

The potential site impact of exceeding the limit is:

* An increase in data retrieval operations, validation of cart items, checks for price rules applications, tax calculations, and totals calculations.
* An increase in the time for mini-cart rendering including cart rendering time, checkout flow rendering, and execution, leading to performance degradation.
* Increase in the page loading time for all site pages where the mini-cart is present, leading to performance degradation.

Adobe Commerce Best Practices for cart limits are:

* Up to **100** products in a cart
    * the product works, meeting performance targets for response time.
* Up to **300** products in a cart
    * the product works, but response time increases above targets.
* Above **500** products in a cart
    * the cart and checkout flows are not guaranteed to work.

## Affected products and versions

Adobe Commerce (all deployment methods) all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

* Split orders into several smaller orders with a smaller number of rows by leveraging the Add Item by SKU feature.
* Only add the custom logic and cart customization you need to load a list of items.

If assistance is required or if there are questions or concerns, [submit an Adobe Commerce Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related reading

[Configuring Product Options](https://docs.magento.com/user-guide/catalog/inventory-product-stock-options.html) in our user guide.<br>
[Shopping Assistance > Managing a Shopping Cart](https://docs.magento.com/user-guide/sales/shopping-assisted-cart-manage.html#method-2-add-item-by-sku) in our user guide.
