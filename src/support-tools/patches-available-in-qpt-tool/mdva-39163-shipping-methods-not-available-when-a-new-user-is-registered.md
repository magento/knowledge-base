---
title: "MDVA-39163: Shipping methods not available to newly registered users with products from guest session"
labels: QPT patches,Quality Patches Tool,MQP,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,shipping methods,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,QPT 1.1.9
---

The MDVA-39163 patch solves the issue where the shipping methods are not available when a new user is registered and products in the cart are from the guest session. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.9 is installed. The patch ID is MDVA-39163. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.5 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Shipping methods are not available when the new user is registered, and products in the cart are from the guest session.

<ins>Steps to reproduce</ins>:

1. Go to **Admin** > **Stores** > **Configuration** > **Sales** > **Delivery Methods**. Enable only the **Flat Rate** shipping method and disable everything else.
1. In the **Flat Rate** shipping method, select the **Specific** country option available in the **Ship to Applicable Countries** setting and select one country from the list (e.g., United States).
1. Go to **Admin** > **Stores** > **Configuration** > **Customer** > **Customer Configuration** and set **Require Email Confirmation** to _Yes_.
1. Create a new Email Template in **Admin** > **Marketing** > **Email Templates** and load `Footer (magento/luma)` template and replace the template content with a CMS block.

    ```CMS
    {{block class="Magento\Cms\Block\Block" block_id="footer_links_block"}}
    ```

1. Go to **Admin** > **Content** > **Design** > **Configuration** and select the theme which relates to your frontend website. Set the "Footer Template" to the new email template created.
1. Go to the frontend and add a product to the cart.
1. Create a customer; you'll get an email to confirm the email address. Click the verification link. You will be logged into the website.
1. Go to **My Account** and add an address. Set the address country to the shipping country that you set in the admin configuration previously.
1. Go to checkout.

<ins>Expected results</ins>:

Shipping method is available, as the customer has an address that is compatible with the shipping country.

<ins>Actual results</ins>:

Shipping method is not available.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
