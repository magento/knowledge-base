---
title: Best practice Magento order placement performance
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,asynchronous sending,best practices,email,orders,performance
---

This article provides best practices for order processing and checkout performance. It is recommended that you enable the **Async Email Notification** feature. It is disabled by default in the Magento configuration. With this feature disabled, there is a degradation of checkout and order processes as email notifications are not handled in the background.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 

## Best practice

Enable the **Async Email Notification** feature to improve the performance of placing an order. This moves the order processing email notifications to the background.To enable this feature:

1. Go to Magento Admin Panel.
1. Click on **STORES** > Settings > **Configuration** .
1. Then go to **Sales** > **Sales Emails** > **General Settings** > **Asynchronous sending** .    ![asynchronous_sales_emails_magento_2.4.1.png](assets/asynchronous_sales_emails_magento_2.4.1.png)    

## Related reading

Refer to [Performance Best Practices > Configuration Best Practices](https://devdocs.magento.com/guides/v2.4/performance-best-practices/configuration.html#asynchronous-email-notifications) .