---
title: Magento Commerce v2.3.6or2.4.1 CAPTCHA in checkout not working
link: https://support.magento.com/hc/en-us/articles/360051235772-Magento-Commerce-v2-3-6-2-4-1-CAPTCHA-in-checkout-not-working
labels: Magento Commerce Cloud,Magento Commerce,Magento Open Source,patch,order,PayPal Express Checkout,2.3.6,2.4.1,CyberSource,PayFlow Pro,CAPTCHA
---

This article provides a patch for the issue where the CAPTCHA feature for checkout does not work as expected on the Place Order page when using third-party payment providers like Paypal Express, Payflow Pro, or CyberSource in Magento.

This known issue is mentioned in DevDocs:

For Magento 2.3.6:

* [Magento Commerce 2.3.6 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.3/release-notes/commerce-2-3-6.html#known-issues)
* [Magento Open Source 2.3.6 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.3/release-notes/open-source-2-3-6.html#known-issues)

For Magento 2.4.1:

* [Magento Commerce 2.4.1 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.4/release-notes/commerce-2-4-1.html#known-issues)
* [Magento Open Source 2.4.1 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.4/release-notes/open-source-2-4-1.html#known-issues)

## Affected products and versions

Magento Commerce and Magento Open Source 2.3.6 and 2.4.1

## Issue

Steps to reproduce

1. Setup at least one of these payment methods in Magento: Paypal Express, Payflow Pro, or CyberSource.
1. Go to Admin > Stores > Configuration > Customers > Customer Configuration > CAPTCHA.

* Set Enable CAPTCHA on the Storefront = _Yes_.
* Select in Forms: _Checkout/Placing Order_, _Login_, and _Forgot password_.
* Set Displaying Mode = _After number of attempts to login_ (to make the Number of Unsuccessful Attempts to Login setting appear).
* Set Number of Unsuccessful Attempts to Login = _0_ (to make captcha work all the time).

<li>On the frontend, add a product to the cart and try to checkout.</li>
<li>On Payment information page, enter captcha and try to checkout with Paypal Express, Payflow Pro, or CyberSource.</li>

Expected result:

The CAPTCHA feature functions as expected.

Actual result:

The error message displays: _Please provide CAPTCHA code and try again._

## Solution

Apply one of the patches below depending on whether you are on Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.3.6 or 2.4.1. ## Patches

The patches are attached to this article, available for download in both `` .composer `` and `` .git `` formats.

To download a patch, scroll down to the end of the article and click the file name, or click one of the following links:

For Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.3.6:

* [Composer patch MC-38033\_\_\_2\_3\_x-p1\_\_CAPTCHA\_COMPOSER.patch](https://support.magento.com/hc/en-us/article_attachments/360074568351/MC-38033___2_3_x-p1__CAPTCHA_COMPOSER.patch)
* [Git patch MC-38033\_\_\_2\_3\_x-p1\_\_CAPTCHA\_GIT.patch](https://support.magento.com/hc/en-us/article_attachments/360074377532/MC-38033___2_3_x-p1__CAPTCHA_GIT.patch)

For Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.4.1:

* [Composer patch MC-38072\_\_\_2\_4\_x-p1\_\_CAPTCHA\_COMPOSER.patch](https://support.magento.com/hc/en-us/article_attachments/360074377552/MC-38072___2_4_x-p1__CAPTCHA_COMPOSER.patch)
* [Git patch MC-38072\_\_\_2\_4\_x-p1\_\_CAPTCHA\_GIT.patch](https://support.magento.com/hc/en-us/article_attachments/360074568371/MC-38072___2_4_x-p1__CAPTCHA_GIT.patch)

These patches are not compatible with any other Magento versions and editions.

## How to apply the patch

Composer patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for composer patch instructions.

Git patch

* See DevDocs [Applying patches: Custom patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#custom-patches) for git patch instructions for Magento Commerce/Magento Open Source.

## Attached files