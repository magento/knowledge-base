---
title: "ACSD-45424: Incorrect reservation compensation created after partial refund"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.17,incorrect reservation,compensation,partial refund,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.3.7-p4,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3,2.4.4
---

The ACSD-45424 patch fixes the issue where an incorrect reservation compensation is created after a partial refund. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.17 is installed. The patch ID is ACSD-45424. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.4 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Incorrect reservation compensation is created after a partial refund.

<ins>Steps to reproduce</ins>:

1. Enable in-store delivery shipping method.
1. Create three inventory sources and make sure the pickup location is active in each (source1, source2, source3).
1. Create a new stock and assign the three sources to the new stock.
    * This stock should be assigned to the main website.
1. Create a simple product, P3, and assign all the sources to it.
1. Add the following quantities for the sources of the simple product and enable backorders:
    * Default source - 100
    * source1 - 0
    * source2 - 10
    * source3 - 0
1. Add the simple product to the cart from the frontend and proceed to shipping form.
1. Select "source1" as the shipping location.
1. Complete the order and execute the following query in the database:  
    ```sql
    SELECT * FROM inventory_reservation WHERE sku = 'P3';
    ```  
    You will get the order placed record in the `inventory_reservation` table. The quantity is 10, which is correct.
1. Invoice this order from the backend.
1. Now create a credit memo for only one product. DO NOT select the *Return to Stock* checkbox.
1. Execute the same query from Step 8.

<ins>Expected results</ins>:

If you did not select the *Return to Stock* during the credit memo creation, the `inventory_reservation` table will not have a record corresponding to the credit memo.

<ins>Actual results</ins>:

Even though you didn't select the *Return to Stock* during the credit memo creation, it adds a record to `inventory_reservation` table with `creditmemo_created` event type. Also, the credit memo record added in the `inventory_reservation` table has a quantity of 10 even though you created the credit memo for only one quantity.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
