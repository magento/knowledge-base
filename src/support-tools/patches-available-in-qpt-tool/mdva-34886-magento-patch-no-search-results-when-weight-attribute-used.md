---
title: "MDVA-34886 Magento patch: no search results when “weight” attribute used"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool
---

The MDVA-34886 Magento patch solves the issue where Search does return results when weight attribute is configured as searchable.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.2 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Configure Elasticsearch.
1. Navigate to **Admin > Stores > Attributes > Product** . Edit the **Weight** attribute, and set its attribute **Searchable** = *Yes* .
1. Save the attribute, and clear the configuration cache.
1. On the frontend, search for a text value (Example: *bag* ).
1. Observe that the search does not return any results.
1. The exception log will contain an error message like:    ```php    {"type":"number_format_exception","reason":"For input string: \"bag\""}    ```    

 <span class="wysiwyg-underline">Expected results</span> :

The Search returns results even when the weight attribute is configured as searchable, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The Search does not return results when the weight attribute is configured as searchable.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.