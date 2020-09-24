This article explains how the oversized change log tables or absent MySQL table triggers cause delays or interruptions in entity updates being applied, and provides recommendations on how to avoid change log tables from getting oversized and how to set up MySQL table triggers.

Affected products and versions:

*   Magento Commerce Cloud 2.2.x, 2.3.x
*   Magento Commerce 2.2.x, 2.3.x

## Issue

Changes you make in the database are not reflected on the store front, or there is a significant delay in the application of entity updates. The entities that might be affected include products, categories, prices, inventory, catalog rules, sales rules and target rules.

## Cause

If your indexers are <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers" target="_self">configured to update by schedule</a>, the issue might be caused by one or more tables with change logs being too large or MySQL triggers being not set up.

### Oversized change log tables

The change log tables grow that big if the&nbsp;`` indexer_update_all_views `` cron job is not completed successfully multiple times.

Change log tables are the database tables where the changes to entities are tracked. A record is stored in a change log table as long as the change is not applied, which is performed by the `` indexer_update_all_views `` cron job. There are multiple change log tables in a Magento database, they are named according to the following pattern:&nbsp;INDEXER\_TABLE\_NAME + ‘\_cl’, &nbsp;for example `` catalog_category_product_cl ``,&nbsp;`` catalog_product_category_cl ``. You can find more details on how changes are tracked in database in the&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview" target="_self">Indexing overview &gt; Mview</a>&nbsp;article on Magento DevDocs.&nbsp;

### MySQL database triggers not set up

You would suspect database triggers not being set up, if after adding or changing an entity (product, category, target rule, and so on) - no records are added to the the corresponding change log table.&nbsp;

## Solution

<p class="warning">We strongly recommend creating a database backup before performing any manipulations, and avoiding them during high site load periods.</p>

### Avoid change log tables being oversized

Ensure that the `` indexer_update_all_views `` cron job is always successfully completed.&nbsp;

You can use the following SQL query to get all failed instances of the `` indexer_update_all_views `` &nbsp;cron job: &nbsp;

<pre><code class="language-sql">  select * from cron_schedule where job_code = "indexer_update_all_views" and status
  &lt;&gt; "success" and status &lt;&gt; "pending";
</code></pre>

Or you can check its status in the logs by searching for the `` indexer_update_all_views `` entries:

*   &nbsp;`` &lt;install_directory&gt;/var/log/cron.log `` - for versions 2.3.1+ and 2.2.8+
*   `` &lt;install_directory&gt;/var/log/system.log `` - for earlier versions

### Re-set MySQL table triggers

To set up the missing MySQL table triggers, you need to re-set the indexer mode:

1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch to 'On Save'

2)&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;back to 'On Schedule'.

Use the following command to perform this operation.

<pre><code class="language-bash"> php bin/magento indexer:set-mode {realtime|schedule} [indexerName]</code></pre>

## Related reading

<ul><li class="article-title" title="MySQL tables are too large"><a href="https://support.magento.com/hc/en-us/articles/360038862691" target="_self">MySQL tables are too large</a></li><li class="article-title" title="MySQL tables are too large"><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview" target="_self">Indexer overview &gt; Mview</a></li></ul>