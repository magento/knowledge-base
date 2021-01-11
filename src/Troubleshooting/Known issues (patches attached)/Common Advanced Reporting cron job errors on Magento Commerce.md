---
title: Common Advanced Reporting cron job errors on Magento Commerce 
link: https://support.magento.com/hc/en-us/articles/360044350992-Common-Advanced-Reporting-cron-job-errors-on-Magento-Commerce-
labels: Magento Commerce Cloud,Magento Commerce,patch,known issue,404,troubleshooting,advanced reporting,2.3.x,2.3.1,2.3.4-p2
---

This article provides patches for the Advanced Reporting cron jobs issues in Magento Commerce, which can cause a 404 error for customers trying to access Advanced Reporting.

 Affected products and versions
------------------------------

 Magento Commerce 2.3.x

 Issue
-----

 A customer gets a 404 error when they attempt to access Advanced Reporting and there are errors in the logs associated to analytics\_collect\_data job. 

 Compatible Magento versions:
----------------------------

 The patches are compatible (but might not solve the issue) with the following Magento versions and editions:

 [MDVA-19391\_EE\_2.3.1\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059514731/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch):  
 Magento Commerce and Magento Commerce Cloud:

 
 * 2.3.4-p2
 * 2.3.4
 * 2.3.3-p1
 * 2.3.3
 * 2.3.2-p2
 * 2.3.2
 * 2.3.1
 
 [MDVA-18980\_EE\_2.2.6\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059516831/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch):  
 Magento Commerce and Magento Commerce Cloud:

 
 * 2.3.0
 * 2.2.7
 * 2.2.6
 * 2.2.5
 * 2.2.4
 * 2.2.3
 * 2.2.2
 
 [MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059527331/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch):  
 Magento Commerce and Magento Commerce Cloud:

 
 * 2.3.0
 * 2.2.7
 * 2.2.6
 
 **Solution**
------------

 To fix the issue, please apply the relevant patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following links:

 
 * Download [MDVA-19391\_EE\_2.3.1\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059514731/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch) 
 * Download [MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059527331/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch) 
 * Download [MDVA-18980\_EE\_2.3.1\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059516831/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch) 
 
 To check which patch to use:

 
 2. Review the logs by using the following command:  
 grep analytics\_collect\_data var/log/support\_report.log var/log/support\_report.log.1.gz 
 4. Depending on the error you see, select a patch using the information from the following table.  
   
     Error

  Patch    report.CRITICAL: Error when running a cron job {"exception":"[object] (RuntimeException(code: 0): Error when running a cron job at /srv/public\_html/vendor/magento/module-cron/Observer/ProcessCronQueueObserver.php:327, TypeError(code: 0): substr\_count() expects parameter 1 to be string, null given at /srv/public\_html/vendor/magento/module-page-builder-analytics/Model/ContentTypeUsageReportProvider.php:106)"} []  OR  report.ERROR: Cron Job analytics\_collect\_data has an error: substr\_count() expects parameter 1 to be string, null given. Statistics: {"sum":0,"count":1,"realmem":0,"emalloc":0,"realmem\_start":224919552,"emalloc\_start":216398384} [] []   

  Apply [MDVA-19391\_EE\_2.3.1\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059514731/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch), clear cache and wait 24 hours for the job to run again and try again.    *Failed to open file /tmp/analytics/tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../* 

  Apply [MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059527331/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch), clear cache and wait 24 hours for the job to run again and try again.    *Not valid cipher* Apply [MDVA-18980\_EE\_2.2.6\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360059516831/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch), clear cache and wait 24 hours for the job to run again and try again.     
 
 How to apply the patch
----------------------

 See [How to apply a composer patch](https://support.magento.com/hc/en-us/articles/360028367731) provided by Magento for instructions.

 Attached files
--------------

