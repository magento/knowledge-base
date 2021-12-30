---
title: "Adobe Commerce 2.4.0 patch: returns shipping label creation issue"
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,known issues,patch,return,shipping label,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a patch for the known Adobe Commerce 2.4.0 issue when there is a problem with printing a shipping label for customers’ returns.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.0
* Adobe Commerce on-premises 2.4.0

## Issue

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Place and complete an order with one of the following core shipping methods: FedEx, DHL, UPS, and USPS.
1. Create and authorize returns for this order.
1. Open an authorized **Return Information** page and click the **Create Shipping Label** button.
1. Select shipping method, add a product to a package and click Save.

<span class="wysiwyg-underline">Expected result:</span>

A shipping label is created successfully and you see a message: *You created a shipping label.*

<span class="wysiwyg-underline">Actual result:</span>

The **Return Information** page is broken and you see an error message on the Return Information page: *General Information Changes have been made to this section that have not been saved. This tab contains invalid data*.

## Solution

Apply [patch](assets/MC-35984-2.4.0-CE-composer.patch.zip) provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[MC-35984-2.4.0-CE-composer.patch](assets/MC-35984-2.4.0-CE-composer.patch.zip)

The patch is also available for download in both, `.git` and `.composer`, formats on [Adobe Commerce Downloads](https://magento.com/tech-resources/download) page, under **Patches** in the left column navigation. Search for MC-35984 patch.

## How to apply the patch

For instructions, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge page.

## Related readings in our support knowledge base:

* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312)
* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)
* [Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
* [Adobe Commerce 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
