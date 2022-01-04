---
title: "MDVA-30963: admin product search filter not working as expected"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.8,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,disabled,enabled,product search filter,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30963 patch solves the issue wherein the Commerce Admin and the product search filter do not work as expected. Values that are overridden in a store view scope are also considered when filtering on **All store view** store view scope. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.8 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.4.0

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.2 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Set **Stores** > **Configuration** > **Catalog** > **Catalog** > **Price** > **Catalog Price Scope** = *Website*.
1. Create two websites having two different currencies (For example, the default website is an India Store \[Rupee ₹\], and the second one is the US Store \[Dollar $\]).
1. Set the following **Base Currency**, **Default Display Currency**, and **Allowed Currencies**:
    * **Default Config** = *US Dollar (Default)*
    * **Main Website** = *Indian Rupee*
    * **WebsiteUS** = **Use Default** = *US Dollar*
1. Set **Stores** > **Currency Rates** = *1:1*.
1. Create a test simple product assigned to both Websites with the following prices:
    * **Default Price** = **US Website price** = *123 USD*
    * **Main Website price** = *321 Rupee*
1. Create a subAdmin user that has access only to the US Store.
1. Go to the US storefront, and put a product in the cart (Example: *123 USD price*).
1. Log in to the Admin with subAdmin just created (Example: *US Only admin*).
1. Go to **Reports** > **Products in cart**.

<ins>Expected results</ins>:

When filtering within the **All store view** store view scope, products filtering should get the value set in that particular scope.

<ins>Actual results</ins>:

Values overridden in a store view scope are also considered when filtering on the "All store view" store view scope.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
