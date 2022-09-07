---
title: PayPal Payflow Pro active carding activity
labels: 2.1.x,2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,PayPal,carding,payflow,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

UPDATED 2 April 2019

The PayPal Payflow Pro integration in Adobe Commerce is being actively targeted by carding activity, where attackers attempt hundreds of $0 transactions with stolen credit cards to check the card’s validity.

The activity currently targets versions of this Payflow Pro integration that were included in Adobe Commerce 2.1.x, 2.2.x, 2.3.x for Magento Open Source and Commerce (on-premises and cloud). The carding activity is inherent to the way Payflow Pro is integrated into shopping carts.

>![info]
>
>To help resolve these issues, we have provided new Composer packages to add Google reCAPTCHA or CAPTCHA to the Payflow Pro checkout form. We recommend installing these packages on all Adobe Commerce versions and editions.

The issue affects the following Adobe Commerce versions:

* Adobe Commerce on-premises v2.1.x, 2.2.x, 2.3.x
* Adobe Commerce on cloud infrastructure v2.1.x, 2.2.x, 2.3.x

## Issue

Symptoms of these attacks include:

* Your PayPal Payflow Pro account shows hundreds of fraudulent transactions identified
* PayPal may suspend a Payflow Pro account due to incoming fraud transactions and charge substantial fees

## Solution

To help protect from these attacks, we advise adding Google reCAPTCHA (recommended) or CAPTCHA to the Payflow Pro checkout form. This includes installing the Composer packages and configuring Google reCAPTCHA or CAPTCHA in the Commerce Admin.

### Install Packages

Adobe created two package options to add Google reCAPTCHA and/or CAPTCHA to the Payflow Pro checkout form. Installing one of these packages will update current installations and add an option that can help enhance this security to the Payflow Pro checkout form.

These packages are compatible with the following Adobe Commerce deployments and versions:

Adobe Commerce (all deployment methods) and Magento Open Source 2.1.x, 2.2.x, 2.3.x

Installation requires CLI commands to your Adobe Commerce instance. Developer assistance may be required.

>![info]
>
>We recommend installing and configuring Google reCAPTCHA in addition to installing any relevant Payflow Pro checkout form updates. This option provides an invisible check and multiple configuration options.

#### Install Google reCAPTCHA and checkout form updates

The `magento/module-paypal-recaptcha` package contains integration with Google reCAPTCHA and Payflow Pro payment form updates. Even if you have the reCAPTCHA module installed and configured, we recommend you install this package.

Run the following commands to install it.

**For Adobe Commerce on-premises:**

```bash
composer require magento/module-paypal-recaptcha
bin/magento module:enable Magento_PaypalReCaptcha
bin/magento setup:upgrade
bin/magento cache:clean
```

**For Adobe Commerce on cloud infrastructure:**

1. Run the following command:    

    ```bash
    composer require magento/module-paypal-recaptcha
    ```

1. Commit and push changes:    

    ```bash
    git add -A && git commit -m "Install Google reCAPTCHA"    git push origin %branch_name%
    ```   

1. Wait for deployment to complete.

#### Install checkout form updates for CAPTCHA

The `magento/module-paypal-captcha` package contains integration with the native Adobe Commerce CAPTCHA module.

Run the following commands to install it:

**For Adobe Commerce on-premises:**

```bash
composer require magento/module-paypal-captcha
bin/magento module:enable Magento_PaypalCaptcha
bin/magento setup:upgrade
bin/magento cache:clean
```

**For Adobe Commerce on cloud infrastructure:**

1. Run the following command:    

    ```bash
    composer require magento/module-paypal-captcha
    ```

1. Commit and push changes:    

    ```bash
    git add -A && git commit -m "Install CAPTCHA"    git push origin %branch_name%
    ```

1. Wait for deployment to complete.

### Configure Google reCAPTCHA or CAPTCHA

Having installed the package, configure Google reCAPTCHA (recommended) or CAPTCHA as described in the following docs:

* [Google reCAPTCHA](https://docs.magento.com/user-guide/stores/security-google-recaptcha.html) in our user guide.
* [CAPTCHA](https://docs.magento.com/user-guide/stores/security-captcha.html) in our user guide.

The new checkout form option is:

* Google reCAPTCHA: Use in PayPal Payflow Pro payment form
* CAPTCHA: Payflow Pro

## PayPal support and contacts

Please contact PayPal Payflow Merchant Support to learn more about Fraud Protection Services. You can request the PayPal Support team to enable [Basic Fraud Protection Services](https://developer.paypal.com/api/nvp-soap/payflow/fraud-protection/) filters to provide the tightest control possible over payments so that you can automatically deny payments that are likely to result in fraudulent transactions and accept payments that are not typically a problem. Please note that once you turn on PayPal Fraud Protection Services filters, transactions can take up to 2 hours to settle.

>![info]
>
>For additional information, see PayPal’s KB ["Adobe has contacted me about my Payflow Pro integration. What do I need to do?”](https://www.paypal.com/us/smarthelp/article/ts2242).

**PayPal Payflow Merchant Support Details**

Payflow Merchant Support’s business hours are Monday through Friday from 7:00 AM - 8:00 PM CST. You can contact Payflow Merchant Support for account assistance by phone or email:

* Phone: 1-888-883-9770 (Select prompt 2)
* International customers: 1-408-967-0191
* Email: [payflow-support@paypal.com](mailto:payflow-support@paypal.com)

Australian Support

* Monday-Friday 8:00 AM - 7:00 PM (AU time)
* Phone: +61 2 8288 0198
* Email: [gateway-ausupport@paypal.com](mailto:gateway-ausupport@paypal.com)
