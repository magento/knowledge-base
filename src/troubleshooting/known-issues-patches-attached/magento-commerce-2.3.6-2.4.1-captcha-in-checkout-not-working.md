---
title: Magento Commerce 2.3.6, 2.4.1 CAPTCHA in checkout not working
labels: 2.3.6,2.4.1,CAPTCHA,CyberSource,Magento Commerce,Magento Commerce Cloud,Magento Open Source,PayFlow Pro,PayPal Express Checkout,order,patch
---

This article provides a patch for the issue where the CAPTCHA feature for checkout does not work as expected on the Place Order page when using third-party payment providers like Paypal Express, Payflow Pro, or CyberSource in Magento.

This known issue is mentioned in DevDocs:

 <span class="wysiwyg-underline">For Magento 2.3.6</span> :

* [Magento Commerce 2.3.6 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.3/release-notes/commerce-2-3-6.html#known-issues)
* [Magento Open Source 2.3.6 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.3/release-notes/open-source-2-3-6.html#known-issues)

 <span class="wysiwyg-underline">For Magento 2.4.1</span> :

* [Magento Commerce 2.4.1 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.4/release-notes/commerce-2-4-1.html#known-issues)
* [Magento Open Source 2.4.1 Release Notes: Known Issues](https://devdocs.magento.com/guides/v2.4/release-notes/open-source-2-4-1.html#known-issues)

## Affected products and versions

Magento Commerce and Magento Open Source 2.3.6 and 2.4.1

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Setup at least one of these payment methods in Magento: Paypal Express, Payflow Pro, or CyberSource.
1. Go to **Admin > Stores > Configuration > Customers > Customer Configuration > CAPTCHA** .

* Set **Enable CAPTCHA on the Storefront** = *Yes* .
* Select in **Forms** : *Checkout/Placing Order* , *Login* , and *Forgot password* .
* Set **Displaying Mode** = *After number of attempts to login* (to make the **Number of Unsuccessful Attempts to Login** setting appear).
* Set **Number of Unsuccessful Attempts to Login** = *0* (to make captcha work all the time).

1. On the frontend, add a product to the cart and try to checkout.

1. On Payment information page, enter captcha and try to checkout with Paypal Express, Payflow Pro, or CyberSource.

 <span class="wysiwyg-underline">Expected result:</span> 

The CAPTCHA feature functions as expected.

 <span class="wysiwyg-underline">Actual result:</span> 

The error message displays: *Please provide CAPTCHA code and try again.* 

## Solution

Apply one of the patches below depending on whether you are on Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.3.6 or 2.4.1.

## Patches

The patches are attached to this article, available for download in both `.composer` and `.git` formats.

To download a patch, scroll down to the end of the article and click the file name, or click one of the following links:

 <span class="wysiwyg-underline">For Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.3.6</span> :

* [Composer patch MDVA-33093\_\_\_\_2\_3\_x-p1\_\_CAPTCHA\_COMPOSER.patch](https://support.magento.com/hc/en-us/article_attachments/360088788131/MDVA-33093____2_3_x-p1__CAPTCHA_COMPOSER.patch)
* [Git patch MDVA-33093\_\_\_\_2\_3\_x-p1\_\_CAPTCHA\_GIT.patch](https://support.magento.com/hc/en-us/article_attachments/360088723432/MDVA-33093____2_3_x-p1__CAPTCHA_GIT.patch)

 <span class="wysiwyg-underline">For Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.4.1</span> :

* [Composer patch MDVA-33093\_\_\_\_2\_4\_x-p1\_\_CAPTCHA\_COMPOSER.patch](https://support.magento.com/hc/en-us/article_attachments/360088788151/MDVA-33093____2_4_x-p1__CAPTCHA_COMPOSER.patch)
* [Git patch MDVA-33093\_\_\_\_2\_4\_x-p1\_\_CAPTCHA\_GIT.patch](https://support.magento.com/hc/en-us/article_attachments/360088723452/MDVA-33093____2_4_x-p1__CAPTCHA_GIT.patch)

These patches are not compatible with any other Magento versions and editions.

## How to apply the patch

 <span class="wysiwyg-underline">Composer patch</span> 

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for composer patch instructions.

 <span class="wysiwyg-underline">Git patch</span> 

* See DevDocs [Applying patches: Custom patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#custom-patches) for git patch instructions for Magento Commerce/Magento Open Source.

## Attached files
