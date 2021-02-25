---
title: Products per page limit Magento
link: https://support.magento.com/hc/en-us/articles/360048176472-Products-per-page-limit-Magento
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,best practices,2.3.x,2.4,products per page,allow all products,2.4.x
---

This article provides a best practice for using the Allow All Products per Page setting, depending on your catalog size, to optimize Magento storefront performance.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practice

You can configure Magento to allow shoppers to view all category products on a single page. But if the number of category products significantly exceeds 48 products, it may take a long time for them to render.

The recommendation is to set the Allow All Products per page configuration to _No_, if you have more than 48 products in any category. 

To change this configuration, in the Magento Admin Panel go to Stores > Configuration > Catalog > Catalog > Storefront > Allow All Products per page = _No_.  
  
![magento_allow_all_products_per_page_2.4.1.png](https://support.magento.com/hc/article_attachments/360086186352/magento_allow_all_products_per_page_2.4.1.png)

## Related reading

[Catalog page in Magento Commerce User Guide](https://docs.magento.com/user-guide/configuration/catalog/catalog.html)