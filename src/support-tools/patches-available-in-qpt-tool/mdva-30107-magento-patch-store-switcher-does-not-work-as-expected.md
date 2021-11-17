---
title: "MDVA-30107 Magento patch: store switcher does not work as expected"
labels: 2.3.0,2.3.1,2.3.2,2.3.3,2.3.4,2.3.5,QPT 1.0.5,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,store switcher,support tools
---

The MDVA-30107 patch solves the issue where store switcher doesn't work as expected if different base URLs are used for store views. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.5 is installed.

## Affected products and versions

* Magento Commerce 2.3.0-2.3.5.x
* Magento Commerce Cloud 2.3.0-2.3.5.x

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When a user switches between stores using the store switcher, the request fails if the target store has a different base URL.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create two or more stores with different base URLs.
1. Go to a category page on a storefront of any of those stores.
1. Try switching to the other store using the store switcher.

 <span class="wysiwyg-underline">Expected result:</span>

You are redirected to the similar page of the other store.

 <span class="wysiwyg-underline">Actual result:</span>

You are redirected to the home page of the same store.

## Apply the patch

To apply individual patches, use the following links depending on your version of Magento:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* KB [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* KB [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
