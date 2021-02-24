---
title: Can I schedule Content Staging updates for prices in a shared catalog?
link: https://support.magento.com/hc/en-us/articles/360001896153-Can-I-schedule-Content-Staging-updates-for-prices-in-a-shared-catalog-
labels: staging,Magento,content,catalog,price,shared,FAQ
---

<p>Magento does not offer the functionality of scheduling a price update (<a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html">Content Staging</a>) for one or more products in a shared catalog.</p>
<p>That means you cannot schedule such a price update directly from the Set Pricing and Structure menu of the Magento Admin panel (there is no Schedule New Update button in this menu).</p>
<p>Still, you may use alternative methods and schedule a price update for:</p>
<ul>
<li>a customer group</li>
<li>the product's base price</li>
</ul>
<h2>Schedule price update for a customer group</h2>
<ol>
<li>Start <a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging-scheduled-update.html">scheduling a new product update</a>.</li>
<li>Scroll down to the Price field and click Advanced Pricing.<br/><img alt="advanced_pricing.png" src="https://support.magento.com/hc/article_attachments/360002708794/advanced_pricing.png"/>
</li>
<li>In the Customer Group Price section, select the needed Customer Group and set the updated price.<br/><img alt="customer_group_price.png" src="https://support.magento.com/hc/article_attachments/360002709254/customer_group_price.png"/>
</li>
<li>Finish scheduling the update as usual.</li>
</ol>
<p>In this workflow, you can only update price for a single product; bulk price update is not available.</p>
<p>Remember: shared catalogs leverage the customer group pricing.</p>
<p>Related documentation (Magento User Guide):</p>
<ul>
<li><a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging-scheduled-update.html">Scheduling an update (Content Staging)</a></li>
<li><a href="http://docs.magento.com/m2/ee/user_guide/catalog/pricing-advanced.html">Advanced Pricing</a></li>
</ul>
<h2>Schedule price update for the base price</h2>
<p>See the related Knowledge Base article: <a href="https://support.magento.com/hc/en-us/articles/360001571314">How base price change affects the shared catalog price?</a></p>