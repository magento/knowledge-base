Click on each question to reveal the answer details in each step of the troubleshooter.

<!---------This opens the main level that holds everything.--------------->

<div class="zd-accordion">
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-1">
<h5>Step 1</h5>
<div class="zd-accordion-section">Does https://status.magento.com show any issues?</div>
<p class="zd-accordion-text">a. YES – If you checked <a href="https://status.magento.com" rel="noopener" target="_blank">Magento Status</a> and it showed an issue, Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> for further investigation.<br/> b. NO – If you checked <a href="https://status.magento.com" rel="noopener" target="_blank">Magento Status</a> and it did not show an issue, Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-2">
<h5>Step 2</h5>
<div class="zd-accordion-section">Does http://status.fastly.com show any issues?</div>
<p class="zd-accordion-text">a. YES – If you checked <a href="https://status.fastly.com/" rel="noopener" target="_blank">Fastly Status</a> and it showed an issue, Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> for further investigation.<br/> b. NO – If you checked <a href="https://status.fastly.com/" rel="noopener" target="_blank">Fastly Status</a> and it did not show an issue, Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-3">
<h5>Step 3</h5>
<div class="zd-accordion-section">Check your website in a web browser. Do you get a 200 (OK) code?&nbsp; (To check error codes in <strong>Firefox</strong>: Click the <strong>Open Menu</strong> icon&gt;&gt;<strong>Web Developer</strong>&gt;&gt;<strong>Toggle Tools</strong>&gt;&gt;<strong>Network</strong> tab&gt;&gt;<strong>All</strong> filter&gt;&gt;<strong>Status</strong> column. To check error codes in <strong>Chrome</strong>: Click the <strong>Open Menu</strong> icon&gt;&gt;<strong>More Tools</strong>&gt;&gt;<strong>Developer Tools</strong>&gt;&gt;<strong>Network</strong> tab&gt;&gt;<strong>All</strong> filter&gt;&gt;<strong>Status</strong> column.)</div>
<p class="zd-accordion-text">a. YES – Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> for further investigation.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-4">
<h5>Step 4</h5>
<div class="zd-accordion-section">Which website error code did you receive?</div>
<p class="zd-accordion-text">a. Error Code 500 – Check log of <code>/var/log/platform/&lt;project_id&gt;</code>. If this data does not present the issue to you, you can open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> and include the troubleshooting information you have so far for further investigation.<br/> b. Error Code 503 – Check log of <code>var/reports</code>. If this data does not present the issue to you, you can open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> and include the troubleshooting information you have so far for further investigation.<br/> c. Other Error Codes – Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-5">
<h5>Step 5</h5>
<div class="zd-accordion-section">Is your site slow, or having high server load, high CPU load, slow request processing, or outages in MySQL or Redis?</div>
<p class="zd-accordion-text">a. YES – Proceed with steps for <a href="https://support.magento.com/hc/en-us/articles/360030941932" rel="noopener" target="_blank">Checking for DDOS attacks from CLI</a>.<br/> b. NO – Check logs of <code>/var/log/exception.log</code> and <code>/var/log/deploy.log</code>, and if this data does not present the issue to you, Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-6">
<h5>Step 6</h5>
<div class="zd-accordion-section">Do you have deployment errors or deployment failure?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-13">Step 13</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-7">
<h5>Step 7</h5>
<div class="zd-accordion-section">Do you have Elasticsearch errors?</div>
<p class="zd-accordion-text">a. YES – Proceed with steps for <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/configure-magento.html" rel="noopener" target="_blank">checking Elasticsearch</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-8">
<h5>Step 8</h5>
<div class="zd-accordion-section">Was your MySQL database having slow queries or incorrect queries?</div>
<p class="zd-accordion-text">a. YES – Proceed with <a href="https://support.magento.com/hc/en-us/articles/360030903091" rel="noopener" target="_blank">Checking slow queries and Processes taking too long in MySQL</a> and checking your query structure in this <a href="https://dev.mysql.com/doc/refman/5.5/en/entering-queries.html" rel="noopener" target="_blank">MySQL query tutorial</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-9">
<h5>Step 9</h5>
<div class="zd-accordion-section">Is your static content not available?</div>
<p class="zd-accordion-text">a. YES – Proceed with consulting&nbsp;the <a href="https://support.magento.com/hc/en-us/articles/360031624091" rel="noopener" target="_blank">Checking static content</a> article.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-10">
<h5>Step 10</h5>
<div class="zd-accordion-section">Do you see PHP Fatal Errors in your logs?</div>
<p class="zd-accordion-text">a. YES – Proceed with consulting&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360030568432" rel="noopener" target="_blank">Common PHP Fatal Errors and solutions</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-11">
<h5>Step 11</h5>
<div class="zd-accordion-section">Are you seeing Redis errors?</div>
<p class="zd-accordion-text">a. YES – Proceed with steps to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-session.html#redis-verify" rel="noopener" target="_blank">verify Redis is running</a> and for <a href="https://redis.io/topics/problems" rel="noopener" target="_blank">Redis troubleshooting</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-12">Step 12</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-12">
<h5>Step 12</h5>
<div class="zd-accordion-section">Are you seeing Indexer errors?</div>
<p class="zd-accordion-text">a. YES – If your Index is locked by another process, consult <a href="https://support.magento.com/hc/en-us/articles/360030683752" rel="noopener" target="_blank">Index is locked by another process</a>. If you have other Indexer errors, please open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> for further investigation.<br/> b. NO – Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> for further investigation.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-13">
<h5>Step 13</h5>
<div class="zd-accordion-section">Do you have issues with your custom module(s)?</div>
<p class="zd-accordion-text">a. YES – Proceed to consult <a href="https://support.magento.com/hc/en-us/articles/360031030751" rel="noopener" target="_blank">General custom module troubleshooting help</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-14">Step 14</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-14">
<h5>Step 14</h5>
<div class="zd-accordion-section">Do you have post-hook failures?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking your MySQL error in this <a href="https://dev.mysql.com/doc/refman/5.5/en/server-error-reference.html" rel="noopener" target="_blank">MySQL server error message reference</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-15">Step 15</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-15">
<h5>Step 15</h5>
<div class="zd-accordion-section">Do you have issues with composer patches?</div>
<p class="zd-accordion-text">a. YES – Proceed to consulting <a href="https://support.magento.com/hc/en-us/articles/360030867871" rel="noopener" target="_blank">Applying a patch takes your site down</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-16">Step 16</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-16">
<h5>Step 16</h5>
<div class="zd-accordion-section">Do you have SQL database errors?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking your MySQL error in this <a href="https://dev.mysql.com/doc/refman/5.5/en/server-error-reference.html" rel="noopener" target="_blank">MySQL server error message reference</a>.<br/> b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-17">Step 17</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-17">
<h5>Step 17</h5>
<div class="zd-accordion-section">Do you have MySQL database dead locks or an unresponsive MySQL database?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking for MySQL dead locks in this <a href="https://support.magento.com/hc/en-us/articles/360031622211" rel="noopener" target="_blank">Deadlocks in MySQL</a> article.<br/> b. NO – Open a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" rel="noopener" target="_blank">Support Ticket</a> for further investigation.</p>
</div>
<!---------This closes the main level that holds everything.--------------->
</div>

&nbsp;

<a class="accordion-back-to-step-1" href="#zd-accordion-1">Back to Step 1</a>

&nbsp;

Click <a href="https://support.magento.com/hc/en-us/articles/360031107111" rel="noopener" target="_blank">HERE</a> to see the Site Down Troubleshooting Flowchart.