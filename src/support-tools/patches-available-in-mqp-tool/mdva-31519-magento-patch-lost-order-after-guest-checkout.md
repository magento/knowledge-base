---
title: "MDVA-31519 Magento patch: lost order after guest checkout"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.14,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,guest checkout,lost,missing,order placement,payment
---

The MDVA-31519 Magento patch solves the issue where paid orders are missing and lock wait timeouts in guest checkout.

This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.5 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Enable guest checkout.
1. Create a cart price rule without a coupon (Example: "Free shipping above x amount").
1. Place a large amount of concurrent guest orders involving API payment Payment Service Providers (PSPs).

 <span class="wysiwyg-underline">Expected results</span> :

All paid payment transactions are saved to the database and visible in Admin, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

Only a small fraction of orders is saved in the database, while the majority of orders' information is lost because of lock wait timeouts.

 
## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.