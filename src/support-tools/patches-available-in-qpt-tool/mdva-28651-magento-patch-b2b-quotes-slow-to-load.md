---
title: "MDVA-28651 Magento patch: B2B -  quotes slow to load"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.4.0,2.4.1,B2B,QPT 1.0.9,QPT patches,Magento Commerce,Magento Commerce Cloud,performance,quote,response time,support tools
---

The MDVA-28651 Magento patch solves the issue where several performance problems occur with loading quotes. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.9 is installed. Please note that the issue was scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.4.
* The patch is also compatible with the following Magento versions: Magento Commerce and Magento Commerce Cloud 2.3.0-2.3.5-p1, 2.4.0, and 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Performance issues on the customer quote list page:

* double loading of the quote list: first with whole page, second by Ajax request.
* a loop of loading each of the quotes from the plugin.
* double loading of the quote items when the quote was converted to the snapshot.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Have 40+ quotes assigned to a customer.
1. Log in and browse the **My Quotes** page.

 <span class="wysiwyg-underline">Actual result</span> 

The response time to fully load the content of the **My Quotes** page (load of the page + data shown in the grid) is ~ 45 seconds.

 <span class="wysiwyg-underline">Expected result</span> 

The response time to fully load the content of the **My Quotes** page should be less than 45 seconds.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.