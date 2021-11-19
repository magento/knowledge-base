---
title: "MDVA-30112 Magento patch: large number reservation inconsistencies"
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,2.4.1,Inventory,QPT 1.0.8,Magento Commerce Cloud,Quality Patches Tool,data discrepancies,orders,support tools
---

The MDVA-30112 Magento patch solves the issue where you have an unexpectedly large number of [reservation inconsistencies](https://devdocs.magento.com/guides/v2.4/inventory/inventory-cli-reference.html#what-causes-reservation-inconsistencies) in the `inventory_reservation` table. Reservation inconsistencies include unregistered open orders and complete orders that are not registered. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.8 is installed. Please note that the issue will be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.5.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.4 - 2.3.5-p2, 2.4.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The [bunch-size](https://devdocs.magento.com/guides/v2.4/inventory/inventory-cli-reference.html#list-inconsistencies-command) value is the value for how many orders to load at once. When there are more orders than this value, Magento considers the orders with pending status to be inconsistencies.

>![info]
>
>There is a patch MDVA-33281 that fixes three other inventory inconsistency issues. This includes a PHP Fatal error when running `bin/magento inventory:reservation:list-inconsistencies` in the CLI. Another issue that is fixed is duplicate data in the inconsistencies list. Also, the issue where a reservation is created before order placed (previous realization based on reservation after order placed). For the solution, refer to [MDVA-33281 Magento patch: inventory inconsistency issues](https://support.magento.com/hc/en-us/articles/360055276532/) .

 <span class="wysiwyg-underline">Prerequisites:</span> You run the following command in the CLI to list reservation inconsistencies in the `inventory_reservation` table:

```clike
magento inventory:reservation:list-inconsistencies
```

You see an unexpectedly large number of reservation inconsistencies and/or the command never completes.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Run the following command in the CLI to resolve the inconsistencies:    ```clike    bin/magento inventory:reservation:list-inconsistencies -r | bin/magento inventory:reservation:create-compensations    ```    
1. Place three orders:
    * Assign each a single product.
    * Use the Check/Money Order payment method, so the order status will be "pending".
1. You can see three records with -1 quantity in the `inventory_reservation` table. Run the following command in the CLI to see any inconsistencies:    ```clike    bin/magento inventory:reservation:list-inconsistencies    ```    

This returns no results, which is correct.

1. Run the following command in the CLI:    ```clike    Execute bin/magento inventory:reservation:list-inconsistencies      --bunch-size 1    ```    

You see the "pending" status orders are shown as inconsistencies.

1. Run the following command in the CLI:    ```clike    bin/magento inventory:reservation:list-inconsistencies      -r --bunch-size 1 | bin/magento inventory:reservation:create-compensations    ```    

 <span class="wysiwyg-underline">Expected results:</span>

Magento should not resolve inconsistencies of "pending" status orders. The stocks inconsistencies should be resolved for orders with 'complete', 'closed', and 'canceled' statuses.

 <span class="wysiwyg-underline">Actual results:</span>

When there are orders more than the specified bunch-size value, Magento considers orders with "pending" status as inconsistencies and Magento adds multiple inconsistency resolving records for same order.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
