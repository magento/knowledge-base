---
title: "Adobe Commerce 2.4.0: exception during B2B 1.2.0 install"
labels: 2.4.0,B2B,Magento Commerce Cloud,exception,installation,patch,setup:upgrade,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for an Adobe Commerce known issue for an exception thrown during `setup:upgrade` when installing B2B 1.2.0.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0
* B2B 1.2.0

## Issue

 <ins>Steps to reproduce</ins>

1. Install Adobe Commerce with more than one store created.
1. Create an additional store.
1. Install B2B 1.2.0.

>![warning]
>
>The upgrade of any B2B instance with more than 1 store from a version below 1.2.0 or Commerce instance below 2.4.0, is also affected.

 <ins>Expected result</ins>

B2B 1.2.0 installs.

 <ins>Actual result</ins>

When `setup:upgrade` runs to install B2B 1.2.0, this error appears on the `PurchaseOrder` module:

```php
Module 'Magento_PurchaseOrder':
  Unable to apply data patch Magento\PurchaseOrder\Setup\Patch\Data\InitPurchaseOrderSalesSequence
  for module Magento_PurchaseOrder. Original exception message: DDL statements
  are not allowed in transactions
```

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article, available for download in both `.composer` and `.git` formats (after you unzip the files).

To download it, scroll down to the end of the article and click the file name, or click one of the following links:

* [Composer patch B2B-716\_composer.patch](assets/B2B-716_composer.patch.zip)
* [Git patch B2B-716\_git.patch](assets/B2B-716_git.patch.zip)

## How to apply a patch

 <ins>Composer patch </ins>

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for composer patch instructions.

 <ins>Git patch </ins>

* See [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in developer documentation for git patch instructions for Adobe Commerce on cloud infrastructure.
* See [Applying patches: Custom patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#custom-patches) in developer documentation for git patch instructions for Adobe Commerce.

## Related reading

* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)
* [Adobe Commerce 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout](https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout)
* [Adobe Commerce 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout](https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout)
* [Adobe Commerce 2.4.0 known issue: orders display error](https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error)
* [Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote)
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0)
* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work)
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work)
