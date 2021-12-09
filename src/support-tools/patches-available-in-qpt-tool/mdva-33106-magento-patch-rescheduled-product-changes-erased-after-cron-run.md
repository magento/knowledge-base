---
title: "MDVA-33106 patch: rescheduled product changes erased after cron run"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.13,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33106 patch fixes the issue where the rescheduled product changes are erased after the cron

```bash
bin/magento cron:run
```

command is executed. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.13 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. In Commerce Admin, go to **Catalog** > **Products** and click edit. Notice the **Price** value, for example *9.99*.
1. Click **Schedule New Update** and fill in details:
   * Update name is not important.
   * Set a date in the future, +1 year for start date and end date.
   * Set Price to *1.99*.
   * Save changes.
1. Go to the Content staging dashboard and select grid view to see if scheduled match above.
1. Select edit action next to the scheduled update. Data should still match above.
1. Change the scheduled date to something closer. Instead of +1 year from now, change it to + 1 week or + 1 month.
1. Save changes and check if the dates are updated on staging dashboard.
1. Wait for a cron job to run.
1. Click edit again in the scheduled change and check the price.

<ins>Expected results</ins>:

Price is 1.99.

<ins>Actual results</ins>:

Price is 9.99.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
