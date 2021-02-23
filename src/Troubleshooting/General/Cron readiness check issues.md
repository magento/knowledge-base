---
title: Cron readiness check issues
link: https://support.magento.com/hc/en-us/articles/360033856251-Cron-readiness-check-issues
labels: Magento Commerce Cloud,Magento Commerce,cron,PHP,readiness,check,crontab,how to
---

<p>This article provides solutions for cron readiness issues. The following are symptoms of cron issues:</p>
<ul>
<li>An error message about the PHP setting <code>$HTTP_RAW_POST_DATA</code> displays even though it's set properly.</li>
<li>
<p>The PHP readiness check doesn't display the PHP version as the following figure shows:</p>
<p><img alt="upgr-tshoot-no-cron.png" src="https://support.magento.com/hc/article_attachments/360039191532/upgr-tshoot-no-cron.png"/></p>
</li>
<li>
<p>The following error displays in the Magento Admin:</p>
<p><img alt="compman-cron-not-running.png" src="https://support.magento.com/hc/article_attachments/360039191711/compman-cron-not-running.png"/></p>
<p>To see the error, you might need to click System Messages at the top of the window as follows:</p>
<p><img alt="compman_sys-messages.png" src="https://support.magento.com/hc/article_attachments/360039191751/compman_sys-messages.png"/></p>
</li>
</ul>
<p> </p>
<h2>Check your existing crontab</h2>
<p>This section discusses how to see if cron is currently running and to verify whether it's set up properly.</p>
<p>To verify whether or not your crontab is set up:</p>
<ol>
<li>Log in to your Magento server as, or switch to, the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html">Magento file system owner</a>.</li>
<li>
<p>See if the following file exists:</p>
<pre><code class="language-bash">$ ls -al &lt;magento_root&gt;/var/.setup_cronjob_status</code></pre>
<p>If the file exists, cron has run successfully in the past. If the file <em>does not</em> exist, either you haven't yet installed Magento or cron isn't running. In either case, continue with the next step.</p>
</li>
<li>
<p>Get more detail about cron.</p>
<p>As a user with <code>root</code> privileges, enter the following command:</p>
<pre><code class="language-bash">$ crontab -u &lt;Magento file system owner name&gt; -l</code></pre>
<p>For example, on CentOS</p>
<pre><code class="language-bash">$ crontab -u magento_user -l</code></pre>
<p>If no crontab has been set up for the user, the following message displays:</p>
<pre><code class="language-terminal">no crontab for magento_user</code></pre>
<p>Your crontab tells you the following:</p>
<ul>
<li>What PHP binary you're using (in some cases, you have more than one)</li>
<li>What Magento cron scripts you're running (in particular, the paths to those scripts)</li>
<li>Where your cron logs are located</li>
</ul>
<p>See one of the following sections for a solution to your issue.</p>
</li>
</ol>
<h2>Solution: crontab not set up</h2>
<p>To verify your cron jobs are set up properly, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron">Set up cron jobs</a>.</p>
<h2>Solution: cron running from incorrect PHP binary</h2>
<p>If your cron job uses a PHP binary different from the web server plug-in, PHP settings errors might display. To resolve the issue, set identical PHP settings for both the PHP command line and the PHP web server plug-in.</p>
<p>For more information about PHP settings, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html">Required PHP settings</a>.</p>
<h2>Solution: cron running with errors</h2>
<p>Try running each command manually because the command might display helpful error messages. See <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron">Set up cron jobs</a>.</p>
<p class="info">You must run cron at least <em>twice</em> for the job to execute; the first time to queue jobs, the second time to execute the jobs.</p>