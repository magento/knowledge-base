---
title: Troubleshoot /tmp mount full for Adobe Commerce
labels: Adobe Commerce,troubleshooting,tmp,full,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1-p1,2.4.2,2.4.2-p1,cloud infrastructure
---

This article provides a solution for when the `/tmp` mount is full, site may be down, and you are unable to SSH into a node.

## Affected products and versions

* Adobe Commerce 2.3.0 - 2.3.6-p1, 2.4.0 - 2.4.2

## Issue

The `/tmp` mount being full might result in a range of possible symptoms, including the following errors:

* *SQLSTATE[HY000]: General error: 3 Error writing file*
* *Error code: 28*
* *No space left on device (28)*
* *error session_start(): failed: No space left on device*
* *ERROR 1 (HY000): Can't create/write to file '/tmp/*
* *SQL Error: 3, SQLState: HY000*
* *General error: 1021 Disk full (/tmp)*
* *Unable to access node via SSH:*
    *bash: cannot create temp file for here-document: No space left on device*
* *errno: 28 "No space left on device"*
* *mysqld: Disk is full writing '/tmp'*
* *[ERROR] mysqld: Disk full (/tmp)*
* *SQLSTATE[HY000]: General error: 1 Can't create/write to file '/tmp/'*
* *SQLSTATE[HY000]: General error: 23 Out of resources when opening file '/tmp/'*
* *Errcode: 24 "Too many open files"*
* *Got error: 23: Out of resources when opening file*


<ins>Steps to reproduce:</ins>

To check how full the `/tmp` mount is, in the CLI switch to `/tmp` and run the following command:

```bash  
 df -h
```

<ins>Expected result</ins>:

Less than 80%.

<ins>Actual result</ins>:

Around 100%.

## Cause

The `/tmp` mount has too many files, which could be caused by:

* Bad SQL queries generating large and/or too many temp tables. 
* Services writing to the `/tmp` directory.
* Database backups/dumps left in the `/tmp` directory.

## Solution

There are things you can do to free up some space one time, and there are best practices that would prevent `\tmp` from getting full.

### Check and free up inodes

Ensure that there are enough available inodes. To do this, run the following command:

```bash
df -i
```

The output would look similar to the following:

```bash
Filesystem Inodes   Used   Free Use% Mounted on
/dev/nvme2n1 655360    1695  653665    1% /data/mysql
```

Check that Use% is <70%. Inodes are correlated with files. If you remove files from the partition, you will free inodes.

### Check and free up storage space

There are several services that might be saving files to `/tmp`.

#### Check up and free MySQL space

Follow the instructions in [MySQL disk space is low on Adobe Commerce on cloud infrastructure > Check and free up storage space](https://support.magento.com/hc/en-us/articles/360037591972#check_and_free) in our support knowledge base.

#### Check up Elasticsearch heapdumps

>![WARNING]
>
>Heapdumps contain logging information that might be valuable for investigating issues. Consider storing them in a separate location for at least 10 days.

Remove heapdumps (`*.hprof`) using system shell:

```bash
find /tmp/*.hprof -type f -delete
```

If you don't have permissions to delete files created by another user (in this case, Elasticsearch), but you see that files are large, please [create a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to deal with them.

#### Check up database dumps/backups

>![WARNING]
>
>Database backups are usually created for a purpose. If you are not sure if the file is still needed, consider moving it to a separate location instead of deleting it.

Check `/tmp` for `.sql` or `.sql.gz` files and clean them up. Those might have been created by ece-tools during backup or when manually creating database dumps using the `mysqldump` tool.

### Best practices

To avoid getting issues with `/tmp` being full, follow these recommendations:

* Do not use MySQL for search. Elasticsearch for search usually eliminates the need for most of the heavy temp table creations. See [Configure Adobe Commerce to use Elasticsearch](https://devdocs.magento.com/guides/v2.2/config-guide/elasticsearch/configure-magento.html) in our developer documentation.
* Avoid running the `SELECT` query on columns without indexes as this use up a large amount of temporary disk space. You can also add the indexes.
* Create a cron to clean-up up `/tmp` by running the following command in the CLI:

    ```bash
    sudo find /tmp -type f -atime +10 -delete
    ```

## Related reading

[MySQL disk space is low on Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360037591972) in our support knowledge base.
