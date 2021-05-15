---
title: MDVA-32655: "quoteItemCleaner" consumer executes one message per execution
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,MQP patches,Magento Commerce,Magento Commerce Cloud,catalog,catalog_category_product,performance,quoteItemCleaner,slow,support tools
---

The MDVA-32655 Magento patch fixes the incorrect "in progress" message status to the correct "complete" message for consumer `quoteItemCleaner` after deleting several products. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is 32655. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3

 **Compatible with Magento versions:** Magento Commerce and Commerce Cloud 2.3.0-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The `quoteItemCleaner` consumer executes only one message on each execution.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Check the `queue_message_status` database table and make sure all the existing queue messages are in a "Complete" state (status ID 4).
1. Stop auto Magento cron execution.
1. Create two or three simple products.
1. Do a mass delete on those three simple products.
1. In the `queue_message_status` table you see that there are three new records for the `catalog_product_removed_queue` topic with status ID 2 (new record).
1. Run the following command to process these pending `catalog_product_removed_queue` messages:    ```bash    bin/magento queue:consumers:start quoteItemCleaner --single-thread --max-messages=100    ```    

 <span class="wysiwyg-underline">Actual result:</span> 

Only one record out of the three is updated to "Complete *"* status (ID = 4). The status of the other two messages are status ID = 3 (in progress). A backlog is generated with unprocessed queue messages.

 <span class="wysiwyg-underline">Expected result:</span> 

```sql
select * from queue_message_status s join queue q on s.queue_id = q.id where q.name = "catalog_product_removed_queue";
```

All the `catalog_product_removed_queue` message statuses are updated to complete (ID=4). <span class="wysiwyg-underline"></span> 

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.