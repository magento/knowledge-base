Advanced Reporting issues can be solved using the Advanced Reporting troubleshooter tool. This includes Advanced Reporting not showing any data and 404 errors. Click on each question to reveal the answer in each step of the troubleshooter.&nbsp;

<!---------This opens the main level that holds everything.--------------->

<div class="zd-accordion">
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-1">
<h5>Step 1</h5>
<div class="zd-accordion-section">You have a 404 Error page when using Advanced Reporting. Does your website meet <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#requirements" rel="noopener" style="background-color: #ffffff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;" target="_blank">Advanced Reporting Requirements</a>?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br/> b. NO – Complete the Advanced Reporting requirements for your site by following the steps in <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#requirements" rel="noopener" target="_blank">Advanced Reporting Requirements</a>. Then, proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.</p>
</div>
<!---------This opens the main level that holds everything.--------------->
<div class="zd-accordion">
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-2">
<h5>Step 2</h5>
<div class="zd-accordion-section">Is&nbsp;multiple currency being used (in orders and configuration)? Run this command:<br/> <code>php bin/magento config:show currency | grep 'currency/options'</code>
</div>
<p class="zd-accordion-text">a. YES – You cannot use Advanced Reporting, as we only support one currency.&nbsp;<br/> b. NO –&nbsp; Output shows only one currency. Example:<br/> &nbsp;&nbsp;&nbsp;<code>currency/options/base - USD</code><br/> &nbsp;&nbsp;&nbsp;<code>currency/options/default - USD
</code><br/> &nbsp;&nbsp;&nbsp;<code>currency/options/allow - USD</code><br/> Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<!---------This opens the main level that holds everything.--------------->
<div class="zd-accordion">
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-3">
<h5>Step 3</h5>
<div class="zd-accordion-section">Are you using <a href="https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master.html" rel="noopener" target="_blank">Spilt Database Solution</a>?</div>
<p class="zd-accordion-text">a. YES –&nbsp; Use the patch <strong>MDVA-26831</strong> in&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360044725072-Advanced-Reporting-404-error-on-split-database-solution" rel="noopener" target="_blank">Advanced Reporting 404 error on split database solution</a>&nbsp;and clear cache. Wait for 24 hours for the job to run again and try again.<br/> b. NO –&nbsp;&nbsp;Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.</p>
</div>
<span class="wysiwyg-color-yellow90"><!---------This is one whole accordion panel.---------------></span>
<div class="zd-accordion-panel" id="zd-accordion-4">
<h5>Step 4</h5>
<div class="zd-accordion-section">Is Advanced Reporting enabled?&nbsp;Check <strong>Admin</strong> &gt; <strong>Stores</strong> &gt; <strong>Settings</strong> &gt; <strong>Configuration</strong> &gt; <strong>General</strong> &gt; <strong>Advanced</strong>. For detailed steps, review&nbsp;<a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting" rel="noopener" target="_blank">Advanced Reporting: Enable Advanced Reporting</a>.&nbsp;</div>
<p class="zd-accordion-text">a. YES&nbsp;–&nbsp; Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.<br/> b. NO&nbsp;–&nbsp; <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting" rel="noopener" target="_blank">Enable Advanced Reporting</a> and save, and wait 24 hours for Magento and Advanced Reporting to synchronize. Check if your data now loads. If it does you have solved the issue. If it does not proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.</p>
</div>
<p><!---------This is one whole accordion panel.---------------></p>
<div class="zd-accordion-panel" id="zd-accordion-5">
<h5>Step 5</h5>
<div class="zd-accordion-section">Check that there is a token by running the following query:&nbsp;<br/> <code>SELECT * FROM core_config_data WHERE path LIKE 'analytics/general/token' \G<br/></code>Is there a token?</div>
<p class="zd-accordion-text">a. YES&nbsp;–&nbsp; Proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.&nbsp;<br/> b. NO&nbsp;–&nbsp; If token value is NULL or there is no record in the database, proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<p><!---------This is one whole accordion panel.---------------></p>
<div class="zd-accordion-panel" id="zd-accordion-6">
<h5>Step 6</h5>
<div class="zd-accordion-section">Check counter value in flag table by running this query:<br/> <code>  SELECT * FROM `flag` &nbsp;where `flag_code` = 'analytics_link_subscription_update_reverse_counter'\G;</code><br/> Does the query return the row?</div>
<p class="zd-accordion-text">a. YES&nbsp;– Take the following steps:<br/> &nbsp; &nbsp; 1. Run the query below:<br/> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<code>DELETE from `flag` where
        `flag_code` =&nbsp; 'analytics_link_subscription_update_reverse_counter';</code><br/> &nbsp; &nbsp;2. <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting" rel="noopener" target="_blank">Disable and Enable Advanced Reporting module</a> in settings and <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#verify-that-the-integration-is-active" rel="noopener" target="_blank">reauthorize the token</a>.<br/> &nbsp; &nbsp;3. Wait 24 hours for Magento and Advanced Reporting to synchronize. If you still can't see data in Advanced Reporting,&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" style="font-weight: bold;" target="_blank">submit a support ticket</a>.&nbsp;<br/> b. NO –&nbsp; If the query does not return anything, take the following steps:<br/> &nbsp; &nbsp;1. <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting" rel="noopener" target="_blank">Disable and Enable Advanced Reporting module</a> in settings and <a href="https://docs.magento.com/user-guide/reports/advanced-reporting.html#verify-that-the-integration-is-active" rel="noopener" target="_blank">reauthorize the token</a>.<br/> &nbsp; &nbsp;2. Wait 24 hours for Magento and Advanced Reporting to synchronize. If you still can't see data in Advanced Reporting,&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" style="font-weight: bold;" target="_blank">submit a support ticket</a>.&nbsp;</p>
