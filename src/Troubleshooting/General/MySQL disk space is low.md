---
title: MySQL disk space is low
link: https://support.magento.com/hc/en-us/articles/360037591972-MySQL-disk-space-is-low
labels: Magento Commerce Cloud,MySQL,mysql disk space,large tables,2.3.x,2.2.x,how to
---

This article provides solutions to avoid running out of space for MySQL on Magento Commerce Cloud.

 ### Affected products and versions

 Magento Commerce Cloud 2.2.x, 2.3.x

 Issue
-----

 The database gets too big. Symptoms might include losing database connection and/or database upload error. 

 To check the amount of space used by the database, run the df -h  command, as described in [Manage disk space](https://devdocs.magento.com/cloud/project/manage-disk-space.html).

 Less than 10% of free memory on MySQL disk is a primary indicator of an outage.

 Solution
--------

 Solution options:

 
 * Check if there are large tables and consider if any of them can be flushed. For example, the table with reports can usually be flushed. For details on how to find large tables, see the [Find Large MySQL tables](https://support.magento.com/hc/en-us/articles/360038957591) article.
 * Set up a cron job to track and flush these tables.
 * Allocate more disk space for MySQL, if you have some unused. See the [Check disk space limit](https://support.magento.com/hc/en-us/articles/360038374052) article. 
	 + For Starter plan, all environments, and Pro plan Integration environments, you can allocate the disk space if you have some unused, for details see the [Allocate more space for MySQL](https://support.magento.com/hc/en-us/articles/360038761511) article.
	 + For Pro plan Staging and Production environments, contact support to allocate more disk space if you have some unused. 
 * If you have reached your space limit and still experience low space issues, consider buying more disk space, contact your Customer Success Manager (CSM) for details.
 
  

  

