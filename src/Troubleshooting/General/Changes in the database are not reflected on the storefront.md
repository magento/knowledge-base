---
title: Changes in the database are not reflected on the storefront
link: https://support.magento.com/hc/en-us/articles/360039418091-Changes-in-the-database-are-not-reflected-on-the-storefront
labels: Magento Commerce Cloud,Magento Commerce,change log tables,large tables,slow updates,indexer mode,2.3.x,2.2.x,how to
---

<p>This article provides solutions to avoid delays or interruptions in entity updates being applied. This includes how to avoid change log tables from getting oversized and how to set up MySQL table triggers.</p>
<p>Affected products and versions:</p>
<ul>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Changes you make in the database are not reflected on the storefront, or there is a significant delay in the application of entity updates. The entities that might be affected include products, categories, prices, inventory, catalog rules, sales rules and target rules.</p>
<h2>Cause</h2>
<p>If your indexers are <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers">configured to update by schedule</a>, the issue might be caused by one or more tables with change logs being too large or MySQL triggers being not set up.</p>
<h3>Oversized change log tables</h3>
<p>The change log tables grow that big if the <code>indexer_update_all_views</code> cron job is not completed successfully multiple times.</p>
<p>Change log tables are the database tables where the changes to entities are tracked. A record is stored in a change log table as long as the change is not applied, which is performed by the <code>indexer_update_all_views</code> cron job. There are multiple change log tables in a Magento database, they are named according to the following pattern: INDEXER_TABLE_NAME + ‘_cl’,  for example <code>catalog_category_product_cl</code>, <code>catalog_product_category_cl</code>. You can find more details on how changes are tracked in database in the <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview">Indexing overview &gt; Mview</a> article on Magento DevDocs. </p>
<h3>MySQL database triggers not set up</h3>
<p>You would suspect database triggers not being set up, if after adding or changing an entity (product, category, target rule, and so on) - no records are added to the corresponding change log table. </p>
<h2>Solution</h2>
<p class="warning">We strongly recommend creating a database backup before performing any manipulations, and avoiding them during high site load periods.</p>
<h3>Avoid change log tables being oversized</h3>
<p>Ensure that the <code>indexer_update_all_views</code> cron job is always successfully completed. </p>
<p>You can use the following SQL query to get all failed instances of the <code>indexer_update_all_views</code>  cron job:  </p>
<pre><code class="language-sql">  select * from cron_schedule where job_code = "indexer_update_all_views" and status
  &lt;&gt; "success" and status &lt;&gt; "pending";
</code></pre>
<p>Or you can check its status in the logs by searching for the <code>indexer_update_all_views</code> entries:</p>
<ul>
<li> <code>&lt;install_directory&gt;/var/log/cron.log</code> - for versions 2.3.1+ and 2.2.8+</li>
<li>
<code>&lt;install_directory&gt;/var/log/system.log</code> - for earlier versions</li>
</ul>
<h3>Re-set MySQL table triggers</h3>
<p>To set up the missing MySQL table triggers, you need to re-set the indexer mode:</p>
<p>1)     switch to 'On Save'</p>
<p>2)    switch back to 'On Schedule'.</p>
<p>Use the following command to perform this operation.</p>
<pre><code class="language-bash"> php bin/magento indexer:set-mode {realtime|schedule} [indexerName]</code></pre>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360038862691">MySQL tables are too large</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview">Indexer overview &gt; Mview</a></li>
</ul>