---
title: Find large MySQL tables
link: https://support.magento.com/hc/en-us/articles/360038957591-Find-large-MySQL-tables
labels: Magento Commerce Cloud,Magento,MySQL,database,how to,tables
---

<p>To identify the large tables, connect to the database as described in the <a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-mysql.html#connect-to-the-database">Connect to the database</a> article, and run the following command, where <code>project_id</code> is your Cloud project ID: </p>
<pre><code class="language-mysql">SELECT TABLE_NAME AS `Table`,
  ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) AS `Size (MB)`
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "%project_id%"
ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;
</code></pre>
<p>This would display the complete list of tables and their size. You can go through the list and identify which tables require attention because of the big size. </p>