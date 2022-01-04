---
title: Google Shopping ads Channel Troubleshooting
labels: Google,Shopping ads,troubleshooting,Adobe Commerce,Magento,update
---

>![info]
>
>The Google Shopping ads Channel bundled extension has reached end-of-life and has been deprecated in Adobe Commerce core code in Adobe Commerce 2.3.5 and 2.3.4-p1. It will not be supported and working anymore.

The following information provides help when you encounter issues, errors, or banner messages with Google Shopping ads. For searchable help for Google troubleshooting, see this site.

## General Issues

### Q: How do I update when I get "New extension update available"?

When opening Google Shopping ads through the Commerce Admin, you may receive a message for a New extension update available.

Click update to check the extension in your account. You can download and install an updated .zip file for the extension. For complete update/upgrade instructions, see [Upgrade an extension](https://devdocs.magento.com/extensions/install/#upgrade-an-extension) in our developer documentation.

![update.png](assets/update.png)

### Q: My API Key is invalid?

Google Shopping ads require an API key accessible from your Adobe Commerce web account. If the API key is ever invalid, you can receive an updated key through your Adobe Commerce web account. If the key is invalid, the following screen displays when opening Google Shopping ads.

![onboard-apikey-error.png](assets/onboard-apikey-error.png)

To create a new key and update the Commerce Admin:

1. Click **Sign in** to your Adobe Commerce account. You may need to log in. A web page opens to Adobe Commerce Accounts with the API Key tab.
1. Click **Api Portal**. For Add Key, enter a description like "Google Shopping ads" and Click **Add**.
1. Copy the key.
1. Return to the Commerce Admin and tap **Add the key** on the Google welcome screen. A store configuration page opens to **Stores** > **Configuration** > **Services** > **Channel**.
1. In the Google Shopping ads section, paste the key you copied for **API key**.
1. Tap **Save Config**.


### Q: Some of my products are listed as Adult only in Google. How do I fix this?

When you selected attribute mappings for your Adult-Only products, you may have accidentally selected all products as adult, or mapped an incorrect attribute, or have not updated a new attribute setting.

* Review and update your Adult-Only attribute setting for Google in your [Attribute Mappings](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/products-edit-mappings.html).
* Update the new or mapped Adult-Only attribute added to your Adobe Commerce product catalog. Google only accepts "True" or "False" for this value. Updates will sync with Google. Google Merchant Center

### Q: My URL site will not verify or claim?

During onboarding, you need to [claim and verify](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/url-verify.html) your site URL with your new or reused Google Merchant Center (GMC) account. If the URL was claimed in another GMC account, you need to unclaim it to reclaim the URL in Google Shopping ads. When verifying and claiming your URL, Adobe Commerce attempts the claim process up to five times within an hour after submission. If the URL is not claimed within five attempts, Adobe Commerce provides a notification with more information.

We recommend reviewing Google's [Verify and claim your website URL](https://support.google.com/merchants/answer/176793?hl=en). The URL could be claimed by another GMC account or parent account. Or another GMC account received verification before this account. We recommend using administrative Google and GMC accounts for Google Shopping ads.

If you are reusing a GMC account, see [Unlinking Existing GMC Account](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/gmc-unlink-gmc.html) in our user guide. This process walks through removing claimed URLs from an account.

### Q: I received an error trying to create an attribute after GMC creation and onboarding?

Depending on timeouts and other factors, Adobe Commerce may encounter an issue when creating attributes after the GMC Onboarding step. During attribute mapping, you may have selected an option to create a new Adobe Commerce attribute for Category and Adult-Only. You can create the attribute directly in the Catalog or select another attribute mapping option. To resolve, see [Editing Attribute Mappings](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/products-edit-mappings.html) in our user guide.

## Approvals

### Q: How can I resolve product disapprovals?

Review the following articles and information for [resolving your product disapprovals](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-resolve-errors.html) from Google:

* Your products may break policies on [Prohibited Content](https://support.google.com/merchants/answer/6149970?hl=en).
* Ensure your products' prices and availability (in or out of stock) match in your online storefront and GMC account. The quantity can differ and does not affect approval. Google uses the Adobe Commerce Regular Price and Special Price. See Google's [Troubleshooter: Preemptive product disapproval (price and availability)](https://support.google.com/merchants/answer/7334523).
* Consider not selling products that require personalization or customization during checkout. See Google's [Troubleshooter: Personalized goods](https://support.google.com/merchants/answer/7553527).
* Determine if your products require a GTIN or Unique Product Identifier using Google's [decision form](https://support.google.com/merchants/troubleshooter/7540281).
* Images may not display correctly due to a number of possible issues, including a lag in updating files, caching of old images after you provide new images, images using unsupported formats (JPG, PNG, GIF are supported), image URLs have changed or are incorrect, redirection issues, file size issues, and a few other possibilities. See Google's [Fix images that aren't displaying](https://support.google.com/merchants/answer/160640).

### Q: How can I resolve account disapprovals?

Your account may be disapproved or suspended due to breaking the Google [Terms of Service](https://support.google.com/merchants/answer/160173?hl=en) and policies on [Prohibited Content](https://support.google.com/merchants/answer/6149970?hl=en). Review Google's [Understanding account suspension](https://support.google.com/merchants/answer/2948694) and [resolving your account disapprovals](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/account-resolve-errors.html) to regain the approval of your account.

## Google Ads

### Q: I need to add a payment method?

If you keep seeing a banner message requiring you to accept an invitation email, verify the Google Ads account, and add a payment method, make sure you have done the following:

* Check the email you registered with Google Ads for an invitation email. Open and accept the invite. If you can't find it, visit Google Ads to log in or request another invitation. See [Google's Signing in to Google Ads](https://support.google.com/google-ads/answer/1722062) for further troubleshooting.
* Add a payment method to your Google Ads account in the Billing and Payments section. See [Account Settings](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/acct-settings.html) or Google's [Choose a payment method](https://support.google.com/google-ads/answer/2375433).
* Update the Google Shopping ads setting in the Commerce Admin. See [how to update account settings](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/create-campaign.html#AcctSettings) in our user guide.
* If you change or update your payment method in Google Ads, ensure it is approved and updated by Google. Adobe will continue publishing campaigns as long as the setting option is checked.
* After verifying these settings, log into the Commerce Admin and access Google Shopping ads. The banner should be cleared.

### Q: Google ads are not running?

If you search for your products and check for ads running on Google and do not find any results, you may have some issues blocking the ads. For more information on ads, see [Managing Ads Campaigns](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/campaigns-manage.html) in our user guide.

Check the following:

* Your payment method has expired, or there is a billing issue. Please check your Google Ads account in the Billing and Payments section. See Google's [Choose a payment method](https://support.google.com/google-ads/answer/2375433).
* Your account has an Approved status in the Google Shopping ads dashboard. If it is Pending Approval or Disapproved, your account is effectively paused. Product approvals and ads will not run. Google may require up to 10 days to fully review your accounts and products. If you have a Disapproved account, review and resolve as quickly as possible. Learn more about [account approvals](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/google-account-managment.html) in our user guide.
* Your URL has an Unclaimed status. If the URL was claimed in another GMC account, you need to unclaim it to reclaim it in the Google Shopping ads Channel. When verifying and claiming your URL, Adobe Commerce attempts the claim process up to five times within an hour after submission. If the URL is not claimed within five attempts, Adobe Commerce provides a notification with more information. We recommend reviewing Google's [Verify and claim your website URL](https://support.google.com/merchants/answer/176793?hl=en).
* Products assigned to the campaign have an Approval status. If the campaign does not have any Google-approved products, ads will not run. Learn more about [product approvals](https://docs.magento.com/m2/ee/user_guide/sales-channels/google-ads/product-managment.html).
* The campaign has Active status. If the campaign is Paused or Ended, ads are not running.
* You have updated your products and campaigns, but the time required for Google to receive and review the information has not been completed. Adobe checks periodically for the account and product updates from Google. If you have submitted product data for the first time or significantly updated existing data in your GMC account, Google may take up to two business days to review the new data. As a result, products in your campaigns may take time to also update.

To better understand Google Ads issues, see Google's [Fix issues with a Shopping campaign](https://support.google.com/google-ads/answer/6275319).
