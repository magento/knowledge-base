---
title: Troubleshoot /tmp mount full for Adobe Commerce
labels: Adobe Commerce,troubleshooting,tmp,full
---

This article provides a solution for when the /tmp mount is full, site may be down, and you are unable to SSH into a node.

## Affected products and versions

* Adobe Commerce 2.3.0-2.3.6-p1, 2.4.0-2.4.2

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

To check how full the `/tmp` mount is, run the following command in the CLI (after navigating to `/tmp`:

```bash  
 df -h
```

<ins>Expected result:</ins>
1% what is the correct utilization for /tmp directory size&nbsp; - this ticket here suggests expected utilization ins around 1% <a href="/agent/tickets/356692">https://magento.zendesk.com/agent/tickets/356692</a> ????

<ins>Actual result:</ins>

Around 100%&nbsp;

## Cause

The `/tmp` mount has too many files which could be caused by:

* Bad SQL queries generating large and/or too many temp tables. 
* Services writing to the `/tmp` directory
* Database backups/dumps left in the `/tmp` directory.

## Solution

There are things you can do to free up some space one time, and there are best practices which would make it less probable that `/tmp` will get full again.

### Free up space in `/tmp`

There are several solutions to free up space. After isolating the cause choose one of the following solutions:

#### .MAD and .MAI files

Check for .MAD and .MAI files:
    .MAD and .MAI files: MAD files: https://mariadb.com/kb/en/mysqld-fills-tmp-with-file-tmpsql_26be_0mad/
.MAD and .MAI files are created by "Aria", a MySQL format like MyISAM but with some "extras". The .MAD file contains data, the .MAI file contains indexes. It is NOT safe to delete these files, because you will delete data and indexes by doing that.

If your database is creating such files you could check these:

* Is your application logging data, e.g. logging all page accesses for statistics or debugging? (Frequent cause)
* Is your application creating tables where it stores binary objects (BLOBs), e.g. pictures or sound files directly into a database field instead of create files on disk?
* Is your application creating temporary tables, e.g. for pre-compiling or caching something?

That file is a temporary table that MariaDB wrote to disk because it was too large to keep in memory. If you’ve stopped the database, then the query which caused the table to be created is no longer running, so it is safe to delete the file. But you also need to investigate why that file was created and fix the underlying problem, or it will happen again. From <https://www.ringingliberty.com/2019/05/15/mariadb-mad-file-take-all-space-in-hard-drive/>

#### Elasticsearch

Remove the Javacores (java*.core) and heapdumps (*.hprof) using system shell.

#### Database backup and MySQL heapdumps

Ece-tools database backups:
• Written to /tmp
• FYI -https://jira.corp.magento.com/browse/MCLOUD-7700?filter=-2&jql=project%20%3D%20MCLOUD%20AND%20reporter%20in%20(currentUser())%20order%20by%20created%20DESC

Mysql dumps:
• Dumps written to /tmp
• https://support.magento.com/hc/en-us/articles/360003254334 (instructions to dump to /tmp but not to move file off /tmp immediately)

#### C

* Create a cron to clean-up up `/tmp` by running the following command in the CLI:

    ```bash
    sudo find /tmp -type f -atime +10 -delete
    ```

### Best practices

To avoid getting issues with `/tmp` being full, follow these recommendations:

* Do not use MySQL for search. Elasticsearch for search usually eliminates the need for most of the heavy temp table creations. See [Configure Magento to use Elasticsearch](https://devdocs.magento.com/guides/v2.2/config-guide/elasticsearch/configure-magento.html) in Magento Developer Documentation.
* Avoid running the `SELECT` query on columns without indexes as this use up a large amount of temporary disk space. You can also add the indexes.

## Related reading

[MySQL disk space is low on Magento Commerce Cloud](https://support.magento.com/hc/en-us/articles/360037591972)
