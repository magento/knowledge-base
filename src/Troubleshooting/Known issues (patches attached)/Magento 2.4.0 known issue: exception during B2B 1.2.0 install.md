This article provides a fix for a Magento known issue for an exception thrown during `` setup:upgrade `` when installing B2B 1.2.0.

## Affected products and versions

*   Magento Commerce version 2.4.0
*   Magento Commerce Cloud version 2.4.0
*   B2B version 1.2.0

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   Install Magento with more than 1 store created.
2.   Create an additional store.
3.   Install B2B 1.2.0.

<p class="warning">The upgrade of any B2B instance with more than 1 store from a version below 1.2.0 or Magento instance below 2.4.0, is also affected.</p>

<span class="wysiwyg-underline">Expected result</span>

The install of B2B 1.2.0 completes normally.

<span class="wysiwyg-underline">Actual result&nbsp;</span>

When `` setup:upgrade `` runs to install B2B 1.2.0, this error appears on the `` PurchaseOrder `` module:

<pre><code class="language-php">Module 'Magento_PurchaseOrder':
  Unable to apply data patch Magento\PurchaseOrder\Setup\Patch\Data\InitPurchaseOrderSalesSequence
  for module Magento_PurchaseOrder. Original exception message: DDL statements
  are not allowed in transactions</code></pre>

## Solution

Apply the patch provided in this article.

## Patch

The patch is attached to this article, available for download in both&nbsp;`` .composer `` and `` .git ``&nbsp;formats.

To download it, scroll down to the end of the article and click the file name, or click one of the following links:

*   <a href="https://support.magento.com/hc/article_attachments/360064512792/B2B-716_composer.patch" rel="noopener" target="_blank">Composer patch B2B-716\_composer.patch</a>
*   <a href="https://support.magento.com/hc/article_attachments/360064512772/B2B-716_git.patch" rel="noopener" target="_blank">Git patch B2B-716\_git.patch</a>

## How to apply a patch

<span class="wysiwyg-underline">Composer patch</span>

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for composer patch instructions.

<span class="wysiwyg-underline">Git patch</span>

*   See DevDocs'&nbsp;[Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) for git patch instructions for Magento Commerce Cloud.
*   See DevDocs'&nbsp;[Applying patches: Custom patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#custom-patches)&nbsp;for git patch instructions for Magento Commerce.

## Related reading

<ul><li><a href="https://support.magento.com/hc/en-us/articles/360045804332" target="_self">Magento 2.4.0 known issue: raw message data display on storefront</a></li><li><a href="https://support.magento.com/hc/en-us/articles/360045850032" target="_self">Magento 2.4.0 known issue: Export Tax Rates does not work</a></li><li><a href="https://support.magento.com/hc/en-us/articles/360046354992" target="_self">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout">Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout">Magento 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error">Magento 2.4.0 known issue: orders display error</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote">Magento 2.4.0 known issue: B2B Admin cannot add a configurable product to a quote</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li><li class='article-list-link"'><a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a></li></ul>