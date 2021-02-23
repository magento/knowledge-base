---
title: PayPal Payflow Pro active carding activity
link: https://support.magento.com/hc/en-us/articles/360025515991-PayPal-Payflow-Pro-active-carding-activity
labels: Magento Commerce Cloud,Magento Commerce,PayPal,payflow,troubleshooting,2.3.x,2.2.x,2.1.x,carding
---

<p>UPDATED 2 April 2019</p>
<p>The PayPal Payflow Pro integration in Magento is being actively targeted by carding activity, where attackers attempt hundreds of $0 transactions with stolen credit cards to check the card’s validity.</p>
<p>The activity currently targets versions of this Payflow Pro integration that were included in Magento 2.1.x, 2.2.x, 2.3.x for Open Source and Commerce (on prem and cloud). The carding activity is inherent to the way Payflow Pro is integrated into shopping carts.</p>
<p class="info">To help resolve these issues, we have provided new Composer packages to add Google reCAPTCHA or CAPTCHA to the Payflow Pro checkout form. We recommend installing these packages on all Magento 2 versions and editions.</p>
<p>The issue affects the following Magento versions:</p>
<ul>
<li>Magento Commerce v2.1.x, 2.2.x, 2.3.x</li>
<li>Magento Commerce Cloud v2.1.x, 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Symptoms of these attacks include:</p>
<ul>
<li>Your PayPal Payflow Pro account shows hundreds of fraudulent transactions identified</li>
<li>PayPal may suspend a Payflow Pro account due to incoming fraud transactions and charge substantial fees</li>
</ul>
<h2>Solution</h2>
<p>To help protect from these attacks, we advise adding Google reCAPTCHA (recommended) or CAPTCHA to the Payflow Pro checkout form. This includes installing the Composer packages and configuring Google reCAPTCHA or CAPTCHA in the Magento Admin.</p>
<h3>Install Packages</h3>
<p>Magento created two package options to add Google reCAPTCHA and/or CAPTCHA to the Payflow Pro checkout form. Installing one of these packages will update current installations and add an option that can help enhance this security to the Payflow Pro checkout form.</p>
<p>These packages are compatible with the following Magento editions and versions:</p>
<ul>
<li>Magento versions: 2.1.x, 2.2.x, 2.3.x </li>
<li>Magento editions: Open Source and Commerce (on prem and cloud) and Commerce Cloud</li>
</ul>
<p>Installation requires CLI commands to your Magento instance. Developer assistance may be required.</p>
<p class="info">We recommend installing and configuring Google reCAPTCHA in addition to installing any relevant Payflow Pro checkout form updates. This option provides an invisible check and multiple configuration options. </p>
<h4>Install Google reCAPTCHA and checkout form updates</h4>
<p>The <code>magento/module-paypal-recaptcha</code> package contains integration with Google reCAPTCHA and Payflow Pro payment form updates. Even if you have the reCAPTCHA module installed and configured, we recommend you install this package.</p>
<p>Run the following commands to install it.</p>
<p>For Magento Commerce:</p>
<pre><code class="language-bash">composer require magento/module-paypal-recaptcha
bin/magento module:enable Magento_PaypalReCaptcha
bin/magento setup:upgrade
bin/magento cache:clean<br/></code></pre>
<p>For Magento Commerce Cloud:</p>
<ol>
<li>Run the following command:
<pre><code class="language-bash">composer require magento/module-paypal-recaptcha</code></pre>
</li>
<li>Commit and push changes:
<pre><code class="language-bash">git add -A &amp;&amp; git commit -m "Install Google reCAPTCHA"
git push origin %branch_name%</code></pre>
</li>
<li>Wait for deployment to complete.</li>
</ol>
<h4>Install checkout form updates for CAPTCHA</h4>
<p>The <code>magento/module-paypal-captcha</code> package contains integration with the native Magento CAPTCHA module.</p>
<p>Run the following commands to install it:</p>
<p>For Magento Commerce:</p>
<pre><code class="language-bash">composer require magento/module-paypal-captcha
bin/magento module:enable Magento_PaypalCaptcha
bin/magento setup:upgrade
bin/magento cache:clean<br/></code></pre>
<p>For Magento Commerce Cloud:</p>
<ol>
<li>Run the following command:
<pre><code class="language-bash">composer require magento/module-paypal-captcha</code></pre>
</li>
<li>Commit and push changes:
<pre><code class="language-bash">git add -A &amp;&amp; git commit -m "Install CAPTCHA"
git push origin %branch_name%</code></pre>
</li>
<li>Wait for deployment to complete.</li>
</ol>
<h3>Configure Google reCAPTCHA or CAPTCHA</h3>
<p>Having installed the package, configure Google reCAPTCHA (recommended) or CAPTCHA as described in the following docs:</p>
<ul>
<li>Google reCAPTCHA links:
<ul>
<li>version 2.3.x: <a href="https://docs.magento.com/m2/ee/user_guide/stores/security-google-recaptcha.html">Commerce</a> | <a href="https://docs.magento.com/m2/ce/user_guide/stores/security-google-recaptcha.html">Open Source</a>
</li>
<li>version 2.2.x: <a href="https://docs.magento.com/m2/2.2/ee/user_guide/stores/security-google-recaptcha.html">Commerce</a> | <a href="https://docs.magento.com/m2/2.2/ce/user_guide/stores/security-google-recaptcha.html">Open Source</a>
</li>
<li>version 2.1.x: <a href="https://docs.magento.com/m2/2.1/ee/user_guide/stores/security-google-recaptcha.html">Commerce</a> | <a href="https://docs.magento.com/m2/2.1/ce/user_guide/stores/security-google-recaptcha.html">Open Source</a>
</li>
</ul>
</li>
<li>CAPTCHA links:
<ul>
<li>version 2.3.x: <a href="https://docs.magento.com/m2/ee/user_guide/stores/security-captcha.html">Commerce</a> | <a href="https://docs.magento.com/m2/ce/user_guide/stores/security-captcha.html">Open Source</a>
</li>
<li>version 2.2.x: <a href="https://docs.magento.com/m2/2.2/ee/user_guide/stores/security-captcha.html">Commerce</a> | <a href="https://docs.magento.com/m2/2.2/ce/user_guide/stores/security-captcha.html">Open Source</a>
</li>
<li>version 2.1.x: <a href="https://docs.magento.com/m2/2.1/ee/user_guide/stores/security-captcha.html">Commerce</a> | <a href="https://docs.magento.com/m2/2.1/ce/user_guide/stores/security-captcha.html">Open Source</a>
</li>
</ul>
</li>
</ul>
<p>The new checkout form option is:</p>
<ul>
<li>Google reCAPTCHA: Use in PayPal PayflowPro payment form </li>
<li>CAPTCHA: Payflow Pro</li>
</ul>
<h2>PayPal support and contacts</h2>
<p>Please contact PayPal Payflow Merchant Support to learn more about Fraud Protection Services. You can request the PayPal Support team to enable <a href="https://developer.paypal.com/docs/classic/payflow/fraud-protection/#how-fraud-protection-services-protect-you">Basic Fraud Protection Services</a> filters to provide the tightest control possible over payments so that you can automatically deny payments that are likely to result in fraudulent transactions and accept payments that are not typically a problem. Please note, that once you turn on PayPal Fraud Protection Services filters, transactions can take up to 2 hours to settle.</p>
<p class="info">For additional information, see PayPal’s KB <a href="https://www.paypal.com/us/smarthelp/article/ts2242">“Magento has contacted me about my Payflow Pro integration. What do I need to do?”</a>.</p>
<p>PayPal Payflow Merchant Support Details</p>
<p>Payflow Merchant Support’s business hours are Monday through Friday from 7:00am-8:00pm CST. You can contact Payflow Merchant Support for account assistance by phone or email:</p>
<ul>
<li>Phone: 1-888-883-9770 (Select prompt 2) </li>
<li>International customers: 1-408-967-0191</li>
<li>Email:<a href="mailto:payflow-support@paypal.com">payflow-support@paypal.com</a>
</li>
</ul>
<p>Australian Support</p>
<ul>
<li>Monday-Friday 8:00 AM - 7:00 PM (AU time)</li>
<li>Phone: +61 2 8288 0198</li>
<li>Email:<a href="mailto:gateway-ausupport@paypal.com">gateway-ausupport@paypal.com</a>
</li>
</ul>
<p> </p>