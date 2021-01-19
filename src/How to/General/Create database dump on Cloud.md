---
title: Create database dump on Cloud
link: https://support.magento.com/hc/en-us/articles/360003254334-Create-database-dump-on-Cloud
labels: production,Magento Commerce Cloud,ece-tools,Pro,MySQL,database,how to,Starter
---

This article discusses the possible (and recommended) ways to create a database (DB) dump on Magento Commerce (Cloud) environments.

You only need to use one variant (option) to dump your DB. These options apply to any environment type (Integration, Staging, Production) and any plan (Starter and Pro).

## Prerequisite: SSH to your environment

To dump your DB on Magento Commerce (Cloud) with any variant discussed in this article, you must first [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).

Whether you choose Option 1 or Option 2 please run the command during off peak hours against a database secondary node.

## Option 1: db-dump (**ece-tools; recommended**)

You may dump your DB using the [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) command:

vendor/bin/ece-tools db-dump
This is the recommended and safest option.

**Related documentation on DevDocs:** [Dump your database (ECE-Tools)](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#db-dump)

## Option 2: mysqldump

Do not run this command against the database cluster. The cluster will not differentiate whether it is run against the database primary or against a secondary. If the cluster runs this command against the primary, the database will be unable to execute writes until the dump is completed and could impact performance and site stability.

You may dump your DB using the native MySQL mysqldump command.

The entire command might look as follows:

mysqldump -h <host> -u <username> -p<password> --single-transaction <db\_name> | gzip > /tmp/<dump\_name>.sql.gz
To obtain your DB credentials (host, username, and password), you might call the MAGENTO\_CLOUD\_RELATIONSHIPS environment variable:

echo $MAGENTO\_CLOUD\_RELATIONSHIPS |base64 --d |json\_pp
**Related documentation:**

* 
**Official MySQL documentation:** [mysqldump — A Database Backup Program](https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html)

* 
**DevDocs:** [Cloud variables](http://devdocs.magento.com/guides/v2.2/cloud/env/variables-cloud.html) (see MAGENTO\_CLOUD\_RELATIONSHIPS)

