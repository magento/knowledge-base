---
title: Max sales rules best practice in Adobe Commerce
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,cart,cart_rules,performance,price,Adobe Commerce,on-premises,cloud infrastructure
---

The maximum recommended total number of sales rules (cart price rules) for all websites is 1000 in Adobe Commerce. Having many sales rules can have a negative impact on performance. The limitation is due to needing to validate cart contents against all rules registered in the system to apply the necessary rules.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

Having too many sales rules will cause degraded performance on the site, including:

* Adding products to cart response time increases above performance targets.
* Mini-cart loading and rendering time increases.
* Cart page rendering time increases above performance targets.
* On the Checkout page there is a section called **Totals** (Final price, Subtotal) and number of sales rules have a direct performance impact on this block rendering time.

It is best practice to:

* Manage and remove non-used rules.
* Add strict rule conditions (like attribute or category filter) for increasing efficiency of the matching mechanism. For steps on creating and removing cart price rules, refer to  [Adobe Commerce User guide > Cart Price Rules](https://docs.magento.com/user-guide/marketing/price-rules-cart-create.html) in our user guide.

## Related reading

[Commerce User Guide > Cart Price Rules](https://docs.magento.com/user-guide/marketing/price-rules-cart.html?itm_source=merchdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=access%20price%20rule) in our user guide.
