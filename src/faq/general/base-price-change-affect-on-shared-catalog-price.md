---
title: Base price change affect on shared catalog price
labels: FAQ,Magento,custom,price,shared,shared_catalog,Adobe Commerce
---

This article answers the question: if a product in a shared catalog has a custom price and the base price of the product changes (for example after a scheduled update), which price applies in the shared catalog?

## With custom price set to Percentage, shared catalog price also changes

If the custom price for a product in a shared catalog has been set to Percentage, the product's shared catalog price is implicitly updated after changing the base price.

In other words, when the base price gets updated (via a normal or a scheduled update), the shared catalog price also changes after applying the percent discount.

## With custom price set to Fixed, shared catalog price does not change

If the custom price for a product in a shared catalog has been set to Fixed, the price in the shared catalog never changes — no matter the way we update the base price (via scheduled update, Adobe Commerce Admin, API, or importing).

## Storefront always displays the lowest available price

If the product's base price changes and becomes less than the corresponding shared catalog price, the Storefront displays the base price as the lowest price available in the system.

## Related reading

[Set Pricing and Structure for a Shared Catalog](http://docs.magento.com/m2/b2b/user_guide/catalog/catalog-shared-pricing-structure.html) in our user guide.
