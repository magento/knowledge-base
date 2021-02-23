---
title: Site fails to load due to maintenance mode left enabled
link: https://support.magento.com/hc/en-us/articles/360039781551-Site-fails-to-load-due-to-maintenance-mode-left-enabled
labels: Magento Commerce Cloud,Magento Commerce,The server is temporarily unable to service your request due to maintenance downtime or capacity problems.,maintenance mode,site not loading,2.3.x,2.2.x,how to
---

<p>This article provides a fix for when your site doesn't load due to maintenance mode being left enabled or not been disabled automatically. You may receive an error message "<em>Service Temporarily Unavailable The server is temporarily unable to service your request due to maintenance downtime or capacity problems.</em>"</p>
<h2>Affected versions and products</h2>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Maintenance mode is a part of the deployment process. However, if it has been enabled automatically and has not been disabled, or the merchant enabled maintenance mode manually and forgot to disable, it can cause a failed deployment. </p>
<h2>Cause</h2>
<p>Having maintenance mode enabled prevents the site loading. </p>
<h2>Solution</h2>
<p>To check the current maintenance mode status run the following command from the CLI:</p>
<pre class="line-numbers"><code class="language-clike">bin/magento maintenance:status</code></pre>
<p>To disable maintenance mode run the following command in CLI:</p>
<pre class="line-numbers"><code class="language-clike">bin/magento maintenance:disable</code></pre>
<h2>Related Reading</h2>
<p>To learn when to use maintenance mode, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=maintenance%20mode">Enable or disable maintenance mode</a>.</p>