---
title: 'MDVA-21095: INSERT INTO "search_tmp..." never ends after mass attribute update'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,MQP 1.0.20,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,PHP-fpm die,mass attribute update,pm.max_children,query INSERT INTO search_tmp,reindex
---

The MDVA-21095 Magento patch fixes the issue when a query `INSERT INTO` "search\_tmp..." never ends after a mass attribute update.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-21095. Please note that there is no current plan to fix this issue in future versions.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.0-2.3.4-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Step to reproduce</span> :

Perform a mass attribute values update with ~30,000 items.

 <span class="wysiwyg-underline">Expected results</span> :

The reindex process completes normally, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The reindex process completes, but a lot of queries `INSERT INTO` “search\_tmp…” start until the server reaches the `pm.max_children` parameter value and PHP-fpm dies, and these constantly reoccur even after MySQL restart and process kill.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
