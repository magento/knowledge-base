---
title: MQP patches TEMPLATE
labels: KCTemplate,template
---

Title: Include patch ID in title. Example "MDVA-XXX Magento patch: storefront is broken"

The MDVA-XXX Magento patch solves/fixes the issue where ..... This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) xxx is installed. The patch ID is MDVA-XXX. Please note that the issue was fixed/is scheduled to be fixed in Magento xxx. (this is optional, if the issue really was fixed). 

## Affected products and versions

The patch is created for Magento version:  
Magento xxx (might be Commerce and/or Commerce Cloud; no period after versions)

Compatible with Magento versions:  
Magento xxx (might be Commerce and/or Commerce Cloud; no period after versions)

<p class="info">Note: the patch can be applicable to other versions. To check if the patch is compatible with your Magento version, run <code>./vendor/bin/magento-patches status</code>.</p>

## Issue

&lt;Short description>

Steps to reproduce:

...

Actual result:

...

Expected result:

...

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html).

<h2 id="MQPPatchKBDataCollectionInstructionsProposal-Additionalstepsrequiredafterthepatchinstallation">Additional steps required after the patch installation</h2>

This section is optional, there might be some steps required after applying the patch to fix the issue. 

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.