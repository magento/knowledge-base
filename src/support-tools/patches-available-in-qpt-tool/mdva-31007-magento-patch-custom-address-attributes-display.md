---
title: "MDVA-31007: custom address attributes display"
labels: 2.4.0,2.4.0-p1,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-31007 patch solves the issue where custom address attributes are not correctly displayed in the order details page in the My Account area and in the backend (in the **Sales > Orders** location). This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.4.0

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.0 - 2.4.0-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Log in to Admin backend.
1. Navigate to **Stores** > **Attributes** > **Customer Addresses**.
1. Create two attributes:

    * Set input type: *Drop-down*.
    * Set input type: *Text*.

1. Navigate to **Stores** > **Configurations** > **Customer** > **Customer Configurations**.
1. Select *Scope* as **Default Store** view.
1. Expand the **Address Template** section. Update *Text*, *Text One Line*, and *HTML* to include the two custom attributes above:   

    ```php    
    {{depend testdropdown}}Dropdown: {{var testdropdown}}{{/depend}}    {{depend testtext}}Text: {{var testtext}}{{/depend}}  
    ```

1. Open Storefront.
1. Create and Log in with a user.
1. Go to **My Account** > **Address book**, and add a new address (fill in the two custom attributes).
1. Add a product to the cart, and place an order.
1. On the order success page, click on the **Order number** link.
1. On the order details page, observe the **Order Information** section.
1. Go to **Backend** > **Sales** > **Orders**, click on the above order, and observe the **Address information** section.

<ins>Expected results</ins>:

On both frontend and backend, the billing and shipping address are displayed as expected.

<ins>Actual results</ins>:

On both frontend and backend, the billing address is not correctly displayed. The selected option of the dropdown attribute is missing, and the value of the input attribute contains the attribute code.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
