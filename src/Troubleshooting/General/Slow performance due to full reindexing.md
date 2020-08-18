This article provides a fix for poor performance due to full reindexing (where data in the indexing-related database tables is updating).

### AFFECTED PRODUCTS AND VERSIONS

*   Magento Commerce Cloud 2.x.x
*   Magento Commerce 2.x.x

### Issue

Constant flushing and index rebuilding are some of the reasons for performance degradation. Additionally, constant full reindexing adds locks on tables making the website work much slower than expected.&nbsp;

### Cause

Actions that can produce full reindexing were performed from admin including:

*   Product attribute save
*   Website/store/store view save
*   Store configuration

<p class="info">These actions should be run outside of business hours to make sure these actions do not affect performance during business hours.</p>

Third party extensions can also cause full reindex. Full reindex may also be manually run from CLI.  
   
 To find out if you have indexes being reindexed and potentially causing performance downgrade:

1. Perform this query to find the indexers that were fully reindexed in the last 15 minutes:

<pre class="line-numbers"><code class="language-clike">SELECT * FROM indexer_state WHERE updated &gt; NOW() - INTERVAL 15 MINUTE;</code></pre>

<p class="wysiwyg-indent1">An indexer name in the output means that the indexer has been reindexed at least once during the last 15 minutes.&nbsp;</p>

2. If you found frequent full reindexation investigate the following:

*   Who might be doing this manually from the CLI
*   What 3-rd party module is doing the reindexation
*   What 3-rd party module is marking indexers as _Invalid_

### Solution

Run reindexing only when necessary. For steps review DevDocs <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers" rel="noopener" target="_blank">Configure Indexers</a>.  
   
 A general recommendation and best practice is to<span lang="EN-US"> allow</span>&nbsp;the partial reindexation <span lang="EN-US">mechanism to take care of data reindexation with no manual action required from a merchant.&nbsp;</span>All reindexation should be done using native Magento functionality (Mview). Mview performs partial reindexation which is the most efficient way to reindex data.&nbsp;To learn about Mview refer to Devdocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview" rel="noopener" target="_blank">Indexing overview: Mview</a>.

## Related Reading

DevDocs <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#how-to-reindex" rel="noopener" target="_blank">Indexing Overview: How to reindex</a>  
 KB <a href="https://support.magento.com/hc/en-us/articles/360039658851" rel="noopener" target="_blank">Invalidated cache causes response time degradation</a>