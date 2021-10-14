---
title: "Managed alerts on Adobe Commerce: CPU critical alert"
labels: CPU,Magento Commerce,Magento Commerce Cloud,New Relic,alert,how to,maintenance mode,threshold,troubleshooting,Adobe Commerce,Pro,cloud infrastructure
---

This article provides troubleshooting steps when you receive a CPU critical alert for Adobe Commerce in New Relic. Immediate action is required to remedy the issue. The alert will look something like the following, depending on the alert notification channel you selected.

<img src = "assets/cpu-critical-magento-managed.png" alt = "disc critical alert" width="500px">

## Affected products and versions

Adobe Commerce on cloud infrastructure Pro plan architecture

## Issue

You will receive a managed alert in New Relic if you have signed up to [Managed alerts for Adobe Commerce](https://support.magento.com/hc/en-us/articles/360045806832) and one or more of the alert thresholds have been surpassed. These alerts were developed by Adobe Commerce to give customers a standard set using insights from Support and Engineering.

 <ins>**Do!**</ins>:

* Abort any deployment scheduled until this alert is cleared.
* Put your site into maintenance mode immediately if your site is or becomes completely unresponsive. For steps, refer to [Installation Guide > Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) in our developer documentation. Make sure to add your IP to the exempt IP address list to ensure that you are still able to access your site for troubleshooting. For steps, refer to [Maintain the list of exempt IP addresses](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten#instgde-cli-maint-exempt) in our developer documentation.

 <ins>**Don't!**</ins>:

* Launch additional marketing campaigns which may bring additional pageviews to your site.
* Run indexers or additional crons, which may cause additional stress on the CPU or disk.
* Do any major administrative tasks (i.e., the Commerce Admin, data imports/exports).
* Clear your cache.

Your site may become non-responsive (if you are not already experiencing a site outage) if you do any of the "Don't" actions before you have investigated and solved the cause of the alert.

## Solution

Follow these steps to identify and troubleshoot the cause.

>![warning]
>
>Because this is a critical alert, it is highly recommended you complete **Step 1** before you try to troubleshoot the issue (Step 2 onwards).

Check if the Adobe Commerce support ticket exists. For steps, refer to [Track your support tickets](https://support.magento.com/hc/en-us/articles/360000913794#track-tickets) in our support knowledge base. Support may have received a New Relic threshold alert, created a ticket, and started working on the issue. If no ticket exists, create one. The ticket should have the following information:

1. Contact Reason: select “New Relic CRITICAL alert received."
1. Description of the alert.
1. [New Relic Incident link](https://docs.newrelic.com/docs/alerts-applied-intelligence/new-relic-alerts/alert-incidents/view-violation-event-details-incidents). This is included in your [Managed alerts for Adobe Commerce](https://support.magento.com/hc/en-us/articles/360045806832).
1. Use [New Relic APM's Transaction page](https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems) to identify transactions with performance issues:
    * Sort transactions by ascending Apdex scores. [Apdex](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction) refers to user satisfaction to the response time of your web applications and services. A [low Apdex score](https://support.magento.com/hc/en-us/articles/360046422091-Managed-alerts-for-Magento-Commerce-Apdex-warning-alert) can indicate a bottleneck (a transaction with a higher response time). Usually, it is related to the database, Redis, or PHP. For steps, refer to New Relic [View transactions with highest Apdex dissatisfaction](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/view-your-apdex-score#apdex-dissat).
    * Sort transactions by highest throughput, slowest average response time, most time-consuming, and other thresholds. For steps, refer to New Relic [Find specific performance problems](https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems).
1. If you are still struggling to identify the source, use [New Relic APM's Infrastructure page](https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page) to identify resource-heavy services. For steps, refer to New Relic [Infrastructure monitoring Hosts page > Processes tab](https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page#processes-tab).
1. If you identify the source, SSH into the environment to investigate further. For steps, refer to [SSH into your environment for Adobe Commerce on cloud infrastructure](https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh) in our developer documentation.
1. If you are still struggling to identify the source:
    * Review recent trends to identify issues with recent code deployments or configuration changes (for example, new customer groups and large changes to the catalog). It is recommended that you review the past seven days of activity for any correlations in code deployments or changes.
    * Consider checking for and disabling flat catalogs. For steps, refer to [Slow performance, slow and long running crons](https://support.magento.com/hc/en-us/articles/360034631192) in our support knowledge base.
    * If you suspect that you are experiencing a DDoS attack, try blocking bot traffic. For steps, refer to [How to block malicious traffic for Adobe Commerce on cloud infrastructure on Fastly level](https://support.magento.com/hc/en-us/articles/360039447892-How-to-block-malicious-traffic-for-Magento-Commerce-Cloud-on-Fastly-level) in our support knowledge base.
1. If the problem seems temporary, perform mitigation steps such as an upsize or place the site into maintenance mode. For steps, refer to [How to request temp resize](https://support.magento.com/hc/en-us/articles/360041138511) in our support knowledge base and [Installation Guide > Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) in our developer documentation. If the upsize returns the site to normal operations, consider requesting a permanent upsize (contact your CSM) or try to reproduce the problem in your Dedicated Staging by running a load test and optimize queries or code that reduces pressure on services. For steps, refer to [Test Deployment > Load and stress testing](https://devdocs.magento.com/cloud/live/stage-prod-test.html#loadtest) in our developer documentation for Adobe Commerce on cloud infrastructure.
