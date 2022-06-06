---
title: Adobe Commerce site down troubleshooter
labels: Magento Commerce,Magento Commerce Cloud,Troubleshooter,decision,down,how to,site,tree,Adobe Commerce,cloud infrastructure,on-premises
---

Click on each question to reveal the answer details in each step of the troubleshooter.

<div class="zd-accordion">
<div id="zd-accordion-1" class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">Does https://status.adobe.com show any issues?</div>
<p class="zd-accordion-text">a. YES – If you checked <a href="https://status.adobe.com/products/3350">Adobe Magento Status</a> and it showed an issue, open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> for further investigation.<br>
b. NO – If you checked <a href="https://status.adobe.com/products/3350">Adobe Magento Status</a> and it did not show an issue, proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-2" class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">Does http://status.fastly.com show any issues?</div>
<p class="zd-accordion-text">a. YES – If you checked <a href="https://status.fastly.com/">Fastly Status</a> and it showed an issue, open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> for further investigation.<br>
b. NO – If you checked <a href="https://status.fastly.com/">Fastly Status</a> and it did not show an issue, proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-3" class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">Check your website in a web browser. Do you get a 200 (OK) code?  (To check error codes in <strong>Firefox</strong>: Click the <strong>Open Menu</strong> icon>><strong>Web Developer</strong>>><strong>Toggle Tools</strong>>><strong>Network</strong> tab>><strong>All</strong> filter>><strong>Status</strong> column. To check error codes in <strong>Chrome</strong>: Click the <strong>Open Menu</strong> icon>><strong>More Tools</strong>>><strong>Developer Tools</strong>>><strong>Network</strong> tab>><strong>All</strong> filter>><strong>Status</strong> column.)</div>
<p class="zd-accordion-text">a. YES – Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> for further investigation.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-4" class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">Which website error code did you receive?</div>
<p class="zd-accordion-text">a. Error Code 500 – Check log of <code>/var/log/platform/<project_id></code>. If this data does not present the issue to you, you can open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> and include the troubleshooting information you have so far for further investigation.</p><br>
<p class="zd-accordion-text">b. Error Code 503 – Check log of <code>var/reports</code>. If this data does not present the issue to you, you can open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> and include the troubleshooting information you have so far for further investigation.</p>
<p class="zd-accordion-text">c. Error Code 404 - Run the following query:
<code>SELECT f.flag_data->>'$.current_version' as flag_version, (su.id IS NOT NULL) as update_exists FROM flag f LEFT JOIN staging_update su ON su.id = f.flag_data->>'$.current_version' WHERE flag_code = 'staging';</code> If the query returns a table, where <code>update_exists</code> value is "0", refer to the <a href="https://support.magento.com/hc/en-us/articles/360000262174">Error 404 on all pages, storefront and Admin, due to Content Staging issue</a> article. In all other cases proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.</p>
<p class="zd-accordion-text">d. Other Error Codes – Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-5" class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Is your site slow, or having high server load, high CPU load, slow request processing, or outages in MySQL or Redis?</div>
<p class="zd-accordion-text">a. YES – Proceed with steps for <a href="https://support.magento.com/hc/en-us/articles/360030941932">Checking for DDOS attacks from CLI</a>.<br>
b. NO – Check logs of <code>/var/log/exception.log</code> and <code>/var/log/deploy.log</code>, and if this data does not present the issue to you, proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-6" class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">Do you have deployment errors or deployment failure?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-13">Step 13</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-7" class="zd-accordion-panel">
<h5>Step 7</h5>
<div class="zd-accordion-section">Do you have Elasticsearch errors?</div>
<p class="zd-accordion-text">a. YES – Proceed with steps for <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/configure-magento.html">checking Elasticsearch</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-8" class="zd-accordion-panel">
<h5>Step 8</h5>
<div class="zd-accordion-section">Was your MySQL database having slow queries or incorrect queries?</div>
<p class="zd-accordion-text">a. YES – Proceed with <a href="https://support.magento.com/hc/en-us/articles/360030903091">Checking slow queries and Processes taking too long in MySQL</a> and checking your query structure in this <a href="https://dev.mysql.com/doc/refman/5.5/en/entering-queries.html">MySQL query tutorial</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-9" class="zd-accordion-panel">
<h5>Step 9</h5>
<div class="zd-accordion-section">Is your static content not available?</div>
<p class="zd-accordion-text">a. YES – Proceed with consulting the <a href="https://support.magento.com/hc/en-us/articles/360031624091">Checking static content</a> article.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-10" class="zd-accordion-panel">
<h5>Step 10</h5>
<div class="zd-accordion-section">Do you see PHP Fatal Errors in your logs?</div>
<p class="zd-accordion-text">a. YES – Proceed with consulting <a href="https://support.magento.com/hc/en-us/articles/360030568432">Common PHP Fatal Errors and solutions</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-11" class="zd-accordion-panel">
<h5>Step 11</h5>
<div class="zd-accordion-section">Are you seeing Redis errors?</div>
<p class="zd-accordion-text">a. YES – Proceed with steps to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-session.html#redis-verify">verify Redis is running</a> and for <a href="https://redis.io/topics/problems">Redis troubleshooting</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-12">Step 12</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-12" class="zd-accordion-panel">
<h5>Step 12</h5>
<div class="zd-accordion-section">Are you seeing Indexer errors?</div>
<p class="zd-accordion-text">a. YES – If your Index is locked by another process, consult <a href="https://support.magento.com/hc/en-us/articles/360030683752">Index is locked by another process</a>. If you have other Indexer errors, please open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> for further investigation.<br>
b. NO – Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> for further investigation.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-13" class="zd-accordion-panel">
<h5>Step 13</h5>
<div class="zd-accordion-section">Do you have issues with your custom module(s)?</div>
<p class="zd-accordion-text">a. YES – Proceed to consult <a href="https://support.magento.com/hc/en-us/articles/360031030751">General custom module troubleshooting help</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-14">Step 14</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-14" class="zd-accordion-panel">
<h5>Step 14</h5>
<div class="zd-accordion-section">Do you have post-hook failures?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking your MySQL error in this <a href="https://dev.mysql.com/doc/mysql-errors/5.7/en/server-error-reference.html">MySQL server error message reference</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-15">Step 15</a>.</p>
</div>
<div id="zd-accordion-15" class="zd-accordion-panel">
<div class="zd-accordion-panel">
<h5>Step 15</h5>
<div class="zd-accordion-section">Do you have issues with composer patches?</div>
<p class="zd-accordion-text">a. YES – Proceed to consulting <a href="https://support.magento.com/hc/en-us/articles/360030867871">Applying a patch takes your site down</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-16">Step 16</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-16" class="zd-accordion-panel">
<h5>Step 16</h5>
<div class="zd-accordion-section">Do you have SQL database errors?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking your MySQL error in this <a href="https://dev.mysql.com/doc/mysql-errors/5.7/en/server-error-reference.html">MySQL server error message reference</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-17">Step 17</a>.</p>
</div>
<div class="zd-accordion-panel">
<div id="zd-accordion-17" class="zd-accordion-panel">
<h5>Step 17</h5>
<div class="zd-accordion-section">Do you have MySQL database dead locks or an unresponsive MySQL database?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking for MySQL dead locks in this <a href="https://support.magento.com/hc/en-us/articles/360031622211">Deadlocks in MySQL</a> article.<br>
b. NO – Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">Support Ticket</a> for further investigation.</p>
</div>
</div>

 [Back to Step 1](#zd-accordion-1)

Click [HERE](https://support.magento.com/hc/en-us/articles/360031107111) to see the Site Down Troubleshooting Flowchart.
