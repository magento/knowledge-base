---
title: "MDVA-34680: Customer Account created time is not filtered correctly in customers grid"
labels: MQP patches,Magento Quality Patches,
---

The MDVA-34680 Magento patch fixes the issue when the Customer Account created time is not filtered correctly in in customers grid. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.26 is installed. The patch ID is MDVA-34680. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.4.1, 2.4.2

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.6-2.3.7, 2.4.1-2.4.2-1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue
When a customer account is created after 00:00 UTC and you try to filter accounts by that date, it won't return this customer.

<ins>Steps to reproduce</ins>:

1. Go to Stores > Configuration > General and set the Timezone to Eastern Standard [United States/New York].
1. Create a new customer account after 00:00 UTC.
1. Go to Customers > All Customers and filter the by today's date.

<ins>Expected results</ins>:

The customer account filters show the new account created today after 00:00 UTC.

<ins>Actual results</ins>:

The customer account filters don't show the new account created today.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
