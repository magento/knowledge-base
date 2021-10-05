---
title: 404 Error on store front once catalog price rule schedules update is performed
labels: 2.2.1,404 error,Magento Commerce,known issues,patch,schedule update,troubleshooting,Magento,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch and the required steps to fix the known Adobe Commerce 2.2.1 issue related to getting a 404 error on all store front pages, after a catalog price rule update was created and its starting time was edited later. To fix the issue you need to apply the patch.

## Issue

Storefront pages become unavailable, returning 404 error. The issue appears after the active catalog price rule update becomes due, providing that the starting date of this update was edited after initial creation.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1. In the Commerce Admin, create a new Catalog Price Rule under **Marketing** > **Promotions** > **Catalog Price Rule**.
1. In the **Catalog Price Rule** grid, click **Edit,** schedule a new Update and set **Status** to *Active.*
1. Navigate to **Content** > **Content Staging** > **Dashboard.**
1. Select the recently created update and change its starting time.
1. Save the changes.

<span class="wysiwyg-underline">Expected result</span> :

When the Update start date becomes effective, the catalog price rule is applied successfully.

<span class="wysiwyg-underline">Actual result</span> :

When the Update start date becomes effective, all catalog and products on the storefront become unavailable returning the 404 error.

## Solution

To restore catalog pages and be able to fully use the catalog price rules updates functionality, you need to install the patch, delete the rule both manually and in the admin, and fix the invalid links in the database. You will also need to recreate the catalog price rule.

The following is a detailed description of the required steps:

1. [Apply the patch](#patch).
1. In the Commerce Admin, delete the catalog price rule related to the issue (where the start time was updated). To do this, open the rule page under **Marketing** > **Promotions** > **Catalog Price Rule**, and click **Delete Rule**.
1. Accessing the database manually delete the related record from the `catalogrule` table.
1. Fix the invalid links in the database. See the [related paragraph](#fix_links) for details.
1. In the Commerce Admin under **Marketing**, go to **Promotions** > **Catalog Price Rule**, and create the new rule with the required configuration.
1. Clear the browser cache under **System** > **Cache Management**.
1. Make sure the cron jobs are configured properly and may be executed successfully.

<h2 id="patch">Patch</h2>

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-7392\_EE\_2.2.1\_COMPOSER\_v2.patch](assets/MDVA-7392_EE_2.2.1_COMPOSER_v2.patch.zip)

## Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce 2.2.1

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure 2.2.0 - 2.2.4
* Adobe Commerce on-premises 2.2.0, and 2.2.2 - 2.2.4

## How to apply the patch

For instruction, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

<h2 id="fix_links">Fix the invalid links to staging in DB</h2>

>![warning]
>
>We strongly recommend creating a database backup before any database manipulations. We also recommend testing queries on development environment first.

Take the following steps to fix the rows with invalid links to the `staging_update` table.

1. Check if the invalid links to the `staging_update` table exist in the `flag` table. These would be records where `flag_code=staging`.
1. Identify the invalid version from the `flag` table using the following query:
    ```sql    
    SELECT flag_data FROM flag WHERE flag_code = 'staging';
    ```      
1. From the `staging_update` table, select the existing version that is less than the current (invalid) version and get the version value that is two numbers back. You take it, not the preceding version, to avoid the situation when the previous version is the maximum version in the `staging_update` table that could be applied and we still need to re-apply it.
    ```sql    
    SELECT id FROM staging_update WHERE id < %current_id% ORDER BY id DESC LIMIT 1, 1
    ```   
    The version you get in response is your valid version `id`.
1. For the rows with invalid links in the `flag` table, set the `flag_data` values to data which will contain a valid version id. This helps to save performance on reindex step and allows to avoid reindexing all entities.
    ```sql
    UPDATE flag SET flag_data=REPLACE(flag_data, '%invalid_id%', '%new_valid_id%') WHERE flag_code='staging';
    ```    

 <span class="wysiwyg-underline">Example:</span>

```sql
SELECT flag_data FROM flag WHERE flag_code = 'staging'; <code class="language-bash">Response < 2.2 version</code>
```

```bash
+-------------------------------------------------+
```

```bash
| flag_data                                       |
```

```bash
+-------------------------------------------------+
```

```bash
| a:1:{s:15:"current_version";s:10:"1490005140";} |
```

```bash
+-------------------------------------------------+
```

```bash
Response from 2.2 version
```

```bash
+-------------------------------------------------+
```

```bash
| flag_data                                       |
```

```bash
+-------------------------------------------------+
```

```bash
| {"current_version":"1490005140"} |
```

```bash
+-------------------------------------------------+
```

```sql
SELECT id FROM staging_update WHERE id < 1490005140 <code class="language-sql">ORDER BY id DESC LIMIT 1, 1</code>;
```

```bash
Response:
```

```bash
1490005138
```

```sql
UPDATE flag SET flag_data=REPLACE(flag_data, '1490005140', '1490005138') WHERE flag_code='staging';
```

## Attached Files
