---
title: Update Advanced Reporting to run on its own cron group
link: https://support.magento.com/hc/en-us/articles/360037681092-Update-Advanced-Reporting-to-run-on-its-own-cron-group
labels: Magento Commerce Cloud,patch,troubleshooting,known issues,Advanced Reporting,2.3.0,no data
---

This article provides a patch for the known issue for Magento Commerce Cloud 2.3.0 where Advanced Reporting is not showing any data. This is because Advanced Reporting job analytics\_collect\_data is not executed according to schedule. This article provides a patch that will create an Advanced Reporting cron group analytics.

 Issue
-----

 No data is loaded into the Advanced Reporting module.

 Patch
-----

 The patch is attached to this article. The patch moves the analytics cron job tasks from default group into analytics.

 To download it, scroll down to the end of the article and click the file name, or click the following link:

 [MDVA-19640\_EE\_2.3.0\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360046452172/MDVA-19640_EE_2.3.0_COMPOSER_v1.patch)

 After applying the patch run the following SQL query. The query has to be run to change records in cron\_schedule table. 

 UPDATE core\_config\_data SET `path` = REPLACE(path, "crontab/default/jobs/analytics", "crontab/analytics/jobs/analytics") WHERE `path` LIKE "crontab/default/jobs/analytics%"; ### Compatible Magento versions:

 The patch was created for 

 
 * Magento Commerce Cloud 2.3.0
 
 The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:  
   
 2.2.2-2.2.10, 2.3.0-2.3.2 and 2.3.2-p2 and 2.3.3, for Magento Commerce and Magento Commerce Cloud

 How to apply the patch
----------------------

 See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

 Attached files
--------------

  

