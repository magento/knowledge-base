---
title: Depreciation of Core Magento Payment Integrations
labels: Magento Commerce,security,payment,integrations,FAQ,Depreciation of Core Magento Payment Integrations,PSD2,worldpay,eway,marketplace,2.3.5,extensions,2.3.1,2.x.x,2.3.4,2.3.3,Authorize.Net,CyberSource
---

Due to the Payment Service Directive PSD2 (see details on [Magento DevDocs](https://docs.magento.com/m2/ee/user_guide/stores/compliance-payment-services-directive.html?utm_source=marketo&amp;utm_medium=email&amp;utm_campaign=191107-PR-DM-233-Customer-Launch-Support&amp;mkt_tok=eyJpIjoiTWpVNE1HSTNORGhoTlRZMCIsInQiOiJjZSs2SG5Ic1Y1K0tIZ2MzZEl3T1hRamdGbXplOUFIUlErUGZlSlhzbWk5WE9RVGdrU3h2QTVRNnBvaE83Vjl4V2VLM0lCMzVcL1FlYVJuVlJTRzBLTENQU2x2UXJRZEpPQ0pNSHRmMFlYb1IxVk91ZWg2czNiUHRNeXM5MStTbGsifQ%3D%3D)) and the continued evolution of many APIs, a number of Magento core payment integrations risk becoming outdated and no longer security compliant in the future. To that end, many core payment integrations have been or will soon be deprecated, and we are recommending a transition to their corresponding marketplace extensions. Please read the rest of the article below to review recent deprecations of payment integrations. The below integrations will all be removed from Magento’s 2.4.0 release and have been deprecated from versions of 2.1. <table>
<tbody>
<tr>
<td>Payment Method Integration</td>
<td>Status</td>
<td>Magento Commerce 2.X Recommendation</td>
</tr>
<tr>
<td>Worldpay</td>
<td>2.3.x - <a href="https://docs.magento.com/m2/ee/user_guide/payment/worldpay.html">Deprecated since 2.3.5</a><br/> 2.4.0 - Will be completely removed.</td>
<td>Ask your payment provider what solution they recommend to comply with PSD2 requirements.</td>
</tr>
<tr>
<td>Authorize.net</td>
<td>2.3.x - <a href="https://docs.magento.com/m2/ee/user_guide/payment/authorize-net.html">Deprecated since 2.3.4</a><br/> 2.4.0 - Will be completely removed.</td>
<td>Use the <a href="https://marketplace.magento.com/authorizenet-magento-module-authorizenet.html">official extension</a> from marketplace instead.</td>
</tr>
<tr>
<td>Authorize.net (Direct Post)</td>
<td>2.3.x - <a href="https://docs.magento.com/m2/ee/user_guide/payment/authorize-net-direct-post.html">Deprecated since 2.3.1</a><br/> 2.4.0 - Will be completely removed.</td>
<td>Use the <a href="https://marketplace.magento.com/authorizenet-magento-module-authorizenet.html">official extension</a> from marketplace instead.</td>
</tr>
<tr>
<td>CyberSource</td>
<td>2.3.x - <a href="https://docs.magento.com/m2/ee/user_guide/payment/cybersource.html">Deprecated since 2.3.3</a><br/> 2.4.0 - Will be completely removed.</td>
<td>Use the <a href="https://marketplace.magento.com/cybersource-global-payment-management.html">official extension</a> from marketplace instead.</td>
</tr>
<tr>
<td>eWay</td>
<td>2.3.x - <a href="https://docs.magento.com/m2/ee/user_guide/payment/eway.html">Deprecated since 2.3.3</a><br/> 2.4.0 - Will be completely removed.</td>
<td>Ask your payment provider what solution they recommend to comply with PSD2 requirements.</td>
</tr>
</tbody>
</table>

  
 Please note, that PayPal core payment method integration will not be deprecated or removed and remains supported for all the 2.3.x and 2.4.x releases.

## How to Keep Your Payments Secure Moving Forward

For all Magento Commerce and Open Source deployments still using deprecated payment integrations, please follow the recommendations below in order to make sure that your customers’ payments are secure, that payments are not declined, and to prepare for the upgrade to Magento 2.4.0:

* Install and configure the official payment method extension from [Magento Marketplace](https://marketplace.magento.com/extensions/payments-security/payment-integration.html?_ga=2.108129217.2105547619.1564067043-238341041.1564067043) as mentioned in the table above.
* Disable deprecated payment integrations in Admin (set Enabled config option to _No_) so they are not shown on your storefront as payment options anymore. Make sure that all new orders are paid through the extension integration instead.
* Since the new integration from Marketplace will not be able to process payment transactions made by using a deprecated payment integration, we recommend using both payment methods for some period in parallel; but only for completion of already posted transactions and possible refunds. In order to do that, keep deprecated payment method disabled, but leave all the configuration fields populated.