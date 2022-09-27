---
title: Deadlocks in MySQL
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,MySQL,database,deadlock,import,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article talks about deadlocks in MySQL to help identify and resolve them if they cause a site down, stuck database import, or other Adobe Commerce issues.

## Affected products and versions

* Adobe Commerce on-premises 2.2.x and 2.3.x
* Adobe Commerce on cloud infrastructure 2.2.x and 2.3.x

## Issue

Deadlocks in MySQL occur when two or more transactions mutually hold and request for locks. Deadlocks being present do not always indicate an issue but often are a symptom of some other MySQL or Adobe Commerce issue that has occurred.

Often the application, deployment, or MySQL logs will mention a *"deadlock"* error or the error *"Deadlock found when trying to get lock; try restarting transaction."*

## Cause

Deadlocks can have multiple causes, but the most common is if you perform any interaction (website/processes/cron jobs/other users/MySQL maintenance/MySQL imports) while performing DML/DDL queries at the same time.

As an example, it is a best practice to avoid a stuck MySQL database import by first putting your site in maintenance mode to avoid getting SQL requests to the database that could cause deadlocks and a stuck database import.

## Solution

1. Check your application, deployment, or MySQL logs for deadlock errors:
    * [Adobe Commerce and Magento Open Source log locations](https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html)
    * [Adobe Commerce on cloud infrastructure logs locations](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html)
1. Check your MySQL process list for running processes with the command `mysql -e 'show full processlist';`     
1. If on Adobe Commerce on cloud infrastructure, check that MySQL slave is enabled. Consult this article: [Deploy variables (MYSQL\_USE\_SLAVE\_CONNECTION)](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#mysql_use_slave_connection).
1. Depending on the errors involved, the solution may present itself, or you may need to include your helpful log information if you need to open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

## Related reading

* [How to Minimize and Handle Deadlocks](https://dev.mysql.com/doc/refman/5.7/en/innodb-deadlocks-handling.html)
* [Indexer optimization - Indexer Table Switching](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html#indexer-table-switching)
* [Bulk Operations - Consume Messages](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/message-queues/bulk-operations.html#consume-messages)

>![info]
>
>We are aware that this article may still contain industry-standard software terms that some may find racist, sexist, or oppressive and which may make the reader feel hurt, traumatized, or unwelcome. Adobe is working to remove these terms from our code, documentation, and user experiences.
