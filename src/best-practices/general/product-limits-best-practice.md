---
title: Product limits best practice
labels: 2.3,2.3.x,2.4,2.4.x,SKU,best practices,catalog,performance,product,stores,Adobe Commerce,cloud infrastructure,on-premises,Magento
---

It is best practice to minimize the number of product Stocking Keeping Units (SKUs) to avoid performance degradation. The recommended effective product max is 10M.

Effective Number of SKU is calculated as the following:

Effective SKU = N\[SKUs\] &#42; Stores/Websites &#42; Customer Groups

High Effective SKU slows down product data retrieval and increases admin operations time.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

You can reduce the number of products (SKUs) by:

* Minimization of multipliers. Removing stores or websites reduces the multiplier. If you have 50k SKUs, 10 Websites, and 10 Customer Groups, the Effective Number of SKUs = 5M. Removing 5 Customer Groups reduce Effective SKUs to 2.5M.
* Restructuring of catalog. This involves reducing the number of products assigned to categories.
* Leveraging of alternative product features for custom pricing (replacement of shared catalog and customer groups multipliers).
* Restructuring of catalog for minimization of stores numbers. To decrease the number of effective SKUs, you can decrease the number of stores/websites, and customer groups or number of products.
* De-activation and/or removal of non-used parts of the system (removal of modules). For steps, refer to [Uninstall modules](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-uninstall-mods.html) in our developer documentation.
* Providing more product variations through custom options rather than through unique products.
* Managing products in external Platform Management System (PMS).

## Related reading

[Adobe Commerce on cloud infrastructure: Best Practices for store configuration](https://devdocs.magento.com/cloud/configure/configure-best-practices.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=price%20rules) in our developer documentation
