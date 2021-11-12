---
title: "MDVA-31763: Catalog price rules are reverted until manual reindex"
labels: QPT patches,Quality Patches Tool,MQP,Support Tools,QPT 1.1.5,Adobe Commerce,cloud infrastructure,on-premises,catalog,price rule,reindex,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-31763 patch solves the issue where catalog price rules are reverted until manual reindex. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.5 is installed. The patch ID is MDVA-31763. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.5-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When `catalogrule_product` partial indexer is executed on configurable products, catalog rules get disappeared.

<ins>Steps to reproduce</ins>:

1. Log in to the Admin backend.
1. Go to **Stores** > **Attributes** > **Product** and search for the "manufacturer" attribute.
    * Add a few options and set "Use for Promo Rule Conditions" to *Yes*.
1. Go to **Stores** > **Attributes** > **Attribute Sets**.
    * Select the default attribute set and add the "manufacturer" attribute to it.
1. Create a configurable product with a couple of variations.
1. Set "manufacturer" attribute value for previously created configurable product.
1. Create catalog rules:
    * Active = Yes
    * Websites = Main Website
    * Customer Groups = NOT LOGGED IN
    * Conditions: manufacturer = \<selected value for configurable product>
    * Actions: Any discount
1. Do a full index.
1. Check product price on PDP and make sure the price is correct.
1. Update the "weight" attribute of the created configurable product.
1. Check product price on PDP.

<ins>Expected results</ins>:

The catalog price rules set on configurable products are not removed during partial reindex.

<ins>Actual results</ins>:

The catalog price rules set on configurable products are disappeared during partial reindex.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
