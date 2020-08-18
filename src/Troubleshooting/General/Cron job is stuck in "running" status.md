Sometimes, Magento cron jobs do not finish executing and persist in a `` running `` status, which prevents other cron jobs from running. This can happen for a number of reasons, such as network issues, application crashes, redeployment issues.

### Affected products and versions

Magento Commerce Cloud, all versions

<h2 id="symptom">Symptom</h2>

Symptoms of cron jobs that must be reset include:

*   Large quantity of jobs appear in the `` cron_schedule `` queue
*   Site performance starts to degrade
*   Jobs fail to execute on schedule

<h2 id="solution">Solution</h2>

<p class="warning">Running this command without the <code>--job-code</code> option resets <em>all</em> cron jobs, including those currently running, so we recommend using it only in exceptional cases, such as after you have verified that all cron jobs must be reset. Re-deployment runs this command by default to reset cron jobs, so they recover appropriately after the environment is back up. Avoid using this solution when indexers are running.</p>

To resolve this issue, you must reset the cron job(s) using the `` cron:unlock `` command. This command changes the status of the cron job in the database, ending the job forcefully to allow other scheduled jobs to continue.

1.   
    
    Open a terminal and use your <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh" target="_self">SSH keys</a> to connect to the affected environment.
    
    
2.   
    
    Get the MySQL database credentials:
    
    
    
    <pre><code class="language-shell">echo $MAGENTO_CLOUD_RELATIONSHIPS | base64 -d | json_pp</code></pre>
    
    
3.   
    
    Connect to the database using `` mysql ``:
    
    
    
    <pre><code class="language-shell">mysql -hdatabase.internal -uuser -ppassword main</code></pre>
    
    
4.   
    
    Select the `` main `` database:
    
    
    
    <pre><code class="language-shell">use main</code></pre>
    
    
5.   
    
    Find all running cron jobs:
    
    
    
    <pre><code class="language-shell">SELECT * FROM cron_schedule WHERE status = 'running';</code></pre>
    
    
6.   
    
    Copy the `` schedule_id `` of any job running longer than usual.
    
    
7.   
    
    Use the schedule IDs from the previous step to unlock specific cron jobs:
    
    
    
    <pre><code class="language-shell">./vendor/bin/ece-tools cron:unlock --job-code=&lt;schedule_id&gt; --job-code=&lt;schedule_id&gt;</code></pre>
    
    