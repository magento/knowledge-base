---
title: "MDVA-37364: Custom customer attribute of date type breaks Grid UI"
labels: QPT patches,Quality Patches Tool,QPT,MQP,Support Tools,QPT 1.1.2,Magento,Adobe Commerce,on-premise,cloud infrastructure,customer attribute,custom,grid UI,broken,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-37364 patch solves the issue where the custom customer attribute of date type breaks the Customer Grid UI. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-37364.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment types) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment types) 2.4.0-2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, run `./vendor/bin/magento-patches status`.

## Issue

Custom customer attribute of date type breaks the Customer Grid UI.

<ins>Steps to reproduce</ins>:

1. Create a custom attribute with date type:
    * Go to **Stores** > **Attributes** > **Add Attribute**.
    * Set Input Type as Date.
    * Set Add to Column Options as Yes.
    * Set attached customer_attribute.png.
    * Save the attribute.
1. Go to **Admin** > **Customers** > **All Customers**.
    * Add the newly added custom attribute to the grid from the columns option.
1. Create/Edit a customer and set the value of the created custom date attribute field.
1. Save, reindex and clear cache.
1. Go to **Customers** > **All Customers**.
    * Check the Customer Grid.

<ins>Expected results</ins>:

The Admin Customer Grid shows all data including the new date custom attribute without breaking the grid UI.

<ins>Actual results</ins>:

The Admin Customer Grid UI is broken.

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:	 

* Adobe Commerce or Magento Open Source on-premise: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
