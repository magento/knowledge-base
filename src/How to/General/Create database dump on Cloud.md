---
title: Create database dump on Cloud
link: https://support.magento.com/hc/en-us/articles/360003254334-Create-database-dump-on-Cloud
labels: production,Magento Commerce Cloud,ece-tools,Pro,MySQL,database,how to,Starter
---

This article discusses the possible (and recommended) ways to create a database (DB) dump on Magento Commerce (Cloud) environments. 

You only need to use one variant (option) to dump your DB. These options apply to any environment type (Integration, Staging, Production) and any plan (Starter and Pro).

## Prerequisite: SSH to your environment

To dump your DB on Magento Commerce (Cloud) with any variant discussed in this article, you must first [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh). 

<p class="warning">Whether you choose Option 1 or Option 2 please run the command during off peak hours against a database secondary node.</p>

## Option 1: db-dump (ece-tools; recommended)

You may dump your DB using the [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) command:

<pre><code class="language-php">vendor/bin/ece-tools db-dump</code></pre>

This is the recommended and safest option.

Related documentation on DevDocs: [Dump your database (ECE-Tools)](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#db-dump)

## Option 2: mysqldump

<p class="warning">Do not run this command against the database cluster. The cluster will not differentiate whether it is run against the database primary or against a secondary. If the cluster runs this command against the primary, the database will be unable to execute writes until the dump is completed and could impact performance and site stability.</p>

You may dump your DB using the native MySQL `` mysqldump `` command.

The entire command might look as follows:

<pre><code class="language-sql">mysqldump -h &lt;host> -u &lt;username> -p&lt;password> --single-transaction &lt;db_name> | gzip > /tmp/&lt;dump_name>.sql.gz</code></pre>

To obtain your DB credentials (host, username, and password), you might call the `` MAGENTO_CLOUD_RELATIONSHIPS `` environment variable:

<pre><code class="language-clike">echo $MAGENTO_CLOUD_RELATIONSHIPS |base64 --d |json_pp</code></pre>

Related documentation:

* Official MySQL documentation: [mysqldump — A Database Backup Program](https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html)
* DevDocs: [Cloud variables](http://devdocs.magento.com/guides/v2.2/cloud/env/variables-cloud.html) (see `` MAGENTO_CLOUD_RELATIONSHIPS ``)