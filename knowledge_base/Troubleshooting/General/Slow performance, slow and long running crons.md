<p class="warning">On any Magento version, because some extensions only work with flat tables there is a risk if you disable flat tables. If you know that you have some extensions that use Flat Catalog indexers, you may need to take that into consideration when setting those values to "<em>No</em>".</p>

This article describes how to solve site performance issues and slow running and stuck crons caused by <a href="https://docs.magento.com/m2/ce/user_guide/catalog/catalog-flat.html" rel="noopener" target="_blank">flat tables and indexers</a> having been enabled.&nbsp;

AFFECTED PRODUCTS AND VERSIONS

*   Magento Commerce Cloud&nbsp;2.1.x and above
*   Magento Commerce (On-Premise) 2.1.x and above
*   Magento Open Source 2.1.x and above

## Issue

Flat indexers can cause:

*   Heavy SQL load and site performance issues.
*   Long running and stuck crons.

## Cause

Flat tables and indexers enabled.

<h2 id="solution">Solution</h2>

Starting with Magento 2.1.x and above, the use of a flat catalog is no longer a best practice and is not recommended. Continued use of this feature is known to cause performance degradation and other indexing issues. To disable the flat catalog:

1.   In the Magento&nbsp;Admin, navigate&nbsp;to&nbsp;__Stores__&nbsp;&gt;&nbsp;__Settings__&nbsp;&gt;&nbsp;__Configuration__.
2.   In the panel on the left under&nbsp;__Catalog__, choose&nbsp;__Catalog__.
3.   Expand the&nbsp;__Storefront&nbsp;__section, and do the following:
    
    *   Set&nbsp;__Use Flat Catalog Category__&nbsp;to _No_.
    *   Set&nbsp;__Use Flat Catalog Product__&nbsp;to&nbsp;_No_.
    
    
    
4.   When complete, click __Save Config__. Then when prompted, refresh the cache.
5.   Flush cache by running `` php bin/magento cache:flush ``

If you can't change the __Use Flat Catalog Category__ and __Use Flat Catalog Product__ to _No_ because the options are greyed out disable flat indexers in `` app/etc/config.php ``:

1.   Run this command to make sure all indexers are set to Update by schedule: `` php bin/magento indexer:set-mode schedule ``
2.   Edit `` app/etc/config.php `` and locate the lines with `` flat_catalog_product `` and `` flat_catalog_category `` - change them from 1 to 0 to disable them.
3.   Run the command&nbsp;`` php bin/magento app:config:import ``
4.   Run this command to confirm that the flat indexers are disabled:&nbsp;`` php
        bin/magento indexer:status ``
5.   Flush cache by running `` php bin/magento cache:flush ``&nbsp;

## Related Information

DevDocs:__&nbsp;__<a href="https://support.magento.com/hc/en-us/articles/360000097713-Reset-stuck-Magento-cron-jobs-manually-on-Cloud" rel="noopener" target="_blank">Reset stuck Magento cron jobs manually on Cloud</a>