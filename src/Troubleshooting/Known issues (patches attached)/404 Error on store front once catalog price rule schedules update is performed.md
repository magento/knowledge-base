---
title: 404 Error on store front once catalog price rule schedules update is performed
link: https://support.magento.com/hc/en-us/articles/360025522891-404-Error-on-store-front-once-catalog-price-rule-schedules-update-is-performed
labels: Magento Commerce,patch,2.2.1,troubleshooting,schedule update,known issues,404 error
---

This article provides a patch and required steps to fix the known Magento Commerce 2.2.1 issue related to getting a 404 error on all store front pages, after a catalog price rule update was created and its starting time was edited later. To fix the issue you need to apply the patch.

 Issue
-----

 Storefront pages become unavailable, returning 404 error. The issue appears after the active catalog price rule update becomes due, providing that the starting date of this update was edited after initial creation.

 Steps to reproduce:

 
 2. In the Magento Admin, create a new Catalog Price Rule under **Marketing** > **Promotions** > **Catalog Price Rule**.
 4. In the **Catalog Price Rule** grid, click **Edit,** schedule a new Update and set **Status** to *Active.* 
 6. Navigate to **Content** > **Content Staging** > **Dashboard.** 
 8. Select the recently created update and change its starting time.
 10. Save the changes.
 
 Expected result:  
 When the Update start date becomes effective, the catalog price rule is applied successfully.

 Actual result:  
 When the Update start date becomes effective, all catalog and products on the storefront become unavailable returning the 404 error.

 Solution
--------

 To restore catalog pages and be able to fully use the catalog price rules updates functionality, you need to install the patch, delete the rule both manually and in the admin, and fix the invalid links in the database. You will also need to recreate the catalog price rule.

 Following is the detailed description of the required steps:

 
 2.  [Apply the patch](#patch).
 4. In the Magento Amin, delete the catalog price rule related to the issue (where the start time was updated). To do this, open the rule page under **Marketing** > **Promotions** > **Catalog Price Rule**, and click **Delete Rule**.
 6. Accessing the database, manually delete the related record from the catalogrule table.
 8. Fix the invalid links in the database. See the [related paragraph](#fix_links) for details.
 10. In the Admin under **Marketing** > **Promotions** > **Catalog Price Rule**, create the new rule with the required configuration.
 12. Clear the browser cache under **System** > **Cache Management**.
 14. Make sure the cron jobs are configured properly and may be executed successfully.
 
 Patch
-----

 The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-7392\_EE\_2.2.1\_COMPOSER\_v2.patch](https://support.magento.com/hc/en-us/article_attachments/360024181571/MDVA-7392_EE_2.2.1_COMPOSER_v2.patch)

 ### Compatible Magento versions:

 The patch was created for:

 
 * Magento Commerce 2.2.1
 
 The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

 
 * Magento Commerce (Cloud) from 2.2.0 to 2.2.4
 * Magento Commerce 2.2.0, and from 2.2.2 to 2.2.4
 
  

 How to apply the patch
----------------------

 See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

 Fix the invalid links to staging in DB
--------------------------------------

 We strongly recommend creating a database backup before any database manipulations. We also recommend testing queries on development environment first.

 Take the following steps to fix the rows with invalid links to the staging\_update table.

 
 2. Check if the invalid links to the staging\_update table exist in the flag table. These would be records where flag\_code=staging.
 4. Identify the invalid version from the flag table using the following query: SELECT flag\_data FROM flag WHERE flag\_code = 'staging'; 
 6.  From the staging\_update table select the existing version that is less than the current (invalid) version and get the version value that is two numbers back. You take it, not the preceding version, to avoid the situation when the previous version is the maximum version in the staging\_update table that could be applied and we still need to re-apply it.

 SELECT id FROM staging\_update WHERE id < %current\_id% ORDER BY id DESC LIMIT 1, 1  The version you get in response is your valid version id.
 8.  For the rows with invalid links in the flag table, set the flag\_data values to data which will contain a valid version id. This helps to save performance on reindex step and allows to avoid reindexing all entities.

 UPDATE flag SET flag\_data=REPLACE(flag\_data, '%invalid\_id%', '%new\_valid\_id%') WHERE flag\_code='staging'; 
 
  

 Example:

 SELECT flag\_data FROM flag WHERE flag\_code = 'staging';   
Response < 2.2 version +-------------------------------------------------+ | flag\_data |  +-------------------------------------------------+ | a:1:{s:15:"current\_version";s:10:"1490005140";} | +-------------------------------------------------+ Response from 2.2 version +-------------------------------------------------+ | flag\_data |  +-------------------------------------------------+ | {"current\_version":"1490005140"} | +-------------------------------------------------+ SELECT id FROM staging\_update WHERE id < 1490005140 ORDER BY id DESC LIMIT 1, 1; Response: 1490005138

 UPDATE flag SET flag\_data=REPLACE(flag\_data, '1490005140', '1490005138') WHERE flag\_code='staging'; Attached Files
--------------

