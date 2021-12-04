---
title: "MDVA-33281 patch: inventory inconsistency issues"
labels: 2.3.4,2.3.5-p1,2.3.5-p2,Inventory,QPT 1.0.14,Magento Commerce Cloud,PHP Fatal Error,data discrepancies,duplicate,inventory source,order placement,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33281 patch fixes three inventory inconsistency issues. Click on the linked issues under the Issue section to see steps to reproduce these errors. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.14 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure 2.3.4 - 2.3.5-p2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The patch fixes inventory inconsistency issues such as:

* **PHP Fatal error** when running `bin/magento inventory:reservation:list-inconsistencies` in the CLI because of the wrong SKU parameter type.
* **Duplicate data** in inconsistencies list.
* **New reservation** will be created before order placed (previous realization based on reservation after order placed). In case of errors within order placement, additional reservation will be added to compensate.

>![info]
>
>There is also a patch MDVA-30112 that solves the issue where there is an unexpectedly large number of [reservation inconsistencies](https://devdocs.magento.com/guides/v2.4/inventory/inventory-cli-reference.html#what-causes-reservation-inconsistencies) in our developer documentation, in the `inventory_reservation` table. For the solution, refer to [MDVA-30112 Magento patch: large number reservation inconsistencies](https://support.magento.com/hc/en-us/articles/360051515272) in our support knowledge base.

## PHP Fatal Error

<ins>Steps to reproduce</ins>:

PHP Fatal error when running `bin/magento inventory:reservation:list-inconsistencies`.

To get a list of reservation inconsistencies, log in to the production server and run the following command in the CLI (-r switch - raw output):

<pre>bin/magento inventory:reservation:list-inconsistencies -r</pre>

<ins>Expected results</ins>:

The list of reservation inconsistencies is created. These would be returned in the following format

```plaintext
<ORDER_INCREMENT_ID>:<SKU>:<QUANTITY>:<STOCK-ID>
```

<ins>Actual results</ins>:

PHP Fatal Error is outputted.

## Duplicate data

Duplicate data is in the `inventory_reservation table`.

<ins>Steps to reproduce</ins>:

To troubleshoot reservation inconsistencies, run the following command:

<pre>SELECT *, COUNT(*)
FROM inventory_reservation
GROUP BY metadata, sku, quantity
HAVING COUNT(*) > 1</pre>

<ins>Expected results</ins>:

No duplicates.

<ins>Actual results</ins>:

There are duplicates.

## New reservation

<ins>Steps to reproduce</ins>:

New reservation created before order placed:

1. Import the database.
1. Run `bin/magento setup:upgrade` in the terminal.
1. List inconsistencies by running `bin/magento inventory:reservation:list-inconsistencies        -i -r` in the terminal.

<ins>Expected results</ins>:

No loop and much quicker results.

<ins>Actual results</ins>:

The same results are displayed in an infinite loop, or the command fails with `memory_limit`, depending on system settings.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
