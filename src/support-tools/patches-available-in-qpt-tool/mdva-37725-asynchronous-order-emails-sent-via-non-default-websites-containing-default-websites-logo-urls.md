---
title: "MDVA-37725: Emails sent via non-default sites contain default site's logo URLs"
labels: QPT patches,Quality Patches Tool,QPT 1.1.4,Magento Commerce 2.4.4,Adobe Commerce 2.4.4,error message,on-premises,cloud infrastructure,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

>![warning]
>
> The MDVA-37725 patch is deprecated.

The MDVA-37725 patch fixes the issue where asynchronous order emails are sent via non-default websites containing logo URLs from the default website. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.4 is installed. The patch ID is MDVA-37725. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.0 – 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Asynchronous order emails are sent via non-default websites containing the default website's logo URLs.

<ins>Prerequisites</ins>:

1. The second website/store/store-view must have been created.
1. **Asynchronous Sending** configuration must be enabled from **Stores** > **Settings** > **Configuration** > **Sales** > **Sales Email** > **General Settings**.
1. **Add Store Code to URLs** configuration is turned on for the ease of accessing the secondary website from **Stores** > **Settings** > **Configuration** > **URL Options**.

<ins>Steps to reproduce</ins>:

1. Place orders from both the first and second stores.
1. Run cron to send the sales emails.
1. Check the email from the second website.

<ins>Expected results</ins>:

The logo URL of the email contains the second website's URL.

<ins>Actual results</ins>:

The logo URL of the email contains the default website's URL.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
