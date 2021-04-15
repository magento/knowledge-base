---
title: Database errors related to max_allowed_packet on Magento
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,2.3,queries,MySQL,database,data,errors,2.4,tables,max_allowed_packets,connection
---

This article provides a solution for database connection errors in the ``  var/log/exception.log `` that may occur when importing a large number of products or performing another task that forces the server to handle bigger packets than set in `` max_allowed_packet `` that is larger than the default, 16MB.

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).
* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

When a MySQL client or the [mysqld](https://dev.mysql.com/doc/refman/8.0/en/mysqld.html) server receives a packet bigger than [max\_allowed\_packet](https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_allowed_packet) bytes, it issues an [ER\_NET\_PACKET\_TOO\_LARGE](https://dev.mysql.com/doc/mysql-errors/8.0/en/server-error-reference.html#error_er_net_packet_too_large) error (which can be seen in the `` exception.log ``) and closes the connection. With some clients, you may also get a _Lost connection to MySQL server during query error_ if the communication packet is too large.

Steps to reproduce

A variety of tasks can produce this issue. This can include trying to import a large number of products into Magento or transactional queries sending back too much data. The result is database connection errors in `` var/log/exception.log `` and other problems, like products not being successfully imported.

## Cause

The default value of 16MB for the MySQL `` max_allowed_packets `` setting (applies to both Magento Commerce and Magento Commerce Cloud) is not large enough for your needs. 

## Solution

<ol><li>Identify queries where the individual rows exceed the current <code> max_allowed_packet</code> limit. Such queries need to be rewritten to reduce the amount of data being returned. This can be done by having a smaller number of columns in the <code>SELECT</code> statement or choosing a smaller data type for various columns as part of the table design. If you have a New Relic account, use the <a href="https://docs.newrelic.com/docs/apm/apm-ui-pages/error-analytics/errors-page-explore-events-behind-errors">New Relic APM Errors page</a> and the <a href="https://docs.newrelic.com/docs/apm/apm-ui-pages/monitoring/databases-page-view-operations-throughput-response-time">New Relic APM Databases page</a>, and <a href="https://docs.newrelic.com/docs/logs/log-management/get-started/get-started-log-management">New Relic Logs</a> to search for the relevant queries.</li><li>For quick remediation, you can temporarily request the <code>max_allowed_packet</code> size to be increased when you <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a ticket</a>, but this is at the discretion of the Customer Engineering team, as too large of a value can cause replication failures by causing network congestion.</li><li>As a best practice, you should run the following command in your CLI for some of your large database tables:
<pre class="line-numbers"><code class="language-clike">show table status like [table name to match] </code></pre>
Evaluate the queries running on these tables to determine if you are exceeding the recommended <code>max_allowed_packet</code> size of 16MB. Follow the same process in step one to reduce the data being returned by such queries.</li></ol>

## Related reading

* Magento DevDocs [Installation Guide > MySQL](https://devdocs.magento.com/guides/v2.4/install-gde/prereq/mysql.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=max%20allowed%2016%20MB)
* [Database upload loses connection to MySQL](https://support.magento.com/hc/en-us/articles/360037591172)
* [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312)
* [Most common database issues in Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041739651)