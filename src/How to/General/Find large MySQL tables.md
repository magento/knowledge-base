---
title: Find large MySQL tables
link: https://support.magento.com/hc/en-us/articles/360038957591-Find-large-MySQL-tables
labels: Magento Commerce Cloud,Magento,MySQL,database,how to,tables
---

To identify the large tables, connect to the database as described in the [Connect to the database](https://devdocs.magento.com/cloud/project/project-conf-files_services-mysql.html#connect-to-the-database) article, and run the following command, where project\_id is your Cloud project ID:

SELECT TABLE\_NAME AS `Table`,
 ROUND((DATA\_LENGTH + INDEX\_LENGTH) / 1024 / 1024) AS `Size (MB)`
FROM information\_schema.TABLES
WHERE TABLE\_SCHEMA = "%project\_id%"
ORDER BY (DATA\_LENGTH + INDEX\_LENGTH) DESC;

This would display the complete list of tables and their size. You can go through the list and identify which tables require attention because of the big size.

