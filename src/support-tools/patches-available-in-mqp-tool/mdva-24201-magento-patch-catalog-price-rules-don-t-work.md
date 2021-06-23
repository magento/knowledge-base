---
title: "MDVA-24201 Magento patch: catalog price rules don't work"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,MQP 1.0.14,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,catalog price rules,database,update
---

The MDVA-24201 Magento patch solves the issue where active catalog price rules in the database do not apply on the frontend.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue was fixed in Magento version 2.3.5.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.3

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.3.4-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisite</span> :

Install a fresh Magento instance with sample data.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Log in to **Admin panel > Marketing > Catalog Price Rule > Add New Rule** , make the following settings:
   1. Set the **Rule Name** .
   1. Set **Active** = *No.*
   1. Set Conditions: **Category** = *4* . (Example: Bags)
   1. Set Actions:
      1. Set **Apply as**   **percentage of original** .
      1. Set **Discount Amount** = *10* .
      1. Save, and then Continue Edit.
   1. Click on **Schedule New Update** :
    * Set the **Rule Name** .
    * Set **Active** = *Yes* .
    * Save.
1. Go to the backend, and run:    ```php    bin/magento cron:run    ```    

 <span class="wysiwyg-underline">Expected results</span> :

The prices of the products in category 4 "Bags" should be reduced by 10% of original price, as it was set by the catalog price rule, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

No price changes occur even though the catalog price rule is active.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
