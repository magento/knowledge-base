---
title: "MDVA-35847 Magento patch: Company User form not working"
labels: 2.4.1,2.4.1-p1,2.4.2,500 error,Company User,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,custom customer attribute,form
---

The MDVA-35847 Magento patch solves the issue of the Company User form not working and returning a 500 error on the front end. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35847. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:**

 Magento Commerce Cloud 2.4.2

 **Compatible with Magento versions:**

 Magento Commerce and Magneto Commerce Cloud 2.4.1-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <ins>Prerequisites</ins>:

 Magento B2B installed

 <ins>Steps to reproduce</ins>:

1. Go to **Stores > Attributes > Customer**, and create a new custom customer attribute:

    * Input type = *Date*
    * Show on Storefront = *Yes*
    * Sort Order = *0*
    * Forms to Use In = *All forms*

1. Create a new company.
1. Log in as company admin on the front end.
1. Go to the Company Users sections.

<ins>Expected results</ins>:

The Company User form loads normally, as expected.

<ins>Actual results</ins>:

The Company User form does not load and returns a 500 error.

## Apply the patch

To apply individual patches, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
