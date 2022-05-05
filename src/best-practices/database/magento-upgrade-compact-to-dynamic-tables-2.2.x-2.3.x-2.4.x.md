---
title: "Adobe Commerce 2.3.5 upgrade: compact to dynamic tables"
labels: 2.3,2.3.4,2.3.5,Magento Commerce Cloud,MySQL,database,known issues,troubleshooting,upgrade,Adobe Commerce,MariaDB,10.0,10.2,Magento,cloud infrastructure
---

This article provides a guide on the prerequisites to upgrade from MariaDB 10.0 to 10.2. Adobe Commerce version 2.3.5 and later requires MariaDB version 10.2.

The upgrade of MariaDB itself will be performed by the Adobe Commerce Support team. However, prior to them starting the upgrade process, you will need to take action to convert all tables in your database from <code>COMPACT</code> format to <code>DYNAMIC</code>. You will also need to convert the storage engine type from MyISAM to InnoDB.

Converting from <code>COMPACT</code> to <code>DYNAMIC</code> tables can take several hours with a large database. All the database <code>ALTER</code> commands below should be carried out in [maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) during a low traffic period on your site. You should not attempt to run these commands when your site is live and not in maintenance mode, due to the risk of data corruption to your database.

For steps on how to enable maintenance mode, please refer to [Installation Guide > Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) in our developer documentation.

## Affected product and versions

Adobe Commerce on cloud infrastructure version 2.3.4 or earlier with MariaDB version to 10.0 or earlier.

## Issue

Upgrading your MariaDB version to 10.2 or later is rejected by Adobe Commerce support, due to ``COMPACT`` tables needing to be converted to ``DYNAMIC`` and/or storage engine type being MyISAM.

## Solution

1. SSH into node 1 on your environment. You do not need to perform these changes on every MySQL node, only node 1 is sufficient. The changes you make there will replicate across to the other core nodes in your cluster.
1. Log in to MariaDB, then run this command to identify which tables still need to be converted:

    ```mysql
       SELECT table_name, row_format FROM information_schema.tables WHERE table_schema=DATABASE() and row_format = 'Compact';
    ```
1. Run this command to see the table sizes - bigger sized tables will take longer to convert. You should plan accordingly when taking your site in and out of maintenance mode which batches of tables to convert in which order, so as to plan the timings of the maintenance windows needed:

    ```mysql
       SELECT table_schema as 'Database', table_name AS 'Table', round(((data_length + index_length) / 1024 / 1024), 2) 'Size in MB' FROM information_schema.TABLES ORDER BY (data_length + index_length) DESC;
     ```
1. Run this command to covert the tables that need to be converted into ``Dynamic``. You need to do this one by one for every table on the database that needs to be converted:
    ```mysql
       ALTER TABLE [ table name here ] ROW_FORMAT=DYNAMIC;
    ```
1. After all the <code>Compact</code> to <code>Dynamic</code> table version changes have been completed, then the following command should be run in the CLI/Terminal to check which tables need to be converted from MyISAM storage engine to InnoDB:
    ```mysql
        SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE engine = 'MyISAM';
    ```

1. You should then run the following command to convert any tables identified as MyISAM to InnoDB;
    ```mysql
        ALTER TABLE [ table name here ] ENGINE=InnoDB;
    ```
1. The day before the upgrade of MariaDB to 10.2 is due to happen, you should check again the following commands, as some tables may be converted back due to code deployments since you made the original changes:
     ```mysql
        SELECT table_name, row_format FROM information_schema.tables WHERE table_schema=DATABASE() and row_format = 'Compact';
     ```
      ```mysql
          SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE engine = 'MyISAM';
      ```

1. If any tables have converted back, you will need to repeat the steps above on the reverted tables, or the support team will not be able to proceed with the upgrade ticket.

## Related Readings in our support knowledge base

* [Adobe Commerce 2.4.0 known issue: missing "Refund" label in Klarna](https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna)
* [Adobe Commerce 2.4.0 known issue: two buttons missing on Create New Order page in Admin](https://support.magento.com/hc/en-us/articles/360047481431-Magento-2-4-0-known-issue-two-buttons-missing-on-Create-New-Order-page-in-Admin)
* [Different addresses not allowed when unselecting 'My billing and shipping address are the same' using Vertex Address Cleansing](https://support.magento.com/hc/en-us/articles/360046998952-Different-addresses-not-allowed-when-unselecting-My-billing-and-shipping-address-are-the-same-using-Vertex-Address-Cleansing)
* [Adobe Commerce 2.4.0 known issue: when Braintree is enabled, Venmo partial invoice issue](https://support.magento.com/hc/en-us/articles/360046845932-Magento-Commerce-2-4-0-known-issue-when-Braintree-is-enabled-Venmo-partial-invoice-issue)
* [Adobe Commerce 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
* [Adobe Commerce 2.4.0 known issue: Amazon Pay enabled, payment methods missing when Return to standard checkout used](https://support.magento.com/hc/en-us/articles/360046680632-Magento-2-4-0-known-issue-Amazon-Pay-enabled-payment-methods-missing-when-Return-to-standard-checkout-used)
* [Adobe Commerce 2.4.0 known issue: 2.4.0 installation fails with outdated stores cache](https://support.magento.com/hc/en-us/articles/360046949731-Magento-2-4-0-known-issue-2-4-0-installation-fails-with-outdated-stores-cache)
* [Adobe Commerce 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout](https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout)
* [Adobe Commerce 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
* [Adobe Commerce 2.4.0 known issue: B2B Admin cannot add a configurable product to a quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout)
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work)
* [Adobe Commerce 2.4.0 known issue - Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032-Magento-2-4-0-known-issue-Export-Tax-Rates-does-not-work-)
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332-Magento-2-4-0-known-issue-raw-message-data-display-on-storefront)
