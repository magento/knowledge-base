---
title: "MDVA-39229: Error after updating Catalog rule Staging update start time"
labels: Support Tools,QPT patches,Quality Patches Tool,Magneto Commerce Cloud,QPT 1.1.5,Adobe Commerce,cloud infrastructure,on-premises,update,Catalog Rules,Staging,2.4.4,2.3.4-p2,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-39229 patch fixes the issue where users get an error after updating the start time of the Catalog rule Staging update. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.5 is installed. The patch ID is MDVA-39229. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.3.4-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.2 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users get an error after updating the start time of the Catalog rule Staging update.

<ins>Steps to reproduce</ins>:

1. Create a Catalog Price rule.
1. Create and execute any Staging update.
1. Run the query and verify that the Staging flag was created.

    
    `select * from flag;`
  

1. Create a new Staging update to start after five minutes.
1. Open **Content** > **Staging** > **Dashboard** > **New Update** and delay the start time by one minute.
1. Wait for six minutes.
1. Run cron.

<ins>Expected results</ins>:

The update start time is changed, and the update is applied. The old update is deleted from the `staging_update` table.

<ins>Actual results</ins>:

Users get the following error:

*report.ERROR: Cron Job staging_synchronize_entities_period has an error: The active update can't be deleted.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