</div>
<p><!---------This is one whole accordion panel.---------------></p>
<div class="zd-accordion-panel" id="zd-accordion-7">
<h5>Step 7</h5>
<div class="zd-accordion-section">Are there are records in the&nbsp;<code>cron_schedule</code> table? Check that job <code>analytics_collect_data</code> was executed by running this query:<br/> <code>SELECT * FROM cron_schedule WHERE job_code LIKE 'analytics_collect_data' \G</code>
</div>
<p class="zd-accordion-text">a. YES –&nbsp; If there are records and the <strong>status</strong> column says&nbsp;<em>missed</em>, use the&nbsp;patch in this KB article&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360037681092" rel="noopener" target="_blank">Update Advanced Reporting to run on its own cron group</a>.&nbsp;<br/> b. YES&nbsp;–&nbsp; If there are records and the <strong>status</strong> column says <em>success</em>,&nbsp;proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.&nbsp;<br/> c. YES&nbsp;– If there are records and the <strong>status</strong> column says <em>error</em>, proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8.</a><br/> d. NO&nbsp;–&nbsp; If there are no records, proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.&nbsp;</p>
</div>
<div class="zd-accordion-panel" id="zd-accordion-8">
<h5>Step 8</h5>
<div class="zd-accordion-section">Was the job logged in <code>support_report.log</code>? Run the command:&nbsp;<br/> <code>zgrep
        analytics_collect_data var/log/support_report.log var/log/support_report.log.1.gz
        | tail</code>
</div>
<p class="zd-accordion-text">a. YES – If the output from the query indicates a successful job, for example<br/> &nbsp; &nbsp; &nbsp;<code>Cron
          Job analytics_collect_data is successfully finished</code><br/> proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.&nbsp;<br/> b. NO&nbsp; –&nbsp; If there are no records in the log, <a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a>.<br/> c. YES&nbsp; – If there are records but there is an error,&nbsp;proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.&nbsp;</p>
</div>
<div class="zd-accordion-panel" id="zd-accordion-9">
<h5>Step 9</h5>
<div class="zd-accordion-section">Does the file <code>data.tgz</code> exist in the system and are there are records in access logs?<br/> To check that the file <code>data.tgz</code> exists, run command:<br/> &nbsp;<code>ls
        -ltr&nbsp; pub/media/analytics/&lt;there should be a directory with
        hash name&gt;/</code><br/> To check that there are records in access.logs, run command:<br/> <code>zgrep -i analytics  /var/log/platform/&lt;PATH to access log&gt;/access.log* | grep MagentoBI</code>
</div>
<p class="zd-accordion-text">a. YES – If the file <code>data.tgz</code>&nbsp;is present and there are records in the access logs, but you still have a 404 error, you need to&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a>.<br/> b. NO&nbsp; – Proceed to &nbsp;<a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.&nbsp;</p>
</div>
<div class="zd-accordion-panel" id="zd-accordion-10">
<h5>Step 10</h5>
<div class="zd-accordion-section">Is there an error caused by Page Builder? Example:<br/> <code>report.ERROR: Cron Job analytics_collect_data has an error: substr_count() expects parameter 1 to be string, null given. Statistics: {"sum":0,"count":1,"realmem":0,"emalloc":0,"realmem_start":224919552,"emalloc_start":216398384} [] []</code>
</div>
<p class="zd-accordion-text">a. YES – Use the MDVA-19391 patch in <a href="https://support.magento.com/hc/en-us/articles/360044350992" rel="noopener" target="_blank">Common Advanced Reporting cron job errors on Magento Commerce</a>, wait 24 hours for the job to run again and try again.&nbsp;<br/> b. NO&nbsp;–&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a>.</p>
</div>
<p><a class="accordion-back-to-step-1" href="#zd-accordion-1">Back to Step 1</a></p>
</div>
</div>
</div>