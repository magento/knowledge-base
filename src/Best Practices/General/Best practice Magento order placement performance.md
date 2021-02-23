---
title: Best practice Magento order placement performance 
link: https://support.magento.com/hc/en-us/articles/360048170772-Best-practice-Magento-order-placement-performance-
labels: Magento Commerce Cloud,Magento Commerce,performance,2.3,email,orders,best practices,2.3.x,2.4,2.4.x,asynchronous sending
---

<p>This article provides best practices for order processing and checkout performance. It is recommended that you enable the Async Email Notification feature. It is disabled by default in the Magento configuration. With this feature disabled, there is a degradation of checkout and order processes as email notifications are not handled in the background.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Enable the Async Email Notification feature to improve the performance of placing an order. This moves the order processing email notifications to the background.<br/><br/>To enable this feature:</p>
<ol>
<li>Go to Magento Admin Panel.</li>
<li>Click on STORES &gt; Settings &gt; Configuration.</li>
<li>Then go to Sales &gt; Sales Emails &gt; General Settings &gt; Asynchronous sending.<br/><br/><img alt="asynchronous_sales_emails_magento_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086270551/asynchronous_sales_emails_magento_2.4.1.png"/>
</li>
</ol>
<h2>Related reading</h2>
<p>Refer to <a href="https://devdocs.magento.com/guides/v2.4/performance-best-practices/configuration.html#asynchronous-email-notifications">Performance Best Practices &gt; Configuration Best Practices</a>.</p>