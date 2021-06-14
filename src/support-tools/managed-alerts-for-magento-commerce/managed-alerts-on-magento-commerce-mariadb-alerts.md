---
title: "Managed alerts on Magento Commerce: MariaDB alerts"
labels: "Magento Commerce Cloud,MariaDB,New Relic,Pro,alert,data,database,mysql,performance,queries,support tools,warning"
---

This article provides troubleshooting steps when you receive MariaDB alerts for Magento Commerce in New Relic. The MariaDB alerts monitor high query load as well as excessive Data Manipulation Language (DML) queries. Both can lead to a degraded user experience or even downtime. You can receive four kinds of alerts:

* DML Queries Warning
* DML Queries Critical

## **Affected products and versions** 

Magento Commerce Cloud Pro

## Issue

You will receive a managed alert in New Relic if you have signed up to [Managed alerts for Magento Commerce](https://support.magento.com/hc/en-us/articles/360045806832) and one or more of the alert thresholds have been surpassed. These alerts were developed by Magento to give customers a standard set using insights from Support and Engineering.

 **<u>Do!</u>** 

* Abort any deployment scheduled until this alert is cleared.
* Put your site into maintenance mode immediately if your site is or becomes completely unresponsive. For steps refer to DevDocs [Installation Guide > Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) . Make sure to add your IP to the exempt IP address list to ensure that you are still able to access your site for troubleshooting. For steps, refer to DevDocs [Maintain the list of exempt IP addresses](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten#instgde-cli-maint-exempt) .
* End any scripts such as imports that may be the cause of the alert if site performance is impacted.

 **<u>Don't!</u>** 

* Run indexers or additional crons which may cause additional stress on MariaDB.
* Do any major administrative tasks (i.e., Magento Admin, data imports / exports).
* Clear your cache.

## Solution

 <span class="wysiwyg-underline"> **DML Queries (queries that modify the database using UPDATE, INSERT, and DELETE)** </span> 

If you receive a DML Queries Critical alert start at step one. If you receive a DML Queries Warning alert start at step two.

1. Check if a Magento support ticket exists. For steps, refer to KB [Track your support tickets](https://support.magento.com/hc/en-us/articles/360000913794#track-tickets) . Support may have received a New Relic threshold alert, created a ticket and started working on the issue. If no ticket exists, create one. The ticket should have the following information:
1. Contact Reason: select “New Relic MariaDB alert received".
1. Description of the alert.
1. [New Relic Incident link](https://docs.newrelic.com/docs/alerts-applied-intelligence/new-relic-alerts/alert-incidents/view-violation-event-details-incidents) . This is included in your [Managed alerts for Magento Commerce](https://support.magento.com/hc/en-us/articles/360045806832) .

1. To identify the source of the issue, try to identify the DML queries:    
1. Review your database operations by using steps from New Relic [APM UI Pages > Monitoring > Databases page](https://docs.newrelic.com/docs/apm/apm-ui-pages/monitoring/databases-page-view-operations-throughput-response-time) .
1. Sort by CALL COUNT, then OPERATION. Review INSERT, DELETE, and UPDATE operations.
1. Look for high AVG.
1. Click through to find database operation callers. This will identify transactions using that query by time.

1. Seek out either code optimizations, or operational optimizations:
1. Code optimizations: Look to optimize queries with bulk inserts / updates, minimizing index usage, or throttling code.
1. Operational optimizations: Offload resource intensive data modifications to lower traffic times.
1. Additional optimizations: Ensure that you are on the latest version of ECE-Tools. For steps, refer to DevDocs [Magento Commerce Cloud > Update ece-tools version](https://devdocs.magento.com/cloud/project/ece-tools-update.html) .

 <span class="wysiwyg-underline"> **Related Reading** </span> 

* To research other common MariaDB issues, refer to [Most common database issues in Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041739651) .
* To research database best practices, refer to [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312) .

