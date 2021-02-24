---
title: PayPal troubleshooting on Magento
link: https://support.magento.com/hc/en-us/articles/115003846053-PayPal-troubleshooting-on-Magento
labels: Magento Commerce Cloud,credentials,Magento Commerce,log,PayPal,payment,payflow,crypt,license,advanced,troubleshooting
---

<p>This article provides solutions for issues with processing payments via PayPal, especially the PayFlow Pro solution. Some recommendations in this article may seem obvious. We ask you attempt the troubleshooting options listed in this knowledge base and include all information in any tickets you enter. Magento or PayPal Support Engineers will ask you to perform these steps when diagnosing your issues.</p>
<h2>Common Issues</h2>
<p>Most issues with PayPal payments have similar symptoms: after specifying the payment card details and proceeding to checkout, the payment is not being processed. Instead, there might be an error message, failure to process payment, or even a blank page.</p>
<h2>Verify your credentials, crypt keys, and licenses</h2>
<p>Possible problems: misprints in account details (usernames, passwords), invalid accounts, expired or non-specified licenses, invalid public and personal keys, and many other aspects. To find those problems, you might also need to check your payment configuration settings.</p>
<h2>Apply consistent settings in Magento and PayPal</h2>
<p>Make sure you have applied the same settings and have enabled the same functionalities in both Magento Admin and PayPal account settings.</p>
<h3>Example settings issue<br/>
</h3>
<p>When applying the PayPal Express Checkout solution, transactions based on AVS/CSC responses must be declined in PayPal Manager (Service Settings &gt; Set Up &gt; Security Options) and in Magento Admin (Stores &gt; Configuration &gt; Sales &gt; Payment methods...).<br/><br/><img alt="magento_paypal_settings_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086269091/magento_paypal_settings_2.4.1.png"/><br/><br/>For more info, see the documentation: <a href="https://www.paypalobjects.com/en_US/vhelp/paypalmanager_help/setup.htm">PayPal</a>, <a href="http://docs.magento.com/m2/ee/user_guide/payment/paypal-express-checkout.html">Magento</a>.</p>
<h2>Allow reference transactions</h2>
<p>If your PayPal payment method involves API with <a href="https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECReferenceTxns/">Billing Agreements and Reference Transactions</a>, make sure these are enabled and configured correctly in your settings.</p>
<h3>Additional troubleshooting</h3>
<p>See the following articles:</p>
<ul>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/115002457473">PayPal gateway rejected request - duplicate invoice issue</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360004002914">Change increment ID for new store entity</a></p>
</li>
</ul>
<h2>Contact Support to collect advanced payment logs</h2>
<p>To troubleshoot complicated payment issues, the Magento Support Team may ask you to apply a dedicated patch to enable advanced payment logging. In this case, your steps should be the following:</p>
<p><a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a> with the following details:</p>
<ul>
<li>Specify your issue with as many details as possible</li>
<li>List the steps you attempted from this article, knowledge base, and other resources. Include all results.</li>
<li>Request an Advanced Payment Logging patch (reference number MDVA-4352) and instructions on applying the patch</li>
</ul>
<p>If you receive the Advanced Payment Logging patch:</p>
<ul>
<li>Apply the patch </li>
<li>Collect logs and attach them to your support ticket</li>
<li>Wait for further recommendations from the Magento Support Team</li>
</ul>