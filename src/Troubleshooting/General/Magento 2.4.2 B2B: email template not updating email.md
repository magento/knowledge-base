---
title: Magento 2.4.2 B2B: email template not updating email
link: https://support.magento.com/hc/en-us/articles/360056589311-Magento-2-4-2-B2B-email-template-not-updating-email
labels: Magento Commerce Cloud,Magento Commerce,known issue,B2B,update,2.4.2,workaround,run cron,email content change,email template,consumer,auto-approved email
---

This article describes a known Magento Commerce 2.4.2 B2B issue where updating some information in an email template is not updated in emails. This issue impacts email contents such as customer info, currency rates, currency symbol, email template change, etc. There is not a solution available at this time, but there is a workaround at the bottom of this article.

## Affected products and versions

* Magento Commerce 2.4.2
* Magento Commerce Cloud 2.4.2
* Magento B2B version 1.3.1

## Issue

Steps to reproduce:

1. Company Admin creates a PO (Purchase Order) in the frontend.
1. Check the Auto-Approved email. The customer name / currency rate should be expected values.
1. Change currency symbol (Stores > Configuration > Currency Setup > Currency Options) in Admin and company admin name on the Customer Account page.
1. Customer Admin creates another PO in Admin.
1. Check the Auto-Approved email. 

Expected results:  
The customer name and currency symbol are changed in emails, and have their new values as expected.

Actual results:  
The customer name and currency symbol are not changed in emails, and have their previous values.

## Workaround

Manually run the cron job or consumer to propagate the new information.

## Related reading

* DevDocs [Manage message queues](https://devdocs.magento.com/guides/v2.4/config-guide/mq/manage-message-queues.html)