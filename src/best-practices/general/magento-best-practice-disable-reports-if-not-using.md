---
title: "Magento best practice: disable Reports if not using"
labels: 2.3.x,2.4.0,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,performance,reports
---

Magento recommends disabling the [Reports functionality](https://docs.magento.com/user-guide/configuration/general/reports.html) if you are not using it or the related dynamic customer segments functionality. Having it enabled might slow product pages loading causing performance degradation on the storefront catalog.

## Affected products and versions

* Magento Commerce, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 

## Best practice

If you do not use the Reports or dynamic customer segments, disable the Reports functionality.

To disable the functionality:

1. In Magento Admin, navigate to **Stores** > **Settings** > **Configuration** > **General** > **Reports** .
1. Under **General Options** , set **Enable Reports** to *No.* 
1. Flush cache by running `php bin/magento cache:flush` or in Magento Admin under **System** > **Tools** > **Cache Management** .

