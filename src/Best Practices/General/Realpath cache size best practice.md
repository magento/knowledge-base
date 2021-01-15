---
title: Realpath cache size best practice
link: https://support.magento.com/hc/en-us/articles/360045176771-Realpath-cache-size-best-practice
labels: Magento Commerce Cloud,Magento Commerce,2.3,PHP,php.ini,2.3.4-p1,best practices,2.3.5-p1,2.3.x,realpath cache,2.3.1,2.3.4-p2,2.3.4,2.3.0,2.3.3,2.4,2.4.0,2.4.x,2.3.2,2.3.6,2.3.5-p2,2.3.3-p1,2.4.1,2.3.2-p2
---

It is recommended that you set realpath cache size to 10 MB for Magento Commerce 2.3.x and Commerce Cloud 2.3.x users.Realpath cache caches the real file system paths of filenames referenced instead of looking them up each time. Every time various file functions are performed or require a file and use a relative path, PHP has to look up where that file really exists.

 Affected products and versions
------------------------------

 
 * Magento Commerce Cloud all versions v.2.3.x and above
 * Magento Commerce all versions v.2.3.x and above
 
 Best Practice
-------------

 If realpath cache size is too low or high it adds additional overhead during cache generation. Increase realpath\_cache\_size php setting in php.ini file. Magento best practice states that the allocated memory for realpath cache needs to be **10 MB**. Refer to [Configure PHP Options](https://devdocs.magento.com/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings).

 Related reading
---------------

 Refer to DevDocs [PHP settings](https://devdocs.magento.com/guides/v2.3/performance-best-practices/software.html#php-settings).

 Best practices to improve Magento Commerce Cloud site performance: 

 
 * [Database best practices for Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud)
 * [Most common database issues in Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360041739651-Most-common-database-issues-in-Magento-Commerce-Cloud)
 * [Indexers "Update On Schedule" optimizes Magento performance](https://support.magento.com/hc/en-us/articles/360040227191-Indexers-Update-On-Schedule-optimizes-Magento-performance-)
 
  

