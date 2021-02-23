---
title:  Multiple cron jobs scheduled for the same time period
link: https://support.magento.com/hc/en-us/articles/360026133971--Multiple-cron-jobs-scheduled-for-the-same-time-period
labels: Magento Commerce,patch,cron,troubleshooting,2.2.4,known issues,2.2.2,2.1.4,2.1.5,2.1.13,2.1.14,2.2.0
---

<p>This article provides a patch for a known Magento Commerce 2.2.2 issue related to having multiple cron jobs scheduled to run at the same time after the time variables for certain tasks were edited in the Magento Admin.</p>
<h2>Issue</h2>
<p>When cron is configured to run every minute, if you edit time variables for three scheduled tasks in Admin, the <code>cron_schedule</code> database table shows groups of multiple tasks scheduled to run at the same time.</p>
<p>Steps to reproduce:</p>
<ol>
<li>In Magento Admin, navigate to Stores &gt; Settings &gt; Configuration &gt; ADVANCED &gt; System &gt; Cron (Scheduled Tasks) &gt; Cron configuration options for group: default.
</li>
<li>Configure the following options:</li>
</ol><ul>
<li>
History Cleanup Every: clear the Use system checkbox, and set to <em>1440</em>
</li>
<li>
Success History Lifetime: clear the Use system checkbox, and set to <em>1440</em>
</li>
<li>
Failure History Lifetime: clear the Use system checkbox, and set to <em>1440</em>
</li>
</ul>
<li>Click Save Config.</li>
<li>In SSH, run the <code>crontab -e</code> command.</li>
<li>Set cron to run every minute.</li>
<li>Open three terminal tabs/windows.</li>
<li>Go to the Magento <code>root/base/project</code> directory in each terminal window.</li>
<li>Run the following command in each tab/window:
<pre><code class="language-bash">bin/magento cache:flush &amp;&amp; bin/magento cron:run &amp;&amp; bin/magento cache:flush &amp;&amp; bin/magento cron:run</code></pre>
</li>
<li>Go to MySQL and run the following query:
<pre><code class="language-sql">SELECT job_code, scheduled_at, count as count FROM cron_schedule GROUP BY job_code, scheduled_at HAVING count &gt; 1 ORDER BY scheduled_at;</code></pre>
</li>
<li>See groups of tasks scheduled to run at the same time.</li>
<p>Expected result:<br/> One cron <code>job_code</code> should be scheduled for the certain time period.</p>
<p>Actual result:<br/> There are multiple cron jobs scheduled for the same time period.</p>
<h2>Solution</h2>
<p>For Magento Commerce Cloud customers, <a href="https://devdocs.magento.com/guides/v2.2/cloud/project/ece-tools-update.html">updating the ECE-tools</a> will solve the issue.</p>
<p>Magento Commerce customers should apply one of the attached patches to solve the issue.</p>
<h2>Patches</h2>
<p>The patches are attached to this article. To download, scroll down to the end of the article and click the file name, or click one the following link:</p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025797991/MDVA-11304_EE_2.1.4_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.4_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025798031/MDVA-11304_EE_2.1.5_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.5_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025786332/MDVA-11304_EE_2.1.13_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.13_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025798071/MDVA-11304_EE_2.1.14_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.14_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025786392/MDVA-11304_EE_2.2.0_COMPOSER_v1.patch">Download MDVA-11304_EE_2.2.0_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025786432/MDVA-11304_EE_2.2.2_COMPOSER_v1.patch">Download MDVA-11304_EE_2.2.2_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025786472/MDVA-11304_EE_2.2.4_COMPOSER_v1.patch">Download MDVA-11304_EE_2.2.4_COMPOSER_v1.patch</a></li>
</ul>
<h3>Compatible Magento versions</h3>
<p>The patches were created for particular version noted in the patch file name. For example, MDVA-11304_EE_2.2.4_COMPOSER_v1.patch was created for Magento Commerce 2.2.4 and is the best patch to be used for this version.</p>
<p>The patches are also compatible with the following versions:</p>
<ul>
<li>For Magento Commerce 2.1.0-2.1.4:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025797991/MDVA-11304_EE_2.1.4_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.4_COMPOSER_v1.patch</a>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.1.0-2.1.4</li>
</ul>
</li>
<li>For Magento Commerce 2.1.5-2.1.12:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025798031/MDVA-11304_EE_2.1.5_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.5_COMPOSER_v1.patch</a>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.1.5-2.1.12</li>
</ul>
</li>
<li>For Magento Commerce (Cloud) 2.1.13:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025786332/MDVA-11304_EE_2.1.13_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.13_COMPOSER_v1.patch</a>
</li>
<li>For Magento Commerce 2.1.14-2.1.17:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025798071/MDVA-11304_EE_2.1.14_COMPOSER_v1.patch">Download MDVA-11304_EE_2.1.14_COMPOSER_v1.patch</a>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.1.18</li>
<li>Magento Commerce (Cloud) 2.1.14-2.1.18</li>
</ul>
</li>
<li>For Magento Commerce 2.2.0-2.2.1:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025786392/MDVA-11304_EE_2.2.0_COMPOSER_v1.patch">Download MDVA-11304_EE_2.2.0_COMPOSER_v1.patch</a>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.0-2.2.1</li>
</ul>
</li>
<li>For Magento Commerce 2.2.0-2.2.3:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025786432/MDVA-11304_EE_2.2.2_COMPOSER_v1.patch">Download MDVA-11304_EE_2.2.2_COMPOSER_v1.patch</a>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.0-2.2.3</li>
</ul>
</li>
<li>For Magento Commerce 2.2.4:<br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360025786472/MDVA-11304_EE_2.2.4_COMPOSER_v1.patch">Download MDVA-11304_EE_2.2.4_COMPOSER_v1.patch</a>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.4</li>
</ul>
</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>