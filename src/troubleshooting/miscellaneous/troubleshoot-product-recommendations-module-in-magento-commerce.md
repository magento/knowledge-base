---
title: Troubleshoot Product Recommendations module in Adobe Commerce
labels: 2.3.x,2.4.x,Magento Commerce,commerce,how to,magento/product-recommendations,module,product,product-recommendations,recommendations,saas-export,Adobe Commerce,on-premises,cloud infrastructure
---

This article talks about troubleshooting suggestions for the

```php
magento/product-recommendations
```

module and its dependency

```php
saas-export
```

module since you need both modules operating in order to use the Product Recommendations tool in Adobe Commerce.

## Affected products and versions

* Adobe Commerce 2.3.x
* Adobe Commerce 2.4.x

## Troubleshoot product-recommendations module

If you have configured the

```php
magento/product-recommendations
```

module correctly (Check [Product Recommendations - Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html) in our developer documentation.), but you are not seeing any recommendations, try the following:

* It is possible that the module has not had enough time to collect behavioral data. Allow the system to run for 24 hours so it can start collecting data. Consider deploying a recommendation type that does not require any behavioral data, such as "More like this".

* If you are not seeing the recommendations that you configured, it is possible there is not yet sufficient data to build recommendations for the user.

* Ensure the SaaS Data Space or API Key are valid. If you get an error after specifying your SaaS Data Space or your API key during the product recommendations initialization, check to make sure you have entered the [SaaS Data Space and API key](https://docs.magento.com/user-guide/configuration/services/saas.html) (in our user guide) correctly. To ensure the MageID and API key are linked, the user who owns the MageID, typically the user who owns the Adobe Commerce license, needs to be the same user who generates the API key. If you must change the MageID that was used, [submit a Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

>![info]
>
>If [Cookie Restriction Mode](https://docs.magento.com/m2/ce/user_guide/stores/compliance-cookie-restriction-mode.html) (in our user guide) is enabled, Adobe Commerce does not collect behavioral data until the shopper consents. If Cookie Restriction Mode is disabled, Adobe Commerce collects behavioral data by default.

## Catalog SaaS Export module

For issues related to the Catalog SaaS Export (

```php
saas-export
```

) module:

1. Confirm the [cron](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html) (in our developer documentation) jobs are running.
1. Confirm the [indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html) (in our developer documentation) are running and the    ```php    Product Feed    ```    indexer is set to    ```php    Update by Schedule    ```    .
1. Confirm the modules are enabled. The    ```php    saas-export    ```    metapackage installs the following modules, all of which must be enabled:    ```php    "magento/module-catalog-data-exporter"      "magento/module-catalog-inventory-data-exporter"      "magento/module-catalog-url-rewrite-data-exporter"      "magento/module-configurable-product-data-exporter"      "magento/module-data-exporter"      "magento/module-saas-catalog"    ```    
1. Check the [logs](https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html) (in our developer documentation). Make sure there are no errors associated with the above modules.
1. Refresh Configuration cache. Go to **System** > **Tools** > **Cache Management** , and clear the configuration cache.
1. Confirm there is data in the    ```php    catalog_data_exporter_products    ```    database table.

## Events

 [Recommendation Events](https://devdocs.magento.com/recommendations/verify.html), in our developer documentation, describes the behavioral events that are sent to Adobe Commerce.

## Related reading

* [Product Recommendations - Overview](https://devdocs.magento.com/recommendations/product-recs.html) in our developer documentation
* [Product Recommendations - Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html) in our developer documentation
* [Marketing - Product Recommendations](https://docs.magento.com/m2/ee/user_guide/marketing/product-recommendations.html) in our user guide
* [Create Product Recommendations](https://docs.magento.com/m2/ee/user_guide/marketing/create-new-rec.html) in our user guide
