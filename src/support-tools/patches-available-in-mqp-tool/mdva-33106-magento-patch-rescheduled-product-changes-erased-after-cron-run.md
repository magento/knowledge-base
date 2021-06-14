---
title: "MDVA-33106 Magento patch: rescheduled product changes erased after cron run"
labels: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,MQP 1.0.13,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools"
---

The MDVA-33106 Magento patch fixes the issue where the rescheduled product changes are erased after the cron

```bash
bin/magento cron:run
```

command is executed. This patch is available when the<a>Magento Quality Patch (MQP) tool</a>1.0.13 is installed. Please note that the issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.3.0-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. In Magento Admin, go to **Catalog** > **Products** and click edit. Notice the **Price** value, for example *9.99* .
1. Click **Schedule New Update** and fill in details:
1. Update name is not important.
1. Set a date in the future, +1 year for start date and end date.
1. Set Price to *1.99.* 

1. Save changes.
1. Go to the Content staging dashboard and select grid view to see if scheduled match above.
1. Select edit action next to the scheduled update. Data should still match above.
1. Change the scheduled date to something closer. Instead of +1 year from now change it to + 1 week or + 1 month.
1. Save changes and check if the dates are updated on staging dashboard.
1. Wait for a cron job to run.
1. Click edit again in the scheduled change and check the price.

 <span class="wysiwyg-underline">Expected result:</span> 

Price is 1.99.

 <span class="wysiwyg-underline">Actual result:</span> 

Price is 9.99.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.