The following information provides help when you encounter issues, errors, or banner messages with Google Shopping ads. For a searchable help for Google troubleshooting, see this site.

## General Issues

### <span class="wysiwyg-color-red">Q:&nbsp;</span>How do I update when I get "New extension update available"?

When opening Google Shopping ads through the Magento Admin, you may receive a message for a New extension update available.&nbsp;

Click update to check the extension in your account. You can download and install an updated .zip file for the extension.&nbsp;For complete update / upgrade instructions, see <a href="https://devdocs.magento.com/extensions/install/#upgrade-an-extension" target="_self">Upgrade an extension</a>.

<img alt="update.png" height="215" src="https://support.magento.com/hc/article_attachments/360026235411/update.png" width="649"/>

### <span class="wysiwyg-color-red">Q: </span><span class="wysiwyg-color-black">My API Key is invalid?</span>

Google Shopping ads requires an API key accessible from your Magento web account. If the API key is ever invalid, you can receive an updated key through your Magento web account. If the key is invalid, the following screen displays when opening Google Shopping ads.

<img alt="onboard-apikey-error.png" height="388" src="https://support.magento.com/hc/article_attachments/360026234991/onboard-apikey-error.png" width="714"/>

To create a new key and update the Magento Admin:

1.   Click __Sign in__ to your Magento account. You may need to log in. A web page opens to Magento Accounts with the API Key tab.&nbsp;
2.   Click&nbsp;__Api Portal__. For Add Key, enter a description like "Google Shopping ads" and Click&nbsp;__Add__.
3.   Copy the key.
4.   Return to the Magento Admin and tap __Add the key__ on the Google welcome screen.  
    A store configuration page opens to __Stores__ &gt; __Configuration__ &gt; __Services__ &gt; __Channel__.
5.   In the Google Shopping ads section, paste the key you copied for __API key__.
6.   Tap __Save Config__.

&nbsp;

### <span class="wysiwyg-color-red">Q:</span> Some of my products are listed as Adult only in Google. How do I fix this?

When you selected attribute mappings for your Adult-Only products, you may have accidentally selected all products as adult, or mapped an incorrect attribute, or have not updated a new attribute setting.

*   Review and update your Adult-Only attribute setting for Google in your <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/products-edit-mappings.html" target="_self">Attribute Mappings</a>.
*   Update the new or mapped Adult-Only attribute added to your Magento product catalog. Google only accepts "True" or "False" for this value. Updates will sync with Google.  
    Google Merchant Center

### <span class="wysiwyg-color-red">Q:</span> My URL site will not verify or claim?

During onboarding, you need to <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/url-verify.html" target="_self">claim and verify</a> your site URL with your new or reused Google Merchant Center (GMC) account. If the URL was claimed in another GMC account, you need to unclaim it to reclaim the URL in Google Shopping ads. When verifying and claiming your URL, Magento attempts the claim process up to five times within an hour after submission. If the URL is not claimed within five attempts, Magento provides a notification with more information.

We recommend reviewing Google's <a href="https://support.google.com/merchants/answer/176793?hl=en" target="_self">Verify and claim your website URL</a>. The URL could be claimed by another GMC account, or parent account. Or another GMC account received verification before this account. We recommend using administrative Google and GMC accounts for Google Shopping ads.

If you are reusing a GMC account, see <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/gmc-unlink-gmc.html" target="_self">Unlinking Existing GMC Account</a>. This process walks through removing claimed URLs from an account.

### <span class="wysiwyg-color-red">Q:</span> I received an error trying to create an attribute after GMC creation and onboarding?

Depending on timeouts and other factors, Magento may encounter an issue when creating attributes after the GMC Onboarding step. During attribute mapping, you may have selected an option to create a new Magento attribute for Category and Adult-Only. You can create the attribute directly in the Catalog or select another attribute mapping option. To resolve, see <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/products-edit-mappings.html" target="_self">Editing Attribute Mappings</a>.

## Approvals

### <span class="wysiwyg-color-red">Q:</span> How can I resolve product disapprovals?

Review the following articles and information for <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-resolve-errors.html" target="_self">resolving your product disapprovals</a> from Google:

