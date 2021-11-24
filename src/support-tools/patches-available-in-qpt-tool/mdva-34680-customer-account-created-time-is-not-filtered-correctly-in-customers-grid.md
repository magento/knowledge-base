---
title: "MDVA-34680: Customer Account not filtered correctly in customers' grid"
labels: QPT patches,Quality Patches Tool,QPT,Support Tools,QPT 1.0.26,Magento Commerce Cloud,Magento Commerce,account filter,Customer Account,customers grid,2.3.6,2.3.6-p1,2.3.7,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-34680 patch fixes the issue when the Customer Account created after 00:00 UTC is not filtered correctly in the customers' grid. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.26 is installed. The patch ID is MDVA-34680. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.1 and 2.4.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.6-2.3.7 and 2.4.1-2.4.2-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a customer account is created after 00:00 UTC, and you try to filter accounts by that date, it will not return this customer.

<ins>Steps to reproduce</ins>:

1. Go to **Stores** > **Configuration** > **General** and set the Timezone to Eastern Standard [United States/New York].
1. Create a new customer account after 00:00 UTC.
1. Go to **Customers** > **All Customers** and filter accounts by today's date.

<ins>Expected results</ins>:

The customer account filters show the new account created today after 00:00 UTC.

<ins>Actual results</ins>:

The customer account filters do not show the new account created today.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
