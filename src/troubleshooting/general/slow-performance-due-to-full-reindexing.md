---
title: Slow performance due to full reindexing
labels: 2.x.x,Magento Commerce,Magento Commerce Cloud,cache invalidation,full reindexing,how to,slow performance
---

This article provides a fix for poor performance due to full reindexing (where data in the indexing-related database tables is updating).

### AFFECTED PRODUCTS AND VERSIONS

* Magento Commerce Cloud 2.x.x
* Magento Commerce 2.x.x

### Issue

Constant flushing and index rebuilding are some of the reasons for performance degradation. Additionally, constant full reindexing adds locks on tables making the website work much slower than expected.

### Cause

Actions that can produce full reindexing were performed from admin including:

* Product attribute save
* Website/store/store view save
* Store configuration

>![info]
>
>These actions should be run outside of business hours to make sure these actions do not affect performance during business hours.

 [Third party extensions](https://support.magento.com/hc/en-us/articles/360042361152-Best-Practices-for-using-third-party-extensions-in-Magento) can also cause full reindex. Full reindex may also be manually run from CLI.To find out if you have indexes being reindexed and potentially causing performance downgrade:

1. Perform this query to find the indexers that were fully reindexed in the last 15 minutes:    ```clike    SELECT * FROM indexer_state WHERE updated > NOW() - INTERVAL 15 MINUTE;    ```    An indexer name in the output means that the indexer has been reindexed at least once during the last 15 minutes.
1. If you found frequent full reindexation investigate the following:

* Who might be doing this manually from the CLI
* What 3-rd party module is doing the reindexation
* What 3-rd party module is marking indexers as *Invalid* 

### Solution

Run reindexing only when necessary. For steps review DevDocs [Configure Indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers) .A general recommendation and best practice is to allow the partial reindexation mechanism to take care of data reindexation with no manual action required from a merchant. All reindexation should be done using native Magento functionality (Mview). Mview performs partial reindexation which is the most efficient way to reindex data. To learn about Mview refer to Devdocs [Indexing overview: Mview](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-mview) .

## Related Reading

DevDocs [Indexing Overview: How to reindex](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#how-to-reindex) KB [Invalidated cache causes response time degradation](https://support.magento.com/hc/en-us/articles/360039658851) 