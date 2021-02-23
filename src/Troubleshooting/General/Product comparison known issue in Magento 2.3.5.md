---
title: Product comparison known issue in Magento 2.3.5
link: https://support.magento.com/hc/en-us/articles/360043970452-Product-comparison-known-issue-in-Magento-2-3-5
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,product,2.3.5,Compare Products
---

<p>This article provides recommendations on how to avoid a known <a href="https://docs.magento.com/user-guide/marketing/product-compare.html">product comparison</a> issue in Magento Commerce 2.3.5 and Magento Commerce Cloud 2.3.5. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.3.5</li>
<li>Magento Commerce Cloud 2.3.5 </li>
</ul>
<h2>Issue</h2>
<p>When a user tries to compare products from different store views and one product has an empty value for a comparable attribute, Magento displays a corrupted Compare Products page. </p>
<h2>Solution</h2>
<p>Specify non-empty values for comparable product attributes or use the default store view value for the attribute. Comparable attribute values cannot be empty. </p>
<p class="info">Product attributes are set to be used for comparison using the Comparable on Storefront configuration setting. For more information, refer to the <a href="https://docs.magento.com/user-guide/stores/attribute-product-create.html#step-4-describe-the-storefront-properties">Creating Product Attributes</a> in Magento User Guide.</p>
<p>A fix will be available in Magento 2.3.6, which is scheduled for release in Q4 2020.</p>
<p>You can view the fix in GitHub (please consider, that the fix did not go through regression testing and is not an official hot fix): <a href="https://github.com/magento/magento2/pull/27662">https://github.com/magento/magento2/pull/27662</a> </p>
<h2>Related reading</h2>
<ul>
<li>Magento Support Knowledge Base articles for Magento 2.3.5 known issues:
<ul>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360044461831">Multi-shipping orders with a virtual product not processed correctly in Magento 2.3.5</a></p>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360044839691">Bulk action product count known issue in Magento 2.3.5</a></li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043955991">Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043857372">Magento prompts customers to log in but provides invalid link</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360042646332">Patch for Amazon Pay checkout issue in Magento 2.3.5-p1</a></p>
</li>
</ul>
</li>
<li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues">Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation</a></li>
</ul>