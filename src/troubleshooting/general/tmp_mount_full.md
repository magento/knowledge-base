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

Do not use MySQL for search. Elasticsearch for search usually eliminates the need for most of the heavy temp table creations. See [Configure Magento to use Elasticsearch](https://devdocs.magento.com/guides/v2.2/config-guide/elasticsearch/configure-magento.html) in Magento Developer Documentation.

There are several solutions to free up space. After isolating the cause choose one of the following solutions:

* Check for .MAD and .MAI files:
.MAD and .MAI files: MAD files: https://mariadb.com/kb/en/mysqld-fills-tmp-with-file-tmpsql_26be_0mad/
* Create a cron to clean-up up `/tmp` by running the following command in the CLI:

    ```bash
    sudo find /tmp -type f -atime +10 -delete
    ```

### Best practice

Avoid running the `SELECT` query on columns without indexes as this use up a large amount of temporary disk space. You can also add the indexes.
