---
title: New customers not displayed in Customer grid after CSV import
link: https://support.magento.com/hc/en-us/articles/360025481892-New-customers-not-displayed-in-Customer-grid-after-CSV-import
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,import,customers,2.3.x,2.2.x,2.4.x
---

<p>This article provides a fix for the issue when you cannot see new customers under Customers &gt; All customers after an import from a <code>.csv</code> file. The solution is to set the <code>customer_grid</code> indexer to "Update on Save" mode and manually reindex the customer grid.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce 2.2.0 and later</li>
<li>Magento Commerce Cloud 2.2.0 and later</li>
</ul>
<h1>Issue</h1>
<p>After importing new customers from a <code>.csv</code> file using the native Magento import functionality, you might not be able to see the new customer records under Customers &gt; All customers in the Admin until you manually reindex the <code>customer_grid</code> indexer.</p>
<h1>Cause</h1>
<p>The"Update on Schedule" indexing mode in Magento Commerce 2.2.0 and later does not support the <code>customer_grid</code> indexer due to performance issues.</p>
<h1>Solution</h1>
<p>Configure the <code>customer_grid</code> indexer to be reindexed using the "Update on Save" mode. To do this, take the following steps:</p>
<ol>
<li>Log in to Magento Admin.</li>
<li>Click System &gt; Tools &gt; Index Management.</li>
<li>Select the checkbox next to Customer Grid indexer.</li>
<li>In the Actions  drop-down list, select <em>Update on Save</em>.</li>
<li>Click Submit.</li>
</ol>
<p>We also recommend manually reindexing the <code>customer_grid</code> indexer after configuring the indexing mode to ensure that index is up to date and can work with cron. To manually reindex, use the following command:</p>
<pre><code class='"language-bash'>bin/magento indexer:reindex customer_grid</code> </pre>
<h1>More information</h1>
<p>Links to related documentation: </p>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html">Indexing overview</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html">Manage the indexers</a></li>
</ul>
<p> </p>