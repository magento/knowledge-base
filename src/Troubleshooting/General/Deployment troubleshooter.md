---
title: Deployment troubleshooter
link: https://support.magento.com/hc/en-us/articles/360040986912-Deployment-troubleshooter
labels: deploy,deployment,Troubleshooter,deployment error,deployment fails,stuck deployment
---



Stuck deployments and failed deployments can be solved using the Deployment troubleshooter tool. Click on each question to reveal the answer in each step of the troubleshooter.

##### Step 1

Stuck Deployment – Is Magento Commerce Cloud service up? Check [Adobe Magento Magento Commerce Cloud](https://status.adobe.com/products/3350/). 
a. YES – Proceed to [Step 2](#zd-accordion-2).  
 b. NO – Maintenance or global outages. Check for estimated duration and updates.

-------This is one whole accordion panel.-------------

##### Step 2

SSH successful to all nodes?
a. YES – Proceed to [Step 3](#zd-accordion-3).  
 b. NO – [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

##### Step 3

All services running?
a. YES – Proceed to [Step 4](#zd-accordion-4).  
 b. NO – [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

##### Step 4

Using Bitbucket?
a. YES – Check [status.bitbucket.com](https://bitbucket.status.atlassian.com/).  
 b. NO – Check deployment log errors in [Log Locations: Build and Deploy Logs](https://devdocs.magento.com/cloud/project/log-locations.html#build-and-deploy-logs). Proceed to [Step 5](#zd-accordion-5).

-------This is one whole accordion panel.-------------

##### Step 5

Error code reported?
a. YES – Proceed to [Step 6](#zd-accordion-6).  
 b. NO – Proceed to [Step 7](#zd-accordion-7).

-------This is one whole accordion panel.-------------

##### Step 6

403 Forbidden?
a. YES – Proceed to [Step 15.](#zd-accordion-15)   
 b. NO – Proceed to [Step 8](#zd-accordion-8).

-------This is one whole accordion panel.-------------

##### Step 7

Are cron jobs currently running?
a. YES – Login by ssh on integration branch (e.g. primary). Kill and unlock cron jobs. This will kill cron jobs and reset the status. Run php vendor/bin/ece-tools cron:kill and then php vendor/bin/ece-tools cron:unlock.  
If you were in process of merging one environment into another, check both environments for running crons.   
 b. NO – Proceed to [Step 16.](#zd-accordion-16)

-------This is one whole accordion panel.-------------

##### Step 8

Unable to upload application to the remote cluster error?
a. YES – Proceed to [Step 9](#zd-accordion-9).  
 b. NO – Proceed to [Step 10.](#zd-accordion-10)

-------This is one whole accordion panel.-------------

##### Step 9

Available storage okay?
a. YES – Proceed with [Step 10](#zd-accordion-10).  
 b. NO – Review [Manage disk space](https://devdocs.magento.com/cloud/project/manage-disk-space.html).

-------This is one whole accordion panel.-------------

##### Step 10

*<filename> file could not be written Warning*?
a. YES – Please [increase the disk value in .magento.app.yaml](https://devdocs.magento.com/cloud/project/manage-disk-space.html#application-disk-space) and redeploy. If this does not work, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).  
 b. NO – Proceed with [Step 11](#zd-accordion-11).

-------This is one whole accordion panel.-------------

##### Step 11

Environment redeployment failed error?
a. YES – Proceed with [Step 12](#zd-accordion-12).  
 b. NO – Proceed with [Step 7](#zd-accordion-7).

-------This is one whole accordion panel.-------------

##### Step 12

Elasticsearch being upgraded or deployed?
a. YES – Elasticsearch failed upgrade steps. Refer to [Elasticsearch software compatibility](https://www.elastic.co/guide/en/elasticsearch/reference/current/setup-upgrade.html). If the Elasticsearch upgrade still doesn't work, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251). **Note**: On Magento Cloud please be aware that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) detailing your required service upgrade and stating the time when you want the upgrade process to start.  
 b. NO – Proceed to [Step 13](#zd-accordion-13).

-------This is one whole accordion panel.-------------

##### Step 13

File system out of inodes or space?
a. YES – See [Manage disk space](https://devdocs.magento.com/cloud/project/manage-disk-space.html).  
 b. NO – Proceed to [Step 14](#zd-accordion-14).

-------This is one whole accordion panel.-------------

##### Step 14

Error about Elasticseach versions?
a. YES – Proceed to [Step 15](#zd-accordion-15).   
 b. NO – Proceed to [Step 20](#zd-accordion-20).

-------This is one whole accordion panel.-------------

##### Step 15

Composer config correct? 
a. YES – Proceed to [Step 9](#zd-accordion-9).  
 b. NO –  Review [Composer Troubleshooter webpage](https://getcomposer.org/doc/articles/troubleshooting.md).

-------This is one whole accordion panel.-------------

##### Step 16

Long running processes(es)?
a. YES – Identify long running processes, kill process, and monitor deployments for reoccurrence.  
 b. NO – Proceed to [Step 17](#zd-accordion-17).

-------This is one whole accordion panel.-------------

##### Step 17

Post hook failure/hang?
a. YES – Database: [Free disk space](https://devdocs.magento.com/cloud/project/manage-disk-space.html#allocating-disk-space), corruption, incomplete/corrupted tables.  
 b.  NO – Proceed to [Step 18](#zd-accordion-18).

-------This is one whole accordion panel.-------------

##### Step 18

Using third-party extensions?
a. YES – Try [Disabling the third-party extensions](https://devdocs.magento.com/cloud/howtos/install-components.html#manage-extensions) and running the deployment (to see if they are the cause of the problem), especially if there are extension names in any errors.  
 b. NO – Proceed to [Step 19](#zd-accordion-19).

-------This is one whole accordion panel.-------------

##### Step 19

[Check slow query log and MySQL show processlist](https://support.magento.com/hc/en-us/articles/360030903091). Long running queries?
a. YES – Kill any long running queries. Review [MySQL Kill Syntax.](https://dev.mysql.com/doc/refman/8.0/en/kill.html)b. NO – [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

##### Step 20

Downgrading Elasticsearch versions?
a. YES – Can't be done through configuration. [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).  
 b. NO – [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

[Back to Step 1](#zd-accordion-1)

