---
title: Troubleshoot cron
link: https://support.magento.com/hc/en-us/articles/360032952852-Troubleshoot-cron
labels: Magento Commerce,cron,troubleshooting,2.3.x,2.2.x
---

This article describes troubleshooting solutions for issues with cron in Magento on-premise products.

Affected products and versions

* Magento Commerce 2.2.x, 2.3.x
* Magento Open Source 2.2.x, 2.3.x 

## Issues

## Following are symptoms of cron issues:

* Your update or upgrade never runs; it stays in a `` pending `` state.
* An error message about the [PHP](https://glossary.magento.com/php) setting `` $HTTP_RAW_POST_DATA `` displays even though it's set properly.
* The cron readiness check fails. Possible errors include non-writable paths and cron not set up. An example follows:
    
    
    
    ![upgr-tshoot-no-cron2.png](https://support.magento.com/hc/article_attachments/360037665751/upgr-tshoot-no-cron2.png)
    
    
* The PHP readiness check doesn't display the PHP version as the following figure shows.
    
    
    
    ![Screen_Shot_2019-08-29_at_1.36.08_PM.png](https://support.magento.com/hc/article_attachments/360037675012/Screen_Shot_2019-08-29_at_1.36.08_PM.png)
    
    
* The following error displays in the Magento Admin:
    
    
    
    ![compman-cron-not-running.png](https://support.magento.com/hc/article_attachments/360037666411/compman-cron-not-running.png)
    
    
    
    To see the error, you might need to click System Messages at the top of the window as follows:
    
    
    
    ![compman_sys-messages.png](https://support.magento.com/hc/article_attachments/360037666851/compman_sys-messages.png)
    
    

## Investigate to find the cause

This section discusses how to see if cron is currently running and to verify whether it's set up properly.

To verify whether or not your crontab is set up:

1. Log in to your Magento server as, or switch to, the [Magento file system owner](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html).
1. See if the following file exists:
    
    
    
    <pre><code class="language-bash">ls -al &lt;magento_root>/var/.setup_cronjob_status</code></pre>
    
    
    
    If the file exists, cron has run successfully in the past. If the file _does not_ exist, either you haven't yet installed Magento or cron isn't running. In either case, continue with the next step.
    
    
1. Get more detail about cron.
    
    
    
    As a user with `` root `` privileges, enter the following command:
    
    
    
    <pre><code class="language-bash">crontab -u &lt;Magento file system owner name> -l</code></pre>
    
    
    
    For example, on CentOS
    
    
    
    <pre><code class="language-bash">crontab -u magento_user -l</code></pre>
    
    
    
    If no crontab has been set up for the user, the following message displays:
    
    
    
    <pre><code class="language-terminal">no crontab for magento_user</code></pre>
    
    
    
    Your crontab tells you the following:
    
    
    
    * What PHP binary you're using (in some cases, you have more than one)
    * What Magento cron scripts you're running (in particular, the paths to those scripts)
    * Where your cron logs are located
    
    
    
    
    See one of the following sections for a solution to your issue.
    
    

## Solutions

### Solution for crontab not being set up

To verify your cron jobs are set up properly, see [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron).

### Solution for cron running from incorrect PHP binary

If your cron job uses a PHP binary different from the web server plug-in, PHP settings errors might display. To resolve the issue, set identical PHP settings for both the PHP command line and the PHP web server plug-in.

For more information about PHP settings, see [Required PHP settings](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html).

### Solution for cron running with errors

Try running each command manually because the command might display helpful error messages. See [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron).

<p class="info">You must run cron at least <em>twice</em> for the job to execute; the first time to queue jobs, the second time to execute the jobs.</p>