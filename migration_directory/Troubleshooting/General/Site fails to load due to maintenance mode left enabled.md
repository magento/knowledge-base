This article provides a fix for when your site doesn't load due to maintenance mode being left enabled or not been disabled automatically.&nbsp;You may receive an error message "_Service Temporarily Unavailable The server is temporarily unable to service your request due to maintenance downtime or capacity problems._"

## Affected versions and products

*   Magento Commerce Cloud 2.2.x, 2.3.x
*   Magento Commerce&nbsp;2.2.x, 2.3.x

## Issue

<span style="font-style: inherit !important; font-weight: inherit !important;">Maintenance mode is a part of the deployment process. However, if it has been&nbsp;</span>enabled automatically and has not been disabled, or the merchant enabled maintenance mode manually and forgot to disable, it can cause a failed deployment.&nbsp;

## Cause

Having maintenance mode enabled prevents the site loading.&nbsp;

## Solution

To check the current maintenance mode status run the following command from the CLI:

<pre class="line-numbers"><code class="language-clike">bin/magento maintenance:status</code></pre>

To disable maintenance mode run the following command in CLI:

<pre class="line-numbers"><code class="language-clike">bin/magento maintenance:disable</code></pre>

## Related Reading

To learn when to use maintenance mode, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=maintenance%20mode" rel="noopener" target="_blank">Enable or disable maintenance mode</a>.