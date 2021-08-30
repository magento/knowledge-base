---
title: "MDVA-29042 Magento patch: global category permissions unchanged"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,QPT 1.0.5,QPT patches,Magento Commerce,Magento Commerce Cloud,category,customer group,deselect,permissions,support tools
---

The MDVA-29042 patch fixes the issue where catalog permissions were changed to " *Allow* " automatically after new product was added to the shared catalog in Magento Admin. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.5 is installed. Please note that the issue was fixed in Magento version 2.3.6 with B2B extension.

## Affected products and versions

Magento Commerce and Magento Commerce Cloud 2.3.3 to 2.3.4-p2 with B2B extension

>![info]
>
>Note: the patch can be applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status`

## Issue

Deselecting a customer group from the global category permissions in Magento Admin does not automatically set that customer group to " *Deny* " within category permissions.

 <span class="wysiwyg-underline">Prerequisites</span>

* B2B instance with a customer group defined and selected under **STORES > Configuration > CATALOG > Catalog > Category Permissions** for:
    * **Allow Browsing Category**
    * **Display Product Prices**
    * **Allow Adding to Cart**
* Under each **Category** , the customer group is defined as " *Allow* " for
    * **Browsing Category**
    * **Display Product Prices**
    * **Add to Cart**
 <span class="wysiwyg-underline">Steps to reproduce</span>

1. In Magento Admin, go to **STORES > Configuration > CATALOG > Catalog > Category Permissions** and de-select the customer group from:
    * **Allow Browsing Category**
    * **Display Product Prices**
    * **Allow Adding to Cart**
1. Click the **Save Config** button.
1. Wait for the indexers to run.
1. Look at **CATALOG > Categories > Category Permissions** .

 <span class="wysiwyg-underline">Expected result:</span>

 **Category Permissions** will be set to " *Deny* " for all categories for the customer group.

 <span class="wysiwyg-underline">Actual result:</span>

No change to any category permissions for the customer group.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.

To learn more about B2B company functionality, refer to these DevDocs articles:

* [B2B Developer Guide](https://devdocs.magento.com/guides/v2.4/b2b/bk-b2b.html)
* [Manage company roles](https://devdocs.magento.com/guides/v2.4/b2b/roles.html)
* [Magento Enterprise B2B Extension configuration paths reference](https://devdocs.magento.com/guides/v2.4/config-guide/prod/config-reference-b2b.html)
