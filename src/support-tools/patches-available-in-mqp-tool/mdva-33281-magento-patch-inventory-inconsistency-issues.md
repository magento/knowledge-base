---
title: "MDVA-33281 Magento patch: inventory inconsistency issues"
labels: 2.3.4,2.3.5-p1,2.3.5-p2,Inventory,MQP 1.0.14,Magento Commerce Cloud,PHP Fatal Error,data discrepancies,duplicate,inventory source,order placement,support tools
---

The MDVA-33281 Magento patch fixes three inventory inconsistency issues. Click on the linked issues under the Issue section to see steps to reproduce these errors. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.14 is installed.

## Affected products and versions

 **The patch is created for Magento version:** 

Magento Commerce Cloud 2.3.5-p1.

 **Compatible with Magento versions:** 

Magento Commerce Cloud 2.3.4-2.3.5-p2 **.** 

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

The patch fixes inventory inconsistency issues such as:

* [PHP Fatal error](https://support.magento.com/hc/en-us/articles/360055276532#php_fatal_error) when running `bin/magento inventory:reservation:list-inconsistencies` in the CLI because of the wrong SKU parameter type.
* [Duplicate data](https://support.magento.com/hc/en-us/articles/360055276532#duplicates) in inconsistencies list.
* [New reservation will be created before order placed (previous realization based on reservation after order placed).](https://support.magento.com/hc/en-us/articles/360055276532#orders) In case of errors within order placement, additional reservation will be added to compensate.

>![info]
>
>There is also a patch MDVA-30112 that solves the issue where there is an unexpectedly large number of [reservation inconsistencies](https://devdocs.magento.com/guides/v2.4/inventory/inventory-cli-reference.html#what-causes-reservation-inconsistencies) in the `inventory_reservation` table. For the solution, refer to [MDVA-30112 Magento patch: large number reservation inconsistencies](https://support.magento.com/hc/en-us/articles/360051515272) .

 <span class="wysiwyg-underline">Steps to reproduce</span> 

PHP Fatal error when running `bin/magento inventory:reservation:list-inconsistencies` .

To get a list of reservation inconsistencies log in to the production server and run the following command in the CLI (-r - raw output):

<pre>bin/magento inventory:reservation:list-inconsistencies -r</pre>

 <span class="wysiwyg-underline">Expected Results</span> 

The list of reservation inconsistencies is created. These would be returned in the following format

```plaintext
<ORDER_INCREMENT_ID>:<SKU>:<QUANTITY>:<STOCK-ID>
```

. <span class="wysiwyg-underline">Actual Results</span> PHP Fatal error is outputted.

Duplicate data in the `inventory_reservation table` .

To troubleshoot reservation inconsistencies, run the following command:

<pre>SELECT *, COUNT(*)
FROM inventory_reservation
GROUP BY metadata, sku, quantity
HAVING COUNT(*) > 1</pre>

 <span class="wysiwyg-underline">Expected Results</span> No duplicates. <span class="wysiwyg-underline">Actual Results</span> There are duplicates.

New reservation created before order placed:

1. The merchant imports their database.
1. They run `bin/magento setup:upgrade` in the terminal.
1. They list inconsistencies by running `bin/magento inventory:reservation:list-inconsistencies        -i -r` in the terminal.

 <span class="wysiwyg-underline">Expected Results</span> No loop and much quicker results. <span class="wysiwyg-underline">Actual Results</span> The same results are displayed in an infinite loop or the command fails with `memory_limit` , depending on system settings.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.