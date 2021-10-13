---
title: "Adobe Commerce best practice: enable asynchronous orders processing"
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,asynchronous orders,best practices,checkout performance, Adobe Commerce,cloud infrastructure,on-premises
---

This article provides best practice for configuration settings that can help improve checkout performance in case of large number of simultaneously created orders.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)
* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practice

If the number of simultaneously placed orders in your store is large enough and has a negative impact on checkout performance, we recommend enabling asynchronous orders processing.

To enable the setting:

Method 1: Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises (if deploy mode is PRODUCTION - which is the default setting on Adobe Commerce on cloud infrastructure as DEFAULT or DEVELOPER are not allowed): Run `php bin/magento config:set dev/grid/async_indexing 1`.

Method 2: Adobe Commerce on-premises only (only when the deploy mode set to DEFAULT OR DEVELOPER): Enable the **Asynchronous indexing** option in the Commerce Admin under **Stores** > Settings > **Configuration** > **Advanced** > **Developer** > **Grid Settings** > **Asynchronous indexing**.

![asynchronous_orders_magento.png](assets/asynchronous_orders_magento.png)

Then flush cache by running `php bin/magento cache:flush` or go to the Commerce Admin under **System** > **Tools** > **Cache Management**.

>![warning]
>
>Warning: always test in the Staging environment prior to making any changes to the Production environment.

## Related reading

* [Best practice Adobe Commerce order placement performance](https://support.magento.com/hc/en-us/articles/360048170772) in our support knowledge base.
* [Configuration paths reference](https://devdocs.magento.com/guides/v2.4/config-guide/prod/config-reference-most.html) in our developer documentation.
