This article discusses the steps you can take to avoid running out of space for MySQL on Magento Commerce Cloud.

### Affected products and versions

Magento Commerce Cloud 2.2.x, 2.3.x

## Issue

The database gets too big. Symptoms might include losing database connection and/or database upload error.&nbsp;

To check the amount of space used by the database, run the <code class="language-bash">df -h
</code> command, as described in <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html" target="_self">Manage disk space</a>.

Less than 10% of free memory on MySQL&nbsp;disk is a primary indicator of an outage.

## Solution

Solution options:

*   Check if there are large tables and consider if any of them can be flushed. For example, the table with reports can usually be flushed. For details on how to find large tables, see the&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360038957591" target="_self">Find Large MySQL tables</a>&nbsp;article.
*   Set up a cron job to track and flush these tables.
*   Allocate more disk space for MySQL, if you have some unused. See the <a href="https://support.magento.com/hc/en-us/articles/360038374052" target="_self">Check disk space limit</a> article.
    
    *   For Starter plan, all environments, and Pro plan Integration environments, you can allocate the disk space if you have some unused, for details see the <a href="https://support.magento.com/hc/en-us/articles/360038761511" target="_self">Allocate more space for MySQL</a> article.
    *   For Pro plan Staging and Production environments, contact support to allocate more disk space if you have some unused.&nbsp;
    
    
    
*   If you have reached your space limit and still experience low space issues, consider buying more disk space, contact your Customer Success Manager (CSM) for details.

&nbsp;
&nbsp;