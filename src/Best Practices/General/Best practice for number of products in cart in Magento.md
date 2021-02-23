---
title: Best practice for number of products in cart in Magento
link: https://support.magento.com/hc/en-us/articles/360048550332-Best-practice-for-number-of-products-in-cart-in-Magento
labels: Magento Commerce Cloud,Magento Commerce,2.3,minicart,products,best practices,2.3.x,2.4,2.4.x,cart
---

<p>This article provides best practices for the number of products in a cart in Magento. The maximum recommended number of products is 100.</p>
<p>The potential site impact of exceeding the limit is:</p>
<ul>
<li>An increase in data retrieval operations, validation of cart items, checks for price rules applications, tax calculations, and totals calculations.</li>
<li>An increase in the time for mini-cart rendering including cart rendering time, checkout flow rendering, and execution, leading to performance degradation.</li>
<li>Increase in the page loading time for all site pages where the mini-cart is present, leading to performance degradation.</li>
</ul>
<p>Magento Best Practices for cart limits are:</p>
<ul>
<li>Up to 100 products in a cart
<ul>
<li>the product works, meeting performance targets for response time.</li>
</ul>
</li>
<li>Up to 300 products in a cart
<ul>
<li>the product works, but response time increases above targets.</li>
</ul>
</li>
<li>Above 500 products in a cart
<ul>
<li>the cart and checkout flows are not guaranteed to work.</li>
</ul>
</li>
</ul>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<ul>
<li>Split orders into several smaller orders with a smaller number of rows by leveraging the Add Item by SKU feature.</li>
<li>Only add the custom logic and cart customization you need to load a list of items.</li>
</ul>
<p>If assistance is required or if there are questions or concerns, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.</p>
<h2>Related reading</h2>
<p>Refer to <a href="https://docs.magento.com/user-guide/catalog/inventory-product-stock-options.html">Magento User Guide &gt; Configuring Product Options</a>.</p>
<p>Refer to <a href="https://docs.magento.com/user-guide/sales/shopping-assisted-cart-manage.html#method-2-add-item-by-sku">Magento User Guide &gt; Shopping Assistance &gt; Managing a Shopping Cart</a>.</p>