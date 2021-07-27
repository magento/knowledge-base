---
title: Database auto_increment_ increment variable set to "3" Adobe Commerce on our cloud architecture
labels: FAQ,Galera,Magento Commerce Cloud,MySQL,Pro,auto_increment_increment,database,Adobe Commerce on our cloud architecture
---

This is the expected behavior for Adobe Commerce on our cloud architecture solutions due to the 3-node architecture and cannot be modified.

The Galera database cluster is used, which is a database cluster with one MariaDB MySQL database per node with an auto-increment setting of three for unique IDs across every database.

The increment ID used on clusters does not always get separated/incremented by 3 due to the way that Galera works.

Each of the three servers manages its own id space, and the increment being used depends on which is the Mysql main database server (depending on the relative load) - hence the varying gaps.
If you SSH to each node and connect to the local MySQL instance running on that node using port 3307 (instead of being proxied to the "main" on the standard port 3306,) you will see the following picture:

``MariaDB [(node 1)]> show variables like "auto_increment%";``
-------------------------------+

Variable_name	Value
-------------------------------+

auto_increment_increment	3
auto_increment_offset	1
-------------------------------+
2 rows in set (0.00 sec)
MariaDB [(node 2)]> show variables like "auto_increment%";
-------------------------------+

Variable_name	Value
-------------------------------+

auto_increment_increment	3
auto_increment_offset	2
-------------------------------+
2 rows in set (0.00 sec)
MariaDB [(node 3)]> show variables like "auto_increment%";
-------------------------------+

Variable_name	Value
-------------------------------+

auto_increment_increment	3
auto_increment_offset	3
-------------------------------+
2 rows in set (0.00 sec)

For example, if the elected main is node 1 where auto_increment_offset = 1, the ID would be incremented by 1. Then if a new main node gets elected at a later time, e.g., node 3 where auto_increment_offset = 3, it would be incremented by 3 instead.

## Useful links

* Adobe Commerce on our cloud architecture: DevDocs [Backup and disaster recovery](https://devdocs.magento.com/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery)
* Adobe Commerce on our cloud architecture: DevDocs [Install prerequisites: database](https://devdocs.magento.com/cloud/before/before-workspace-magento-prereqs.html#database)
