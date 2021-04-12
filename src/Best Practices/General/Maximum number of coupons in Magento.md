---
title: Maximum number of coupons in Magento
labels: Magento Commerce Cloud,Magento Commerce,coupon,performance,2.3,database,best practices,2.3.x,2.4,2.4.x
---

BLAH BLAH BLAH


This article provides recommendations on using coupons functionality in Magento Commerce and Magento Commerce Cloud, aimed at avoiding performance issues.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

Creating many coupons could lead to performance issues. Magento recommends keeping the number of coupons in your database (that is the number of records in the `` salesrule_coupon `` DB table) below around 1. Following approaches will help you in keeping the number of coupons within recommended limit: 

* Remove coupons if they are not needed any more.
* Generate the exact number of coupons needed to meet the 'discount' campaign needs.

## Related reading

[Coupon codes](https://docs.magento.com/user-guide/v2.3/marketing/price-rules-cart-coupon.html?itm_source=merchdocs-23&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=coupon%20code) in Magento User Guide.