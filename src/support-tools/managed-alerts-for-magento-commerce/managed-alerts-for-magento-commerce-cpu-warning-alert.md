---
title: Managed alerts for Magento Commerce: CPU warning alert
labels: Apdex,CPU,Magento Commerce Cloud,New Relic,Pro,alert,how to,maintenance mode,threshold,troubleshooting,warning
---

This article provides troubleshooting steps when you receive a CPU warning alert for Magento Commerce in New Relic. Immediate action is required to remedy the issue. The alert will look something like the following, depending on the alert notification channel you selected.
![cpu-warning-magento-managed.png](assets/cpu-warning-magento-managed.png)

## Affected products and versions

Magento Commerce Cloud Pro.

## Issue

You will receive an alert in New Relic if you have signed up to [Managed alerts for Magento Commerce](https://support.magento.com/hc/en-us/articles/360045806832) and one or more of the alert thresholds have been surpassed. These alerts were developed by Magento to give customers a standard set using insights from Support and Engineering.

 <span class="wysiwyg-underline"> **Do!** </span> 

* Abort any deployment scheduled until this alert is cleared.
* Put your site into maintenance mode immediately if your site is completely unresponsive. For steps refer to DevDocs [Installation Guide> Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) . Make sure to add your IP to the exempt IP address list to ensure that you are still able to access your site for troubleshooting. For steps, refer to DevDocs [Maintain the list of exempt IP addresses](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten#instgde-cli-maint-exempt) .

 ** <span class="wysiwyg-underline">Don't!</span> ** 

* Launch additional marketing campaigns which may bring additional pageviews to your site.
* Run indexers or additional crons which may cause additional stress on CPU or disk.
* Do any major administrative tasks (i.e., Magento Admin, data imports / exports).
* Clear your cache.

## Solution

Follow these steps to identify and troubleshoot the cause.

1. Use [New Relic APM's Transaction page](https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems) to identify transactions with performance issues:
    * Sort transactions by ascending Apdex scores. [Apdex](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction) refers to user satisfaction to the response time of your web applications and services. [A low Apdex score](https://support.magento.com/hc/en-us/articles/360042149832#low_user_satisfaction) can indicate a bottleneck (a transaction with a higher response time). Usually it is the database, Redis, or PHP. For steps, refer to New Relic [View transactions with highest Apdex dissatisfaction](https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/view-your-apdex-score#apdex-dissat) .
    * Sort transactions by highest throughput, slowest average response time, most time-consuming, and other thresholds. For steps, refer to New Relic [Find specific performance problems](https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems) .
1. If you are still struggling to identify the source, use [New Relic APM's Infrastructure page](https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page) to identify resource heavy services. For steps, refer to New Relic [Infrastructure monitoring Hosts page > Processes tab](https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page#processes-tab) .
1. If you identify the source, SSH into the environment to investigate further. For steps, refer to DevDocs [Magento Commerce Cloud > SSH into your environment](https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh) .
1. If you are still struggling to identify the source:

    * Review recent trends to identify issues with recent code deployments or configuration changes (for example, new customer groups and large changes to the catalog). It is recommended that you review the past 7 days of activity for any correlations in code deployments or changes.
    * Consider checking for and disabling flat catalogs. For steps, refer to [Slow performance, slow and long running crons.](https://support.magento.com/hc/en-us/articles/360034631192) 
    * If you suspect that you are experiencing a DDoS attack, try blocking bot traffic. For steps, refer to [How to block malicious traffic for Magento Commerce Cloud on Fastly level.](https://support.magento.com/hc/en-us/articles/360039447892-How-to-block-malicious-traffic-for-Magento-Commerce-Cloud-on-Fastly-level) 
1. If the problem seems temporary, perform mitigation steps such as an upsize or place the site into maintenance mode. For steps, refer to KB [How to request temp resize](https://support.magento.com/hc/en-us/articles/360041138511) and DevDocs [Installation Guide > Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) for steps. If the upsize returns the site to normal operations, consider requesting a permanent upsize (contact your CSM) or try to reproduce the problem in your Dedicated Staging by running a load test and optimize queries, or code that reduces pressure on services. For steps, refer to DevDocs [Magento Commerce Cloud  > Test Deployment > Load and stress testing](https://devdocs.magento.com/cloud/live/stage-prod-test.html#loadtest) .