*   Your products may break policies on <a href="https://support.google.com/merchants/answer/6149970?hl=en" target="_self">Prohibited Content</a>.
*   Ensure your products prices and availability (in or out of stock) match between your online storefront and GMC account. The quantity can differ and does not affect approval. Google uses the Magento Regular Price and Special Price. See Google's <a href="https://support.google.com/merchants/answer/7334523" target="_self">Troubleshooter: Preemptive product disapproval (price and availability)</a>.
*   Consider not selling products that require personalization or customization during checkout. See Google's <a href="https://support.google.com/merchants/answer/7553527" target="_self">Troubleshooter: Personalized goods</a>.
*   Determine if your products require a GTIN or Unique Product Identifier using Google's <a href="https://support.google.com/merchants/troubleshooter/7540281" target="_self">decision form</a>.
*   Images may not display correctly due to a number of possible issues including lag in updating files, caching of old images after you provide new images, images use unsupported formats (JPG, PNG, GIF are supported), image URLs have changed or are incorrect, redirection issues, file size issues, and a few other possibilities. See Google's <a href="https://support.google.com/merchants/answer/160640" target="_self">Fix images that aren't displaying</a>.

### <span class="wysiwyg-color-red">Q:</span> How can I resolve account disapprovals?

Your account may be disapproved or suspended due to breaking the Google <a href="https://support.google.com/merchants/answer/160173?hl=en" target="_self">Terms of Service</a> and policies on <a href="https://support.google.com/merchants/answer/6149970?hl=en" target="_self">Prohibited Content</a>. Review Google's <a href="https://support.google.com/merchants/answer/2948694" target="_self">Understanding account suspension</a> and <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/account-resolve-errors.html" target="_self">resolving your account disapprovals</a> to regain approval of your account.

## Google Ads

### <span class="wysiwyg-color-red">Q:&nbsp;</span>I need to add a payment method?

If you keep seeing a banner message requiring you to accept an invitation email, verify Google Ads account, and add a payment method, make sure you have done the following:

*   Check the email you registered with Google Ads for an invitation email. Open and accept the invite. If you can't find it, visit Google Ads to login or request another invitation. See <a href="https://support.google.com/google-ads/answer/1722062" target="_self">Google's Signing in to Google Ads</a> for further troubleshooting.
*   Add a payment method to your Google Ads account in the Billing and Payments section. See <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/acct-settings.html" target="_self">Account Settings</a> or Google's <a href="https://support.google.com/google-ads/answer/2375433" target="_self">Choose a payment method</a>.
*   Update the Google Shopping ads setting in the Magento Admin. See <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/create-campaign.html#AcctSettings" target="_self">how to update account settings</a>.
*   If you change or update your payment method in Google Ads, ensure it is approved and updated by Google. Magento will continue publishing campaigns as long as the setting option is checked.
*   After verifying these settings, log into the Magento Admin and access Google Shopping ads. The banner should be cleared.

### <span class="wysiwyg-color-red">Q:</span> Google ads are not running?

If you search for your products and check for ads running on Google, and do not find any results, you may have some issues blocking the ads. For more information on ads, see <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/campaigns-manage.html" target="_self">Managing Ads Campaigns</a>.

Check the following:

*   Your payment method has expired or there is a billing issue. Please check your Google Ads account in the Billing and Payments section. See Google's <a href="https://support.google.com/google-ads/answer/2375433" target="_self">Choose a payment method</a>.
*   Your account has an Approved status in the Google Shopping ads dashboard. If it is Pending Approval or Disapproved, your account is effectively paused. Product approvals and ads will not run. Google may require up to 10 days to fully review your accounts and products. If you have a Disapproved account, review and resolve as quickly as possible. Learn more about <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/google-account-managment.html" target="_self">account approvals</a>.
*   Your URL has an Unclaimed status. If the URL was claimed in another GMC account, you need to unclaim it to <a href="https://docs.magedevteam.com/eap/google/user_guide/sales-channels/google-ads/url-verify.html" target="_self">reclaim in Google Shopping ads Channel</a>. When verifying and claiming your URL, Magento attempts the claim process up to five times within an hour after submission. If the URL is not claimed within five attempts, Magento provides a notification with more information. We recommend reviewing Google's <a href="https://support.google.com/merchants/answer/176793?hl=en" target="_self">Verify and claim your website URL</a>.
*   Products assigned to the campaign have an Approval status. If the campaign does not have any Google approved products, ads will not run. Learn more about <a href="https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-managment.html" target="_self">product approvals</a>.
*   Campaign has an Active status. If the campaign is Paused or Ended, ads are not running.&nbsp;
*   You have updated your products and campaigns, but the time required for Google to receive and review the information has not completed. Magento checks periodically for account and product updates from Google. If you have submitted product data for the first time or significantly updated existing data in your GMC account, Google may take up to two business days to review the new data. As a result, products in your campaigns may take time to also update.

To better understand Google Ads issues, see Google's <a href="https://support.google.com/google-ads/answer/6275319" target="_self">Fix issues with a Shopping campaign</a>.