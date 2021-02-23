---
title: Google Shopping ads Channel Troubleshooting
link: https://support.magento.com/hc/en-us/articles/360026926371-Google-Shopping-ads-Channel-Troubleshooting
labels: troubleshooting,Google Shopping
---

<p class="info">The Google Shopping ads Channel bundled extension has reached end-of-life and has been deprecated in Magento core code in Magento Commerce 2.3.5 and 2.3.4-p1. It will not be supported and working anymore.</p>
<p>The following information provides help when you encounter issues, errors, or banner messages with Google Shopping ads. For a searchable help for Google troubleshooting, see this site.</p>
<h2>General Issues</h2>
<h3>
Q: How do I update when I get "New extension update available"?</h3>
<p>When opening Google Shopping ads through the Magento Admin, you may receive a message for a New extension update available. </p>
<p>Click update to check the extension in your account. You can download and install an updated .zip file for the extension. For complete update / upgrade instructions, see <a href="https://devdocs.magento.com/extensions/install/#upgrade-an-extension">Upgrade an extension</a>.</p>
<p><img alt="update.png" src="https://support.magento.com/hc/article_attachments/360026235411/update.png"/></p>
<h3>
Q: My API Key is invalid?
</h3>
<p>Google Shopping ads requires an API key accessible from your Magento web account. If the API key is ever invalid, you can receive an updated key through your Magento web account. If the key is invalid, the following screen displays when opening Google Shopping ads.</p>
<p><img alt="onboard-apikey-error.png" src="https://support.magento.com/hc/article_attachments/360026234991/onboard-apikey-error.png"/></p>
<p>To create a new key and update the Magento Admin:</p>
<ol>
<li>Click Sign in to your Magento account. You may need to log in. A web page opens to Magento Accounts with the API Key tab. </li>
<li>Click Api Portal. For Add Key, enter a description like "Google Shopping ads" and Click Add.</li>
<li>Copy the key.</li>
<li>Return to the Magento Admin and tap Add the key on the Google welcome screen.<br/> A store configuration page opens to Stores &gt; Configuration &gt; Services &gt; Channel.</li>
<li>In the Google Shopping ads section, paste the key you copied for API key.</li>
<li>Tap Save Config.</li>
</ol>
<p> </p>
<h3>
Q: Some of my products are listed as Adult only in Google. How do I fix this?</h3>
<p>When you selected attribute mappings for your Adult-Only products, you may have accidentally selected all products as adult, or mapped an incorrect attribute, or have not updated a new attribute setting.</p>
<ul>
<li>Review and update your Adult-Only attribute setting for Google in your <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/products-edit-mappings.html">Attribute Mappings</a>.</li>
<li>Update the new or mapped Adult-Only attribute added to your Magento product catalog. Google only accepts "True" or "False" for this value. Updates will sync with Google.<br/> Google Merchant Center</li>
</ul>
<h3>
Q: My URL site will not verify or claim?</h3>
<p>During onboarding, you need to <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/url-verify.html">claim and verify</a> your site URL with your new or reused Google Merchant Center (GMC) account. If the URL was claimed in another GMC account, you need to unclaim it to reclaim the URL in Google Shopping ads. When verifying and claiming your URL, Magento attempts the claim process up to five times within an hour after submission. If the URL is not claimed within five attempts, Magento provides a notification with more information.</p>
<p>We recommend reviewing Google's <a href="https://support.google.com/merchants/answer/176793?hl=en">Verify and claim your website URL</a>. The URL could be claimed by another GMC account, or parent account. Or another GMC account received verification before this account. We recommend using administrative Google and GMC accounts for Google Shopping ads.</p>
<p>If you are reusing a GMC account, see <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/gmc-unlink-gmc.html">Unlinking Existing GMC Account</a>. This process walks through removing claimed URLs from an account.</p>
<h3>
Q: I received an error trying to create an attribute after GMC creation and onboarding?</h3>
<p>Depending on timeouts and other factors, Magento may encounter an issue when creating attributes after the GMC Onboarding step. During attribute mapping, you may have selected an option to create a new Magento attribute for Category and Adult-Only. You can create the attribute directly in the Catalog or select another attribute mapping option. To resolve, see <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/products-edit-mappings.html">Editing Attribute Mappings</a>.</p>
<h2>Approvals</h2>
<h3>
Q: How can I resolve product disapprovals?</h3>
<p>Review the following articles and information for <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-resolve-errors.html">resolving your product disapprovals</a> from Google:</p>
<ul>
<li>Your products may break policies on <a href="https://support.google.com/merchants/answer/6149970?hl=en">Prohibited Content</a>.</li>
<li>Ensure your products prices and availability (in or out of stock) match between your online storefront and GMC account. The quantity can differ and does not affect approval. Google uses the Magento Regular Price and Special Price. See Google's <a href="https://support.google.com/merchants/answer/7334523">Troubleshooter: Preemptive product disapproval (price and availability)</a>.</li>
<li>Consider not selling products that require personalization or customization during checkout. See Google's <a href="https://support.google.com/merchants/answer/7553527">Troubleshooter: Personalized goods</a>.</li>
<li>Determine if your products require a GTIN or Unique Product Identifier using Google's <a href="https://support.google.com/merchants/troubleshooter/7540281">decision form</a>.</li>
<li>Images may not display correctly due to a number of possible issues including lag in updating files, caching of old images after you provide new images, images use unsupported formats (JPG, PNG, GIF are supported), image URLs have changed or are incorrect, redirection issues, file size issues, and a few other possibilities. See Google's <a href="https://support.google.com/merchants/answer/160640">Fix images that aren't displaying</a>.</li>
</ul>
<h3>
Q: How can I resolve account disapprovals?</h3>
<p>Your account may be disapproved or suspended due to breaking the Google <a href="https://support.google.com/merchants/answer/160173?hl=en">Terms of Service</a> and policies on <a href="https://support.google.com/merchants/answer/6149970?hl=en">Prohibited Content</a>. Review Google's <a href="https://support.google.com/merchants/answer/2948694">Understanding account suspension</a> and <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/account-resolve-errors.html">resolving your account disapprovals</a> to regain approval of your account.</p>
<h2>Google Ads</h2>
<h3>
Q: I need to add a payment method?</h3>
<p>If you keep seeing a banner message requiring you to accept an invitation email, verify Google Ads account, and add a payment method, make sure you have done the following:</p>
<ul>
<li>Check the email you registered with Google Ads for an invitation email. Open and accept the invite. If you can't find it, visit Google Ads to login or request another invitation. See <a href="https://support.google.com/google-ads/answer/1722062">Google's Signing in to Google Ads</a> for further troubleshooting.</li>
<li>Add a payment method to your Google Ads account in the Billing and Payments section. See <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/acct-settings.html">Account Settings</a> or Google's <a href="https://support.google.com/google-ads/answer/2375433">Choose a payment method</a>.</li>
<li>Update the Google Shopping ads setting in the Magento Admin. See <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/create-campaign.html#AcctSettings">how to update account settings</a>.</li>
<li>If you change or update your payment method in Google Ads, ensure it is approved and updated by Google. Magento will continue publishing campaigns as long as the setting option is checked.</li>
<li>After verifying these settings, log into the Magento Admin and access Google Shopping ads. The banner should be cleared.</li>
</ul>
<h3>
Q: Google ads are not running?</h3>
<p>If you search for your products and check for ads running on Google, and do not find any results, you may have some issues blocking the ads. For more information on ads, see <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/campaigns-manage.html">Managing Ads Campaigns</a>.</p>
<p>Check the following:</p>
<ul>
<li>Your payment method has expired or there is a billing issue. Please check your Google Ads account in the Billing and Payments section. See Google's <a href="https://support.google.com/google-ads/answer/2375433">Choose a payment method</a>.</li>
<li>Your account has an Approved status in the Google Shopping ads dashboard. If it is Pending Approval or Disapproved, your account is effectively paused. Product approvals and ads will not run. Google may require up to 10 days to fully review your accounts and products. If you have a Disapproved account, review and resolve as quickly as possible. Learn more about <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/google-account-managment.html">account approvals</a>.</li>
<li>Your URL has an Unclaimed status. If the URL was claimed in another GMC account, you need to unclaim it to <a href="https://docs.magedevteam.com/eap/google/user_guide/sales-channels/google-ads/url-verify.html">reclaim in Google Shopping ads Channel</a>. When verifying and claiming your URL, Magento attempts the claim process up to five times within an hour after submission. If the URL is not claimed within five attempts, Magento provides a notification with more information. We recommend reviewing Google's <a href="https://support.google.com/merchants/answer/176793?hl=en">Verify and claim your website URL</a>.</li>
<li>Products assigned to the campaign have an Approval status. If the campaign does not have any Google approved products, ads will not run. Learn more about <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-managment.html">product approvals</a>.</li>
<li>Campaign has an Active status. If the campaign is Paused or Ended, ads are not running. </li>
<li>You have updated your products and campaigns, but the time required for Google to receive and review the information has not completed. Magento checks periodically for account and product updates from Google. If you have submitted product data for the first time or significantly updated existing data in your GMC account, Google may take up to two business days to review the new data. As a result, products in your campaigns may take time to also update.</li>
</ul>
<p>To better understand Google Ads issues, see Google's <a href="https://support.google.com/google-ads/answer/6275319">Fix issues with a Shopping campaign</a>.</p>