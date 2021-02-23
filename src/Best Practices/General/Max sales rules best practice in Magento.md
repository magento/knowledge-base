---
title: Max sales rules best practice in Magento
link: https://support.magento.com/hc/en-us/articles/360045957511-Max-sales-rules-best-practice-in-Magento
labels: Magento Commerce Cloud,Magento Commerce,cart_rules,performance,price,2.3,best practices,2.3.x,2.4,2.4.x,cart
---

<p>The maximum recommended total number of sales rules (cart price rules) for <ins>all</ins> websites is 1000 in Magento. Having many sales rules can have a negative impact on performance. The limitation is due to needing to validate cart contents against all rules registered in the system to apply the necessary rules.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Having too many sales rules will cause degraded performance on the site, including:</p>
<ul>
<li>Adding products to cart response time increases above performance targets.</li>
<li>Mini-cart loading and rendering time increases.</li>
<li>Cart page rendering time increases above performance targets.</li>
<li>On the Checkout page there is a section called Totals (Final price, Subtotal) and number of sales rules have a direct performance impact on this block rendering time.</li>
</ul>
<p>It is best practice to:</p>
<ul>
<li>Manage and remove non-used rules. </li>
<li>Add strict rule conditions (like attribute or category filter) for increasing efficiency of the matching mechanism. For steps on creating and removing cart price rules, refer to DevDocs' <a href="https://docs.magento.com/user-guide/marketing/price-rules-cart-create.html">Magento User guide &gt; Cart Price Rules</a>. </li>
</ul>
<h2>Related reading</h2>
<p>DevDocs' <a href="https://docs.magento.com/user-guide/marketing/price-rules-cart.html?itm_source=merchdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=access%20price%20rule">Magento User Guide &gt; Cart Price Rules</a>.</p>