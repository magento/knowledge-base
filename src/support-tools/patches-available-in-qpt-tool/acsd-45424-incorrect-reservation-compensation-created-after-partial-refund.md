---
title: "ACSD-45424: Incorrect reservation compensation is created after a partial refund"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT xxx,
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

1. Enable "In-Store Delivery" shipping method.
1. Create 3 inventory sources and make sure the pickup location is Active in each(source1, source2, source3)
1. Create new stock and assign these sources to the new stock
1. This stock should be assigned to the main website
1. Create a simple product - P3 assigning all the sources to it.
1. Add the following quantities for each source of this product and enable backorders for this product. Note: source2 has quantity 10
1. Add this product to cart from the frontend and proceed to shipping form.
1. Select "source1" as the shipping location.
1. Complete the order and executes the following query in the database:
    ```
    SELECT * FROM inventory_reservation WHERE sku = 'P3';
    ```
    You will get the order placed record in the `inventory_reservation` table. Qty is 10, which is correct.
1. Invoice this order from the backend.
1. Create a credit memo for only 1 product. DO NOT select *Return to Stock* checkbox.
1. Executes the same query from Step 9.

<ins>Expected results</ins>:

If we didn't select "Return to Stock" during credit memo creation, "inventory_reservation" table should not have a record corresponding to the credit memo.

<ins>Actual results</ins>:

Even though we didn't select "Return to Stock" during credit memo creation, it adds a record to "inventory_reservation" table with "creditmemo_created" event type. Also, we created the credit memo for only 1 quantity, but the credit memo record added in "inventory_reservation" table has quantity 10.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Additional steps required after the patch installation

(This section is optional; there might be some steps required after applying the patch to fix the issue.) 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
