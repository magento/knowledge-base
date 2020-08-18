UPDATED 2 April 2019

The PayPal Payflow Pro integration in Magento is being actively targeted by carding activity, where attackers attempt hundreds of $0 transactions with stolen credit cards to check the card’s validity.

The activity currently targets versions of this Payflow Pro integration that were included in Magento 2.1.x, 2.2.x, 2.3.x for Open Source and Commerce (on prem and cloud). The carding activity is inherent to the way Payflow Pro is integrated into shopping carts.

<p class="info">To help resolve these issues, we have provided new Composer packages&nbsp;<span class="TextRun SCXW86071908 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW86071908 BCX0">to add Google&nbsp;</span></span><span class="TextRun SCXW86071908 BCX0" data-contrast="none" lang="EN-US"><span class="SpellingError CommentStart SCXW86071908 BCX0">reCAPTCHA</span></span><span class="TextRun SCXW86071908 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW86071908 BCX0">&nbsp;or CAPTCHA to the&nbsp;</span></span><span class="TextRun SCXW86071908 BCX0" data-contrast="none" lang="EN-US"><span class="SpellingError SCXW86071908 BCX0">Payflow</span></span><span class="TextRun SCXW86071908 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW86071908 BCX0">&nbsp;Pro checkout form.</span></span><span class="TextRun SCXW86071908 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW86071908 BCX0">&nbsp;We recommend installing these packages on all Magento 2 versions and editions.</span></span></p>

The issue affects the following Magento versions:

*   Magento Open Source v2.1.x, 2.2.x, 2.3.x
*   Magento Commerce v2.1.x, 2.2.x, 2.3.x
*   Magento Commerce Cloud v2.1.x, 2.2.x, 2.3.x

## Issue

Symptoms of these attacks include:

*   Your PayPal Payflow Pro account shows hundreds of fraudulent transactions identified
*   PayPal may suspend a Payflow Pro account due to incoming fraud transactions and charge substantial fees

## Solution

To help protect from these attacks, we advise adding Google reCAPTCHA (recommended) or CAPTCHA to the Payflow Pro checkout form. This includes installing the Composer packages and configuring Google reCAPTCHA or CAPTCHA in the Magento Admin.

### Install Packages

Magento created two package options to add Google reCAPTCHA&nbsp;and/or CAPTCHA&nbsp;to the Payflow Pro checkout form. Installing one of these packages will update current installations and add an option that can help enhance this security to the Payflow Pro checkout form.

These packages are compatible with the following Magento editions and versions:

*   Magento versions: 2.1.x, 2.2.x, 2.3.x&nbsp;
*   Magento editions: Open Source and Commerce (on prem and cloud) and Commerce Cloud

Installation requires CLI commands to your Magento instance. Developer assistance may be required.

<p class="info">We<span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">&nbsp;recommend installing and configuring Google&nbsp;</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="SpellingError SCXW681000 BCX0">reCAPTCHA</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">&nbsp;</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun CommentStart SCXW681000 BCX0">in addition to&nbsp;</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">installing any relevant&nbsp;</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="SpellingError SCXW681000 BCX0">Payflow</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">&nbsp;Pro checkout form updates</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">.</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">&nbsp;This option provides an invisible check&nbsp;</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">and&nbsp;</span></span><span class="TextRun SCXW681000 BCX0" data-contrast="none" lang="EN-US"><span class="NormalTextRun SCXW681000 BCX0">multiple configuration options.</span></span><span class="EOP SCXW681000 BCX0" data-ccp-props='{"335559738":225,"335559739":225}'>&nbsp;</span></p>

#### Install Google reCAPTCHA and checkout form updates

The `` magento/module-paypal-recaptcha `` package contains integration with Google reCAPTCHA and Payflow Pro payment form updates. Even if you have the reCAPTCHA module installed and configured, we recommend you install this package.

Run the following commands to install it.

__For&nbsp;Magento Commerce:__

<pre><code class="language-bash">composer require magento/module-paypal-recaptcha
bin/magento module:enable Magento_PaypalReCaptcha
bin/magento setup:upgrade
bin/magento cache:clean<br/></code></pre>

__For Magento Commerce Cloud:__

1.   Run the following command:
    
    <pre><code class="language-bash">composer require magento/module-paypal-recaptcha</code></pre>
    
    
2.   Commit and push changes:
    
    <pre><code class="language-bash">git add -A &amp;&amp; git commit -m "Install Google reCAPTCHA"
git push origin %branch_name%</code></pre>
    
    
3.   Wait for deployment to complete.

#### Install checkout form updates for CAPTCHA

