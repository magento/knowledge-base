---
title: Database errors related to max_allowed_packet on Magento
link: https://support.magento.com/hc/en-us/articles/360051598831-Database-errors-related-to-max-allowed-packet-on-Magento
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,2.3,queries,MySQL,database,data,errors,2.4,tables,max_allowed_packets,connection
---

<p>This article provides a solution for database connection errors in the <code> var/log/exception.log</code> that may occur when importing a large number of products or performing another task that forces the server to handle bigger packets than set in <code>max_allowed_packet</code> that is larger than the default, 16MB.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>.</li>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>.</li>
</ul>
<h2>Issue</h2>
<p>When a MySQL client or the <a href="https://dev.mysql.com/doc/refman/8.0/en/mysqld.html">mysqld</a> server receives a packet bigger than <a href="https://dev.mysql.com/doc/refman/8.0/en/server-system-variables.html#sysvar_max_allowed_packet">max_allowed_packet</a> bytes, it issues an <a href="https://dev.mysql.com/doc/mysql-errors/8.0/en/server-error-reference.html#error_er_net_packet_too_large">ER_NET_PACKET_TOO_LARGE</a> error (which can be seen in the <code>exception.log</code>) and closes the connection. With some clients, you may also get a <em>Lost connection to MySQL server during query error</em> if the communication packet is too large.</p>
<p>Steps to reproduce</p>
<p>A variety of tasks can produce this issue. This can include trying to import a large number of products into Magento or transactional queries sending back too much data. The result is database connection errors in <code>var/log/exception.log</code> and other problems, like products not being successfully imported.</p>
<h2>Cause</h2>
<p>The default value of 16MB for the MySQL <code>max_allowed_packets</code> setting (applies to both Magento Commerce and Magento Commerce Cloud) is not large enough for your needs. </p>
<h2>Solution</h2>
<ol>
<li>Identify queries where the individual rows exceed the current <code> max_allowed_packet</code> limit. Such queries need to be rewritten to reduce the amount of data being returned. This can be done by having a smaller number of columns in the <code>SELECT</code> statement or choosing a smaller data type for various columns as part of the table design. If you have a New Relic account, use the <a href="https://docs.newrelic.com/docs/apm/apm-ui-pages/error-analytics/errors-page-explore-events-behind-errors">New Relic APM Errors page</a> and the <a href="https://docs.newrelic.com/docs/apm/apm-ui-pages/monitoring/databases-page-view-operations-throughput-response-time">New Relic APM Databases page</a>, and <a href="https://docs.newrelic.com/docs/logs/log-management/get-started/get-started-log-management">New Relic Logs</a> to search for the relevant queries.</li>
<li>For quick remediation, you can temporarily request the <code>max_allowed_packet</code> size to be increased when you <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a ticket</a>, but this is at the discretion of the Customer Engineering team, as too large of a value can cause replication failures by causing network congestion.</li>
<li>As a best practice, you should run the following command in your CLI for some of your large database tables:
<pre class="line-numbers"><code class="language-clike">show table status like [table name to match] </code></pre>
Evaluate the queries running on these tables to determine if you are exceeding the recommended <code>max_allowed_packet</code> size of 16MB. Follow the same process in step one to reduce the data being returned by such queries.</li>
</ol>
<h2>Related reading</h2>
<ul>
<li>Magento DevDocs <a href="https://devdocs.magento.com/guides/v2.4/install-gde/prereq/mysql.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=max%20allowed%2016%20MB">Installation Guide &gt; MySQL</a>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360037591172">Database upload loses connection to MySQL</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360041997312">Database best practices for Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360041739651">Most common database issues in Magento Commerce Cloud</a></li>
</ul>