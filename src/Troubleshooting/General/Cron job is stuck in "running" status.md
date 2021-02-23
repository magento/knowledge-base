---
title: Cron job is stuck in "running" status
link: https://support.magento.com/hc/en-us/articles/360033099451-Cron-job-is-stuck-in-running-status
labels: Magento Commerce Cloud,troubleshooting,stuck cron
---

<p>This article provides a solution for when Magento cron jobs do not finish executing and persist in a <code>running</code> status, which prevents other cron jobs from running. This can happen for a number of reasons, such as network issues, application crashes, redeployment issues.</p>
<h3>Affected products and versions</h3>
<p>Magento Commerce Cloud, all versions</p>
<h2>Symptom</h2>
<p>Symptoms of cron jobs that must be reset include:</p>
<ul>
<li>Large quantity of jobs appear in the <code>cron_schedule</code> queue</li>
<li>Site performance starts to degrade</li>
<li>Jobs fail to execute on schedule</li>
</ul>
<h2>Solution</h2>
<p class="warning">Running this command without the <code>--job-code</code> option resets <em>all</em> cron jobs, including those currently running, so we recommend using it only in exceptional cases, such as after you have verified that all cron jobs must be reset. Re-deployment runs this command by default to reset cron jobs, so they recover appropriately after the environment is back up. Avoid using this solution when indexers are running.</p>
<p>To resolve this issue, you must reset the cron job(s) using the <code>cron:unlock</code> command. This command changes the status of the cron job in the database, ending the job forcefully to allow other scheduled jobs to continue.</p>
<ol>
<li>
<p>Open a terminal and use your <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh">SSH keys</a> to connect to the affected environment.</p>
</li>
<li>
<p>Get the MySQL database credentials:</p>
<pre><code class="language-shell">echo $MAGENTO_CLOUD_RELATIONSHIPS | base64 -d | json_pp</code></pre>
</li>
<li>
<p>Connect to the database using <code>mysql</code>:</p>
<pre><code class="language-shell">mysql -hdatabase.internal -uuser -ppassword main</code></pre>
</li>
<li>
<p>Select the <code>main</code> database:</p>
<pre><code class="language-shell">use main</code></pre>
</li>
<li>
<p>Find all running cron jobs:</p>
<pre><code class="language-shell">SELECT * FROM cron_schedule WHERE status = 'running';</code></pre>
</li>
<li>
<p>Copy the <code>schedule_id</code> of any job running longer than usual.</p>
</li>
<li>
<p>Use the schedule IDs from the previous step to unlock specific cron jobs:</p>
<pre><code class="language-shell">./vendor/bin/ece-tools cron:unlock --job-code=&lt;schedule_id&gt; --job-code=&lt;schedule_id&gt;</code></pre>
</li>
</ol>