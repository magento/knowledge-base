---
title: Advanced Reporting cron job errors Magento Commerce
link: https://support.magento.com/hc/en-us/articles/360044350992-Advanced-Reporting-cron-job-errors-Magento-Commerce
labels: Magento Commerce Cloud,Magento Commerce,patch,known issue,404,troubleshooting,advanced reporting,2.3.x,2.3.1,2.3.4-p2
---

<p>This article provides patches for the Advanced Reporting cron jobs issues in Magento Commerce, which can cause a 404 error for customers trying to access Advanced Reporting.</p>
<h2>Affected products and versions</h2>
<p>Magento Commerce 2.3.x</p>
<h2>Issue</h2>
<p>A customer gets a 404 error when they attempt to access Advanced Reporting and there are errors in the logs associated to <code>analytics_collect_data job</code>. </p>
<h2>Compatible Magento versions:</h2>
<p>The patches are compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360059514731/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch">MDVA-19391_EE_2.3.1_COMPOSER_v1.patch</a>:<br/> Magento Commerce and Magento Commerce Cloud:</p>
<ul>
<li>2.3.4-p2</li>
<li>2.3.4</li>
<li>2.3.3-p1</li>
<li>2.3.3</li>
<li>2.3.2-p2</li>
<li>2.3.2</li>
<li>2.3.1</li>
</ul>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360059516831/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch">MDVA-18980_EE_2.2.6_COMPOSER_v1.patch</a>:<br/> Magento Commerce and Magento Commerce Cloud:</p>
<ul>
<li>2.3.0</li>
<li>2.2.7</li>
<li>2.2.6</li>
<li>2.2.5</li>
<li>2.2.4</li>
<li>2.2.3</li>
<li>2.2.2</li>
</ul>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360059527331/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch">MDVA-15136_EE_2.2.6_COMPOSER_v1.patch</a>:<br/> Magento Commerce and Magento Commerce Cloud:</p>
<ul>
<li>2.3.0</li>
<li>2.2.7</li>
<li>2.2.6</li>
</ul>
<h2>Solution</h2>
<p>To fix the issue, please apply the relevant patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following links:</p>
<ul>
<li>Download <a href="https://support.magento.com/hc/en-us/article_attachments/360059514731/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch">MDVA-19391_EE_2.3.1_COMPOSER_v1.patch</a>
</li>
<li>Download <a href="https://support.magento.com/hc/en-us/article_attachments/360059527331/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch">MDVA-15136_EE_2.2.6_COMPOSER_v1.patch</a>
</li>
<li>Download <a href="https://support.magento.com/hc/en-us/article_attachments/360059516831/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch">MDVA-18980_EE_2.3.1_COMPOSER_v1.patch</a>
</li>
</ul>
<p>To check which patch to use:</p>
<ol>
<li>Review the logs by using the following command:<br/> <code>grep analytics_collect_data var/log/support_report.log var/log/support_report.log.1.gz</code>
</li>
<li>Depending on the error you see, select a patch using the information from the following table.<br/> <br/>
<table>
<tbody>
<tr>
<td>
<p>Error</p>
</td>
<td>Patch</td>
</tr>
<tr>
<td>
<pre class="language-clike">report.CRITICAL: Error when running a cron job {"exception":"[object] (RuntimeException(code:
  0): Error when running a cron job at /srv/public_html/vendor/magento/module-cron/Observer/ProcessCronQueueObserver.php:327,
  TypeError(code: 0): substr_count() expects parameter 1 to be string, null given
  at /srv/public_html/vendor/magento/module-page-builder-analytics/Model/ContentTypeUsageReportProvider.php:106)"}
  [] 
</pre>
OR
<pre class="language-clike"> report.ERROR: Cron Job analytics_collect_data has an error: substr_count() expects
  parameter 1 to be string, null given. Statistics: {"sum":0,"count":1,"realmem":0,"emalloc":0,"realmem_start":224919552,"emalloc_start":216398384}
  [] []
</pre>
<p> </p>
</td>
<td>Apply <a href="https://support.magento.com/hc/en-us/article_attachments/360059514731/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch">MDVA-19391_EE_2.3.1_COMPOSER_v1.patch</a>, clear cache and wait 24 hours for the job to run again and try again.</td>
</tr>
<tr>
<td> 
<p><em>Failed to open file /tmp/analytics/tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../  </em></p>
</td>
<td>Apply <a href="https://support.magento.com/hc/en-us/article_attachments/360059527331/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch">MDVA-15136_EE_2.2.6_COMPOSER_v1.patch</a>, clear cache and wait 24 hours for the job to run again and try again.   </td>
</tr>
<tr>
<td><em>Not valid cipher</em></td>
<td>Apply <a href="https://support.magento.com/hc/en-us/article_attachments/360059516831/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch">MDVA-18980_EE_2.2.6_COMPOSER_v1.patch</a>, clear cache and wait 24 hours for the job to run again and try again. </td>
</tr>
</tbody>
</table>
</li>
</ol>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch</a> provided by Magento for instructions.</p>
<h2>Attached files</h2>