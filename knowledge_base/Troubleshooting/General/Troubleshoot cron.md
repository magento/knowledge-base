This article describes troubleshooting solutions for issues with cron in Magento on-premise products.

Affected products and versions

*   Magento Commerce 2.2.x, 2.3.x
*   Magento Open Source 2.2.x, 2.3.x&nbsp;

## Issues

## <span style="font-size: 15px;">Following are symptoms of cron issues:</span>

*   Your update or upgrade never runs; it stays in a `` pending `` state.
*   An error message about the [PHP](https://glossary.magento.com/php) setting `` $HTTP_RAW_POST_DATA `` displays even though it's set properly.
*   
    
    The cron readiness check fails.&nbsp;Possible errors include non-writable paths and cron not set up. An example follows:
    
    
    
    ![upgr-tshoot-no-cron2.png](https://support.magento.com/hc/article_attachments/360037665751/upgr-tshoot-no-cron2.png)
    
    
*   
    
    The PHP readiness check doesn't display the PHP version as the following figure shows.
    
    
    
    ![Screen_Shot_2019-08-29_at_1.36.08_PM.png](https://support.magento.com/hc/article_attachments/360037675012/Screen_Shot_2019-08-29_at_1.36.08_PM.png)
    
    
*   
    
    The following error displays in the Magento Admin:
    
    
    
    ![compman-cron-not-running.png](https://support.magento.com/hc/article_attachments/360037666411/compman-cron-not-running.png)
    
    
    
    To see the error, you might need to click __System Messages__ at the top of the window as follows:
    
    
    
    ![compman_sys-messages.png](https://support.magento.com/hc/article_attachments/360037666851/compman_sys-messages.png)
    
    

<h2 id="check-your-existing-crontab">Investigate to find the cause</h2>

This section discusses how to see if cron is currently running and to verify whether it's set up properly.

To verify whether or not your crontab is set up:

1.   Log in to your Magento server as, or switch to, the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html" target="_self">Magento file system owner</a>.
2.   
    
    See if the following file exists:
    
    
    
    <pre><code class="language-bash">ls -al &lt;magento_root&gt;/var/.setup_cronjob_status</code></pre>
    
    
    
    If the file exists, cron has run successfully in the past. If the file _does not_ exist, either you haven't yet installed Magento or cron isn't running. In either case, continue with the next step.
    
    
3.   
    
    Get more detail about cron.
    
    
    
    As a user with `` root `` privileges, enter the following command:
    
    
    
    <pre><code class="language-bash">crontab -u &lt;Magento file system owner name&gt; -l</code></pre>
    
    
    
    For example, on CentOS
    
    
    
    <pre><code class="language-bash">crontab -u magento_user -l</code></pre>
    
    
    
    If no crontab has been set up for the user, the following message displays:
    
    
    
    <pre><code class="language-terminal">no crontab for magento_user</code></pre>
    
    
    
    Your crontab tells you the following:
    
    
    
    *   What PHP binary you're using (in some cases, you have more than one)
    *   What Magento cron scripts you're running (in particular, the paths to those scripts)
    *   Where your cron logs are located
    
    
    
    
    See one of the following sections for a solution to your issue.
    
    

## Solutions

<h3 id="solution-crontab-not-set-up">Solution for crontab not being set up</h3>

To verify your cron jobs are set up properly, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron" target="_self">Set up cron jobs</a>.

<h3 id="solution-cron-running-from-incorrect-php-binary">Solution for cron running from incorrect PHP binary</h3>

If your cron job uses a PHP binary different from the web server plug-in, PHP settings errors might display. To resolve the issue, set identical PHP settings for both the PHP command line and the PHP web server plug-in.

For more information about PHP settings, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html" target="_self">Required PHP settings</a>.

<h3 id="solution-cron-running-with-errors">Solution for cron running with errors</h3>

Try running each command manually because the command might display helpful error messages. See <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron" target="_self">Set up cron jobs</a>.

<p class="info">You must run cron at least <em>twice</em> for the job to execute; the first time to queue jobs, the second time to execute the jobs.</p>