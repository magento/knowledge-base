This article gives recommendations to start troubleshooting issues with processing payments via PayPal, especially the PayFlow Pro solution.

Some recommendations in this article may seem obvious. We ask you attempt the troubleshooting options listed in this knowledge base and include all information in any tickets you enter. Magento or PayPal Support Engineers will ask you to perform these steps when diagnosing your issues.

## Common Issues

Most issues with PayPal payments have similar symptoms: after specifying the payment card details and proceeding to checkout, the payment is not being processed. Instead, there might be an error message, failure to process payment, or even a blank page.

## <span class="wysiwyg-color-green130">Verify your credentials, crypt keys, and licenses</span>

Possible problems: misprints in account details (usernames, passwords), invalid accounts, expired or non-specified licenses, invalid public and personal keys, and many other aspects. To find those problems, you might also need to check your payment configuration settings.

## <span class="wysiwyg-color-green130">Apply consistent settings in Magento and PayPal</span>

Make sure you have applied the same settings and have enabled the same functionalities in both Magento Admin and PayPal account settings.

### Example settings issue__  
__

When applying the PayPal Express Checkout solution, transactions based on AVS/CSC responses must be declined in __PayPal Manager__ (Service Settings &gt; Set Up &gt; Security Options) and in __Magento Admin__ (Stores &gt; Configuration &gt; Sales &gt; Payment methods...). For more info, see the documentation: [PayPal](https://www.paypalobjects.com/en_US/vhelp/paypalmanager_help/setup.htm), [Magento](http://docs.magento.com/m2/ee/user_guide/payment/paypal-express-checkout.html).

## <span class="wysiwyg-color-green130">Allow reference transactions</span>

If your PayPal payment method involves API with [Billing Agreements and Reference Transactions](https://developer.paypal.com/docs/classic/express-checkout/integration-guide/ECReferenceTxns/), make sure these are enabled and configured correctly in your settings.

### <span class="wysiwyg-color-green130">Additional troubleshooting</span>

See the following articles:

<ul><li>
<p class="article-title" title="PayPal gateway rejected request - duplicate invoice issue"><a href="https://support.magento.com/hc/en-us/articles/115002457473">PayPal gateway rejected request - duplicate invoice issue</a></p>
</li><li>
<p class="article-title" title="Change increment ID for new store entity"><a href="https://support.magento.com/hc/en-us/articles/360004002914">Change increment ID for new store entity</a></p>
</li></ul>

## <span class="wysiwyg-color-green130">Contact Support to collect advanced payment logs</span>

To troubleshoot complicated payment issues, the Magento Support Team may ask you to apply a dedicated patch to enable advanced payment logging. In this case, your steps should be the following:

[Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) with the following details:

*   Specify your issue with as many details as possible
*   List the steps you attempted from this article, knowledge base, and other resources. Include all results.
*   Request an Advanced Payment Logging patch (reference number MDVA-4352) and instructions on applying the patch

If you receive the Advanced Payment Logging patch:

*   Apply the patch&nbsp;
*   Collect logs and attach them to your support ticket
*   Wait for further recommendations from the Magento Support Team