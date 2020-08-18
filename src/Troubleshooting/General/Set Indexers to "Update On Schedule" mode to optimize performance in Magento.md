This article provides a fix for poor performance due to indexers being set on _Update on Save_ mode, and how it is a best practice to set indexers to _Update on Schedule_ mode to optimize performance in Magento.

### Affected products and versions

*   Magento Commerce, versions 2.2.x and 2.3.x
*   Magento Commerce Cloud, versions 2.2.x and 2.3.x

## Issue

Magento has two types of indexer modes: _Update on Save_ (default setting) and _Update on Schedule_.

In _Update on Save_ mode, indexed data is updated as soon as a change is made in the Admin. An example of this is the category products index is re-indexed after products are added to a category in the Admin.

In _Update on Schedule_ mode, the&nbsp;index is set to&nbsp;_Update on Schedule_ according to a Cron job.

## Cause

Having a large store with multiple admins working in the backend or having many imports/exports can cause the indexes to be triggered constantly. The _Update on Save_ mode degrades MySQL performance, and for large stores, the process can take hours to complete.

To avoid this issue, set the indexers to ___Update on Schedule___.

## Solution

1.   To view the current indexer configuration, run the following commands from CLI:  
    
    
    <pre><code class="language-xml">bin/magento indexer:show-mode [indexer]</code></pre>
    
      
     Where `` [indexer] `` is a space-separated list of indexers.&nbsp;
    
    <pre><code class="language-xml">bin/magento indexer:show-mode [indexer]</code></pre>
    
    
    
      
     Omit `` [indexer] `` to show the mode of all indexers.
    
    
&nbsp;2.   To specify the indexer mode, run following command from CLI:  
    
    
    <pre><code class="language-xml">bin/magento indexer:set-mode {realtime|schedule} [indexer]</code></pre>
    
      
     Where:  
    
    
    *   `` realtime ``: &nbsp;&nbsp;&nbsp;Sets the selected indexers to _Update on Save_.
    *   `` schedule ``: &nbsp;&nbsp;&nbsp;Sets the specified indexers to save according to the Cron schedule. Use this setting to set ___Update on Schedule___.
    *   `` indexer ``: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is a space-separated list of indexers. Omit `` [indexer] `` to configure all indexers the same way.
    
    
    

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/mrg/ce/Indexer.html" target="_self"><span style="font-size: 15px;">Magento\_Indexer Overview</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html#configure-indexers" target="_self"><span style="font-size: 15px;">Manage the indexers - Configure indexers</span></a>
*   [Indexer optimization](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexer-batch.html)
*   <a href="https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html#m2devgde-indexing-modes" target="_self"><span style="font-size: 15px;">Indexing overview - Indexing modes</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/performance-best-practices/configuration.html#indexers" target="_self"><span style="font-size: 15px;">Configuration best practices - Indexers</span></a>
*   [Slow performance due to full reindexing](https://support.magento.com/hc/en-us/articles/360039207872)