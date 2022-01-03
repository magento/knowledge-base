---
title: "MDVA-30265: tracking link in email returns 404 Page not Found"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.4.0,2.4.1,404,404 error,QPT 1.0.5,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,invoice,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30265 patch solves the issue of the "404 Page not Found" error when the customer clicks on the shipment tracking link in the order confirmation email. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.5 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.5-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.3 to 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

After the shipment is created for an order placed, an email is sent to the customer with tracking information and a link to track the order. However, when the customer clicks on the shipment tracking link in the email, this returns a "404 Page not Found" error.

<ins>Steps to reproduce</ins>:

1. Install Adobe Commerce 2.4. For steps, refer to [Install Adobe Commerce using Composer](https://devdocs.magento.com/guides/v2.4/install-gde/composer.html) in our developer documentation.
1. Place an order.
1. Go to the Admin panel > **Sales** > **Orders**. Look for the order you just created and open it.
1. Create a shipment and add a tracking number (Carrier = Custom Value). For steps, refer to [Order Management > Creating a Shipment](https://docs.magento.com/user-guide/sales/shipments-create.html) in our user guide.
1. You receive an email. Click on the tracking link to check if it is working.
1. Create an invoice. For steps, refer to [Order Management > Creating an invoice](https://docs.magento.com/user-guide/sales/invoice-create.html) in our user guide. Then click again on the tracking link above.

<ins>Expected results</ins>:

The tracking link should work even after creating the invoice.

<ins>Actual results</ins>:

After creating the invoice, the tracking link is not working and returns a "404 Page not Found" error page.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
