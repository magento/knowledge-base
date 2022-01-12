---
title: "MDVA-29389: Advanced Reporting related cron job fails"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,Advanced Reporting,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,MySQL,cron,database,error,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-29389 patch fixes the issue where with Advanced Reporting where the `analytics_collect_data` cronjob says: "*Port must be configured within host parameter (like localhost:3306)*". This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. The patch ID is MDVA-29389. The issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.4.

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. In your Adobe Commerce instance, enable Advanced Reporting.
1. Run the following query to insert analytics/general/token value in the DB:    

    ```sql    
    INSERT INTO core_config_data VALUES(NULL,'default',0,'analytics/general/token','ABCDE',now());    
    ```    

1. Open your env.php and add port to the host parameter in DB configuration in the following format: `'host' => 'hostname:port',`
1. Clear cache.
1. Execute the `analytics_collect_data` cron job.

<ins>Expected results</ins>:

The `analytics_collect_data` job runs successfully when using default or non-default port to connect to MySQL in env.php.

<ins>Actual results</ins>:

The `analytics_collect_data` job throws an error "*Port must be configured within host parameter (like localhost:3306)*" when using a non-default port to connect to MySQL in env.php.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
