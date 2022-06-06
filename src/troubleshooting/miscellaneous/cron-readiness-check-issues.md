---
title: Cron readiness check issues
labels: Magento Commerce,Magento Commerce Cloud,PHP,check,cron,crontab,how to,readiness,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides solutions for cron readiness issues. The following are symptoms of cron issues:

* An error message about the PHP setting `$HTTP_RAW_POST_DATA` displays even though it's set properly.
* The PHP readiness check doesn't display the PHP version as the following figure shows:  
        ![upgr-tshoot-no-cron.png](assets/upgr-tshoot-no-cron.png)  
* The following error displays in the Commerce Admin:  
        ![compman-cron-not-running.png](assets/compman-cron-not-running.png)  
        To see the error, you might need to click **System Messages** at the top of the window as follows:  
        ![compman_sys-messages.png](assets/compman_sys-messages.png)

<h2 id="check-your-existing-crontab">Check your existing crontab</h2>

This section discusses how to see if cron is currently running and verifying whether it's set up properly.

To verify whether or not your crontab is set up:

1. Log in to your Commerce server as, or switch to, the [Magento file system owner](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html).
1. See if the following file exists: `$ ls -al <magento_root>/var/.setup_cronjob_status`. If the file exists, cron has run successfully in the past. If the file *does not* exist, either you haven't yet installed Adobe Commerce or cron isn't running. In either case, continue with the next step.    
1. Get more detail about cron. As a user with `root` privileges, enter the following command: `$ crontab -u <Magento file system owner name> -l`. For example, on CentOS `$ crontab -u magento_user -l`. If no crontab has been set up for the user, the following message displays:    `no crontab for magento_user`. Your crontab tells you the following:    
    * What PHP binary you're using (in some cases, you have more than one)
    * What Adobe Commerce cron scripts you're running (in particular, the paths to those scripts)
    * Where your cron logs are located

    See one of the following sections for a solution to your issue.    

<h2 id="solution-crontab-not-set-up">Solution: crontab not set up</h2>

To verify your cron jobs are set up properly, see [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron) in our developer documentation.

<h2 id="solution-cron-running-from-incorrect-php-binary">Solution: cron running from incorrect PHP binary</h2>

If your cron job uses a PHP binary different from the web server plug-in, PHP settings errors might display. To resolve the issue, set identical PHP settings for both the PHP command line and the PHP web server plug-in.

For more information about PHP settings, see [Required PHP settings](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html) in our developer documentation.

<h2 id="solution-cron-running-with-errors">Solution: cron running with errors</h2>

Try running each command manually because the command might display helpful error messages. See [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron) in our developer documentation.

>![info]
>
>You must run cron at least *twice* for the job to execute; the first time to queue jobs, the second time to execute the jobs.
