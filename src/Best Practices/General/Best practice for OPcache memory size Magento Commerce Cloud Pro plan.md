---
title: Best practice for OPcache memory size Magento Commerce Cloud Pro plan
link: https://support.magento.com/hc/en-us/articles/360044740812-Best-practice-for-OPcache-memory-size-Magento-Commerce-Cloud-Pro-plan
labels: Magento Commerce Cloud,performance,Pro,php.ini,OPcache,memory,best practices,2.3.x,PHP 7.0
---

<p>For Pro environments of Magento Commerce Cloud 2.3.x it is recommended to set <code>opcache.memory_consumption</code> to at least 2GB, to avoid performance degradation. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.3.x, Pro environments</li>
<li>PHP 7.0 and later</li>
</ul>
<h2>Best practice</h2>
<p>Allocate at least 2GB of memory for the <a href="https://www.php.net/manual/en/book.opcache.php">OPcache PHP module</a>. </p>
<p>The OPcache module is configured in the <code>php.ini</code> file. To allocate 2048MB of memory, set <code>opcache.memory_consumption =  2048</code>. For more details see <a href="https://devdocs.magento.com/guides/v2.3/performance-best-practices/software.html#php-settings">Performance Best Practices - PHP Settings</a> and <a href="https://devdocs.magento.com/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings">Configure PHP options</a> in Magento Developer Documentation.</p>
<h2>Related reading</h2>
<p>Best practices for improving Magento Commerce Cloud site performance: </p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud">Database best practices for Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360041739651-Most-common-database-issues-in-Magento-Commerce-Cloud">Most common database issues in Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360040227191-Indexers-Update-On-Schedule-optimizes-Magento-performance-">Indexers "Update On Schedule" optimizes Magento performance</a></li>
</ul>
<p> </p>