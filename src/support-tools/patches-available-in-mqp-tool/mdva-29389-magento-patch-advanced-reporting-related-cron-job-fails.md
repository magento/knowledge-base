---
title: "MDVA-29389 Magento patch: Advanced Reporting related cron job fails"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,Advanced Reporting,MQP 1.0.7,MQP patches,Magento Commerce,Magento Commerce Cloud,MySQL,cron,database,error,support tools
---

The MDVA-29389 Magento patch fixes the issue where with Advanced Reporting where the `analytics_collect_data` cronjob says: " *Port must be configured within host parameter (like localhost:3306)* ". This patch is available when the<a>Magento Quality Patch (MQP) tool 1.0.7</a>is installed. The issue is scheduled to be fixed in Magento Commerce 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce 2.3.4.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. In your Magento instance, enable Advanced Reporting.
1. Run the following query to insert analytics/general/token value in the DB:    ```sql    INSERT INTO core_config_data VALUES(NULL,'default',0,'analytics/general/token','ABCDE',now());    ```    
1. Open your env.php and add port to the host parameter in DB configuration in the following format: `'host' => 'hostname:port',` 
1. Clear cache.
1. Execute the `analytics_collect_data` cron job.

 <span class="wysiwyg-underline">Actual result:</span> 

The `analytics_collect_data` job throws an error " *Port must be configured within host parameter (like localhost:3306)* " when using non-default port to connect to MySQL in env.php.

 <span class="wysiwyg-underline">Expected result:</span> 

The `analytics_collect_data` job runs successfully when using default or non-default port to connect to MySQL in env.php.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.