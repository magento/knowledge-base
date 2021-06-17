---
title: "MDVA-32634 Magento patch: move category in hierarchy url_path wrong"
labels: MQP 1.0.16,MQP patches,Magento Commerce,Magento Commerce Cloud,URL,catalog,category,data discrepancies,support tools
---

The MDVA-32634 Magento patch solves the issue where the url\_path of the catalog category does not change after moving the category in the hierarchy. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce and Commerce Cloud 2.3.1-2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Moving a catalog category in the hierarchy results in an incorrect url\_path. The url\_path of the category assigned to the default store scope \[ **id:0** \] remains unchanged after moving the category in the hierarchy. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Log in to the Magento admin. Create the following category structure under the root category:move-cat                sub-move-cat                sub-move-cat2new-cat-move
1. Verify category \[ url\_path \] attribute \[ id: 120 \] for value assignment in \[ catalog\_category\_entity\_varchar \] table using the following query:    ```sql    SELECT * FROM catalog_category_entity_varchar WHERE attribute_id = 120 ORDER         BY value_id DESC LIMIT 4;    ```    It should give you the following result:    ```sql    MariaDB [m24dev]> SELECT * FROM catalog_category_entity_varchar          WHERE attribute_id = 120 ORDER BY value_id DESC LIMIT 4;    ```    \[ url\_path \] values were generated and assigned to All Store scope \[ 0 \]. This is correct comparing to an instance without b2b.
1. Go to backend category list, drag \[ move-cat \], and drop it in to \[ new-cat-move \]. Now the category should look like:new-cat-move         move-cat                sub-move-cat                sub-move-cat2
1. Check the \[ catalog\_category\_entity\_varchar \] table using the following query:    ```sql    SELECT * FROM catalog_category_entity_varchar WHERE attribute_id = 120 ORDER BY value_id DESC LIMIT 16;    ```    

 <span class="wysiwyg-underline">Actual result:</span> The url\_path assigned to all store scope \[ 0 \] remains unchanged even though there is no such path available after the move. Also, it has new url\_path values created for each store.

 <span class="wysiwyg-underline">Expected result:</span> The url\_path assigned to all store scope \[ 0 \] should also update with the new path.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.