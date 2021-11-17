---
title: "MDVA-32759 Magento patch: shared catalogs delete tier pricing"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,B2B features,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,advanced pricing,price,product,shared catalog,tier pricing
---

The MDVA-32759 Magento patch solves the issue where shared catalogs delete existing tier pricing.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Prerequisites</span> :

Install Magento with B2B, with **B2B Features** enabled.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Go to **Stores > Configuration > B2B Features > Enable Company** and **Shared Catalog** .
1. Run `bin/magento cron:run` .
1. Create a simple product, click on **Advanced Pricing** , and add **Catalog and Tier price** , and then save it.
1. Go to **Catalog > Shared Catalog > Set Pricing and Structure** , click on **Configure** , and from that drop-down menu, deselect all options and save.
1. Run `bin/magento cron:run` .
1. Open the above created product, and check advanced pricing.

 <span class="wysiwyg-underline">Expected results</span> :

The tier prices should not be removed from the products after removing all products from the public shared catalog, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The tier prices get removed after removing all products from the public shared catalog.

 
## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.