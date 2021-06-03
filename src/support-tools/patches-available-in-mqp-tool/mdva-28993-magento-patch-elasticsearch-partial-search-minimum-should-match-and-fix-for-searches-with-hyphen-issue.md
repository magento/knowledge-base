---
title: MDVA-28993 Magento patch: Elasticsearch partial search, "minimum should match" and fix for "searches with hyphen" issue
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,MQP 1.0.6,MQP patches,Magento Commerce,Magento Commerce Cloud,support tools
---

The MDVA-28993 Magento patch implements the "Minimum should match" functionality and partial search for Elasticsearch engine, and solves issues with hyphens in search queries. The patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.6 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4

 **Compatible with Magento versions:** Magento Commerce/ Magento Commerce Cloud 2.3.4-2.3.5-p2

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status`

## Issue

When using Elasticsearch 6 for searching SKU that contains a hyphen(-), search returns too many results.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Go to the storefront.

1. In the search bar enter a string containing a hyphen, for example "WS-M-Blue".

 <span class="wysiwyg-underline">Expected result:</span>

Returns only WS-M-Blue.

 <span class="wysiwyg-underline">Actual result:</span>

Returns all SKUs starting with "WS".

## Patch details

The MDVA-28993 patch contains the following fixes and improvements:

* implements the new "Minimum should match" functionality and partial search for Elasticsearch engine. For configuration details refer to [Configuring Catalog Search](https://docs.magento.com/user-guide/catalog/search-configuration.html#step-4-configure-minimum-terms-to-match) in Magento User Guide.
* partial search for Elasticsearch
* fixes the "searches with hyphen" issue described above.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
