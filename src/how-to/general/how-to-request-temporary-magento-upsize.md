---
title: How to request temporary Adobe Commerce on cloud infrastructure upsize
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,Magento Upsize,New Relic,alert,baseline,capacity,cloud,how to,request,temporary,Adobe Commerce,cloud infrastructure
---

If your organization is planning an online event in which you expect high traffic, or you suddenly find your site to be undergoing a high traffic event, you can file a [Support Ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to request temporary additional cloud capacity for your Adobe Commerce on cloud infrastructure store.

>![info]
>
>48 business hours notice is required for non-emergency upsize requests.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## How to identify high traffic events

In New Relic Alerts, you can use baseline alert conditions to define thresholds that adjust to the behavior of your data.

Baseline alerting is useful for creating alert conditions that:

* Only notify you when data is behaving abnormally.
* Dynamically adjust to changing data and trends, including daily or weekly trends.

In addition, baseline alerting works well with new applications when you do not yet have known behaviors.

Follow this link to learn more about New Relic [Creating baseline alert conditions](https://docs.newrelic.com/docs/alerts/new-relic-alerts/defining-conditions/create-baseline-alert-conditions).

If you receive an alert notification that suggests a high traffic event you may need to consider [submitting a Support Ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) requesting additional capacity. Follow the below steps.

## How to monitor performance of your site

Adobe provides a set of New Relic alert policies for Adobe Commerce on cloud infrastructure Pro plan architecture and Adobe Commerce on cloud infrastructure Starter plan architecture Production environments to track the following key performance metrics:

* [Apdex score](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction)
* Error rate
* Disk space (available on Pro architecture Production environments only)

Based on industry best practices, these policies set thresholds for warning and critical conditions that affect performance. When your site experiences an infrastructure or application issue that triggers an alert threshold, New Relic sends alert notifications so that you can proactively address the issue. To use these policies, you must configure notification channels to receive the alert messages.

Follow this link to learn how to [configure performance-based alerts](https://devdocs.magento.com/cloud/project/new-relic.html#monitor-performance-with-alert-policies).

## Steps to request temporary upsize

Follow the steps below to submit a [Support Ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to request temporary additional cloud capacity:

Submit a [Support Ticket at the Adobe Commerce Support Center](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket), after inputting the following information:

>![info]
>
>The *Holiday Surge Request* choice is only an option between October and December months.

1. Please select the Adobe Commerce Product for which you are seeking Support.
1. Complete the first four (Product, Organization, Implementation type, Subject) fields.
1. Select *Adobe Commerce cloud Infrastructure* in the **Contact Reason** drop-down.
1. Select *Holiday Surge Capacity Request* in the **Adobe Commerce Infrastructure Contact Reason** drop-down options. Click **OK** on the pop-up message requesting 48 business hours' notice for temporary additional cloud capacity requests.
1. Select dates for the mandatory fields **Resize Start Date** and **Resize End Date**. The preferred **Resize Start Time** is also a mandatory field.
1. Complete the next four fields.
1. In the **Description** field, if you have additional information on size, provide it here. If no specific larger size is requested, we will be upsizing you up to the next larger environment size capacity. Surge requests will default to the next larger size from your current size. If you require additional capacity, please indicate that in the **Description** field. Increased capacity will be deducted from your contracted Surge Days or vCPU days. The typical capacity increase window is five days, but if you need more or fewer days, please indicate this in your [Support Ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

>![info]
>
>Once the upsize is scheduled, an automated system will adjust the size of your cloud instance. You may not receive any ticket notification when the procedure is complete. You may use the Observation for Adobe Commerce tool to view your AWS or Azure instance types to [verify the change](https://support.magento.com/hc/en-us/articles/4409425285901).

## View the history of your upsizes

You can view the history of requested resizes in your [Project Portal (Onboarding UI)](https://devdocs.magento.com/cloud/onboarding/onboarding-tasks.html), under **Project** > **Services** > **CPU Usage Tracking**.
The following information is available for each resize request:

* **Size Start Date**: date of upsize request.
* **Size End Date**: date when the cluster was returned to the previous size.
* **vCPU Size**: the size of the cluster after the upsize.
* **Days Usage**: for how many days the cluster stayed upsized.
* **Period vCPU**: changed vCPU size by the number of days it was used. (for example, vCPU size 192 by 25 days equals 4,800).


## Related reading

* For insights, methods, and examples of how to measure and improve site performance, refer to the following in-depth articles in our support knowledge base:
    * [CPU allocation calculation for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058551232)
    * [Check if upsize for host’s instances is needed for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058506772)
    * [Check host’s CPU configuration for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058507012O)
* For information on how to identify outages, refer to [Identify and measure outages for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/4409500578957) in our support knowledge base.
* For information on improving site performance to avoid the need for utilizing an increase in capacity, refer to these articles in our developer documentation:
    * [Image Sizing](https://docs.magento.com/m2/ee/user_guide/catalog/product-image-resizing.html?_ga=2.180036580.1101564187.1584392801-2014893147.1552329962)  
    * [Full Page Caching](https://docs.magento.com/m2/ee/user_guide/system/cache-full-page.html?_ga=2.206252883.1101564187.1584392801-2014893147.1552329962)  
    * [ECE-Tools](https://devdocs.magento.com/guides/v2.2/cloud/reference/ece-tools-reference.html?_ga=2.250808134.1101564187.1584392801-2014893147.1552329962)
