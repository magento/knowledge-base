---
title: "MDVA-33970 Magento patch: currency sign in credit memo"
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,MQP 1.0.15,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches
---

The MDVA-33970 Magento patch solves the issue where a Dollar ($) sign was shown instead of the localized currency in a credit memo. This occurs when a **Website** scope is used for a **Price** attribute.

This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.4 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Preconditions</span> :

For this example, these settings are used:

* 2 Websites exist - each has a **Store** and a **Store View** .
* The **Default Config** has the Singapore Dollar as **Currency** ( **Stores > Configuration > General > Currency Setup** ):
    * **Base Currency** = *Singapore Dollar* 
    * **Default Display Currency** = *Singapore Dollar* 
    * **Allowed Currencies** = *Singapore Dollar* 
* **Website 1** has a **Default Config** .
* **Website 2** has the Malaysian Ringgit as **Currency** :
    * **Base Currency** = *Malaysian Ringgit* 
    * **Default Display Currency** = *Malaysian Ringgit* 
    * **Allowed Currencies** = *Malaysian Ringgit* 
* Go to **Stores > Currency Symbols** , and Set:
    * **MYR (Malaysian Ringgit)** = *RM* 
    * **SGD (Singapore Dollar)** = *SGD* ( **Use Standard** = *Checked* )
* Some **Product** exists.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Make an **Order** from the **Website 2** (you can set up it as Default in order to avoid additional settings).
1. Login to **Admin** .
1. Open the newly created order.
1. Check that the **Currency Symbol** = *RM* .
1. Create an **Invoice** .
1. Check that the **Currency Symbol** = *RM* in the invoice.
1. Create a **Credit Memo** .
1. Check that the **Currency Symbol**  ** ** = *RM* in the **Credit Memo** .
1. Open the **Credit Memos** tab in **Order** .
1. Check the **Currency Symbol** in the grid.
1. Open **Sales > Credit Memos** .
1. Check the **Currency Symbol** in the grid.

 <span class="wysiwyg-underline">Expected results</span> :

The correct localized currency symbol is used, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The Dollar ($) sign is used, even though it is not setup in the Admin settings.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.