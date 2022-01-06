---
title: New customers not displayed in Customer grid after CSV import
labels: 2.2.x,2.3.x,2.4.x,Magento Commerce,Magento Commerce Cloud,customers,import,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for the issue when you cannot see new customers under **Customers** > **All customers** after an import from a `.csv` file. The solution is to set the `customer_grid` indexer to "Update on Save" mode and manually reindex the customer grid.

## Affected versions

* Adobe Commerce on-premises 2.2.0 and later
* Adobe Commerce on cloud infrastructure 2.2.0 and later

# Issue

After importing new customers from a `.csv` file using the native Adobe Commerce import functionality, you might not be able to see the new customer records under **Customers** > **All customers** in the Admin until you manually reindex the `customer_grid` indexer.

# Cause

The "Update on Schedule" indexing mode in Adobe Commerce 2.2.0 and later does not support the `customer_grid` indexer due to performance issues.

# Solution

Configure the `customer_grid` indexer to be reindexed using the "Update on Save" mode. To do this, take the following steps:

1. Log in to the Commerce Admin.
1. Click **System** > **Tools** > **Index Management**.
1. Select the checkbox next to Customer Grid indexer.
1. In the **Actions** drop-down list, select *Update on Save*.
1. Click **Submit**.

We also recommend manually reindexing the `customer_grid` indexer after configuring the indexing mode to ensure that the index is up to date and can work with cron. To manually reindex, use the following command:

 `bin/magento indexer:reindex customer_grid`

# More information

Links to related topics in our developer documentation:

* [Indexing overview](https://devdocs.magento.com/guides/v2.3/extension-dev-guide/indexing.html)
* [Manage the indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html)
