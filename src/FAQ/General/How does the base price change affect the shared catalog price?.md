---
title: How does the base price change affect the shared catalog price?
link: https://support.magento.com/hc/en-us/articles/360001571314-How-does-the-base-price-change-affect-the-shared-catalog-price-
labels: Magento,shared_catalog,price,shared,custom,FAQ
---

<p>This article answers the question: if a product in a shared catalog has a custom price and the base price of the product changes (for example after a scheduled update), which price applies in the shared catalog?</p>
<h2>With custom price set to Percentage, shared catalog price also changes</h2>
<p>If the custom price for a product in a shared catalog has been set to Percentage, the product's shared catalog price is implicitly updated after changing the base price.</p>
<p>In other words, when the base price gets updated (via a normal or a scheduled update), the shared catalog price also changes after applying the percent discount.</p>
<h2>With custom price set to Fixed, shared catalog price does not change</h2>
<p>If the custom price for a product in a shared catalog has been set to Fixed, the price in the shared catalog never changes — no matter the way we update the base price (via scheduled update, Magento Admin, API, or importing).</p>
<h2>Storefront always displays the lowest available price</h2>
<p>If the product's base price changes and becomes less than the corresponding shared catalog price, the Storefront displays the base price as the lowest price available in the system.</p>
<h2>Related documentation</h2>
<p>Magento User Guide: <a href="http://docs.magento.com/m2/b2b/user_guide/catalog/catalog-shared-pricing-structure.html">Set Pricing and Structure for a Shared Catalog</a></p>