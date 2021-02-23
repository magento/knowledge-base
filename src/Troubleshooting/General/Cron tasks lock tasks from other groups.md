---
title: Cron tasks lock tasks from other groups
link: https://support.magento.com/hc/en-us/articles/360029219812-Cron-tasks-lock-tasks-from-other-groups
labels: Magento Commerce Cloud,cron,Pro,troubleshooting,lock
---

<p>This article provides a solution for the Magento Commerce Cloud issue related to certain long-run cron jobs blocking other cron jobs.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Cloud, Pro Architecture</li>
<li>Onboard earlier than May 2019</li>
</ul>
<h2>Issue</h2>
<p>On Magento Cloud, when you have complex cron tasks (long-run tasks) they might lock other tasks for execution. For example, the indexers task reindexes invalidated indexers. It can take a few hours to finish, and it will lock other default cron jobs like: sending emails, generating sitemaps, customer notifications, other custom tasks.</p>
<p>Symptoms</p>
<p>The processes, executed by cron jobs, are not performed. For example, product updates are not applied for hours, or customers report not receiving emails.</p>
<p>When you open the <code>cron_schedule</code> database table, you see the jobs with <code>missed</code> status.</p>
<h2>Cause</h2>
<p>Previously, in Magento Cloud Environment, the Jenkins server was used to run cron jobs. Jenkins will only run one instance of a job at a time; consequently, there will only be one <code>bin/magento cron:run</code> process running at a time.</p>
<h2>Solution</h2>
<ol>
<li>Contact Magento support to have self-managed crons enabled.</li>
<li>Edit the <code>.magento.app.yaml</code> file in the root directory of the Magento code in the Git branch. Add the following:
<pre><code class="language-yaml"> crons:
    cronrun:
        spec: "* * * * *"
        cmd: "php bin/magento cron:run"</code></pre>
<p>Please note, there’s no need to transfer old cron configurations where multiple <code>cron:run</code> are present to the new cron schedule; the regular Magento’s <code>cron:run</code> task, added as described above, is enough. Though it is required to transfer your custom jobs, if you had any.</p>
</li>
<li>Save the file and push updates to the Staging and Production environments (the same way as you do it for Integration environments).</li>
</ol>
<h3>Check if you have self-managed cron enabled</h3>
<p>To check if the self-managed cron is enabled, run the <code>crontab -l</code> command, and observe the result:</p>
<ul>
<li>
<p>Self-managed cron is enabled, if you are able to see the tasks, like the following:</p>
<pre><code class="language-bash">username@hostname:~$ crontab -l
# Crontab is managed by the system, attempts to edit it directly will fail.
SHELL=/etc/platform/username/cron-run
MAILTO=""
  
# m h  dom mon dow  job_name
  
* * * * *           cronrun
</code></pre>
</li>
<li>
<p>The self-managed cron is not enabled, if you are not able to see the tasks, and get the "you are not allowed to use this program" error message.</p>
</li>
</ul>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html">Set up cron jobs</a> on Magento Devdocs</li>
</ul>