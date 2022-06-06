---
title: Product Recommendations not shown in Page Builder
labels: troubleshooting,Magento,on-premises,cloud infrastructure,Page Builder,Product Recommendations,Adobe Commerce
---

This article provides a solution for the issue where the Product Recommendations option is not shown in Page Builder.

## Affected products and versions

* Adobe Commerce (all deployment methods)

## Issue

Product Recommendations option not showing in Page Builder.

## Cause

There is no option in Page Builder to add Product Recommendations. Product Recommendations for Page Builder is an optional module and is installed separately.

## Solution

1. Check if you have installed the module separately by running the command: `composer show magento/module-page-builder-product-recommendations`
1. If it returns the following message: *Package magento/module-page-builder-product-recommendations not found*, you will have to install it by running the command: `composer require magento/module-page-builder-product-recommendations`

By enabling Product Recommendations in Page Builder, you will be able to [add a recommendation unit](https://docs.magento.com/user-guide/marketing/page-builder-add-product-recs.html?_ga=2.187638894.756057933.1627907332-1732968789.1622116639) to any content created in Page Builder.

## Related reading

* [Add Product Recommendations to Page Builder](https://docs.magento.com/user-guide/marketing/page-builder-add-product-recs.html) in our user guide
* [Install and Configure Product Recommendations](https://devdocs.magento.com/recommendations/install-configure.html) in our developer documentation
* [Adobe Commerce User Guide](https://docs.magento.com/user-guide/)
