---
title: Create database dump on Cloud
link: https://support.magento.com/hc/en-us/articles/360003254334-Create-database-dump-on-Cloud
labels: production,Magento Commerce Cloud,ece-tools,Pro,MySQL,database,how to,Starter
---

<p>This article discusses the possible (and recommended) ways to create a database (DB) dump on Magento Commerce (Cloud) environments. </p>
<p>You only need to use one variant (option) to dump your DB. These options apply to any environment type (Integration, Staging, Production) and any plan (Starter and Pro).</p>
<h2>Prerequisite: SSH to your environment</h2>
<p>To dump your DB on Magento Commerce (Cloud) with any variant discussed in this article, you must first <a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment</a>. </p>
<p class="warning">Whether you choose Option 1 or Option 2 please run the command during off peak hours against a database secondary node.</p>
<h2>Option 1: db-dump (ece-tools; recommended)</h2>
<p>You may dump your DB using the <a href="http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html">ECE-Tools</a> command:</p>
<pre><code class="language-php">vendor/bin/ece-tools db-dump</code></pre>
<p>This is the recommended and safest option.</p>
<p>Related documentation on DevDocs: <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#db-dump">Dump your database (ECE-Tools)</a></p>
<h2>Option 2: mysqldump</h2>
<p class="warning">Do not run this command against the database cluster. The cluster will not differentiate whether it is run against the database primary or against a secondary. If the cluster runs this command against the primary, the database will be unable to execute writes until the dump is completed and could impact performance and site stability.</p>
<p>You may dump your DB using the native MySQL <code>mysqldump</code> command.</p>
<p>The entire command might look as follows:</p>
<pre><code class="language-sql">mysqldump -h &lt;host&gt; -u &lt;username&gt; -p&lt;password&gt; --single-transaction &lt;db_name&gt; | gzip &gt; /tmp/&lt;dump_name&gt;.sql.gz</code></pre>
<p>To obtain your DB credentials (host, username, and password), you might call the <code>MAGENTO_CLOUD_RELATIONSHIPS</code> environment variable:</p>
<pre><code class="language-clike">echo $MAGENTO_CLOUD_RELATIONSHIPS |base64 --d |json_pp</code></pre>
<p>Related documentation:</p>
<ul>
<li>
Official MySQL documentation: <a href="https://dev.mysql.com/doc/refman/8.0/en/mysqldump.html">mysqldump — A Database Backup Program</a>
</li>
<li>
DevDocs: <a href="http://devdocs.magento.com/guides/v2.2/cloud/env/variables-cloud.html">Cloud variables</a> (see <code>MAGENTO_CLOUD_RELATIONSHIPS</code>)</li>
</ul>