---
title: "MDVA-28651: B2B -  quotes slow to load"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.4.0,2.4.1,B2B,QPT 1.0.9,QPT patches,Magento Commerce,Magento Commerce Cloud,on-premises,cloud infrastructure,performance,quote,response time,support tools
---

The MDVA-28651 patch solves the issue where several performance problems occur with loading quotes. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.9 is installed. Please note that the issue was scheduled to be fixed in Adobe Commerce version 2.4.2.

## Affected products and versions

* The patch was designed for Adobe Commerce on cloud infrastructure 2.3.4.
* The patch is also compatible with the following Adobe Commerce versions: Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0-2.3.5-p1, 2.4.0, and 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

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

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
