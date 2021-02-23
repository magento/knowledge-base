---
title: Update Advanced Reporting to run on its own cron group
link: https://support.magento.com/hc/en-us/articles/360037681092-Update-Advanced-Reporting-to-run-on-its-own-cron-group
labels: Magento Commerce Cloud,patch,troubleshooting,known issues,Advanced Reporting,2.3.0,no data
---

<p>This article provides a patch for the known issue for Magento Commerce Cloud 2.3.0 where Advanced Reporting is not showing any data. This is because Advanced Reporting job <code>analytics_collect_data</code> is not executed according to schedule. This article provides a patch that will create an Advanced Reporting cron group <code>analytics</code>.</p>
<h2>Issue</h2>
<p>No data is loaded into the Advanced Reporting module.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. The patch moves the <code>analytics</code> cron job tasks from default group into <code>analytics</code>.</p>
<p>To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360046452172/MDVA-19640_EE_2.3.0_COMPOSER_v1.patch">MDVA-19640_EE_2.3.0_COMPOSER_v1.patch</a></p>
<p>After applying the patch run the following SQL query. The query has to be run to change records in <code>cron_schedule</code> table. </p>
<pre class="line-numbers"><code class="language-clike">UPDATE core_config_data
SET `path` = REPLACE(path, "crontab/default/jobs/analytics", "crontab/analytics/jobs/analytics")
WHERE `path` LIKE "crontab/default/jobs/analytics%";</code></pre>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for </p>
<ul>
<li>Magento Commerce Cloud 2.3.0</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:<br/> <br/> 2.2.2-2.2.10, 2.3.0-2.3.2 and 2.3.2-p2 and 2.3.3, for Magento Commerce and Magento Commerce Cloud</p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached files</h2>
<p> </p>