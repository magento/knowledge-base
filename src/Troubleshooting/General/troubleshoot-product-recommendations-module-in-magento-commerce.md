---
title: Troubleshoot Product Recommendations module in Magento Commerce
labels: Magento Commerce,commerce,product,module,product-recommendations,recommendations,saas-export,magento/product-recommendations,2.3.x,how to,2.4.x
---

This article talks about troubleshooting suggestions for the <code class="language-php">magento/product-recommendations</code> module and its dependency <code class="language-php">saas-export</code> module since you need both modules operating in order to use the Product Recommendations tool in Magento Commerce.

## Affected products and versions

* Magento Commerce 2.3.x
* Magento Commerce 2.4.x

## Troubleshoot product-recommendations module

If you have configured the <code class="language-php">magento/product-recommendations</code> module correctly (Check [Product Recommendations - Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html)), but you are not seeing any recommendations, try the following:

* It is possible that the module has not had enough time to collect behavioral data. Allow the system to run for 24 hours so it can start collecting data. Consider deploying a recommendation type that does not require any behavioral data, such as "More like this".

* If you are not seeing the recommendations that you configured, it is possible there is not yet sufficient data to build recommendations for the user.

* Ensure the SaaS Environment ID or API Key are valid. If you get an error after specifying your SaaS Environment ID or your API key during the product recommendations initialization, check to make sure you have entered the [SaaS Environment ID and API key](https://docs.magento.com/m2/ce/user_guide/configuration/services/saas.html) correctly. To ensure the MageID and API key are linked, the user who owns the MageID, typically the user who owns the Magento license, needs to be the same user who generates the API key. If you must change the MageID that was used, [submit a Support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

<p class="info">If <a href="https://docs.magento.com/m2/ce/user_guide/stores/compliance-cookie-restriction-mode.html">Cookie Restriction Mode</a> is enabled, Magento does not collect behavioral data until the shopper consents. If Cookie Restriction Mode is disabled, Magento collects behavioral data by default.</p>

## Catalog SaaS Export module

For issues related to the Catalog SaaS Export (<code class="language-php">saas-export</code>) module:

1. Confirm the [cron](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html) jobs are running.
1. Confirm the [indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html) are running and the <code class="language-php">Product Feed</code> indexer is set to <code class="language-php">Update by Schedule</code>.
1. Confirm the modules are enabled. The <code class="language-php">saas-export</code> metapackage installs the following modules, all of which must be enabled:
    
    <pre><code class="language-php">  "magento/module-catalog-data-exporter"<br/>
  "magento/module-catalog-inventory-data-exporter"<br/>
  "magento/module-catalog-url-rewrite-data-exporter"<br/>
  "magento/module-configurable-product-data-exporter"<br/>
  "magento/module-data-exporter"<br/>
  "magento/module-saas-catalog"<br/>
</code></pre>
    
    
1. Check the [logs](https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html). Make sure there are no errors associated with the above modules.
1. Refresh Configuration cache. Go to System > Tools > Cache Management, and clear the configuration cache.
1. Confirm there is data in the <code class="language-php">catalog\_data\_exporter\_products</code> database table.

## Events

[Recommendation Events](https://devdocs.magento.com/recommendations/verify.html) describes the behavioral events that are sent to Magento.

## Related reading

* [Product Recommendations - Overview](https://devdocs.magento.com/recommendations/product-recs.html) 
* [Product Recommendations - Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html) 
* [Marketing - Product Recommendations](https://docs.magento.com/m2/ee/user_guide/marketing/product-recommendations.html) 
* [Create Product Recommendations](https://docs.magento.com/m2/ee/user_guide/marketing/create-new-rec.html) 