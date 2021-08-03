---
title: Product Recommendations not showing in Page Builder
labels: troubleshooting,Magento Commerce,Magento commerce Cloud,on-premise,cloud architecture,Page Builder,Product Recommendations,
---

This article provides a solution for the issue where Product Recommendations option is not showing in Page Builder.

## Affected products and versions

* Adobe Commerce (all deployment methods)

## Issue

Product Recommendations option not showing in Page Builder.

## Cause

There is no option in Page Builder to add Product Recommendations. Product Recommendations for Page Builder is an optional module and is installed separately.

## Solution

* Check if you have installed the module separately by running the command:  
`composer show magento/module-page-builder-product-recommendations`  
    * If it returns the following message: *Package magento/module-page-builder-product-recommendations not found*, you will have to install it by running the command: `composer require magento/module-page-builder-product-recommendations`

 By enabling Product Recommendations in Page Builder, you will be able to [add a recommendation unit](https://docs.magento.com/user-guide/marketing/page-builder-add-product-recs.html?_ga=2.187638894.756057933.1627907332-1732968789.1622116639) to any content created in Page Builder.

## Related reading
* [Add Recommendations to Page Builder](https://docs.magento.com/user-guide/marketing/page-builder-add-product-recs.html)
* [Adobe Commerce User Guide](https://docs.magento.com/user-guide/)
* [Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html)
