---
title: Live search catalog not synchronized
labels: Adobe Commerce,Magento,on-premises,cloud infrastructure,live search,catalog,data,sync
---

This article provides solutions for the Adobe Commerce issue where your catalog data is not synchronized correctly when using the Live Search extension.

## Affected products and versions

* Adobe Commerce 2.4.x with Live Search extension installed

## Issue

Your catalog data is not synchronized correctly, or a new product was added but is not appearing in search results.

<ins>Steps to reproduce</ins>

1. Configure and connect Live Search for your Adobe Commerce instance as described in [Install Live Search > Configure API keys](https://experienceleague.adobe.com/docs/commerce-merchant-services/live-search/onboard/install.html#configure-api-keys) in our user documentation.
1. After 8 hours, verify the exported catalog data as described in [Install Live Search > Verify export](https://experienceleague.adobe.com/docs/commerce-merchant-services/live-search/onboard/install.html#verify-export) in our user documentation.
1. After 8 hours, test the connection as described in [Install Live Search > Test the connection](https://experienceleague.adobe.com/docs/commerce-merchant-services/live-search/onboard/install.html#test-connection) in our user documentation.

Or

1. Add a new product to the catalog.
1. Try running a search query using the product name or other searchable attributes after 15-20 minutes from the time Magento indexer + cron have run to sync data to backend service.

<ins>Expected result</ins>

* Exported catalog data can be verified
* Connection is successful
* New product appears in search results.

<ins>Actual result</ins>

Exported catalog cannot be verified and/or connection is not established because the API key has changed.

## Solution

There are several things you might do to try and fix the catalog syncing issues.

### Wait for changes to be applied

Once you configure and connect, it can take over 8 hours for the index in ES (Elasticsearch) to be created and search results to be returned (same timeframe is also true for delta updates as of now, but will be improved in the future).

### Sync product data for a specific SKU

If your product data is not synced correctly for a specific SKU, do the following:

1. Use the following SQL query and verify that you have the data you expect in the `feed_data` column. Also, make a note of the `modified_at` timestamp.
    ```sql
    select * from catalog_data_exporter_products where sku = '<your_sku>' and store_view_code = '<your_ store_view_code>';
    ```
1. If you do not see the correct data, try to reindex using the following command and rerun the SQL query in step 1 to verify the data:
    ```bash
    bin/magento indexer:reindex catalog_data_exporter_products
    ```
1. If you still do not see the correct data, [create a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

### Check timestamp of last product export

1. If you see the correct data in `catalog_data_exporter_products`, use the following SQL query to check the timestamp of the last export. It should be after the `modified_at` timestamp:
    ```sql
    select * from flag where flag_code = 'products-feed-version';
    ```
1. If the timestamp is older, you can either wait for the next cron run or trigger it yourself using the following command:
    ```bash
    bin/magento cron:run --group=saas_data_exporter
    ```
1. Wait for `<>` time (time for incremental updates). If you still do not see your data, [create a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

### Sync specific attribute code

If your product attribute data isn't synced correctly for a specific attribute code, do the following:

1. Use the following SQL query and verify that you have the data you expect in the `feed_data` column. Also, make a note of the `modified_at` timestamp.
    ```sql
    select * from catalog_data_exporter_product_attributes where json_extract(feed_data, '$.attributeCode') = '<your_attribute_code>' and sto1re_view_code = '<your_ store_view_code>';
    ```
1. If you do not see the correct data, use the following command to reindex and then rerun the SQL query in step 1 to verify the data.
    ```bash
    bin/magento indexer:reindex catalog_data_exporter_product_attributes
    ```
1. If you still do not see the correct data, [create a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

### Check timestamp of last product attribute export

If you see the correct data in `catalog_data_exporter_product_attributes`:

1. Use the following SQL query to check the timestamp of the last export. It should be after the `modified_at` timestamp.
    ```sql
    select * from flag where flag_code = 'product-attributes-feed-version';
    ```
1. If the timestamp is older, you can either wait for the next cron run or trigger it yourself using the following command:
    ```bash
    bin/magento cron:run --group=saas_data_exporter
    ```
1. Wait for 15-20 minutes (time for incremental updates). If you still do not see your data, please [create a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

### Sync after API configuration change

(Known issue) If you have changed your API configuration, which results in a change in your Data Space ID and find that your catalog changes are no longer syncing, run the following commands:

```bash 
bin/magento saas:resync --feed products
bin/magento saas:resync --feed productattributes
```

## Related reading

See [Onboard Live Search](https://experienceleague.adobe.com/docs/commerce-merchant-services/live-search/onboard/onboarding-overview.html?lang=en) in our user documentation.
