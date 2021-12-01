---
title: "MDVA-31150: invoice without store credit info"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,2.4.1,API,QPT 1.0.8,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,credit,invoice,order,store,support tools,Adobe Commerce,on-premises,cloud infrastructure
---

The MDVA-31150 patch fixes the issue where an invoice is created without store credit information. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.8 is installed. Please note that the issue will be fixed in Adobe Commerce version 2.4.2.

## Affected products and versions

* This patch was designed for Adobe Commerce on cloud infrastructure 2.3.5-p2.
* The patch is also compatible with Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0 to 2.3.5-p2, and 2.4.0 to 2.4.0-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

After the invoice order by API the used customer balance and gift card information is not present in the invoice.

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. Add a store credit amount to a customer account: On the Admin sidebar, go to **Customers** > **All Customers.**
1. Find the customer record and click on **Edit** in the Action column, then **Store Credit** > Update the balance > **Save Customer**.
1. Go to Storefront and add products to cart.
1. Place an order by applying the store credit or gift card amount as partial payment.
1. Create invoice using `REST API>POST>/rest/V1/order/1/invoice` with payload:    ```clike    { "capture": true, "items": [ { "extension_attributes": {}, "order_item_id": 3, "qty": 1 } ], "notify": true, "appendComment": true, "comment": { "extension_attributes": {}, "comment": "string", "is_visible_on_front": 0 }, "arguments": { "extension_attributes": {} }}    ```    
1. Get the invoice that was just created using `REST API>GET>/rest/V1/invoices/1`.

 <span class="wysiwyg-underline">Expected result</span>

Store credit and gift card balance are returned by API Call.

 <span class="wysiwyg-underline">Actual result</span>

Store credit and gift card balance are not returned by API Call.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
