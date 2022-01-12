---
title: "MDVA-29446: Non-relevant shipping method available for checkout"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,checkout,shipping,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-29446 patch solves the issue where a shipping method that is not applicable shows up on the checkout shipping method options, and if selected, an error message "*Carrier with such method not found null, flat rate*." displays. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.6 is installed. The issue is scheduled to be fixed in later Adobe Commerce versions.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.4

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.3-2.4.0.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issues

You have a shipping method that is not applicable but still shows up on the checkout shipping method options, and you can select this non-relevant shipping method.

<ins>Steps to reproduce</ins>:

1. Install clean 2.3-develop.
1. Enable Flat rate and set:

    * Ship to Applicable Countries = *Specific Countries*
    * Ship to Specific Countries = *Antarctica*
    * Show Method if Not Applicable = *Yes*

1. Disable all other shipping methods.
1. Go to the frontend, create a customer with a US address.
1. Select an item and click **Add to Cart**.
1. Click on the cart and click **Proceed to Checkout**.

<ins>Actual results</ins>:

1. On the **Shipping** page, you see the following:

    * Flat rate is visible
    * Flat rate is $0
1. After the user clicks **Next**, the user gets the following error:

 *"Carrier with such method not found: null, flatrate"*

<ins>Expected results</ins>:

* The price of the shipping method is not visible if the shipping method is not applicable.
* The **Next** button should not be active.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
