---
title: Maximum number of coupons in Adobe Commerce
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,coupon,database,performance,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides recommendations on using coupons functionality in Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure, aimed at avoiding performance issues.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

Creating many coupons could lead to performance issues. Adobe Commerce recommends keeping the number of coupons in your database (that is the number of records in the `salesrule_coupon` DB table) below around 250000.

Following approaches will help you in keeping the number of coupons within recommended limit:

* Remove coupons if they are not needed any more.
* Generate the exact number of coupons needed to meet the "discount" campaign needs.

## Related reading

[Coupon codes](https://docs.magento.com/user-guide/v2.3/marketing/price-rules-cart-coupon.html?itm_source=merchdocs-23&itm_medium=search_page&itm_campaign=federated_search&itm_term=coupon%20code) in our user guide.
