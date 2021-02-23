---
title: Slow performance due to full reindexing
link: https://support.magento.com/hc/en-us/articles/360039207872-Slow-performance-due-to-full-reindexing
labels: Magento Commerce Cloud,Magento Commerce,slow performance,full reindexing,cache invalidation,2.x.x,how to
---

<p>This article provides a fix for poor performance due to full reindexing (where data in the indexing-related database tables is updating).</p>
<h3>AFFECTED PRODUCTS AND VERSIONS</h3>
<ul>
<li>Magento Commerce Cloud 2.x.x</li>
<li>Magento Commerce 2.x.x</li>
</ul>
<h3>Issue</h3>
<p>Constant flushing and index rebuilding are some of the reasons for performance degradation. Additionally, constant full reindexing adds locks on tables making the website work much slower than expected. </p>
<h3>Cause</h3>
<p>Actions that can produce full reindexing were performed from admin including:</p>
<ul>
<li>Product attribute save</li>
<li>Website/store/store view save</li>
<li>Store configuration</li>
</ul>
<p class="info">These actions should be run outside of business hours to make sure these actions do not affect performance during business hours.</p>
<p>Third party extensions can also cause full reindex. Full reindex may also be manually run from CLI.<br/> <br/> To find out if you have indexes being reindexed and potentially causing performance downgrade:</p>
<p>1. Perform this query to find the indexers that were fully reindexed in the last 15 minutes:</p>
<pre class="line-numbers"><code class="language-clike">SELECT * FROM indexer_state WHERE updated &gt; NOW() - INTERVAL 15 MINUTE;</code></pre>
<p>An indexer name in the output means that the indexer has been reindexed at least once during the last 15 minutes. </p>
<p>2. If you found frequent full reindexation investigate the following:</p>
<ul>
<li>Who might be doing this manually from the CLI</li>
<li>What 3-rd party module is doing the reindexation</li>
<li>What 3-rd party module is marking indexers as <em>Invalid</em>
</li>
</ul>
<h3>Solution</h3>
<p>Run reindexing only when necessary. For steps review DevDocs <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers">Configure Indexers</a>.<br/> <br/> A general recommendation and best practice is to allow the partial reindexation mechanism to take care of data reindexation with no manual action required from a merchant. All reindexation should be done using native Magento functionality (Mview). Mview performs partial reindexation which is the most efficient way to reindex data. To learn about Mview refer to Devdocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview">Indexing overview: Mview</a>.</p>
<h2>Related Reading</h2>
<p>DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#how-to-reindex">Indexing Overview: How to reindex</a><br/> KB <a href="https://support.magento.com/hc/en-us/articles/360039658851">Invalidated cache causes response time degradation</a></p>