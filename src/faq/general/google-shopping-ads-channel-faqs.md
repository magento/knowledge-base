---
title: Google Shopping ads Channel FAQs
labels: 2.3.3,2.3.4-p1,2.3.5,FAQ,Google,Magento Commerce,ads,channel,shopping
---

<p class="info">The Google Shopping ads Channel bundled extension has reached end-of-life and has been deprecated in Magento core code in Magento Commerce 2.3.5 and 2.3.4-p1. It will not be supported and work anymore.</p>

## Requirements and Installation

### Q: What do I need to get started?

Beginning with Magento v2.3.3, Google Shopping ads Channel installs with Magento. Instances on a previous Magento version can [install](https://devdocs.magento.com/extensions/google-shopping-ads/) the Google Shopping ads Channel extension from [Magento Marketplace](https://marketplace.magento.com/magento-google-shopping-ads.html).

Once installed, we walk you through adding your [Google API Key](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/verify-api-key.html) and creating a series of accounts through [Google onboarding](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/onboarding-google.html). The accounts needed to include a Google general account, a Google Merchant Center, and a Google Ads account. You also need a payment method for your Google Ads account as part of this integration.

Google Shopping ads Channel can be accessed through the Magento Admin. On the _Admin_ sidebar, click Marketing. Then under _Advertising Channels_, click Google Shopping ads. We recommend reviewing [best practices](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/google-best-practices.html) and [getting started information](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/about-google.html) to better understand specific preparation and how the integration uses your product catalog.

### Q: I have Google accounts already. Can I use them?

<div>
<p>You can use an existing Google account for your business.</p>
<p>You must create a new GMC account through the onboarding process. If you have claimed and verified your store URL(s) to an existing account, you must <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/gmc-unlink-gmc.html">unclaim</a> it to continue. You also will create a new Google Ads account.</p>
<p>We include instructions in the <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/onboarding-google.html">onboarding process</a>. </p>
</div>

### Q: I have multiple URLs to claim and verify. Can I manage them all in Magento?

<div>
<p>Yes, but you must create a GMC and Ads account per URL.</p>
<p>After completing the onboarding process, you can click Create GMC Account to run it again for each URL you want to claim and verify. You can only manage one URL per GMC in Magento. All added Google accounts are available through the Magento Admin including <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/google-account-managment.html">account</a> and <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-managment.html">product</a> status, settings, and campaigns per account.</p>
<h3>
Q: What is gtag and where is the configuration and usage?</h3>
<div>
<p>Magento automatically installs and configures <a href="https://support.google.com/tagmanager/answer/7582054">Google Analytics gtag</a> for you with the integration. The gtag.js global site tag is used to load the tracking library and configure the AdWords accounts you intent to send data to. You use this tag for <a href="https://developers.google.com/adwords-remarketing-tag/">AdWords conversion tracking and remarketing</a>.</p>
<p>The gtag triggers on purchases, and fires specifically on the thank you and confirmation after purchase.</p>
<p>Retail marketing tags are set up on the following location: and accessing storefront pages for Home (Pageview), Search results (ProductIds from results), Category pages (category viewed and ProductIds on page), Product pages (category and ProductId), Add to Cart, Remove from Cart, and Conversion.</p>
</div>
<h2>Magento and Compatibilities</h2>
<h3>
Q: What Magento versions are supported?</h3>
<p>Google Shopping ads Channel is compatible with Magento Open Source, Commerce, and Commerce Cloud on versions 2.2.X and 2.3.X. It is not compatible on Magento 2.1 or Magento 1.</p>
<h3>
Q: What Magento products are supported?</h3>
<p>The integration supports all Magento product types excluding gift cards, grouped products, and simple products with required options. Google also recommends not selling products requiring customization or personalization.</p>
<h3>
Q: Can I manage and update configurations of my Google Merchant Center (GMC) account outside of the Magento Admin?</h3>
<div>
<p>Yes, you can manage and update your GMC account settings outside of Magento.</p>
<p>You have options during <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/onboarding-google.html">onboarding</a> to enter taxes and shipping configurations in the Google Merchant Center. We recommend updating all product data directly through Magento. Google syncs your product data updates and new products using a cron job triggered on save.</p>
<h2>Google Accounts</h2>
</div>
</div>

### Q: Do I need to create accounts before installing?

No, the [Onboarding Process](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/onboarding-google.html) walks through everything.

### Q: My account shows errors, what happened?

Your Google Merchant Center account must have a status of Approved. Once approved, Google continues product reviews and approvals and runs any active campaigns. If your account ever has an error, review and resolve quickly. All campaigns and product reviews will pause until the account is approved. We provide a dashboard to review and manage all account information and issues. See [Managing Google Accounts](https://docs.magento.com/m2/ce/user_guide/sales-channels/google-ads/google-account-managment.html).

### Q: Can I update Google account information in Magento?

Yes, you can review and update your GMC account information anytime through Google Shopping ads and the GMC website. Settings for your Google Ads account cannot be changed after creation. You can add and remove accounts as needed.

## Products and Data

### Q: How does communication between Magento and Google work? When are dashboards and data updated?

After onboarding, Magento checks product and account status every 30 minutes for the first 72 hours. It can take Google up to 72 hours to review all products to approve for the Google product catalog. After the first 72 hours, Magento checks once every 24 hours. For complete details, see [Google Best Practices](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/google-faq.html#) and [About Google and Magento Catalogs](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/about-google-magento-catalogs.html).

### Q: When will product changes reach Google?

As you save updates to product, indexers run to pick up changes and send them to Google.

### Q: What happens with Google Ads when I add or remove products?

<div>As you add new products to your Magento product catalog, or add attributes to existing products, we check if those products match configurations for Google. If they match, the new products are automatically synced with Google for approval. Campaigns using filters automatically include any products in the feed that meet the targeting criteria and are Google approved.
<p>If a product is removed or out of stock, it will be removed from Google catalog and ads.</p>
<p>Be advised, Smart Shopping Campaigns have a learning period of two weeks for the Google AI to optimize performance of your ads. Every time you edit and modify a campaign's budget or assigned products, Google requires another two week re-learning period. If you have submitted product data for the first time or significantly updated existing data in your GMC account, Google may take up to two business days to review the new data. As a result, products in your campaigns may take time to also update. </p>
</div>

## Campaign Ads

### Q: What is needed to successfully publish and run Google Ads?

You need the following in Google Shopping ads: a GMC account with Approved status, Google Ads account created and activated using the invite email from Google, a payment method added in Google Ads. The [Onboarding Process](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/onboarding-google.html) walks through everything.

### Q: Can I create campaigns before adding a payment method? What happens when I add a payment method?

Create as many campaigns as you like. If the payment method has not been added, the campaigns publish to Google Ads, show as active in Magento, but do not actively run yet. When you update and add a payment method, and your GMC account is approved with approved products, ads run immediately.

### Q: What types of ads campaigns are supported?

This integration supports [Smart Shopping campaigns](https://support.google.com/google-ads/answer/7674739?hl=en). These ads simplify your campaign management, maximize your conversion value, and expand your reach.

### Q: What languages do campaign ads display in?

<div>If you advertise in multiple countries, ads are shown to users who speak a supported language that is also present in your product data. Google will make a guess about the user's preferred language and matched with that product data.
<p>Google serves and runs ads in all languages you configured when <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/url-verify.html">claiming and verifying your URL</a>. This may increase your costs for running ads.</p>
</div>

### Q: Why are the product totals in my Magento catalog differ than the counts in Google?

Magento tracks the quantity of products including all on-hand inventory amounts, visible and not-visible, and parents for configurable products. Google tracks and displays quantities for approved, visible products only, not including configurable product parents. For campaigns, the amount of products in the ad differs based on campaign criteria and Google product approvals.

### Q: How many products does Google support for ads?

Google allows you to sync and sell up to 150,000 products from your Magento catalog. If you attempt to sell more than 150,000 unique products, Google will disable and reduce the number of active products available. To increase your limit, [contact Google with this form](https://support.google.com/merchants/contact/additional_items).

### Q: What happens with Google Ads when my GMC and/or products are disapproved?

<div>If your GMC account is disapproved, all running ads pause. When the account is resolved, ads run normally. If products are disapproved, ads continue running with all appropriate, approved products. As you resolve product issues and Google approves the products, they may be added to the ad campaign.</div>