The `` magento/module-paypal-captcha `` package contains integration with the native Magento&nbsp;CAPTCHA module.

Run the following commands to install it:

__For&nbsp;Magento Commerce:__

<pre><code class="language-bash">composer require magento/module-paypal-captcha
bin/magento module:enable Magento_PaypalCaptcha
bin/magento setup:upgrade
bin/magento cache:clean<br/></code></pre>

__For Magento Commerce Cloud:__

1.   Run the following command:
    
    <pre><code class="language-bash">composer require magento/module-paypal-captcha</code></pre>
    
    
2.   Commit and push changes:
    
    <pre><code class="language-bash">git add -A &amp;&amp; git commit -m "Install CAPTCHA"
git push origin %branch_name%</code></pre>
    
    
3.   Wait for deployment to complete.

### Configure Google reCAPTCHA or CAPTCHA

Having installed the package, configure Google reCAPTCHA (recommended) or CAPTCHA as described in the following docs:

*   Google reCAPTCHA links:
    
    *   version 2.3.x:&nbsp;<a class="external-link" href="https://docs.magento.com/m2/ee/user_guide/stores/security-google-recaptcha.html" rel="nofollow" target="_self">Commerce</a> |&nbsp;<a class="external-link" href="https://docs.magento.com/m2/ce/user_guide/stores/security-google-recaptcha.html" rel="nofollow" target="_self">Open Source</a>
    *   version 2.2.x:&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.2/ee/user_guide/stores/security-google-recaptcha.html" rel="nofollow" target="_self">Commerce</a> |&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.2/ce/user_guide/stores/security-google-recaptcha.html" rel="nofollow" target="_self">Open Source</a>
    *   version 2.1.x:&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.1/ee/user_guide/stores/security-google-recaptcha.html" rel="nofollow" target="_self">Commerce</a> |&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.1/ce/user_guide/stores/security-google-recaptcha.html" rel="nofollow" target="_self">Open Source</a>
    
    
    
*   CAPTCHA links:
    
    *   version 2.3.x:&nbsp;<a class="external-link" href="https://docs.magento.com/m2/ee/user_guide/stores/security-captcha.html" rel="nofollow" target="_self">Commerce</a> |&nbsp;<a class="external-link" href="https://docs.magento.com/m2/ce/user_guide/stores/security-captcha.html" rel="nofollow" target="_self">Open Source</a>
    *   version 2.2.x:&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.2/ee/user_guide/stores/security-captcha.html" rel="nofollow" target="_self">Commerce</a> |&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.2/ce/user_guide/stores/security-captcha.html" rel="nofollow" target="_self">Open Source</a>
    *   version 2.1.x:&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.1/ee/user_guide/stores/security-captcha.html" rel="nofollow" target="_self">Commerce</a> |&nbsp;<a class="external-link" href="https://docs.magento.com/m2/2.1/ce/user_guide/stores/security-captcha.html" rel="nofollow" target="_self">Open Source</a>
    
    
    

The new checkout form option is:

*   Google reCAPTCHA:&nbsp;Use in PayPal PayflowPro payment form&nbsp;
*   CAPTCHA:&nbsp;Payflow Pro

## PayPal support and contacts

Please contact PayPal Payflow Merchant Support&nbsp;to learn more about Fraud Protection Services. You can request the PayPal Support team to enable&nbsp;[Basic Fraud Protection Services](https://developer.paypal.com/docs/classic/payflow/fraud-protection/#how-fraud-protection-services-protect-you)&nbsp;filters to provide the tightest control possible over payments so that you can automatically deny payments that are likely to result in fraudulent transactions and accept payments that are not typically a problem. Please note, that once you turn on PayPal Fraud Protection Services filters, transactions can take up to 2 hours to settle.

<p class="info">For additional information, see PayPal’s KB <a href="https://www.paypal.com/us/smarthelp/article/ts2242">“Magento has contacted me about my Payflow Pro integration. What do I need to do?”</a>.</p>

__PayPal Payflow Merchant Support Details__

Payflow Merchant Support’s business hours are Monday through Friday from 7:00am-8:00pm CST. You can contact Payflow Merchant Support for account assistance by phone or email:

*   Phone: 1-888-883-9770 (Select prompt 2)&nbsp;
*   International customers: 1-408-967-0191
*   Email:[payflow-support@paypal.com](mailto:payflow-support@paypal.com)

Australian Support

*   Monday-Friday 8:00 AM - 7:00 PM (AU time)
*   Phone: +61 2 8288 0198
*   Email:[gateway-ausupport@paypal.com](mailto:gateway-ausupport@paypal.com)

&nbsp;