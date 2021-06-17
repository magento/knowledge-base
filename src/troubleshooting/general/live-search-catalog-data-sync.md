---
title: Live search catalog is not synchronized
labels: Adobe Commerce,live search
---

This article provides solutions for the Adobe Commerce issue where your catalog data is not synchronized correctly when using the Live Search extension.

## Affected products and versions

* Adobe Commerce 2.4.x with Live Search extension installed

## Issue

Your catalog data is not synchronized correctly.

<ins>Steps to reproduce</ins>

1. Configure and connect Live Search for your Adobe Commerce instance as described in [Configure and Connect](https://devdocs-beta.magento.com/live-search/config-connect.html) in Adobe Commerce Development Documentation.
1. Verify the exported catalog data as described in [Configure and Connect > Verify catalog sync](https://devdocs-beta.magento.com/live-search/config-connect.html#verify-catalog-sync).
1. Test the connection as described in [Configure and Connect > Test the connection](https://devdocs-beta.magento.com/live-search/config-connect.html#test-the-connection).

<ins>Expected result</ins>

* Exported catalog data can be verified
* Connection is successful

<ins>Actual result</ins>

Exported catalog cannot be verified and/or connection is not established because the API key has changed.

## Solution

There are several things you might do to try and fix the catalog syncing issues.

### Sync product data for a specific SKU

If your product data is not synced correctly for a specific SKU, do the following:

1. Use the following SQL query and verify that you have the data you expect in the `feed_data` column. Also make note of the `modified_at` timestamp.
    ```SQL
    select * from catalog_data_exporter_products where sku = '<your_sku>' and store_view_code = '<your_ store_view_code>';
    ```
1. If you do not see the correct data, try to reindex using following command and rerun the SQL query in step 1 to verify the data:
    ```bash
    bin/magento indexer:reindex catalog_data_exporter_products
    ```
1. If you still do not see the correct data, [create a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket). SHOULDN"T THEY TRY OTHER SOLUTIONS DESCRIBED HERE?

### Check timestamp of last product export

1. If you see the correct data in `catalog_data_exporter_products`, use the following SQL query to check the timestamp of last export. It should be after the `modified_at` timestamp:
    ```sql
    select * from flag where flag_code = 'products-feed-version';
    ```
1. If the timestamp is older, you can either wait for the next `cron` run, or trigger it yourself using following command:
    ```bash
    bin/magento cron:run --group=catalog_data_exporter
    ```
1. Wait for `<>` time (time for incremental updates). If you still do not see your data, [create a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket). SHOULDN"T THEY TRY OTHER SOLUTIONS DESCRIBED HERE?

### Sync specific attribute code
If your product attribute data isn't synced correctly for a specific attribute code, do the following:
Use the following SQL query and verify that you have the data you expect in 'feed_data' column. Also make note of the 'modified_at' timestamp.
   select * from catalog_data_exporter_product_attributes where json_extract(feed_data, '$.attributeCode') = '<your_attribute_code>' and store_view_code = '<your_ store_view_code>';
If you do not see the correct data, use the following command to reindex and then rerun the SQL query in step 1 to verify the data.
   bin/magento indexer:reindex catalog_data_exporter_product_attributes
   If you still do not see the correct data, create a Support ticket.

### Check timestamp of last product attribute export
If you see the correct data in `catalog_data_exporter_product_attributes`, use the following SQL query to check the timestamp of last export. It should be after the 'modified_at' timestamp.
   select * from flag where flag_code = 'product-attributes-feed-version';
If the timestamp is older, you can either wait for the next `cron` run, or trigger it yourself using the following command:
   bin/magento cron:run --group=catalog_data_exporter
Wait for `<>` time (time for incremental updates). If you still do not your data, please report the issue.

### Sync after API configuration change
(Known issue) If you have changed your API configuration, that is, changed your API Key or _SaaS Identifier+ (project / data space) (https://devdocs-beta.magento.com/live-search/config-connect.html) and find that your catalog changes are no longer syncing, do the following:
Run the following queries to clear the export-related table:
   truncate table catalog_data_exporter_products;
   truncate table catalog_data_exporter_product_attributes;
   truncate table catalog_data_exporter_categories;
   truncate table catalog_product_data_submitted_hash;
   truncate table catalog_product_attribute_data_submitted_hash;
   truncate table catalog_category_data_submitted_hash;
   delete from flag where flag_code IN ('products-feed-version', 'product-attributes-feed-version');
After you have cleared all the data, you can either wait for the indexers and `cron` to run on their own, or manually run them using the following commands:
   bin/magento indexer:reindex catalog_data_exporter_products
   bin/magento indexer:reindex catalog_data_exporter_product_attributes
   bin/magento cron:run --group=catalog_data_exporter
===================================
Links (if applicable): external references/ DevDocs, Zendesk tickets.
See Configure and Connect in the developer documentation:
Pre GA. (Beta):  https://devdocs-beta.magento.com/live-search/config-connect.html
Post GA (June 22): https://devdocs.magento.com/live-search/config-connect.html
