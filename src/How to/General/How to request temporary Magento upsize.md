---
title: How to request temporary Magento upsize
link: https://support.magento.com/hc/en-us/articles/360041138511-How-to-request-temporary-Magento-upsize
labels: Magento Commerce Cloud,Magento Commerce,cloud,New Relic,temporary,capacity,request,baseline,alert,2.3.x,2.2.x,how to,Magento Upsize
---

<p>If your organization is planning an online event in which you expect high traffic, or you suddenly find your site to be undergoing a high traffic event, you can file a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> to request temporary additional cloud capacity for your Magento Commerce Cloud store.</p>
<p class="info">48 business hours notice is required for non-emergency upsize requests.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>.</li>
</ul>
<h2>How to identify high traffic events</h2>
<p>In New Relic Alerts, you can use baseline alert conditions to define thresholds that adjust to the behavior of your data.</p>
<p>Baseline alerting is useful for creating alert conditions that:</p>
<ul>
<li>Only notify you when data is behaving abnormally.</li>
<li>Dynamically adjust to changing data and trends, including daily or weekly trends.</li>
</ul>
<p>In addition, baseline alerting works well with new applications when you do not yet have known behaviors.</p>
<p>Follow this link to learn more about New Relic <a href="https://docs.newrelic.com/docs/alerts/new-relic-alerts/defining-conditions/create-baseline-alert-conditions">Creating baseline alert conditions</a>.</p>
<p>If you receive an alert notification that suggests a high traffic event you may need to consider <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submitting a Support Ticket</a> requesting additional capacity. Follow the below steps.</p>
<h2>How to monitor performance of your site</h2>
<p>Adobe provides a set of New Relic alert policies for Magento Commerce Cloud Pro and Starter Production environments to track the following key performance metrics:</p>
<ul>
<li><a href="https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction">Apdex score</a></li>
<li>Error rate</li>
<li>Disk space (available on Pro Production environments only)</li>
</ul>
<p>Based on industry best practices, these policies set thresholds for warning and critical conditions that affect performance. When your site experiences an infrastructure or application issue that triggers an alert threshold, New Relic sends alert notifications so that you can proactively address the issue. To use these policies, you must configure notification channels to receive the alert messages.</p>
<p>Follow this link to learn how to <a href="https://devdocs.magento.com/cloud/project/new-relic.html#monitor-performance-with-alert-policies">configure performance-based alerts</a>.</p>
<h2>Steps</h2>
<p>Follow the steps below to submit a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> to request temporary additional cloud capacity:</p>
<p>Submit a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket at the Magento Support Center</a>, after inputting the following information:</p>
<p class="info">The <em>Holiday Surge Request</em> choice is only an option between October and December months.</p>
<ol>
<li>Complete the first four fields.</li>
<li>Select <em>Surge Contact Request</em> in the Contact Reason drop down options. Click OK on the pop-up message requesting 48 hours' notice for temporary additional cloud capacity requests. </li>
<li>Complete the next four fields. </li>
<li>Select from the Surge Capacity Request Type dropdown options.<br/>Note: please select <em>Holiday Surge Request</em> for all Holiday upsizing to ensure these tickets are routed properly.</li>
<li>Select dates for the mandatory fields Resize Start Date and Resize End Date. The preferred Resize Start Time is also a mandatory field.</li>
<li>In the Description field, if you have additional information on size provide it here. If no specific larger size is requested, we will be upsizing you up to the next larger environment size capacity. Surge requests will default to the next larger size from your current size. If you require additional capacity, please indicate that in the Description field. Increased capacity will be deducted from your contracted Surge Days or vCPU days. The typical capacity increase window is five days, but if you need more or fewer days, please indicate this in your <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a>.
</li>
</ol>
<h2>Related reading</h2>
<p>For information on improving site performance to avoid the need for utilizing an increase in capacity, please see these articles from Magento DevDocs: </p>
<ul>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/catalog/product-image-resizing.html?_ga=2.180036580.1101564187.1584392801-2014893147.1552329962">Image Sizing</a> </li>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/system/cache-full-page.html?_ga=2.206252883.1101564187.1584392801-2014893147.1552329962">Full Page Caching</a> </li>
<li>
<a href="https://devdocs.magento.com/guides/v2.2/cloud/reference/ece-tools-reference.html?_ga=2.250808134.1101564187.1584392801-2014893147.1552329962">ECE Tools</a> </li>
</ul>