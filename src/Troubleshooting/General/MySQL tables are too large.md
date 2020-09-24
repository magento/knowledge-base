This article discusses why is it an issue, when any MySQL table gets larger than 1 GB, and how to prevent this.

Affected products and versions:

*   Magento Commerce Cloud &nbsp;2.x.x
*   Magento Commerce 2.x.x

## Issue

The MySQL tables size does not directly affect the site performance. However, if a table is large, it means that there are frequent insert operations on this table, with possible extra data or outdated data.&nbsp;MySQL is designed for databases, where the ratio between read/write operations is 80%/20%. &nbsp;For the large tables,&nbsp;1 GB and more, MySQL indices, which are designed to speed up performance on read operations, could degrade performance on write operations.

## Solution

Consider the following options to avoid a decrease in performance:

*   Create CRON job, that will clean up large tables. See <a href="https://support.magento.com/hc/en-us/articles/360038957591" target="_self">Find large MySQL tables </a> for recommendations on how to identify large tables.
*   For tables larger than 1 GB, use a MySQL engine optimized for logs writing. For example, the Archive engine.&nbsp;
*   Update functionality to avoid storing logs in DB.

## Related reading

<p class="article-title" title="Oversized change log tables causing delays in entities updates"><a href="https://support.magento.com/hc/en-us/articles/360039418091" target="_self">Oversized change log tables causing delays in entities updates</a></p>