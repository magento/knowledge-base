---
title: Troubleshoot performance using New Relic on Adobe Commerce
labels: Apdex,CPU,Magento Commerce Cloud,New Relic,New Relic APM,New Relic Infrastructure,New Relic Magento,New Relic performance,how to,performance,Adobe Commerce,cloud infrastructure
---

This article provides troubleshooting steps to solve Adobe Commerce on cloud infrastructure performance issues using New Relic. It also provides resources for further information. Here is a list of issues. Click to see troubleshooting steps in our support knowledge base:

* [Low Apdex score](https://support.magento.com/hc/en-us/articles/360042149832#low_user_satisfaction)
* [High CPU usage](https://support.magento.com/hc/en-us/articles/360042149832#high_cpu_usage)
* [High I/O operations](https://support.magento.com/hc/en-us/articles/360042149832#i_o_operations)
* [Outage](https://support.magento.com/hc/en-us/articles/360042149832#outage)

<table>
<tbody>
<tr>
<td>Issue</td>
<td>Troubleshooting</td>
<td>Resources</td>
</tr>
<tr>
<td>
<p>Low Apdex score:</p>
<p>Your New Relic <a href="https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measuring-user-satisfaction">Apdex score</a> measures users' satisfaction with the response time of your web applications and services.</p>
</td>
<td>
<p>You log in to <a href="https://login.newrelic.com/login">New Relic</a> > APM > Overview. On the right side of the Overview page you see the Apdex score graph. An Apdex score of 0.5 or less is a point of concern and warrants investigation: Web-transaction times (server requests):</p>
<ol>
<ol>
<li>Log in to <a href="https://login.newrelic.com/login">New Relic</a> > APM > (Select an app) > Overview. Make sure the filter is set to Web transactions time on the main chart drop-down filter. Below in the Transactions table, look for App server time. Verify if you have any long-running or suspicious transactions.</li>
<li>Investigate them individually by going to Monitoring > Transactions and make sure to set the filters for Web and Most time-consuming<em>.</em>
</li>
<li>Then search for third-party modules that consume resources: payment providers, ERP, etc.</li>
<li>In the Monitoring section of APM:<ol>
<li>Click Transactions.</li>
<li>Scroll down, click Show all transactions table.</li>
<li>You can sort transactions by <a href="https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems#table_view">various parameters</a> and jump to those that cause suspicion.</li>
<li>Review those transactions with a low Apdex score, unusually high Count or high Avg time, or Dissat %.</li>
<li>Click on each individual transaction. If you cannot resolve the issue, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket.</a>
</li>
<li>If you need to investigate further, consider checking non-web transactions.</li>
</ol>
</li>
</ol>
</ol>
<p>Non-web-transaction time (operations and background tasks):</p>
<ol>
<ol>
<li>Log in to <a href="https://login.newrelic.com/login">New Relic</a> > APM > (Select an app) > Overview. Make sure you select Non-web transactions time on the main graph drop-down filter. Click individual transactions in the Transactions table. Look for long-running or suspicious transactions. This includes backend jobs, cron jobs or import/export jobs, including third-party.</li>
</ol>
</ol>
</td>
<td>
<p>To learn more about New Relic Apdex score, refer to <a href="https://docs.newrelic.com/docs/apm/new-relic-apm/apdex/apdex-measure-user-satisfaction">New Relic Documentation > APM Apdex > Measure user satisfaction</a>. You may also refer to <a href="https://support.magento.com/hc/en-us/articles/360046422091-Managed-alerts-for-Magento-Commerce-Apdex-warning-alert">Managed alerts for Adobe Commerce: Apdex warning alert</a> in our support knowledge base.</p>
</td>
</tr>
<tr>
<td>
<p>High CPU usage:</p>
<p>High CPU usage can indicate there is a particularly busy service, like MySQL, Redis, etc.</p>
</td>
<td>
<ol>
<li>Log in to <a href="https://login.newrelic.com/login">New Relic</a> > Infrastructure > Processes.</li>
<li>Review CPU graphs to see if there is any stuck or high-consuming process that is using more than 100% CPU time and compare against processor count on the instance. Pay attention to peaks in resource utilization. It is not recommended that you kill a process unless it is a stuck cron.</li>
</ol>
</td>
<td>
<p>To learn more about performance metrics, particularly CPU percentage, I/O bytes, and memory usage for individual or groups of processes, refer to <a href="https://docs.newrelic.com/docs/infrastructure/infrastructure-ui-pages/infrastructure-ui/infrastructure-hosts-page#processes-tab">New Relic Documentation > Infrastructure UI page > Infrastructure Host page > Processes tab</a>.</p>
<h1>
<a href="#-"></a> </h1>
<a href="https://docs.newrelic.com/docs/apm/new-relic-apm/troubleshooting/cpu-usage-mismatch-or-usage-over-100#cause"></a>
</td>
</tr>
<tr>
<td>
<p>High I/O operations: For each customer, this number would be individual but will be significantly different from the average.</p>
</td>
<td>
<p>Look for an unusual spike compared to previous average I/O operations:</p>
<ol>
<li>Log in to <a href="https://login.newrelic.com/login">New Relic</a> > Infrastructure > Processes.</li>
<li>Review I/O Read Bytes Per Second graph.</li>
<li>Record the time of the spike.</li>
<li>Click on APM.</li>
<li>Make sure you select web transactions time on the main graph drop-down filter.</li>
<li>Set the time for the time of the spike you recorded.</li>
<li>Search for transactions that have caused high I/O operations.</li>
<li>Drill down into each Transaction trace > Trace details to find what might be causing issues.</li>
</ol>
</td>
</tr>
<tr>
<td>
<p>Outage: New Relic determines outages by Apdex. You will see a red line on the Apdex score graph, which indicates Apdex < 0.4, which is considered an outage.</p>
</td>
<td>
<p>Investigating an outage may take several steps, examining web and non-web transactions, databases and third-party transactions. Web Transactions:</p>
<ol>
<li>Log in to <a href="https://login.newrelic.com/login">New Relic</a> > APM > Overview. Make sure the filter is set to Web transactions time on the drop-down graph filter.</li>
<li>Manually narrow the time window.</li>
<li>Click on Transactions. Make sure the filters are set to Web and Most time-consuming. Investigate the longest-running transaction.</li>
<li>If you need to investigate further, consider checking non-web transactions.</li>
</ol>
<p>Non-web Transactions:</p>
<ol>
<li>Go back to the Overview page and switch to Non-web transactions on the drop-down filter.</li>
<li>Review transaction traces at the very bottom of the page, one by one.</li>
<li>Depending on the issue, you may need to use a third-party tool like a PHP profiler to find a bottleneck.</li>
<li>If you need to investigate further, consider examining database processes.</li>
</ol>
<p>Database processes:</p>
<ol>
<li>On the APM page, go to Monitoring > Databases.</li>
<li>Sort by Most time-consuming.</li>
<li>Review TOP queries.

Note: <code>UPDATE</code> or <code>INSERT</code>queries are the most CPU-consuming queries.</li>
<li>Switch to Throughput from Sort by selector and look for processes that have caused the database throughput to drop-down.</li>
<li>If you need to investigate further, consider examining third-party services.</li>
</ol>
<p>Third-party services:</p>
<ol>
<li>On the APM page, go to Monitoring > External services.</li>
<li>Select the Slowest average response time from Sort by drop-down list.</li>
<li>Look for processes that occurred just before the outage.</li>
</ol>
</td>
<td>
<p>To learn more about investigating specific performance problems, refer to <a href="https://docs.newrelic.com/docs/apm/applications-menu/monitoring/transactions-page-find-specific-performance-problems#tx_functions">New Relic Documentation > APM UI pages > Transactions page > Use drill-down functions</a>.</p>
</td>
</tr>
</tbody>
</table>
