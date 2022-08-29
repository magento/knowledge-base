---
title: Cron tasks lock tasks from other groups
labels: Magento Commerce Cloud,Pro,cron,lock,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a solution for the Adobe Commerce on cloud infrastructure issue related to certain long-run cron jobs blocking other cron jobs.

## Affected products and versions

* Adobe Commerce on cloud infrastructure Pro plan architecture
* Onboard earlier than May 2019

## Issue

On Adobe Commerce for cloud, when you have complex cron tasks (long-run tasks), they might lock other tasks for execution. For example, the indexers' task reindexes invalidated indexers. It can take a few hours to finish, and it will lock other default cron jobs like sending emails, generating sitemaps, customer notifications, and other custom tasks.

<ins>Symptoms</ins>:

The processes executed by cron jobs are not performed. For example, product updates are not applied for hours, or customers report not receiving emails.

When you open the `cron_schedule` database table, you see the jobs with `missed` status.

## Cause

Previously, in our cloud environment, the Jenkins server was used to run cron jobs. Jenkins will only run one instance of a job at a time; consequently, there will only be one `bin/magento cron:run` process running at a time.

## Solution

1. Contact [Adobe Commerce support](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to have self-managed crons enabled.
1. Edit the `.magento.app.yaml` file in the root directory of the code for Adobe Commerce in the Git branch. Add the following:    
      ```yaml
        crons:        
        cronrun:
        spec: "* * * * *"            
        cmd: "php bin/magento cron:run"    
      ```    
1. Save the file and push updates to the Staging and Production environments (the same way you do it for Integration environments).

>![info]
>
>Note: There’s no need to transfer old cron configurations where multiple `cron:run` are present to the new cron schedule; the regular `cron:run` task, added as described above, is enough. Though, it is required to transfer your custom jobs if you had any.

### Check if you have self-managed cron enabled (only for Cloud Pro Staging and Production)

To check if the self-managed cron is enabled, run the `crontab -l` command and observe the result:

* Self-managed cron is enabled, if you are able to see the tasks, like the following:   
    ```bash
    username@hostname:~$ crontab -l    # Crontab is managed by the system, attempts to edit it directly will fail.    
    SHELL=/etc/platform/username/cron-run    MAILTO=""    # m h dom mon dow job_name    * * * * * cronrun    
    ```    
* The self-managed cron is not enabled if you are not able to see the tasks and get the *"you are not allowed to use this program"* error message.

>![info]
>
>Note: The command mentioned above to check if self-managed cron is enabled does not apply on a Starter plan and in the development/integration environment.

## Related reading

* [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html) in our developer documentation
