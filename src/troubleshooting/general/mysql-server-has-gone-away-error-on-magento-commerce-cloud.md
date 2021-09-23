---
title: MySQL server has gone away​ error on Adobe Commerce on cloud
labels: 2.3,2.3.x,2.4,2.4.x,Magento,MySQL,cron,deployment fails,error,log,time-out,Adobe Commerce,cloud infrastructure
---

This article talks about the solution for the issue where you receive an " *SQL server has gone away* " error message in the `cron.log` file. A range of symptoms including image file importing issues or deployment failure may be experienced.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

You receive an " *SQL server has gone away* " error message in the `cron.log` file.

 <span class="wysiwyg-underline">Steps to reproduce</span>

Import files and trigger a deployment.

 <span class="wysiwyg-underline">Expected result</span>

Successful deployment.

 <span class="wysiwyg-underline">Actual result</span>

Error message in `cron.log` :" *SQLSTATE\[HY000\] \[2006\] MySQL server has gone away at/app/AAAAAAAAA/vendor/magento/zendframework1/library/Zend/Db/Adapter/Pdo/Abstract.php:144"*

## Cause

The `default_socket_timeout` value is set too low. This is caused by the setting `default_socket_timeout` . If php doesn't receive anything from the MySQL database within this period, it assumes it is disconnected and throws the error.

## Solution

1. Check the current timeout period for `default_socket_timeout` by running in the CLI:    ```clike    php -i |grep default_socket_timeout    ```    
1. Depending on the timeout setting increase, the `default_socket_timeout` variable to the expected longest possible run time in the `/etc/platform/<project_name>/php.ini` file. It is suggested that you set between 10-15 mins.
1. Commit it to GIT and redeploy.

## Related reading

* [Database upload loses connection to MySQL](https://support.magento.com/hc/en-us/articles/360037591172)
* [Database best practices for Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360041997312)
* [Most common database issues in Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360041739651)
