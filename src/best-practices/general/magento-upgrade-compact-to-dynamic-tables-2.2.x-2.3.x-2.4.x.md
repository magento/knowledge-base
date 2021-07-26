---
title: "Magento upgrade: compact to dynamic tables 2.2.x, 2.3.x-2.4.x"
labels: 2.2,2.2.x,2.3,2.3.x,2.4,2.4.x,Magento Commerce Cloud,MySQL,Pro,Starter,database,known issues,troubleshooting,upgrade
---

This article provides a solution for the issue when you cannot upgrade Magento from 2.2x and 2.3.x to 2.4.x due to `COMPACT` MySQL tables not having been converted to `DYNAMIC` tables in your database.

If you try to upgrade Magento from 2.2x and 2.3.x to 2.4.x without converting row formats from COMPACT to DYNAMIC, you will probably not be allowed to upgrade, and if you manage to upgrade there may be data loss on some tables.

When using the MySQL queries below you may need to replace all single and double quotes due to there being characters that look like them but are not them that are used in some browser display fonts.Converting from `COMPACT` to `DYNAMIC` tables can take a long time with a large database. This process should be done in [maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten) during a low traffic period. For steps refer to DevDocs [Installation Guide > Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=mainten).

## Affected product and versions

* Magento Commerce Cloud v2.3
* Magento Commerce Cloud v2.2

## Issue

 `COMPACT` tables must be converted to `DYNAMIC` tables in your database before you can upgrade from Magento Commerce Cloud v2.2 and v2.3 to v2.1.

 ## Solution

 1. SSH into the environment. For steps, refer to DevDocs [Magento Commerce Cloud > SSH into your environment](https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh). For pro accounts prod/staging you will need to do this on all node 1, the changes will then replicate across other nodes in the cluster. You should check the changes have been applied by logging into node 2 and 3 also. For starter accounts/integration/dev branches you will not need to specify a port or do it multiple times as there is a single database container.
    ```shell
        export DB_NAME=$(grep [\']db[\'] -A 20 app/etc/env.php | grep dbname | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/['][,]//");
        export MYSQL_HOST=$(grep [\']db[\'] -A 20 app/etc/env.php | grep host | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/['][,]//");
        export DB_USER=$(grep [\']db[\'] -A 20 app/etc/env.php | grep username | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/['][,]//");
        export MYSQL_PWD=$(grep [\']db[\'] -A 20 app/etc/env.php | grep password | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/[']$//" | sed "s/['][,]//");
```
 1. Get a count of tables to be altered and their names by running the following command in the CLI/Terminal: For starter use 3306 as there is only one MySQL instance.
     For Pro
     ```shell
     mysql -P 3304 -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -e "SELECT table_name,row_format FROM information_schema.tables WHERE table_schema='$DB_NAME' and row_format='compact'"|wc -l mysql -P 3304 -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -e "SELECT table_name,row_format FROM information_schema.tables WHERE table_schema='$DB_NAME' and row_format='compact'"|less`
     ```
 1. Build the `ALTER` table list file, and make sure it's complete:For starter use 3306 as there is only one MySQL instance. For ProBuild the `ALTER` table list file, and make sure it's complete:For starter use 3306 as there is only one MySQL instance. For Pro.
     ```shell
        mysql -P 3304 -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -e "SELECT table_name,row_format FROM information_schema.tables WHERE table_schema='$DB_NAME' and row_format='compact'"|grep -v table_name|awk '{print "alter table "$1" ROW_FORMAT=DYNAMIC; "}' > ~/var/alter.txt 
fw0ef0jqfdlwdj@i-f5w6ef4w6e5f4we6f4:~$ wc -l ~/var/alter.txt 612 /app/fw0ef0jqfdlwdj/var/alter.txt
fw0ef0jqfdlwdj@i-f5w6ef4w6e5f4we6f4:~$ mysql -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -e "SELECT table_name,row_format FROM information_schema.tables WHERE table_schema='$DB_NAME' and row_format='compact'"|grep -v table_name|wc -l 612
     ```
 1. Download the file's contents to a text file on your local environment.
 1. Log in to MySQL. For starter use 3306 as there is only one MySQL instance.
 1. Copy and paste 100 or so rows at a time from that file into MySQL to alter the table formats from `COMPACT` to `DYNAMIC`.
 1. When complete check the list of compact tables you created in step 3 to ensure that there are no tables left to be converted.
 1. If there are any, repeat step 3 to 8 till none remain.
 1. Once complete, I think the user should check on nodes 2/3 to check the changes have been replicated. There should be no compact tables on any node when you've completed this.  
 1. Double check you have no `MyISAM` tables. For steps refer to [Database best practices for Magento Commerce Cloud > Convert all MyISAM tables to InnoDb](https://support.magento.com/hc/en-us/articles/360041997312#convert).

## Related Reading

* [Magento 2.4.0 known issue: missing "Refund" label in Klarna](https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna)
* [Magento 2.4.0 known issue: two buttons missing on Create New Order page in Admin](https://support.magento.com/hc/en-us/articles/360047481431-Magento-2-4-0-known-issue-two-buttons-missing-on-Create-New-Order-page-in-Admin)
* [Different addresses not allowed when unselecting 'My billing and shipping address are the same' using Vertex Address Cleansing](https://support.magento.com/hc/en-us/articles/360046998952-Different-addresses-not-allowed-when-unselecting-My-billing-and-shipping-address-are-the-same-using-Vertex-Address-Cleansing)
* [Magento Commerce 2.4.0 known issue: when Braintree is enabled, Venmo partial invoice issue](https://support.magento.com/hc/en-us/articles/360046845932-Magento-Commerce-2-4-0-known-issue-when-Braintree-is-enabled-Venmo-partial-invoice-issue)
* [Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
* [Magento 2.4.0 known issue: Amazon Pay enabled, payment methods missing when Return to standard checkout used](https://support.magento.com/hc/en-us/articles/360046680632-Magento-2-4-0-known-issue-Amazon-Pay-enabled-payment-methods-missing-when-Return-to-standard-checkout-used)
* [Magento 2.4.0 known issue: 2.4.0 installation fails with outdated stores cache](https://support.magento.com/hc/en-us/articles/360046949731-Magento-2-4-0-known-issue-2-4-0-installation-fails-with-outdated-stores-cache)
* [Magento 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout](https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout)
* [Magento 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
* [Magento 2.4.0 known issue: B2B Admin cannot add a configurable product to a quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
* [Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout)
* [Shipping labels creation known issue in Magento 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* [Magento 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work)
* [Magento 2.4.0 known issue - Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032-Magento-2-4-0-known-issue-Export-Tax-Rates-does-not-work-)
* [Magento 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
* [Magento 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332-Magento-2-4-0-known-issue-raw-message-data-display-on-storefront)
