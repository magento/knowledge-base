---
title: "MDVA-41236: Unable to create new or edit existing scheduled updates for product"
labels: Support Tools,QPT patches,Quality Patches Tool,Magneto Commerce Cloud,QPT 1.1.5,Adobe Commerce,cloud infrastructure,on-premises,edit,create schedule,scheduled updates,peoduct,End Date,Start Date,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-41236 patch fixes the issue where users are unable to create new or edit existing scheduled updates for the product if the "End Date" has been previously removed. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.5 is installed. The patch ID is MDVA-41236. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.0 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users are unable to create new schedules or edit existing ones for products if the "End Date" has been previously removed.

<ins>Steps to reproduce</ins>:

1. Create a product with the Status set to *disable*.
1. Add a scheduled update to enable this product. 
    * Add future start and end dates.
1. Edit the scheduled update by removing the **End Date**.
1. Edit the schedule again and try to add an **End Date**. An error will occur.
1. Refresh the page and again go to **Edit Scheduled Update**.
1. Click **Remove from update** > **Delete the update**.
1. Now you should not see the scheduled update on top of the product edit page.
1. Try to create a new scheduled update overlapping the previous duration.

<ins>Expected results</ins>:

* There is no error in step 4. The admin is able to update the scheduled update without any error as the schedule is not yet active.
* The admin user is able to delete the previous update and create a new one.

<ins>Actual results</ins>:

Users get the following error message:

*error: Future Update already exists in this time range. Set a different range and try again.*


## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
