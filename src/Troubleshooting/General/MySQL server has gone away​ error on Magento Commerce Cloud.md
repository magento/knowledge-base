---
title: MySQL server has gone away​ error on Magento Commerce Cloud
labels: Magento Commerce Cloud,error,log,cron,2.3,MySQL,time-out,deployment fails,2.3.x,2.4,2.4.x
---

This article talks about the solution for the issue where you receive an "_SQL server has gone away_" error message in the `` cron.log `` file. A range of symptoms including image file importing issues or deployment failure may be experienced._  
_

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

You receive an "_SQL server has gone away_" error message in the `` cron.log `` file.

Steps to reproduce

Import files and trigger a deployment. 

Expected result

 Successful deployment.

Actual result

Error message in `` cron.log ``:  
"_SQLSTATE\[HY000\] \[2006\] MySQL server has gone away at/app/AAAAAAAAA/vendor/magento/zendframework1/library/Zend/Db/Adapter/Pdo/Abstract.php:144"_

## Cause

The `` default_socket_timeout `` value is set too low. This is caused by the setting `` default_socket_timeout ``. If php doesn't receive anything from the MySQL database within this period, it assumes it is disconnected and throws the error. 

## Solution

<ol><li>Check the current timeout period for <code>default_socket_timeout</code> by running in the CLI:<br/>
<pre class="line-numbers"><code class="language-clike">  php -i |grep default_socket_timeout</code></pre>
</li><li>Depending on the timeout setting increase, the <code>default_socket_timeout</code> variable to the expected longest possible run time in the <code>/etc/platform/&lt;project_name>/php.ini</code> file. It is suggested that you set between 10-15 mins. </li><li>Commit it to GIT and redeploy.</li></ol>

## Related reading

* [Database upload loses connection to MySQL](https://support.magento.com/hc/en-us/articles/360037591172)
* [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312)
* [Most common database issues in Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041739651)