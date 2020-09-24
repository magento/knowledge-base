Magento does not offer the functionality of scheduling a&nbsp;price update&nbsp;([Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html)) for one or more products in a shared catalog.

That means you cannot schedule such a price update directly from the __Set Pricing and Structure__ menu of the Magento Admin panel (there is no __Schedule New Update__ button in this menu).

Still, you may use alternative methods and schedule a price update for:

*   a customer group
*   the product's base price

## Schedule price update for a customer group

<ol><li>Start <a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging-scheduled-update.html">scheduling a new product update</a>.</li><li>Scroll down to the <strong>Price</strong> field and click <strong>Advanced Pricing</strong>.<br/><img alt="advanced_pricing.png" height="258" src="https://support.magento.com/hc/article_attachments/360002708794/advanced_pricing.png" width="350"/>
</li><li>In the <strong>Customer&nbsp;Group&nbsp;Price section</strong>, select the needed Customer Group and set the updated price.<br/><img alt="customer_group_price.png" height="272" src="https://support.magento.com/hc/article_attachments/360002709254/customer_group_price.png" width="589"/>
</li><li>Finish scheduling the update as usual.</li></ol>

In this workflow, you can only update price for a single product; bulk price update is not available.

Remember: shared catalogs leverage the customer group pricing.

__Related documentation (Magento User Guide):__

*   [Scheduling an update (Content Staging)](http://docs.magento.com/m2/ee/user_guide/cms/content-staging-scheduled-update.html)
*   [Advanced Pricing](http://docs.magento.com/m2/ee/user_guide/catalog/pricing-advanced.html)

## Schedule price update for the base price

See the related Knowledge Base article: [How base price change affects the shared catalog price?](https://support.magento.com/hc/en-us/articles/360001571314)