---
title: "MDVA-33975 patch: GraphQL price calculations"
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,GraphQL,QPT 1.0.14,QPT patches,Magento Commerce,Magento Commerce Cloud,billing,cart price rule,catalog price rules,discount,price calculation,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33975 patch fixes GraphQL price calculation issues. These issues include:

* When a catalog price rule is applied to a certain customer group, items' prices in the cart and order total are not calculated correctly in GraphQL.
* Catalog price rules are not included in `CartItemPrices` in the API.
* Customer group price for the general customer is not added in the GraphQL product query response.
* Recalculating quote totals before giving a response about quote prices causes applied rules to be lost.
* The shipping amount discount was not retrieved on the last billing step, and the grand total was incorrectly displayed.
* The discount is not applied in GraphQL when customer segment is used in the cart price rule condition.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.14 is installed.

## Affected products and versions

* The patch was designed for Adobe Commerce on-premises 2.4.1.
* The patch is also compatible with the following Adobe Commerce versions: Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
