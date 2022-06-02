---
title: Database upload loses connection to MySQL
labels: 2.2.x,2.3.x,Lost connection to MySQL server,Magento Commerce Cloud,database,disk space,how to,lost connection,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when the database upload loses connection to MySQL.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.2.x., 2.3.x

## Issue

The database does not upload to primary/integration branches on Adobe Commerce on cloud infrastructure Pro plan architecture or any branch on Adobe Commerce on cloud infrastructure Starter plan architecture, with the symptom being the inability to connect. You see this error in the CLI.

```clike
web@ddc35c264bd89a72042f1f3e5a:~$ mysql -h database.internal -u user -p main
Enter password:
ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"
```

## Cause

This is usually due to a lack of disk space for importing the database.

## Solution

Check if there is a lack of disk space. To do so, run the `netcat` command in the CLI against the database port 3306; there will be a disk full message if it is full:

```clike
web@ddc35c264bd89a72042f1f3e5a:~$ nc database.internal 3306
Database out of space
```

You will need to allocate more space for the database in your `services.yaml` and deploy if you have some space unused. For steps, see [Service Disk Space](https://devdocs.magento.com/cloud/project/manage-disk-space.html#service-disk-space).

Note: On the Pro architecture plan, you can check the allocated space on your partition by running the following command: `df -h`

Expect output similar to the following output. In this example, 10GB of the 25GB allocated is used, with 15GB of MySQL space not being used.

```clike
f240jestone3wt@i-087r2a25fdac80726:~$ df -h|grep 'File\|xvd'
Filesystem                                         Size  Used Avail Use% Mounted on
/dev/xvda1                                          59G   15G   42G  26% /
/dev/xvdj                                           25G   10G   15G  41% /data/mysql
/dev/xvdi                                           25G   22G  2.6G  90% /data/exports
```

## Related reading

[Manage Disk Space](https://devdocs.magento.com/cloud/project/manage-disk-space.html) in our developer documentation
