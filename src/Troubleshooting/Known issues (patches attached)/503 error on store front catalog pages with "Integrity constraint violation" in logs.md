---
title: 503 error on store front catalog pages with "Integrity constraint violation" in logs
link: https://support.magento.com/hc/en-us/articles/360025762211-503-error-on-store-front-catalog-pages-with-Integrity-constraint-violation-in-logs
labels: Magento Commerce Cloud,patch,troubleshooting,503,2.2.4,known issues,2.2.0,integrity constraint violation
---

This article provides a patch as a workaround, but the issue was permanently fixed in Magento Commerce Cloud v2.3.3 release, and it is recommended that you upgrade to v2.3.3. Follow the steps in [Upgrade Magento Version](https://devdocs.magento.com/cloud/project/project-upgrade.html).

 This article provides a patch for the known Magento Commerce Cloud 2.2.0 issue related to store front catalog pages being inaccessible, with the error message similar to the following in log: *"Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO `search\_tmp\_%number%"*.

 Issue
-----

 Store front catalog pages become inaccessible unexpectedly. The error log has an error description similar to the following: *"Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO `search\_tmp\_%number%"*.

 The issue is related to searching and caused by the existence of the outdated index along with the new one after reindex.

 Solution
--------

 To fix the problem, you need to remove outdated indexes from ElasticSearch and apply the patch to prevent them appearing.

 To list all the indexes, use the following command:

 curl -X GET %elasticsearch\_domain%:%elasticsearch\_port%/\_cat/indices To remove the outdated indexes, find the them in the database and then use the following command:

 curl -X DELETE %elasticsearch\_domain%:%elasticsearch\_port%/%product\_id%\_v%outdated\_version% Example:

 curl -X DELETE 127.0.0.1:9200/magento2\_product\_8\_v332 Patch
-----

 The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:

 [Download MDVA-9590\_EE\_2.2.0\_COMPOSER\_v2.patch](https://support.magento.com/hc/en-us/article_attachments/360024553632/MDVA-9590_EE_2.2.0_COMPOSER_v2.patch)

 [Download MDVA-13203\_EE\_2.2.4\_V1\_COMPOSER.patch](https://support.magento.com/hc/en-us/article_attachments/360024929111/MDVA-13203_EE_2.2.4_V1_COMPOSER.patch)

 ### Compatible Magento versions

 The patches were created for the following editions and versions:

 
 * Magento Commerce Cloud 2.2.0 (MDVA-9590\_EE\_2.2.0\_COMPOSER\_v2.patch)
 * Magento Commerce Cloud 2.2.4 (MDVA-13203\_EE\_2.2.4\_V1\_COMPOSER.patch)
 
 The MDVA-9590\_EE\_2.2.0\_COMPOSER\_v2 patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

 
 * Magento Commerce (Cloud) 2.0.X, 2.1.X, 2.2.X, from 2.3.0 to 2.3.3 
 * Magento Commerce 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3 
 
 The MDVA-13203\_EE\_2.2.4\_V1\_COMPOSER patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

 
 * Magento Commerce (Cloud) 2.0.X, 2.1.X, 2.2.X, from 2.3.0 to 2.3.3 
 * Magento Commerce 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3 
 
 How to apply the patch
----------------------

 See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

 Useful links
------------

 
 * [Log files location for Magento Commerce Cloud Starter plan](https://support.magento.com/hc/en-us/articles/360020127552)
 * [Log files location for Magento Commerce Cloud Pro plan](https://support.magento.com/hc/en-us/articles/360000318834)
 * [Log files location for Magento Commerce](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html)
 
 Attached Files
--------------

