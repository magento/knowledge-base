---
title: Realpath cache size best practice
link: https://support.magento.com/hc/en-us/articles/360045176771-Realpath-cache-size-best-practice
labels: Magento Commerce Cloud,Magento Commerce,2.3,PHP,php.ini,2.3.4-p1,best practices,2.3.5-p1,2.3.x,realpath cache,2.3.1,2.3.4-p2,2.3.4,2.3.0,2.3.3,2.4,2.4.0,2.4.x,2.3.2,2.3.6,2.3.5-p2,2.3.3-p1,2.4.1,2.3.2-p2
---

<p>It is recommended that you set realpath cache size to 10 MB for Magento Commerce 2.3.x and Commerce Cloud 2.3.x users. Realpath cache caches the real file system paths of filenames referenced instead of looking them up each time. Every time various file functions are performed or require a file and use a relative path, PHP has to look up where that file really exists.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud all versions v.2.3.x and above</li>
<li>Magento Commerce all versions v.2.3.x and above</li>
</ul>
<h2>Best Practice</h2>
<p>If realpath cache size is too low or high it adds additional overhead during cache generation. Increase <code>realpath_cache_size</code> php setting in <code>php.ini</code> file. Magento best practice states that the allocated memory for realpath cache needs to be 10 MB. Refer to <a href="https://devdocs.magento.com/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings">Configure PHP Options</a>.</p>
<h2>Related reading </h2>
<p>Refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/performance-best-practices/software.html#php-settings">PHP settings</a>.</p>
<p>Best practices to improve Magento Commerce Cloud site performance: </p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360041997312-Database-best-practices-for-Magento-Commerce-Cloud">Database best practices for Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360041739651-Most-common-database-issues-in-Magento-Commerce-Cloud">Most common database issues in Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360040227191-Indexers-Update-On-Schedule-optimizes-Magento-performance-">Indexers "Update On Schedule" optimizes Magento performance</a></li>
</ul>
<p> </p>