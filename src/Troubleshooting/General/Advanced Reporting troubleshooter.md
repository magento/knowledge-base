---
title: Advanced Reporting troubleshooter
link: https://support.magento.com/hc/en-us/articles/360041456192-Advanced-Reporting-troubleshooter
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,404 error,Advanced Reporting,2.3.x,2.4
---

Advanced Reporting issues can be solved using the Advanced Reporting troubleshooter tool. This includes Advanced Reporting not showing any data and 404 errors. Click on each question to reveal the answer in each step of the troubleshooter. 

 -------This opens the main level that holds everything.-------------  -------This is one whole accordion panel.-------------  ##### Step 1

 You have a 404 Error page when using Advanced Reporting. Does your website meet [Advanced Reporting Requirements](https://docs.magento.com/user-guide/reports/advanced-reporting.html#requirements)? a. YES – Proceed to [Step 2](#zd-accordion-2).  
 b. NO – Complete the Advanced Reporting requirements for your site by following the steps in [Advanced Reporting Requirements](https://docs.magento.com/user-guide/reports/advanced-reporting.html#requirements). Then, proceed to [Step 2](#zd-accordion-2).

  -------This opens the main level that holds everything.-------------  -------This is one whole accordion panel.-------------  ##### Step 2

 Is multiple currency being used (in orders and configuration)? Run this command:  
 php bin/magento config:show currency | grep 'currency/options'  a. YES – You cannot use Advanced Reporting, as we only support one currency.   
 b. NO – Output shows only one currency. Example:  
 currency/options/base - USD  
 currency/options/default - USD   
 currency/options/allow - USD  
 Proceed to [Step 3](#zd-accordion-3).

  -------This opens the main level that holds everything.-------------  -------This is one whole accordion panel.-------------  ##### Step 3

 Are you using [Spilt Database Solution](https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master.html)? a. YES – Use the patch **MDVA-26831** in [Advanced Reporting 404 error on split database solution](https://support.magento.com/hc/en-us/articles/360044725072-Advanced-Reporting-404-error-on-split-database-solution) and clear cache. Wait for 24 hours for the job to run again and try again.  
 b. NO – Proceed to [Step 4](#zd-accordion-4).

  -------This is one whole accordion panel.-------------  ##### Step 4

 Is Advanced Reporting enabled? Check **Admin** > **Stores** > **Settings** > **Configuration** > **General** > **Advanced**. For detailed steps, review [Advanced Reporting: Enable Advanced Reporting](https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting).  a. YES – Proceed to [Step 5](#zd-accordion-5).  
 b. NO – [Enable Advanced Reporting](https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting) and save, and wait 24 hours for Magento and Advanced Reporting to synchronize. Check if your data now loads. If it does you have solved the issue. If it does not proceed to [Step 5](#zd-accordion-5).

  -------This is one whole accordion panel.-------------

  ##### Step 5

 Check that there is a token by running the following query:   
 SELECT * FROM core\_config\_data WHERE path LIKE 'analytics/general/token' \G  
Is there a token? a. YES – Proceed to [Step 7](#zd-accordion-7).   
 b. NO – If token value is NULL or there is no record in the database, proceed to [Step 6](#zd-accordion-6).

  -------This is one whole accordion panel.-------------

  ##### Step 6

 Check counter value in flag table by running this query:  
  SELECT * FROM `flag` where `flag\_code` = 'analytics\_link\_subscription\_update\_reverse\_counter'\G;  
 Does the query return the row? a. YES – Take the following steps:  
 1. Run the query below:  
 DELETE from `flag` where `flag\_code` = 'analytics\_link\_subscription\_update\_reverse\_counter';  
 2. [Disable and Enable Advanced Reporting module](https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting) in settings and [reauthorize the token](https://docs.magento.com/user-guide/reports/advanced-reporting.html#verify-that-the-integration-is-active).  
 3. Wait 24 hours for Magento and Advanced Reporting to synchronize. If you still can't see data in Advanced Reporting, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).   
 b. NO – If the query does not return anything, take the following steps:  
 1. [Disable and Enable Advanced Reporting module](https://docs.magento.com/user-guide/reports/advanced-reporting.html#step-1-enable-advanced-reporting) in settings and [reauthorize the token](https://docs.magento.com/user-guide/reports/advanced-reporting.html#verify-that-the-integration-is-active).  
 2. Wait 24 hours for Magento and Advanced Reporting to synchronize. If you still can't see data in Advanced Reporting, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251). 

  -------This is one whole accordion panel.-------------

  ##### Step 7

 Are there are records in the cron\_schedule table? Check that job analytics\_collect\_data was executed by running this query:  
 SELECT * FROM cron\_schedule WHERE job\_code LIKE 'analytics\_collect\_data' \G  a. YES – If there are records and the **status** column says *missed*, use the patch in this KB article [Update Advanced Reporting to run on its own cron group](https://support.magento.com/hc/en-us/articles/360037681092).   
 b. YES – If there are records and the **status** column says *success*, proceed to [Step 9](#zd-accordion-9).   
 c. YES – If there are records and the **status** column says *error*, proceed to [Step 8.](#zd-accordion-8)  
 d. NO – If there are no records, proceed to [Step 8](#zd-accordion-8). 

   ##### Step 8

 Was the job logged in support\_report.log? Run the command:   
 zgrep analytics\_collect\_data var/log/support\_report.log var/log/support\_report.log.1.gz | tail  a. YES – If the output from the query indicates a successful job, for example  
 Cron Job analytics\_collect\_data is successfully finished  
 proceed to [Step 9](#zd-accordion-9).   
 b. NO – If there are no records in the log, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).  
 c. YES – If there are records but there is an error, proceed to [Step 10](#zd-accordion-10). 

   ##### Step 9

 Does the file data.tgz exist in the system and are there are records in access logs?  
 To check that the file data.tgz exists, run command:  
 ls -ltr pub/media/analytics/<there should be a directory with hash name>/  
 To check that there are records in access.logs, run command:  
 zgrep -i analytics /var/log/platform/<PATH to access log>/access.log* | grep MagentoBI  a. YES – If the file data.tgz is present and there are records in the access logs, but you still have a 404 error, you need to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).  
 b. NO – Proceed to [Step 10](#zd-accordion-10). 

   ##### Step 10

 Is there an error caused by Page Builder? Example:  
 report.ERROR: Cron Job analytics\_collect\_data has an error: substr\_count() expects parameter 1 to be string, null given. Statistics: {"sum":0,"count":1,"realmem":0,"emalloc":0,"realmem\_start":224919552,"emalloc\_start":216398384} [] []  a. YES – Use the MDVA-19391 patch in [Common Advanced Reporting cron job errors on Magento Commerce](https://support.magento.com/hc/en-us/articles/360044350992), wait 24 hours for the job to run again and try again.   
 b. NO – [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

  [Back to Step 1](#zd-accordion-1)

   