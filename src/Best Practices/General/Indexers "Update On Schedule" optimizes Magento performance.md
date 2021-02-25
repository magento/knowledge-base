---
title: Indexers "Update On Schedule" optimizes Magento performance  
link: https://support.magento.com/hc/en-us/articles/360040227191-Indexers-Update-On-Schedule-optimizes-Magento-performance-
labels: Magento Commerce Cloud,Magento Commerce,performance,indexers,update on save,update on schedule,best practices,2.3.x,2.2.x
---

This article provides a fix for poor performance due to indexers being set on _Update on Save_ mode, and how it is a best practice to set indexers to _Update on Schedule_ mode to optimize performance in Magento.

### Affected products and versions

* Magento Commerce, versions 2.2.x and 2.3.x
* Magento Commerce Cloud, versions 2.2.x and 2.3.x

## Issue

Magento has two types of indexer modes: _Update on Save_ (default setting) and _Update on Schedule_.

In _Update on Save_ mode, indexed data is updated as soon as a change is made in the Admin. An example of this is the category products index is re-indexed after products are added to a category in the Admin.

In _Update on Schedule_ mode, the index is set to _Update on Schedule_ according to a Cron job.

## Cause

Having a large store with multiple admins working in the backend or having many imports/exports can cause the indexes to be triggered constantly. The _Update on Save_ mode degrades MySQL performance, and for large stores, the process can take hours to complete.

To avoid this issue, set the indexers to _Update on Schedule_.

## Solution

1. To view the current indexer configuration, run the following commands from CLI:  
    
    
    <pre><code class="language-xml">bin/magento indexer:show-mode [indexer]</code></pre>
    
      
     Where `` [indexer] `` is a space-separated list of indexers. 
    
    <pre><code class="language-xml">bin/magento indexer:show-mode [indexer]</code></pre>
    
    
    
      
     Omit `` [indexer] `` to show the mode of all indexers.
    
    
 1. To specify the indexer mode, run following command from CLI:  
    
    
    <pre><code class="language-xml">bin/magento indexer:set-mode {realtime|schedule} [indexer]</code></pre>
    
      
     Where:  
    
    
    * `` realtime ``:    Sets the selected indexers to _Update on Save_.
    * `` schedule ``:    Sets the specified indexers to save according to the Cron schedule. Use this setting to set _Update on Schedule_.
    * `` indexer ``:      Is a space-separated list of indexers. Omit `` [indexer] `` to configure all indexers the same way.
    
    
    

## Related reading

* [Magento\_Indexer Overview](https://devdocs.magento.com/guides/v2.3/mrg/ce/Indexer.html)
* [Manage the indexers - Configure indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers)
* [Indexer optimization](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html)
* [Indexing overview - Indexing modes](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-indexing-modes)
* [Configuration best practices - Indexers](https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers)
* [Slow performance due to full reindexing](https://support.magento.com/hc/en-us/articles/360039207872)