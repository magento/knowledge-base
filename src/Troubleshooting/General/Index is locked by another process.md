---
title: Index is locked by another process
link: https://support.magento.com/hc/en-us/articles/360030683752-Index-is-locked-by-another-process
labels: Magento Commerce,troubleshooting,index,2.x.x
---

<p>This article talks about a common indexing issue in Magento where the index is locked by another process and skipped.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.X</li>
</ul>
<h2>Issue</h2>
<p>During a full reindex in your CLI, Magento gives you the error message: <em>'Index is locked by another reindex process. Skipping.'</em> In other words, when the process or the index type is locked then you cannot reindex that particular locked index type. The reindex will always skip that index type.</p>
<h2>Cause</h2>
<p>This error could occur if the previous index was not completed successfully. A few possible reasons are:</p>
<ul>
<li>The process was interrupted by another process or user.</li>
<li>Memory limit.</li>
<li>MySQL error, like a timeout.</li>
<li>Fatal PHP error during the reindex.</li>
</ul>
<h2>Steps To Reproduce</h2>
<ol>
<li>For example, say that the <code class="language-bash">cataloginventory_stock</code> index type is locked.</li>
<li>When you try to reindex all data by running the CLI command <code class="language-bash">php bin/magento indexer:reindex</code>, you will get the following output result:
<pre><code class="language-bash">
customer_grid index has been rebuilt successfully in 00:00:09
catalog_category_product index has been rebuilt successfully in 00:00:07
catalog_product_category index has been rebuilt successfully in 00:00:00
catalogrule_rule index has been rebuilt successfully in 00:00:05
catalog_product_attribute index has been rebuilt successfully in 00:00:04
cataloginventory_stock index is locked by another reindex process. Skipping.
catalog_product_price index has been rebuilt successfully in 00:00:01
catalogrule_product has been rebuilt successfully in 00:00:00
catalogsearch_fulltext index has been rebuilt successfully in 00:00:01
    </code></pre>
</li>
<li>As you can see above, the <code class="language-bash">cataloginventory_stock</code> index process has been skipped.</li>
</ol>
<p> </p>
<h2>Solution</h2>
<p>You need to reset index status, and then try to run the new reindex process. For the reset index status, you need to run the command:</p>
<pre><code class="language-bash">bin/magento indexer:reset &lt;index identifier&gt;</code></pre>
<p>If you are unsure what the index identifiers (code) are, you can list them using the command:</p>
<pre><code class="language-bash">bin/magento indexer:info</code></pre>
<p>For completeness, here are all possible combinations for native indexes:</p>
<pre><code class="language-bash">bin/magento indexer:reset design_config_grid;
bin/magento indexer:reset customer_grid;
bin/magento indexer:reset catalog_category_product;
bin/magento indexer:reset catalog_product_category;
bin/magento indexer:reset catalogrule_rule;
bin/magento indexer:reset catalog_product_attribute;
bin/magento indexer:reset cataloginventory_stock;
bin/magento indexer:reset catalog_product_price;
bin/magento indexer:reset catalogrule_product;
bin/magento indexer:reset catalogsearch_fulltext;</code></pre>
<p> </p>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360029219812">Cron tasks lock tasks from other groups (Magento Commerce Cloud)</a></li>
<li><a href="https://docs.magento.com/m1/ce/user_guide/system-operations/index-manual.html">Manual Reindexing</a></li>
<li><a href="https://docs.magento.com/m1/ce/user_guide/system-operations/index-management.html">Index Management</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html">Indexing Overview</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers">Indexers Best Practices</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html">Configure And Run Cron</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html">Manage The Indexers</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html">Indexer Optimization</a></li>
</ul>
