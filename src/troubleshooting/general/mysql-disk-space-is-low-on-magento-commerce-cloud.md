---
title: MySQL disk space is low on Magento Commerce Cloud
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.1,2.4.1-p1,2.4.2,Magento Commerce Cloud,MySQL,how to,large tables,mysql disk space
---

This article provides solutions for when you are experiencing very low space or no space for MySQL on Magento Commerce Cloud. Symptoms could include site outages, customers unable to add products to cart, being unable to connect to the database, access the database remotely, not being able to SSH into node. Symptoms also include Galera, environment sync, PHP, database, and deployment errors as listed below. Click [Solution](https://support.magento.com/hc/en-us/articles/360058472572#solution) to jump directly to the solution section.

## Affected products and versions

Magento Commerce Cloud 2.3.0-2.3.6-p1, 2.4.0-2.4.2

## Issue

The database gets too big, the symptoms might include losing the database connection, database upload error and a variety of other issues. 

Errors you may encounter:

Galera:

* _SQLSTATE\[08S01\]: Communication link failure: 1047 WSREP has not yet prepared node for application use_ _Import errors:_
* _SQLSTATE\[HY000\]: General error: 1180 Got error 5 "Input/output error" _
* _SQLSTATE\[08S01\]: Communication link failure: 1047 WSREP has not yet prepared node for application use_  

Environment sync errors:

* _SQLSTATE: General error: 1180 Got error 5 "Input/output error" during COMMIT_ 

PHP errors:

* _php: PDO::\_\_construct(): MySQL server has gone away._
* _php errors: PDO::\_\_construct(): Error while reading greeting packet. PID=NNNN._
* _ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"._

Database errors:

* Error\_code: 1114
* InnoDB: Error (Out of disk space) writing word node to FTS auxiliary index table.
* SQLSTATE\[HY000\]: General error: 2006 MySQL server has gone away
* \[ERROR\] Slave SQL: Error 'The table '&lt;table\_name>' is full' on query.
* Unit mysql.service entered failed state.
* error: 'Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (111 "Connection refused")'
* 1205 Lock wait timeout exceeded; try restarting transaction, query was: INSERT INTO \`cron\_schedule\` (\`job\_code\`, \`status\`, \`created\_at\`, \`scheduled\_at\`) VALUES (?, ?, 'YYYY-02-07 HH:MM:SS’, ‘YYYY-MM-DD HH:MM:SS’')

Deployment errors:

* _E: Command '\['sudo', '-u', '&lt;environment name>', 'bash', '-c', '/etc/platform/&lt;environment name>/post\_deploy.sh'\]' returned non-zero exit status 255_
* _E: Command '\['ssh', u'&lt;node IP address>', 'sudo /usr/bin/sv -w 30 restart site-&lt;environment name>g-nginx'\]' returned non-zero_
* _Upgrading schema.. SQLSTATE\[HY000\]: General error: 1114 The table '&lt;table\_name>' is full_
* _SQLSTATE\[HY000\]: General error: 3 Error writing file './&lt;environment name>/\#_
* _W: &lt;filename>' (Errcode: 28 "No space left on device")_  
    _Indexing errors (along with orphaned temporary .ibd files in /tmp):_
* _Catalog Rule indexer throws an exception. The temporary tables don't get cleaned up in the aftermath and then fill the disk on the current MySQL master node_

Steps to reproduce  
One of the ways you can check if the `` /data/mysql `` (or wherever MySQL data storage is configured) is full by running the following command in the CLI:

<code class="language-bash">df -h</code>

Less than 10% of free memory on MySQL disk is a primary indicator of an outage.

## Cause

The `` /data/mysql `` mount might become full due to a range of issues, such as not having enough inodes, available storage space, and bad queries that generate temporary tables.

## Solution

There is an immediate step that you might take to bring MySQL back on track (or prevent it from getting stuck): free up some space by flushing big tables.

But a long term solution would be allocating more space and following [Database best practices](https://support.magento.com/hc/en-us/articles/360041997312), including enabling the [Order/Invoice/Shipment archive](https://docs.magento.com/user-guide/sales/order-archive.html) functionality.

Following are details on both, quick and long-term solutions.

### Check and free up inodes

Ensure that there are enough available inodes. To do this, run the following command:  
<code class="language-bash">df -i</code>  
The output would look similar to the following:

<pre><code class="language-bash">Filesystem Inodes   Used   Free Use% Mounted on
/dev/nvme2n1 655360    1695  653665    1% /data/mysql
</code></pre>

Check that Use% is &lt;70%. Inodes are correlated with files. If you remove files from the partition, you will free inodes.

### Check and free up storage space

Check available storage space. For this, execute:  
<code class="language-bash"> df -k</code>

The output would be similar to following:

<pre><code class="language-bash">Size Used Avail Use% Mounted on·        
       50G   49G   95M 100% /data/mysql</code></pre>

If the Use % is >70%, you need to take action to free/add some space. 

#### Check for large `` ibtmp1 `` files

Check for large `` ibtmp1 `` file on `` /data/mysql `` of each node: this file is the tablespace for temporary tables. If there are bad queries that generate temp tables, they are contained in the `` ibtmp1 `` file. This file is only removed when the database is restarted. If it is taking up all available space, the database must be restarted. If there are bad queries, it will be recreated again.

#### Flush large tables

<p class="warning">We strongly recommend creating a database backup before performing any manipulations, and avoiding them during high site load periods. See <a href="https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump">Dump your database</a> in Magento Developer Documentation. </p>

Check if there are large tables and consider if any of them can be flushed. Do this on the primary (source) node. 

For example, tables with reports can usually be flushed. For details on how to find large tables, see the [Find Large MySQL tables](https://support.magento.com/hc/en-us/articles/360038957591) article.

If there are no huge report tables, consider flushing `` _index `` tables, just to return Magento application back on track. `` index_price `` tables would be the best candidates. For example, `` catalog_category_product_index_storeX `` tables, where X can have values from "1" to the maximum store count. Please mind, that you would need to perform reindex to restore data in these tables, and in case of big catalogs this reindex might take a lot of time.

Once you flush them, wait for wsrep sync completion. You can now create backups and take more significant steps to add more space, like allocating/buying more space and enabling [Order/Invoice/Shipment archive](https://docs.magento.com/user-guide/sales/order-archive.html) functionality.

#### Check binary logging settings

Check your MySQL server binary logging settings: `` log_bin `` and `` log_bin_index ``. If the settings are enabled, the log files might become huge. [Create a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to purge large binary logs files. Also request to check that binary logging is being configured correctly, so that logs are purged periodically and don’t take too much space.

If you don't have access to MySQL server settings, request support to check it.

### Allocate/buy more space 

Allocate more disk space for MySQL, if you have some unused. See the [Check disk space limit](https://support.magento.com/hc/en-us/articles/360038374052) article to learn how to check if you have free disk space.

* For Starter plan, all environments, and Pro plan Integration environments, you can allocate the disk space if you have some unused, for details see the [Allocate more space for MySQL](https://support.magento.com/hc/en-us/articles/360038761511).
* For Pro plan Staging and Production environments, [contact support](https://support.magento.com/hc/en-us/articles/360019088251) to allocate more disk space if you have some unused. 

If you have reached your space limit and still experience low space issues, consider buying more disk space, contact your Customer Success Manager (CSM) for details.