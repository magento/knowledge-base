---
title: "MDVA-33970 patch: currency sign in credit memo"
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33970 patch solves the issue where a Dollar ($) sign was shown instead of the localized currency in a credit memo. This occurs when a **Website** scope is used for a **Price** attribute.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.4-p2

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.4 - 2.4.1-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Preconditions</ins>:

For this example, these settings are used:

* 2 Websites exist - each has a **Store** and a **Store View**.
* The **Default Config** has the Singapore Dollar as **Currency** (**Stores > Configuration > General > Currency Setup**):
    * **Base Currency** = *Singapore Dollar*
    * **Default Display Currency** = *Singapore Dollar*
    * **Allowed Currencies** = *Singapore Dollar*
* **Website 1** has a **Default Config**.
* **Website 2** has the Malaysian Ringgit as **Currency**:
    * **Base Currency** = *Malaysian Ringgit*
    * **Default Display Currency** = *Malaysian Ringgit*
    * **Allowed Currencies** = *Malaysian Ringgit*
* Go to **Stores > Currency Symbols**, and Set:
    * **MYR (Malaysian Ringgit)** = *RM*
    * **SGD (Singapore Dollar)** = *SGD* (**Use Standard** = *Checked*)
* Some **Product** exists.

<ins>Steps to reproduce</ins>:

1. Make an **Order** from the **Website 2** (you can set up it as Default in order to avoid additional settings).
1. Login to **Admin**.
1. Open the newly created order.
1. Check that the **Currency Symbol** = *RM*.
1. Create an **Invoice**.
1. Check that the **Currency Symbol** = *RM* in the invoice.
1. Create a **Credit Memo**.
1. Check that the **Currency Symbol**  ** ** = *RM* in the **Credit Memo**.
1. Open the **Credit Memos** tab in **Order**.
1. Check the **Currency Symbol** in the grid.
1. Open **Sales > Credit Memos**.
1. Check the **Currency Symbol** in the grid.

<ins>Expected results</ins>:

The correct localized currency symbol is used, as expected.

<ins>Actual results</ins>:

The Dollar ($) sign is used, even though it is not setup in the Admin settings.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
