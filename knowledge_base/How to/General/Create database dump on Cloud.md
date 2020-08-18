This article discusses the possible (and recommended) ways to create a database (DB) dump on Magento Commerce (Cloud) environments.&nbsp;

You only need to use one variant (option) to dump your DB. These options apply to any environment type (Integration, Staging, Production) and any plan (Starter and Pro).

## Prerequisite: SSH to your environment

To dump your DB on Magento Commerce (Cloud) with any variant discussed in this article, you must first [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).&nbsp;

<p class="warning">Whether you choose Option 1 or Option 2 please run the command during off peak hours against a database slave node.</p>

## Option 1: db-dump (__ece-tools; recommended__)

You may dump your DB using the [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) command:

<pre><code class="language-php">vendor/bin/ece-tools db-dump</code></pre>

This is the recommended and safest option.

__Related documentation on DevDocs:__ [Dump your database (ECE-Tools)](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#db-dump)

## Option 2:&nbsp;mysqldump

<p class="warning">Do not run this command against the database cluster. The cluster will not differentiate whether it is run against the database master or against a slave. If the cluster runs this command against the master, the database will be unable to execute writes until the dump is completed and could impact performance and site stability.</p>

You may dump your DB using the native MySQL `` mysqldump `` command.

The entire command might look as follows:

<pre><code class="language-sql">mysqldump -h &lt;host&gt; -u &lt;username&gt; -p&lt;password&gt; --single-transaction &lt;db_name&gt; | gzip &gt; /tmp/&lt;dump_name&gt;.sql.gz</code></pre>

To obtain your DB credentials (host, username,&nbsp;and password), you might call the&nbsp;`` MAGENTO_CLOUD_RELATIONSHIPS `` environment variable:

<pre><code class="language-clike">echo $MAGENTO_CLOUD_RELATIONSHIPS |base64 --d |json_pp</code></pre>

__Related documentation:__

*   __Official MySQL documentation: __[mysqldump — A Database Backup Program](https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html)
*   __DevDocs:__ [Cloud variables](http://devdocs.magento.com/guides/v2.2/cloud/env/variables-cloud.html) (see&nbsp;`` MAGENTO_CLOUD_RELATIONSHIPS ``)