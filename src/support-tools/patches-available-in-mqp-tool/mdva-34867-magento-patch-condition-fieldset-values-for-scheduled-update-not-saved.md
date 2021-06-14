---
title: "MDVA-34867 Magento patch: Condition fieldset values for Scheduled Update not saved"
labels: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,MQP 1.0.17,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,catalog price rule,condition fieldset values,not saved,scheduled update"
---

The MDVA-34867 Magento patch solves the issue where the value for the condition in new schedule update is not getting saved when editing a catalog price rule.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.17 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0-p1

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Login to Admin.
1. Create a **Catalog Rule** with **Condition** = " *Category is 1* ".
1. Schedule an update with start date in future (Example: tomorrow) and set **Condition** =  " *Category is 2, 3* ", and save the update.
1. Click on **View/Edit** for the the update created above, and check the condition fields.

 <span class="wysiwyg-underline">Expected results</span> :

The **Catalog Rule's**  **Condition** = " *Category is 2, 3* ", as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The **Catalog Rule's**  **Condition** = " *Category is 1* ", meaning that the update was not saved.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.