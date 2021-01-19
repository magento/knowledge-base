---
title: Database auto_increment_ increment variable set to "3" Magento Cloud Pro
link: https://support.magento.com/hc/en-us/articles/360026909791-Database-auto-increment-increment-variable-set-to-3-Magento-Cloud-Pro
labels: Magento Commerce Cloud,Pro,auto_increment_increment,MySQL,database,FAQ,Galera
---

This is the expected behavior for Magento Cloud Pro plan solutions due to the 3-node architecture and cannot be modified.

The Galera database cluster is used, which is a database cluster with one MariaDB MySQL database per node with an auto-increment setting of three for unique IDs across every database.

## Useful links

* [Pro Artchitercture](https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery)

* [Install Magento prerequisites: database](https://devdocs.magento.com/guides/v2.1/cloud/before/before-workspace-magento-prereqs.html#database)

