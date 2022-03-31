---
title: PayPal sandbox account not verified
labels: troubleshooting,payment services,adobe commerce,magento,2.4.2-p1,paypal
---

This article explains why your PayPal sandbox account for Payment Services may not be verified, disabling you from completing sandbox onboarding.

## Affected products and versions

* [Payment Services](https://marketplace.magento.com/magento-payment-services.html) is now compatible with Adobe Commerce versions 2.4.0 to 2.4.4.

## Issue

Our [onboarding documentation](https://experienceleague.adobe.com/docs/commerce-merchant-services/payment-services/get-started/onboard.html) instructs you to sign up for a PayPal account, log into the PayPal Developers account, and then create a sandbox account. If you select to create a new account during onboarding in the PayPal onboarding popup window, PayPal will not be able to verify your sandbox account and you will be unable to complete onboarding.

<ins>Steps to reproduce</ins>:

1. You [install Payment Services](https://experienceleague.adobe.com/docs/commerce-merchant-services/payment-services/get-started/install.html) and [configure your Commerce Services](https://experienceleague.adobe.com/docs/commerce-merchant-services/payment-services/get-started/connect.html#configure-commerce-services).
1. You navigate to **Payment Services** in the Admin and [start sandbox onboarding](https://experienceleague.adobe.com/docs/commerce-merchant-services/payment-services/get-started/onboard.html).
1. In the PayPal onboarding popup that appears, you create a new Business account (instead of [logging in with a previously-created PayPal sandbox account](https://experienceleague.adobe.com/docs/commerce-merchant-services/payment-services/get-started/sandbox.html#test-in-sandbox-environment) during onboarding.
1. You successfully complete PayPal onboarding.
1. You see a notification in the Admin that your sandbox payments are pending and that you must confirm your email address with PayPal to complete onboarding.

   You did not receive a confirmation email because PayPal was unable to verify your email address.

## Cause

PayPal will not be able to verify your sandbox account and you will not be able to finish sandbox onboarding (which means you cannot accept payments or test your sandbox mode) if you create your sandbox account before your PayPal account.

## Solution

1. Using a sandbox account created in the [PayPal Developer](https://developer.paypal.com/docs/api-basics/sandbox/accounts/#create-a-business-sandbox-account) Portal.
1. Click [reset sandbox](https://experienceleague.adobe.com/docs/commerce-merchant-services/payment-services/get-started/sandbox.html#test-in-sandbox-environment) and restart your sandbox onboarding.
1. [Contact Support](mailto:payment-services-support@adobe.com) if you cannot alleviate your account issues so that you can resume onboarding and accept payments.

