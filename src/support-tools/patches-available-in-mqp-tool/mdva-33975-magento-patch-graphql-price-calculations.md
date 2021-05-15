---
title: MDVA-33975 Magento patch: GraphQL price calculations
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,GraphQL,MQP 1.0.14,MQP patches,Magento Commerce,Magento Commerce Cloud,billing,cart price rule,catalog price rules,discount,price calculation,support tools
---

The MDVA-33975 patch fixes GraphQL price calculation issues. These issues include:

* When a catalog price rule is applied to a certain customer group, items' prices in the cart and order total are not calculated correctly in GraphQL.
* Catalog price rules are not included in `CartItemPrices` in the API.
* Customer group price for the general customer is not added in the GraphQL product query response.
* Recalculating quote totals before giving a response about quote prices causes applied rules to be lost.
* The shipping amount discount was not retrieved on the last billing step, and the grand total was incorrectly displayed.
* The discount is not applied in GraphQL when customer segment is used in the cart price rule condition.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.14 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce 2.4.1.
* The patch is also compatible with the following Magento versions: Magento Commerce and Magento Commerce Cloud 2.3.4 - 2.4.1.

Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.