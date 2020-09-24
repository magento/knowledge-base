If you cannot see new customers under __Customers__ &gt; __All customers__ after an import from a `` .csv `` file, set the&nbsp;`` customer_grid `` indexer to "Update on Save" mode and manually reindex the customer grid.

## Affected versions

*   Magento Commerce 2.2.0 and later
*   Magento Commerce Cloud&nbsp;2.2.0 and later

# Issue

After importing new customers from a&nbsp;`` .csv `` file using the native Magento import functionality, you might not be able to see the new customer records under __Customers__ &gt; __All customers__ in the Admin until you manually reindex the `` customer_grid `` indexer.

# Cause

The"Update on Schedule" indexing mode in Magento Commerce 2.2.0 and later does not support the&nbsp;`` customer_grid `` indexer due to performance issues.

# Solution

Configure the `` customer_grid `` indexer to be reindexed using the "Update on Save" mode. To do this, take the following steps:

1.   Log in to Magento Admin.
2.   Click __System &gt;__ Tools __&gt; Index Management__.
3.   Select the checkbox next to Customer Grid indexer.
4.   In the __Actions__&nbsp; drop-down list, select _Update on Save_.
5.   Click __Submit__.

We also recommend manually reindexing the `` customer_grid `` indexer after configuring the indexing mode to&nbsp;ensure that index is up to date and can work with cron. To manually reindex, use the following command:

<pre><code class='"language-bash'>bin/magento indexer:reindex customer_grid</code>&nbsp;</pre>

``  ``

# More information

Links to related documentation:&nbsp;

*   <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html" target="_self">Indexing overview</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html" target="_self">Manage the indexers</a>

&nbsp;