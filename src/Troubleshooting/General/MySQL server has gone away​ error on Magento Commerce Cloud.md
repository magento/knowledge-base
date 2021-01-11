---
title: MySQL server has gone away​ error on Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360050825112-MySQL-server-has-gone-away-error-on-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,error,log,cron,2.3,MySQL,time-out,deployment fails,2.3.x,2.4,2.4.x
---

This article talks about the solution for the issue where you receive an "*SQL server has gone away*" error message in the cron.log file. A range of symptoms including image file importing issues or deployment failure may be experienced.

 Affected products and versions
------------------------------

 
 * Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).
 
 Issue
-----

 You receive an "*SQL server has gone away*" error message in the cron.log file.

 Steps to reproduce

 Import files and trigger a deployment. 

 Expected result

  Successful deployment.

 Actual result

 Error message in cron.log:  
"*SQLSTATE[HY000] [2006] MySQL server has gone away at/app/AAAAAAAAA/vendor/magento/zendframework1/library/Zend/Db/Adapter/Pdo/Abstract.php:144"*

 Cause
-----

 The default\_socket\_timeout value is set too low. This is caused by the setting default\_socket\_timeout. If php doesn't receive anything from the MySQL database within this period, it assumes it is disconnected and throws the error. 

 Solution
--------

 
 2. Check the current timeout period for default\_socket\_timeout by running in the CLI:  
  php -i |grep default\_socket\_timeout 
 4. Depending on the timeout setting increase, the default\_socket\_timeout variable to the expected longest possible run time in the /etc/platform/<project\_name>/php.ini file. It is suggested that you set between 10-15 mins. 
 6. Commit it to GIT and redeploy.
 
 Related reading
---------------

 
 * [Database upload loses connection to MySQL](https://support.magento.com/hc/en-us/articles/360037591172)
 * [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312)
 * [Most common database issues in Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041739651)
 
