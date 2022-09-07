---
title: Error 404 on all pages due to Content Staging issue
labels: 404,Magento Commerce,Magento Commerce Cloud,content,log,staging,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,2.2,2.3
---

This article provides a fix for the Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure issue where you get a 404 error when accessing any storefront page or the Commerce Admin.

## Affected products and versions

* Adobe Commerce on-premises 2.2.x, 2.3.x
* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x

## Issue

>![info]
>
>This article doesn't apply to the situation in which you get a 404 error when trying to [preview the staging update](https://docs.magento.com/user-guide/cms/content-staging-scheduled-update.html#preview-the-scheduled-change). If you run into that issue, please open a [support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

Accessing any storefront page or the Admin results in the 404 error (the "Whoops, our bad..." page) after performing operations with scheduled updates for store content assets using [Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html) (updates for store content assets scheduled using the [Magento\_Staging module](http://devdocs.magento.com/guides/v2.2/mrg/ee/Staging.html)). For example, you may have deleted a Product with a scheduled update or removed the end date for the scheduled update.

A store content asset includes:

* Product
* Category
* Catalog Price Rule
* Cart Price Rule
* CMS Page
* CMS Block
* Widget

Some scenarios are discussed in the Cause section below.

## Cause

The `flag` table in the database (DB) contains invalid links to the `staging_update` table.

The problem is related to Content Staging. Below are two particular scenarios; please note there might be more situations that trigger the issue.

 **Scenario 1:** Deleting a store content asset which:

* has an update scheduled with Content Staging
* the update has an end date (meaning the expiry date after which the updated asset reverts to its previous version)
* the end date of the update is in the past

At the same time, the issue might not occur if a deleted asset has no end date for the scheduled update.

 **Scenario 2:** Removing the end date/time of a scheduled update.

### Identify if your issue is related

To identify if the issue you are experiencing is the one described in this article, run the following DB query:

```sql
   SELECT f.flag_data >'$.current_version' as flag_version, (su.id IS NOT NULL) as update_exists
   -> FROM flag f
   -> LEFT JOIN staging_update su
   -> ON su.id = f.flag_data >'$.current_version'
   -> WHERE flag_code = 'staging';
```

If the query returns a table where `update_exists` value is "0", then an invalid link to the `staging_update` table exists in your database, and the steps described in the [Solution section](#solution) will help to solve the issue. The following is an example of the query result with `update_exists` value equal to "0":

![update_exists_0.png](assets/update_exists_0.png)

If the query returns a table where `update_exists` value is "1" or an empty result, it means your issue is not related to staging updates. The following is an example of the query result with `update_exists` value equal to "1":

![updates_exist_1.png](assets/updates_exist_1.png)

In this case, you might refer to the [Site Down Troubleshooter](https://support.magento.com/hc/en-us/articles/360029351531) for troubleshooting ideas.

## Solution

1. Run the following query to delete the invalid link to the `staging_update` table:
   ```sql
   DELETE FROM flag WHERE flag_code = 'staging';
   ```   
1. Wait for the cron job to run (runs in up to five minutes if set up properly) or run it manually if you do not have cron set up.

The problem should be solved straight after fixing the invalid link. If the problem persists, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).
