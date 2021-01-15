---
title: Best practice Magento order placement performance 
link: https://support.magento.com/hc/en-us/articles/360048170772-Best-practice-Magento-order-placement-performance-
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,email,orders,best practices,2.3.x,2.4,2.4.x,asynchronous sending
---

This article provides best practices for order processing and checkout performance. It is recommended that you enable the **Async Email Notification** feature. It is disabled by default in the Magento configuration. With this feature disabled, there is a degradation of checkout and order processes as email notifications are not handled in the background.

 Affected products and versions
------------------------------

 
 * Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 * Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 
 Best practices
--------------

 Enable the **Async Email Notification** feature to improve the performance of placing an order. This moves the order processing email notifications to the background.  
  
To enable this feature:

 
 2. Go to Magento Admin Panel.
 4. Click on **Stores** > **Settings** > **Configuration**.
 6. Then go to **Sales** > **Sales Emails** > **General Settings** > **Asynchronous Sending**.
 
 Related reading
---------------

 Refer to [Performance Best Practices > Configuration Best Practices](https://devdocs.magento.com/guides/v2.4/performance-best-practices/configuration.html#asynchronous-email-notifications).

