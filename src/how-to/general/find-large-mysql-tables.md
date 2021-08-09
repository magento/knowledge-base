---
title: Find large MySQL tables
labels: Magento,Magento Commerce Cloud,MySQL,database,how to,tables,Adobe Commerce
---

To identify the large tables, connect to the database as described in the [Connect to the database](https://devdocs.magento.com/cloud/project/project-conf-files_services-mysql.html#connect-to-the-database) article, and run the following command, where `project_id` is your Cloud project ID:

```sql
SELECT TABLE_NAME AS `Table`,
  ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) AS `Size (MB)`
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "<project_id>"
ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;
```

This would display the complete list of tables and their size. You can go through the list and identify which tables require attention because of the big size.
