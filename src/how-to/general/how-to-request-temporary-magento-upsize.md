---
title: How to request temporary Magento upsize
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,Magento Upsize,New Relic,alert,baseline,capacity,cloud,how to,request,temporary
---

If your organization is planning an online event in which you expect high traffic, or you suddenly find your site to be undergoing a high traffic event, you can file a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) to request temporary additional cloud capacity for your Magento Commerce Cloud store.

<p class="info">48 business hours notice is required for non-emergency upsize requests.</p>

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## How to identify high traffic events

In New Relic Alerts, you can use baseline alert conditions to define thresholds that adjust to the behavior of your data.

Baseline alerting is useful for creating alert conditions that:

* Only notify you when data is behaving abnormally.
* Dynamically adjust to changing data and trends, including daily or weekly trends.

In addition, baseline alerting works well with new applications when you do not yet have known behaviors.

Follow this link to learn more about New Relic [Creating baseline alert conditions](https://docs.newrelic.com/docs/alerts/new-relic-alerts/defining-conditions/create-baseline-alert-conditions).

If you receive an alert notification that suggests a high traffic event you may need to consider [submitting a Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) requesting additional capacity. Follow the below steps.

## How to monitor performance of your site

Adobe provides a set of New Relic alert policies for Magento Commerce Cloud Pro and Starter Production environments to track the following key performance metrics:

* [Apdex score](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction)
* Error rate
* Disk space (available on Pro Production environments only)

Based on industry best practices, these policies set thresholds for warning and critical conditions that affect performance. When your site experiences an infrastructure or application issue that triggers an alert threshold, New Relic sends alert notifications so that you can proactively address the issue. To use these policies, you must configure notification channels to receive the alert messages.

Follow this link to learn how to [configure performance-based alerts](https://devdocs.magento.com/cloud/project/new-relic.html#monitor-performance-with-alert-policies).

## Steps

Follow the steps below to submit a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) to request temporary additional cloud capacity:

Submit a [Support Ticket at the Magento Support Center](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket), after inputting the following information:

<p class="info">The <em>Holiday Surge Request</em> choice is only an option between October and December months.</p>

1. Complete the first four fields.
1. Select _Surge Contact Request_ in the Contact Reason drop down options. Click OK on the pop-up message requesting 48 hours' notice for temporary additional cloud capacity requests. 
1. Complete the next four fields. 
1. Select from the Surge Capacity Request Type dropdown options.  
    Note: please select _Holiday Surge Request_ for all Holiday upsizing to ensure these tickets are routed properly.
1. Select dates for the mandatory fields Resize Start Date and Resize End Date. The preferred Resize Start Time is also a mandatory field.
1. In the Description field, if you have additional information on size provide it here. If no specific larger size is requested, we will be upsizing you up to the next larger environment size capacity. Surge requests will default to the next larger size from your current size. If you require additional capacity, please indicate that in the Description field. Increased capacity will be deducted from your contracted Surge Days or vCPU days. The typical capacity increase window is five days, but if you need more or fewer days, please indicate this in your [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related reading

For information on improving site performance to avoid the need for utilizing an increase in capacity, please see these articles from Magento DevDocs: 

* [Image Sizing](https://docs.magento.com/m2/ee/user_guide/catalog/product-image-resizing.html?_ga=2.180036580.1101564187.1584392801-2014893147.1552329962) 
* [Full Page Caching](https://docs.magento.com/m2/ee/user_guide/system/cache-full-page.html?_ga=2.206252883.1101564187.1584392801-2014893147.1552329962) 
* [ECE Tools](https://devdocs.magento.com/guides/v2.2/cloud/reference/ece-tools-reference.html?_ga=2.250808134.1101564187.1584392801-2014893147.1552329962) 