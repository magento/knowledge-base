---
title: "MDVA-34867: Condition fieldset values for Scheduled Update not saved"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.17,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,catalog price rule,condition fieldset values,not saved,scheduled update,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-34867 patch solves the issue where the value for the condition in the new schedule update is not getting saved when editing a catalog price rule. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.17 is installed. Please note that the issue was fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.0-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The value for the condition in new schedule update is not getting saved when editing a catalog price rule.

<ins>Steps to reproduce</ins>:

1. Log in to Admin.
1. Create a **Catalog Rule** with **Condition** = "*Category is 1*".
1. Schedule an update with a start date in the future (Example: tomorrow) and set **Condition** = "*Category is 2, 3*", and save the update.
1. Click on **View/Edit** for the update created above, and check the condition fields.

<ins>Expected results</ins>:

The **Catalog Rule's**  **Condition** = "*Category is 2, 3*", as expected.

<ins>Actual results</ins>:

The **Catalog Rule's**  **Condition** = "*Category is 1*", meaning that the update was not saved.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
