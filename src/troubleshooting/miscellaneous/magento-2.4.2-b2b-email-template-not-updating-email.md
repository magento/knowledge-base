---
title: "Adobe Commerce 2.4.2 B2B: email template not updating email"
labels: 2.4.2,B2B,Magento,Adobe Commerce,auto-approved email,consumer,email content change,email template,known issue,run cron,update,workaround,cloud infrastructure,on-premises
---

This article describes a known Adobe Commerce 2.4.2 B2B issue where updating some information in an email template is not updated in emails. This issue impacts email contents such as customer info, currency rates, currency symbol, email template change, etc. There is not a solution available at this time, but there is a workaround at the bottom of this article.

## Affected products and versions

* Adobe Commerce on-premises 2.4.2
* Adobe Commerce cloud infrastructure 2.4.2
* B2B 1.3.1

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span>:

1. Company Admin creates a PO (Purchase Order) in the frontend.
1. Check the Auto-Approved email. The **customer name** / **currency rate** should be expected values.
1. Change currency symbol (**Stores > Configuration > Currency Setup > Currency Options**) in Admin and company admin name on the Customer Account page.
1. Customer Admin creates another PO in Admin.
1. Check the Auto-Approved email.

 <span class="wysiwyg-underline">Expected results:</span>

 The customer name and currency symbol are changed in emails, and have their new values as expected.

 <span class="wysiwyg-underline">Actual results</span>:

 The customer name and currency symbol are not changed in emails, and have their previous values.

## Workaround

Manually run the cron job or consumer to propagate the new information.

## Related reading

* [Manage message queues](https://devdocs.magento.com/guides/v2.4/config-guide/mq/manage-message-queues.html) in our developer documentation.
