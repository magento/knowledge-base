---
title: Cron tasks lock tasks from other groups
labels: Magento Commerce Cloud,Pro,cron,lock,troubleshooting
---

This article provides a solution for the Magento Commerce Cloud issue related to certain long-run cron jobs blocking other cron jobs.

### Affected products and versions

* Magento Cloud, Pro Architecture
* Onboard earlier than May 2019

<h2 id="Crontaskslocktasksfromdifferentgroups-Issueoverview">Issue</h2>

On Magento Cloud, when you have complex cron tasks (long-run tasks) they might lock other tasks for execution. For example, the indexers task reindexes invalidated indexers. It can take a few hours to finish, and it will lock other default cron jobs like: sending emails, generating sitemaps, customer notifications, other custom tasks.

 <span class="wysiwyg-underline">Symptoms</span> 

The processes, executed by cron jobs, are not performed. For example, product updates are not applied for hours, or customers report not receiving emails.

When you open the `cron_schedule` database table, you see the jobs with `missed` status.

<h2 id="Crontaskslocktasksfromdifferentgroups-Cause">Cause</h2>

Previously, in Magento Cloud Environment, the Jenkins server was used to run cron jobs. Jenkins will only run one instance of a job at a time; consequently, there will only be one `bin/magento cron:run` process running at a time.

## Solution

1. Contact [Magento support](https://support.magento.com/hc/en-us/articles/360019088251) to have self-managed crons enabled.
1. Edit the `.magento.app.yaml` file in the root directory of the Magento code in the Git branch. Add the following:    ```yaml    crons:        cronrun:            spec: "* * * * *"            cmd: "php bin/magento cron:run"    ```    Please note, there’s no need to transfer old cron configurations where multiple `cron:run` are present to the new cron schedule; the regular Magento’s `cron:run` task, added as described above, is enough. Though it is required to transfer your custom jobs, if you had any.    
1. Save the file and push updates to the Staging and Production environments (the same way as you do it for Integration environments).

### Check if you have self-managed cron enabled

To check if the self-managed cron is enabled, run the `crontab -l` command, and observe the result:

* Self-managed cron is enabled, if you are able to see the tasks, like the following:    ```bash    username@hostname:~$ crontab -l    # Crontab is managed by the system, attempts to edit it directly will fail.    SHELL=/etc/platform/username/cron-run    MAILTO=""    # m h dom mon dow job_name    * * * * * cronrun    ```    
* The self-managed cron is not enabled, if you are not able to see the tasks, and get the "you are not allowed to use this program" error message.    

## Related reading

* [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html) on Magento Devdocs

