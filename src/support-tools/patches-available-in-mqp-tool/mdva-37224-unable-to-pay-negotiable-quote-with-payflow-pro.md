---
title: MDVA-37224: Unable to pay "negotiable quote" with PayFlow Pro
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.1-p2,2.4.2,2.4.2-p1,MQP 1.0.23,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools,pay,Negotiable Quote,Paypal PayFlow Pro
---

The MDVA-37224 Magento patch fixes the issue when customers are not able to pay for a **Negotiable Quote** with Paypal PayFlow Pro. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.23 is installed. The patch ID is MDVA-37224. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.6-p1
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.3-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

 <ins>Prerequisites</ins>:

* Magento with installed B2B module
* Company functionality enabled
* **Negotiable Quote** functionality enabled
* A company user exists
* PayPal PayFlow Pro payment method is enabled and configured
* PayPal PayFlow Pro payment method is allowed for B2B
* 2 products with different prices have been created

 <ins>Steps to reproduce</ins>:

1. Open the Storefront.
1. Add **Product 1** to the shopping cart.
1. Create a **Negotiable Quote** for **Product 1**.
1. Add **Product 2** to the shopping cart.
1. From Admin, accept the **Negotiable Quote** created in Step 3.
1. From the Storefront, open this **Negotiable Quote** and proceed to checkout.
1. Select the **Payment Method** = *PayPal PayFlow Pro* at the **Review and Payments** step.
1. Place the order.

 <ins>Expected results</ins>:

* The order is successfully placed, as expected.
* PayPal sends email with the correct information to the customer, as expected.

 <ins>Actual results</ins>:

* The webpage hangs, and does not complete the order.
* PayPal sends confirmation to the customer with zero values, similar to this Example:  

```php
Order ID: A1xxxxxxxxx
Order Placed: Monday, April 21, 2021 01:12:12 PM PDT

Shipping Amount: $0.00
Tax Amount: $0.00
Amount of Transaction: $0.00
Payment Type: Visa

BILL TO
--------
US
```


## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
