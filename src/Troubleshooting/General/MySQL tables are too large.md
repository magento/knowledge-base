---
title: MySQL tables are too large
link: https://support.magento.com/hc/en-us/articles/360038862691-MySQL-tables-are-too-large
labels: Magento Commerce Cloud,Magento Commerce,performance,MySQL,large tables,2.x.x,how to
---

<p>This article discusses why is it an issue, when any MySQL table gets larger than 1 GB, and how to prevent this.</p>
<p>Affected products and versions:</p>
<ul>
<li>Magento Commerce Cloud  2.x.x</li>
<li>Magento Commerce 2.x.x</li>
</ul>
<h2>Issue</h2>
<p>The MySQL tables size does not directly affect the site performance. However, if a table is large, it means that there are frequent insert operations on this table, with possible extra data or outdated data. MySQL is designed for databases, where the ratio between read/write operations is 80%/20%.  For the large tables, 1 GB and more, MySQL indices, which are designed to speed up performance on read operations, could degrade performance on write operations.</p>
<h2>Solution</h2>
<p>Consider the following options to avoid a decrease in performance:</p>
<ul>
<li>Create CRON job, that will clean up large tables. See <a href="https://support.magento.com/hc/en-us/articles/360038957591">Find large MySQL tables </a> for recommendations on how to identify large tables.</li>
<li>For tables larger than 1 GB, use a MySQL engine optimized for logs writing. For example, the Archive engine. </li>
<li>Update functionality to avoid storing logs in DB.</li>
</ul>
<h2>Related reading</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360039418091">Oversized change log tables causing delays in entities updates</a></p>