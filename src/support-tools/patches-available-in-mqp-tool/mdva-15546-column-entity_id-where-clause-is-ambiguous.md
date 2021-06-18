---
title: "MDVA-15546: Column 'entity_id' where clause is ambiguous"
labels: 2.2.5,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,Amazon,MQP 1.0.20,MQP patches,Magento Commerce,Magento Commerce Cloud,SQL,cron,error,extension,logs,sql,support tools
---

The MDVA-15546 Magento patch solves performance issues that may be related to some Amazon extensions. This issue in indicated by the following error in exception logs: *where*   *Column 'entity\_id' in where clause is ambiguous, query was: SELECT \`main\_table\`.\*, \`extension\_attribute\_amazon\_order\_reference\_id* \`. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-15546.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.2.5

 **Compatible with Magento versions:** Magento Commerce Cloud 2.3.0 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Performance issues that may be related to some Amazon extensions. <span class="wysiwyg-underline">Prerequisites:</span> Clean Magento with B2B and Amazon\_Payment.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Go to the store front page.
1. Add product to the cart.
1. Wait or trigger the cron job `flush_preview_quotas` .

 <span class="wysiwyg-underline">Actual result:</span> 

When you check `var/log/exception/log` you see following error:

 `report.ERROR: Cron Jobflush_preview_quotashas an error: SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'entity_id' in where clause is ambiguous, query was: SELECT `main_table`.*, `extension_attribute_amazon_order_reference_id`.`amazon_order_reference_id` AS `extension_attribute_amazon_order_reference_id_amazon_order_reference_id`, `extension_attribute_amazon_order_reference_id`.`quote_id` AS `extension_attribute_amazon_order_reference_id_quote_id`, `extension_attribute_amazon_order_reference_id`.` sandbox_simulation_reference` AS `extension_attribute_amazon_order_reference_id_sandbox_simulation_reference`, `extension_attribute_amazon_order_reference_id`.`confirmed` AS `extension_attribute_amazon_order_reference_id_confirmed` FROM `quote` AS `main_table` LEFT JOIN `amazon_quote` AS `extension_attribute_amazon_order_reference_id` ON main_table.entity_id = extension_attribute_amazon_order_reference_id.quote_id WHERE ...` 

 <span class="wysiwyg-underline">Expected result:</span> 

Cron Job completes without errors.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
