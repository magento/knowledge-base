---
title: 'MDVA-32655: "quoteItemCleaner" consumer executes one message per execution'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT patches,Magento Commerce,Magento Commerce Cloud,catalog,catalog_category_product,performance,quoteItemCleaner,slow,support tools,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

The MDVA-32655 patch fixes the incorrect "in progress" message status to the correct "complete" message for consumer `quoteItemCleaner` after deleting several products. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is 32655. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.3

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The `quoteItemCleaner` consumer executes only one message on each execution.

<ins>Steps to reproduce</ins>:

1. Check the `queue_message_status` database table and make sure all the existing queue messages are in a "Complete" state (status ID 4).
1. Stop auto Adobe Commerce cron execution.
1. Create two or three simple products.
1. Do a mass delete on those three simple products.
1. In the `queue_message_status` table you see that there are three new records for the `catalog_product_removed_queue` topic with status ID 2 (new record).
1. Run the following command to process these pending `catalog_product_removed_queue` messages:    
    ```bash
    bin/magento queue:consumers:start quoteItemCleaner --single-thread --max-messages=100    
    ```    

<ins>Expected results</ins>:

```sql
select * from queue_message_status s join queue q on s.queue_id = q.id where q.name = "catalog_product_removed_queue";
```

All the `catalog_product_removed_queue` message statuses are updated to complete (ID=4).

<ins>Actual results</ins>:

Only one record out of the three is updated to "Complete" status (ID = 4). The status of the other two messages are status ID = 3 (in progress). A backlog is generated with unprocessed queue messages.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
