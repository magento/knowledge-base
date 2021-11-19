---
title: "MDVA-32449: Magento sales order history slow or doesn't load with 503 error"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.1,503,QPT 1.0.12,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,error,orders,sales order history,slow,slow performance,slow response,support tools
---

The MDVA-32449 patch solves the issue on Magento where the sales order history loads slowly or does not load and displays a 503 error. This is an issue when 13000+ customers are assigned to a B2B company. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that this issue was fixed in Magento 2.4.1.

## Affected products and versions

This is an issue when 13000+ customers are assigned to a B2B company.

* **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1.
* **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.3.5-p2, 2.4.0, 2.4.1.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Fixes the issue where the order history loads very slowly or does not load at all. <span class="wysiwyg-underline">Steps to reproduce:Prerequisites:</span> 13000+ customers assigned to a B2B company. <span class="wysiwyg-underline"></span> 

1. Log in to the storefront as the company admin.
1. Go to sales order history page.

 <span class="wysiwyg-underline">Actual result:</span> The page loads very slowly or the page may not load and a timeout error may display.

 <span class="wysiwyg-underline">Expected result:</span> The sales order history page loads normally.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

<h2 id="QPTPatchKBDataCollectionInstructionsProposal-Additionalstepsrequiredafterthepatchinstallation">Related reading</h2>

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.