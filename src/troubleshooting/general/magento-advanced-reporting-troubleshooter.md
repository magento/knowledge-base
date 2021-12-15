---
title: Advanced Reporting troubleshooter for Adobe Commerce
labels: 2.3.x,2.4,404 error,Advanced Reporting,Magento Commerce,Magento Commerce Cloud,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

Advanced Reporting issues on Adobe Commerce can be solved using this troubleshooter tool. This includes Advanced Reporting not showing any data and 404 errors. Click on each question to reveal the answer in each step of the troubleshooter.
<!---------This opens the main level that holds everything.--------------->
<div class="zd-accordion">
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-1" class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">You have a 404 Error page when using Advanced Reporting. Does your website meet <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#requirements">Advanced Reporting Requirements</a>?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br>b. NO – Complete the Advanced Reporting requirements for your site by following the steps in <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#requirements">Advanced Reporting Requirements</a>. Then, proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-2" class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">Are multiple base currencies currently being used (in orders and configuration)? Run this SQL command:<code><br>SELECT value FROM core_config_data WHERE path = 'currency/options/base';</code>
</div>
<p class="zd-accordion-text">a. YES – You cannot use Advanced Reporting, as we only support one currency. <br>b. NO – Output shows only one currency. Example: <code>USD</code>. Have multiple base currencies ever been used (in orders)? Run this SQL command:<br>
<code>SELECT DISTINCT base_currency_code FROM sales_order;</code><br>
<strong>NOTE: This command requires a full table scan, so for tables with high numbers of records, this could have a performance impact whilst the query is executing</strong><br> If multiple base currencies have ever been used you cannot use Advanced Reporting, as we only support one currency. If the output shows only one currency proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-3" class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">Are you using <a href="https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master.html">Spilt Database Solution</a>?</div>
<p class="zd-accordion-text">a. YES –  Use the patch <strong>MDVA-26831</strong> in <a href="https://support.magento.com/hc/en-us/articles/360044725072-Advanced-Reporting-404-error-on-split-database-solution">Advanced Reporting 404 error on split database solution</a> and clear cache. Wait for 24 hours for the job to run again and try again.<br>b. NO –  Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-4" class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">Is Advanced Reporting enabled? Check <strong>Admin</strong> > <strong>Stores</strong> > <strong>Settings</strong> > <strong>Configuration</strong> > <strong>General</strong> > <strong>Advanced</strong>. For detailed steps, review <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting">Advanced Reporting: Enable Advanced Reporting</a>.</div>
<p class="zd-accordion-text">a. YES –  Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.<br>b. NO – <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting">Enable Advanced Reporting</a> and save, and wait 24 hours for Adobe Commerce and Advanced Reporting to synchronize. Check if your data now loads. If it does you have solved the issue. If it does not proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.</p>
</div>
<p></p>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-5" class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Check that there is a token by running the following query: <code>SELECT * FROM core_config_data WHERE path LIKE 'analytics/general/token' \G</code> Is there a token?</div>
<p class="zd-accordion-text">a. YES –  Proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>. <br>b. NO –  If token value is NULL or there is no record in the database, proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<p></p>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-6" class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">Check counter value in flag table by running this query: <code>SELECT * FROM `flag`  where `flag_code` = 'analytics_link_subscription_update_reverse_counter'\G;</code> Does the query return the row?</div>
<p class="zd-accordion-text">a. YES – Take the following steps:    1. Run the query below: <br><code>DELETE from `flag` where
        `flag_code` =  'analytics_link_subscription_update_reverse_counter';</code><br>2. <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting">Disable and Enable Advanced Reporting module</a> in settings and <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#verify-that-the-integration-is-active">reauthorize the token</a>.<br>  3. Wait 24 hours for Adobe Commerce and Advanced Reporting to synchronize. If you still can't see data in Advanced Reporting, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>. <br>b. NO –  If the query does not return anything, take the following steps:   1. <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting">Disable and Enable Advanced Reporting module</a> in settings and <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#verify-that-the-integration-is-active">reauthorize the token</a>.  <br> 2. Wait 24 hours for Adobe Commerce and Advanced Reporting to synchronize. If you still can't see data in Advanced Reporting, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</p>
</div>
<p></p>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-7" class="zd-accordion-panel">
<h5>Step 7</h5>
<div class="zd-accordion-section">Are there are records in the <code>cron_schedule</code> table? Check that job <code>analytics_collect_data</code> was executed by running this query: <code>SELECT * FROM cron_schedule WHERE job_code LIKE 'analytics_collect_data' \G</code>
</div>
<p class="zd-accordion-text">a. YES –  If there are records and the <strong>status</strong> column says <em>missed</em>, use the patch in this KB article <a href="https://support.magento.com/hc/en-us/articles/360037681092">Update Advanced Reporting to run on its own cron group</a>.
<br>b. YES –  If there are records and the <strong>status</strong> column says <em>success</em>, proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.
<br>c. YES – If there are records and the <strong>status</strong> column says <em>error</em>, proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8.</a>
<br>d. NO –  If there are no records, proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-8" class="zd-accordion-panel">
<h5>Step 8</h5>
<div class="zd-accordion-section">Was the job logged in <code>support_report.log</code>? Run the command: <code>zgrep
        analytics_collect_data var/log/support_report.log var/log/support_report.log.1.gz
        | tail</code>
</div>
<p class="zd-accordion-text">a. YES – If the output from the query indicates a successful job, for example <code>Cron
          Job analytics_collect_data is successfully finished</code> proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.<br>b. NO  –  If there are no records in the log, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.<br>c. YES  – If there are records but there is an error, proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-9" class="zd-accordion-panel">
<h5>Step 9</h5>
<div class="zd-accordion-section">Does the file <code>data.tgz</code> exist in the system and are there are records in access logs? To check that the file <code>data.tgz</code> exists, run command: <code>ls
        -ltr  pub/media/analytics/<there should be a directory with
        hash name>/</code> To check that there are records in access.logs, run command: <code>zgrep -i analytics  /var/log/platform/<PATH to access log>/access.log* | grep MagentoBI</code>
</div>
<p class="zd-accordion-text">a. YES – If the file <code>data.tgz</code> is present and there are records in the access logs, but you still have a 404 error, you need to <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.<br>b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div id="zd-accordion-9" class="zd-accordion-panel">
<h5>Step 10</h5>
<div class="zd-accordion-section">Is there an error caused by Page Builder? Example: <code>report.ERROR: Cron Job analytics_collect_data has an error: substr_count() expects parameter 1 to be string, null given. Statistics: {"sum":0,"count":1,"realmem":0,"emalloc":0,"realmem_start":224919552,"emalloc_start":216398384} [] []</code>
</div>
<p class="zd-accordion-text">a. YES – Use the MDVA-19391 patch in <a href="https://support.magento.com/hc/en-us/articles/360044350992">Common Advanced Reporting cron job errors on Adobe Commerce</a>, wait 24 hours for the job to run again and try again. <br>b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</p>
</div>
<p><a href="#zd-accordion-1">Back to Step 1</a></p>
</div>
</div>
</div>
