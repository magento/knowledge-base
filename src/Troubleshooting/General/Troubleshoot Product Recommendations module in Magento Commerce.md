---
title: Troubleshoot Product Recommendations module in Magento Commerce
link: https://support.magento.com/hc/en-us/articles/360042224851-Troubleshoot-Product-Recommendations-module-in-Magento-Commerce
labels: Magento Commerce,commerce,product,module,product-recommendations,recommendations,saas-export,magento/product-recommendations,2.3.x,how to,2.4.x
---

This article talks about troubleshooting suggestions for the magento/product-recommendations module and its dependency saas-export module since you need both modules operating in order to use the Product Recommendations tool in Magento Commerce.

 Affected products and versions
------------------------------

 
 * Magento Commerce 2.3.x
 * Magento Commerce 2.4.x
 
 Troubleshoot product-recommendations module
-------------------------------------------

 If you have configured the magento/product-recommendations module correctly (Check [Product Recommendations - Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html "Follow link")), but you are not seeing any recommendations, try the following:

 
 * It is possible that the module has not had enough time to collect behavioral data. Allow the system to run for 24 hours so it can start collecting data. Consider deploying a recommendation type that does not require any behavioral data, such as "More like this".
 
 
 * If you are not seeing the recommendations that you configured, it is possible there is not yet sufficient data to build recommendations for the user.
 
 
 * Ensure the SaaS Environment ID or API Key are valid. If you get an error after specifying your SaaS Environment ID or your API key during the product recommendations initialization, check to make sure you have entered the [SaaS Environment ID and API key](https://docs.magento.com/m2/ce/user_guide/configuration/services/saas.html) correctly. To ensure the MageID and API key are linked, the user who owns the MageID, typically the user who owns the Magento license, needs to be the same user who generates the API key. If you must change the MageID that was used, [submit a Support ticket](https://support.magento.com/hc/en-us/articles/360019088251).
 
 If [Cookie Restriction Mode](https://docs.magento.com/m2/ce/user_guide/stores/compliance-cookie-restriction-mode.html) is enabled, Magento does not collect behavioral data until the shopper consents. If Cookie Restriction Mode is disabled, Magento collects behavioral data by default.

 Catalog SaaS Export module
--------------------------

 For issues related to the Catalog SaaS Export (saas-export) module:

 
 2. Confirm the [cron](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html) jobs are running.
 4. Confirm the [indexers](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html) are running and the Product Feed indexer is set to Update by Schedule.
 6. Confirm the modules are enabled. The saas-export metapackage installs the following modules, all of which must be enabled:  "magento/module-catalog-data-exporter"  
 "magento/module-catalog-inventory-data-exporter"  
 "magento/module-catalog-url-rewrite-data-exporter"  
 "magento/module-configurable-product-data-exporter"  
 "magento/module-data-exporter"  
 "magento/module-saas-catalog"  
  
 8. Check the [logs](https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html). Make sure there are no errors associated with the above modules.
 10. Refresh Configuration cache. Go to **System** > **Tools** > **Cache Management**, and clear the configuration cache.
 12. Confirm there is data in the catalog\_data\_exporter\_products database table.
 
 Events
------

 [Recommendation Events](https://devdocs.magento.com/recommendations/verify.html) describes the behavioral events that are sent to Magento.

 Related reading
---------------

 
 *  [Product Recommendations - Overview](https://devdocs.magento.com/recommendations/product-recs.html "Follow link") 
 *  [Product Recommendations - Install and Configure Recommendations](https://devdocs.magento.com/recommendations/install-configure.html "Follow link") 
 *  [Marketing - Product Recommendations](https://docs.magento.com/m2/ee/user_guide/marketing/product-recommendations.html "Follow link") 
 *  [Create Product Recommendations](https://docs.magento.com/m2/ee/user_guide/marketing/create-new-rec.html "Follow link") 
 
