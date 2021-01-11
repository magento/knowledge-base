---
title: Can I schedule Content Staging updates for prices in a shared catalog?
link: https://support.magento.com/hc/en-us/articles/360001896153-Can-I-schedule-Content-Staging-updates-for-prices-in-a-shared-catalog-
labels: staging,Magento,content,catalog,price,shared,FAQ
---

Magento does not offer the functionality of scheduling a price update ([Content Staging](http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html)) for one or more products in a shared catalog.

 That means you cannot schedule such a price update directly from the **Set Pricing and Structure** menu of the Magento Admin panel (there is no **Schedule New Update** button in this menu).

 Still, you may use alternative methods and schedule a price update for:

 
 * a customer group
 * the product's base price
 
 Schedule price update for a customer group
------------------------------------------

 
 2. Start [scheduling a new product update](http://docs.magento.com/m2/ee/user_guide/cms/content-staging-scheduled-update.html).
 4. Scroll down to the **Price** field and click **Advanced Pricing**.  
![advanced_pricing.png](https://support.magento.com/hc/article_attachments/360002708794/advanced_pricing.png) 
 6. In the **Customer Group Price section**, select the needed Customer Group and set the updated price.  
![customer_group_price.png](https://support.magento.com/hc/article_attachments/360002709254/customer_group_price.png) 
 8. Finish scheduling the update as usual.
 
 In this workflow, you can only update price for a single product; bulk price update is not available.

 Remember: shared catalogs leverage the customer group pricing.

 **Related documentation (Magento User Guide):**

 
 * [Scheduling an update (Content Staging)](http://docs.magento.com/m2/ee/user_guide/cms/content-staging-scheduled-update.html)
 * [Advanced Pricing](http://docs.magento.com/m2/ee/user_guide/catalog/pricing-advanced.html)
 
 Schedule price update for the base price
----------------------------------------

 See the related Knowledge Base article: [How base price change affects the shared catalog price?](https://support.magento.com/hc/en-us/articles/360001571314)

