---
title: Deadlocks in MySQL
link: https://support.magento.com/hc/en-us/articles/360031622211-Deadlocks-in-MySQL
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,import,MySQL,database,deadlock,2.3.x,2.2.x
---

<p>This article talks about deadlocks in MySQL to help identify and resolve them, if they cause a site down, stuck database import, or other Magento issues.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, versions 2.2.x and 2.3.x</li>
<li>Magento Commerce Cloud, versions 2.2.x and 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Deadlocks in MySQL occur when two or more transactions mutually hold and request for locks. Deadlocks being present do not always indicate an issue, but often are a symptom of some other MySQL or Magento issue that has occurred.</p>
<p>Often the application, deployment, or MySQL logs will mention a <em>"deadlock"</em> error or the error <em>"Deadlock found when trying to get lock; try restarting transaction."</em></p>
<h2>Cause</h2>
<p>Deadlocks can have multiple causes, but the most common are if you perform any interaction (website/processes/cron jobs/other users/MySQL maintenance/MySQL imports) while performing DML/DDL queries at the same time.</p>
<p>As an example, it is a best practice to avoid a stuck MySQL database import by first putting your site in maintenance mode, to avoid getting SQL requests to the database that could cause deadlocks and a stuck database import.</p>
<h2>Solution</h2>
<ol>
<li>Check your application, deployment, or MySQL logs for deadlock errors:
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html">Magento Commerce and Magento Open Source logs locations</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html">Magento Commerce Cloud logs locations</a></li>
</ul>
</li>
<li>Check your MySQL process list for running processes with the command
<pre><code class="sql">mysql -e 'show full processlist';</code></pre>
</li>
<li>If on Magento Commerce Cloud, check that MySQL slave is enabled. Consult this article: <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#mysql_use_slave_connection">Deploy variables (MYSQL_USE_SLAVE_CONNECTION)</a>.</li>
<li>Depending on the errors involved, the solution may present itself, or you may need to include your helpful log information if you need to open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a>.</li>
</ol>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://dev.mysql.com/doc/refman/5.7/en/innodb-deadlocks-handling.html">How to Minimize and Handle Deadlocks</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html#indexer-table-switching">Indexer optimization - Indexer Table Switching</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/message-queues/bulk-operations.html#consume-messages">Bulk Operations - Consume Messages</a></li>
</ul>
