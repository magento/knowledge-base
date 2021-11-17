---
title: Best practice for OPcache memory size in Adobe Commerce
labels: 2.3.x,Magento Commerce Cloud,OPcache,PHP 7.0,Pro,best practices,memory,performance,php.ini,Adobe Commerce,cloud infrastructure,Pro plan architecture
---

For Adobe Commerce on cloud infrastructure Pro plan architecture 2.3.x, it is recommended to set `opcache.memory_consumption` to at least 2GB, to avoid performance degradation.

## Affected products and versions

* Adobe Commerce on cloud infrastructure Pro plan architecture 2.3.x
* PHP 7.0 and later

## Best practice

Allocate at least 2GB of memory for the [OPcache PHP module](https://www.php.net/manual/en/book.opcache.php).

The OPcache module is configured in the `php.ini` file. To allocate 2048MB of memory, set `opcache.memory_consumption =  2048` . For more details see [Performance Best Practices - PHP Settings](https://devdocs.magento.com/guides/v2.3/performance-best-practices/software.html#php-settings) and [Configure PHP options](https://devdocs.magento.com/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings) in our developer documentation.

## Related reading

Best practices for improving Adobe Commerce on cloud infrastructure site performance in our support knowledge base:

* [Database best practices for Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud)
* [Most common database issues in Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360041739651-Most-common-database-issues-in-Magento-Commerce-Cloud)
* [Indexers "Update On Schedule" optimizes Adobe Commerce performance](https://support.magento.com/hc/en-us/articles/360040227191-Indexers-Update-On-Schedule-optimizes-Magento-performance-)
