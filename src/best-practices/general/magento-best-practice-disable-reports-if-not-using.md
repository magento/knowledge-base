---
title: "Adobe Commerce best practice: disable Reports if not using"
labels: 2.3.x,2.4.0,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,performance,reports,Adobe Commerce,cloud infrastructure,on-premises
---

Adobe recommends disabling the [Reports functionality](https://docs.magento.com/user-guide/configuration/general/reports.html) if you are not using it or the related dynamic customer segments functionality. Having it enabled might slow product pages loading causing performance degradation on the storefront catalog.

## Affected products and versions

* Adobe Commerce on-premises, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Adobe Commerce on cloud infrastructure, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practice

If you do not use the Reports or dynamic customer segments, disable the Reports functionality.

To disable the functionality:

1. In the Admin, navigate to **Stores** > **Settings** > **Configuration** > **General** > **Reports**.
1. Under **General Options**, set **Enable Reports** to *No*.
1. Flush cache by running `php bin/magento cache:flush` or in the Admin under **System** > **Tools** > **Cache Management**.
