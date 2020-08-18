This article talks about deadlocks in MySQL to help identify and resolve them, if they cause a site down, stuck database import, or other Magento issues.

### Affected products and versions

*   Magento Commerce, versions 2.2.x and 2.3.x
*   Magento Commerce Cloud, versions 2.2.x and 2.3.x

## Issue

Deadlocks in MySQL occur when two or more transactions mutually hold and request for locks. Deadlocks being present do not always indicate an issue, but often are a symptom of some other MySQL or Magento issue that has occurred.

Often the application, deployment, or MySQL logs will mention a _"deadlock"_ error or the error _"Deadlock found when trying to get lock; try restarting transaction."_

## Cause

Deadlocks can have multiple causes, but the most common are if you perform any interaction (website/processes/cron jobs/other users/MySQL maintenance/MySQL imports) while performing DML/DDL queries at the same time.

As an example, it is a best practice to avoid a stuck MySQL database import by first putting your site in maintenance mode, to avoid getting SQL requests to the database that could cause deadlocks and a stuck database import.

## Solution

1.   Check your application, deployment, or MySQL logs for deadlock errors:
    
    *   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html" target="_self"><span style="font-size: 15px;">Magento Commerce and Magento Open Source logs locations</span></a>
    *   [Magento Commerce Cloud logs locations](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html)
    
    
    
2.   Check your MySQL process list for running processes with the command
    
    <pre><code class="sql">mysql -e 'show full processlist';</code></pre>
    
    
3.   If on Magento Commerce Cloud, check that MySQL slave is enabled. Consult this article:&nbsp;[Deploy variables (MYSQL\_USE\_SLAVE\_CONNECTION)](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#mysql_use_slave_connection).
4.   Depending on the errors involved, the solution may present itself, or you may need to include your helpful log information if you need to open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related reading

*   <a href="https://dev.mysql.com/doc/refman/5.7/en/innodb-deadlocks-handling.html" target="_self"><span style="font-size: 15px;">How to Minimize and Handle Deadlocks</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html#indexer-table-switching" target="_self"><span style="font-size: 15px;">Indexer optimization - Indexer Table Switching</span></a>
*   [Bulk Operations - Consume Messages](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/message-queues/bulk-operations.html#consume-messages)