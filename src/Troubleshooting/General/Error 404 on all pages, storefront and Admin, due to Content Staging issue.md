## Issue

Accessing any storefront page or Magento Admin results in the 404 error (the "Whoops, our bad..." page).

![404 Error Page](https://support.magento.com/hc/article_attachments/360000378093/404_error_page_whoops_our_bad.png)

The issue may occur after operations with scheduled updates for store content assets using [Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html). For example, you may have deleted a Product with a scheduled update, or removed the end date for the scheduled update.

A store content asset includes:

*   Product
*   Category
*   Catalog Price Rule
*   Cart Price Rule
*   CMS Page
*   CMS Block
*   Widget

Some scenarios are discussed in the _Possible Trigger_ section below.

## Cause

The `` flag `` table in the database (DB) contains invalid links to the `` staging_update `` table.

See an example below:

<pre><code class="language-sql">- select * from staging_update;
Empty set (0.00 sec)
 
- select * from flag;
+---------+---------------------+-------+-------------------------------------------------+---------------------+
| flag_id | flag_code           | state | flag_data                                       | last_update         |
+---------+---------------------+-------+-------------------------------------------------+---------------------+
|       1 | staging             |     0 | a:1:{s:15:"current_version";s:10:"1490005140";} | 2017-03-20 15:49:07 |
+---------+---------------------+-------+-------------------------------------------------+---------------------+
</code></pre>

where:

*   `` flag_code `` points to the `` staging_update `` table
*   `` flag_data `` points to a record with a scheduled update that is no longer available in the `` staging_update `` table

### Possible trigger: operations involving Content Staging

The problem is related to [Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html) (updates for store content assets scheduled using the [Magento\_Staging module](http://devdocs.magento.com/guides/v2.2/mrg/ee/Staging.html)). Below are two particular scenarios; please note there might be more situations that trigger the issue.

__Scenario 1:__ Deleting a store content asset which:

*   has an update scheduled with Content Staging
*   the update has an end date (meaning the expiry date after which the updated asset reverts to its previous version)
*   the end date of the update is in the past

At the same time, the issue might not occur if a deleted asset has no end date for the scheduled update.

__Scenario 2:__ Removing the end date/time of a scheduled update.

## Solution: patch for 2.1.x

[Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting a patch with reference number MDVA-3687.&nbsp;In the ticket, specify your Magento version and as many details about the issue as you find reasonably possible. This helps the Magento Support team to select the optimal patch.

Please note the patch is for __Magento Commerce 2.1.x only__ and cannot be applied for Magento 2.2.x. For Magento Commerce 2.2.x, apply the workaround mentioned below.

## Possible workaround

__Fix the rows with invalid links to the `` staging_update `` table__.

1.   Make sure you have the invalid links to the `` staging_update `` table in the `` flag `` table. These links are the rows with `` flag_code=staging ``.
2.   For the rows with invalid links in the `` flag `` table, set the `` flag_data `` values to NULL.

You may execute this SQL command:

<pre><code class="language-sql">UPDATE flag SET flag_data=NULL WHERE flag_code='staging';</code></pre>

## Follow-up

After fixing the problematic entries in the \`flag\` table, follow these steps:

1.   Clean cache.
2.   Make sure the cron jobs are correctly configured and may be executed successfully.

The problem should be solved straight after fixing the invalid link. If the problem persists after applying the workaround, address the Magento Support again for further instructions — or [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) if you haven't done so already.

After fixing the problematic entries in the \`flag\` table, follow these steps:

1.   Clean cache.
2.   Make sure the cron jobs are correctly configured and may be executed successfully.