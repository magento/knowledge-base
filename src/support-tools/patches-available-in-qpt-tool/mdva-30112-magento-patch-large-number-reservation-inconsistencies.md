---
title: "MDVA-30112: large number reservation inconsistencies"
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,2.4.1,Inventory,QPT 1.0.8,Magento Commerce Cloud,Quality Patches Tool,data discrepancies,orders,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30112 patch solves the issue where you have an unexpectedly large number of [reservation inconsistencies](https://devdocs.magento.com/guides/v2.4/inventory/inventory-cli-reference.html#what-causes-reservation-inconsistencies) in the `inventory_reservation` table. Reservation inconsistencies include unregistered open orders and complete orders that are not registered. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.8 is installed. Please note that the issue was fixed in Adobe Commerce version 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.5

**Compatible with Adobe Commerce versions:**

* Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4 - 2.3.5-p2, 2.4.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The [bunch-size](https://devdocs.magento.com/guides/v2.4/inventory/inventory-cli-reference.html#list-inconsistencies-command) value is the value for how many orders to load at once. When there are more orders than this value, Adobe Commerce considers the orders with pending status to be inconsistencies.

>![info]
>
>There is a patch MDVA-33281 that fixes three other inventory inconsistency issues. This includes a PHP Fatal error when running `bin/magento inventory:reservation:list-inconsistencies` in the CLI. Another issue that is fixed is duplicate data in the inconsistencies list. Also, the issue where a reservation is created before order placed (previous realization based on reservation after order placed). For the solution, refer to [MDVA-33281: inventory inconsistency issues](https://support.magento.com/hc/en-us/articles/360055276532/) in our support knowledge base.

<ins>Prerequisites</ins>:

You run the following command in the CLI to list reservation inconsistencies in the `inventory_reservation` table:

```clike
magento inventory:reservation:list-inconsistencies
```

You see an unexpectedly large number of reservation inconsistencies and/or the command never completes.

<ins>Steps to reproduce</ins>:

1. Run the following command in the CLI to resolve the inconsistencies:    

    ```clike    
    bin/magento inventory:reservation:list-inconsistencies -r | bin/magento inventory:reservation:create-compensations
    ```   

1. Place three orders:
    * Assign each a single product.
    * Use the Check/Money Order payment method, so the order status will be "pending".
1. You can see three records with -1 quantity in the `inventory_reservation` table. Run the following command in the CLI to see any inconsistencies:    

    ```clike    
    bin/magento inventory:reservation:list-inconsistencies    
    ```    

    This returns no results, which is correct.

1. Run the following command in the CLI:    

    ```clike    
    Execute bin/magento inventory:reservation:list-inconsistencies      --bunch-size 1    
    ```    

    You see the "pending" status orders are shown as inconsistencies.

1. Run the following command in the CLI:    

    ```clike    
    bin/magento inventory:reservation:list-inconsistencies      -r --bunch-size 1 | bin/magento inventory:reservation:create-compensations    
    ```    

<ins>Expected results</ins>:

Adobe Commerce should not resolve inconsistencies of "pending" status orders. The stocks inconsistencies should be resolved for orders with 'complete', 'closed', and 'canceled' statuses.

<ins>Actual results</ins>:

When there are orders more than the specified bunch-size value, Adobe Commerce considers orders with "pending" status as inconsistencies and adds multiple inconsistency resolving records for the same order.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
