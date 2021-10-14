---
title: Create database dump on Adobe Commerce on cloud infrastructure
labels: Magento Commerce Cloud,MySQL,Pro,Starter,database,ece-tools,how to,production,Adobe Commerce,cloud infrastructure
---

This article discusses the possible (and recommended) ways to create a database (DB) dump on Adobe Commerce on cloud infrastructure.

You only need to use one variant (option) to dump your DB. These options apply to any environment type (Integration, Staging, Production) and any plan (Adobe Commerce on cloud infrastructure Starter plan architecture and Adobe Commerce on cloud infrastructure Pro plan architecture).

## Prerequisite: SSH to your environment

To dump your DB on Adobe Commerce on cloud infrastructure with any variant discussed in this article, you must first [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).

>![warning]
>
>Whether you choose Option 1 or Option 2 please run the command during off peak hours against a database secondary node.

## Option 1: db-dump (**ece-tools; recommended**)

You may dump your DB using the [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) command:

```php
vendor/bin/ece-tools db-dump
```

This is the recommended and safest option.

 See [Dump your database (ECE-Tools)](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#db-dump) in our developer documentation.

## Option 2: mysqldump

>![warning]
>
>Do not run this command against the database cluster. The cluster will not differentiate whether it is run against the database primary or against a secondary. If the cluster runs this command against the primary, the database will be unable to execute writes until the dump is completed and could impact performance and site stability.

You may dump your DB using the native MySQL `mysqldump` command.

The entire command might look as follows:

```sql
mysqldump -h <host> -u <username> -p <password> --single-transaction <db_name> | gzip > /tmp/<dump_name>.sql.gz
```

The database backup created by running the `mysqldump` command and saved in `\tmp`, should be moved from this location. It should not take up storage space in `\tmp` (which might result in problems).

To obtain your DB credentials (host, username, and password), you might call the `MAGENTO_CLOUD_RELATIONSHIPS` environment variable:

```clike
echo $MAGENTO_CLOUD_RELATIONSHIPS |base64 --d |json_pp
```

 **Related documentation:**

* [mysqldump — A Database Backup Program](https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html) in official MySQL documentation.
* [Cloud variables](http://devdocs.magento.com/guides/v2.2/cloud/env/variables-cloud.html) (see `MAGENTO_CLOUD_RELATIONSHIPS`) in our developer documentation.
