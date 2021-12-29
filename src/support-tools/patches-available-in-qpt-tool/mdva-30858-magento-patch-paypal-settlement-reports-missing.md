---
title: "MDVA-30858: PayPal Settlement reports missing"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.13,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PayPal,PayPal Settlement Reports,reports,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30858 patch fixes missing PayPal Settlement Reports when having multiple PayPal accounts. The reports should be available under Admin sidebar > **Reports** > Sales > **PayPal Settlement**. Instead, the message: *We couldn't find any records.* displays. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.13 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.4

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Fixes the issue where no records were found in **Reports** > Sales > **PayPal Settlement** when having multiple PayPal accounts.

<ins>Steps to reproduce</ins>:

1. Configure PayPal Settlement Reports.
1. Go to Admin, to **Reports** > Sales > **PayPal Settlement**.
1. For the most recent updates, click **Fetch Updates** in the upper-right corner.

<ins>Expected results</ins>:

Reports should appear.

<ins>Actual results</ins>:

Nothing appears in the grid though reports are available.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
