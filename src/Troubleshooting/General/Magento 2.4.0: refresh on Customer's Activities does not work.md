---
title: Magento 2.4.0: refresh on Customer's Activities does not work
link: https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-refresh-on-Customer-s-Activities-does-not-work
labels: Magento Commerce Cloud,Magento Commerce,order,troubleshooting,known issues,product,button,2.4.0,refresh
---

<p>This article provides a solution for a Magento 2.4.0 known issue when an admin user creates an order for a customer and the refresh buttons on the Customer's Activities side panel does not work.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0 </li>
</ul>
<h2>Issue</h2>
<p> Steps to reproduce:</p>
<ol>
<li>Go to Magento admin panel &gt; Sales &gt; Orders.</li>
<li>Click the Create New Order button.</li>
<li>Select the created customer.</li>
<li>Go to the storefront as the created customer.</li>
<li>Go to the Product page. Click the Refresh button on the Recently Viewed Products section of Customer's Activities.</li>
<li>Go back to the storefront.</li>
<li>Place an order using the created products.</li>
<li>Go back to the Magento admin panel and click the Refresh button of the Last Ordered Items section of Customer's Activities.</li>
<li>Go back to the storefront. Add the created product to the Comparison List.</li>
<li>Go back to the Magento admin panel. Click the Refresh button of the Products in Comparison List section of Customer's Activities.</li>
<li>Go back to the storefront.</li>
<li>Remove the created product from the Comparison List.</li>
<li>Go back to the Magento admin panel.</li>
<li>Click the Refresh button of the Recently Compared Products section of Customer's Activities.</li>
<li>Go back to the storefront.</li>
</ol>
<p>Expected result:<br/> 1. The name of the product should appear in the Recently Viewed Products section.<br/> 2. The name of the product should appear in the Last Ordered Items section.<br/> 3. The name of the product should appear in the Products in Comparison List section.<br/> 4. The name of the product should appear in the Recently Compared Products section.</p>
<p>Actual result:<br/> The page is scrolled up every time a Refresh button is clicked. The name of the product does not appear in the proper section.</p>
<h2>Solution</h2>
<p>A workaround is the Admin user can update Customer's Activities by clicking the Update Changes button at the bottom of the sidebar. The issue is planned to be resolved in a Magento 2.4.1 patch.<br/> <img alt="mceclip0.png" src="https://support.magento.com/hc/article_attachments/360062477631/mceclip0.png"/></p>
<h2>Related reading</h2>
<ul>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046354992">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue - Export Tax Rates does not work</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a>
<div> </div>
</li>
</ul>