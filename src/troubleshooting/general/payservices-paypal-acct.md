---
title: PayPal sandbox account not verified
labels: troubleshooting,payment services,adobe commerce,magento,2.4.2-p1,paypal
---

This article explains why your PayPal sandbox account for Payment Services may not be verified, disabling you from completing sandbox onboarding.

## Affected products and versions

* Adobe Commerce (on-premise) 2.4.2-p1
* Adobe Commerce Cloud 2.4.2-p1
* Magento Open Source 2.4.2-p1
* Payment Services for Adobe Commerce and Magento Open Source, Early Access Program (EAP)

## Issue

Our [onboarding documentation](https://docs-beta.magento.com/user-guide/payment-services/onboard-payments.html) instructs you to sign up for a PayPal account, log into the PayPal Developers account, and then create a sandbox account. If you create a sandbox account *before* signing up for a PayPal account, PayPal will not be able to verify your sandbox account and you will be unable to complete onboarding.

<u>Steps to reproduce</u>:

1. You [install Payment Services](https://devdocs-beta.magento.com/payment-services/install-payments.html) and [configure your Commerce Services](https://docs-beta.magento.com/user-guide/payment-services/onboard-payments.html#configure-commerce-services).
1. You create a sandbox account *before* creating, or logging in to an existing, PayPal account (per [our user guide documentation](https://docs-beta.magento.com/user-guide/payment-services/onboard-payments.html#enable-sandbox-testing)).
1. You navigate to Payment Services in the Admin and proceed with and complete sandbox onboarding.
1. You see a notification in the Admin that your sandbox payments are pending and that you must confirm your email address with PayPal to complete onboarding.

   You did not receive a confirmation email because PayPal was unable to verify your email address.

1. You must [contact Support](mailto:payment-services-support@adobe.com) to alleviate your account issues so that you can resume onboarding and accept payments.

## Cause

PayPal will not be able to verify your sandbox account and you will not be able to finish sandbox onboarding (which means you cannot accept payments or test your sandbox mode) if you create your sandbox account before your PayPal account.

## Solution

Follow the instructions in our [Onboarding user guide]((https://docs-beta.magento.com/user-guide/payment-services/onboard-payments.html)) to successfully install and onboard Payment Services.
