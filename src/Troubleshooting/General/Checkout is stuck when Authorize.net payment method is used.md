This article provides an explanation and fix for the Magento Commerce 2.3.X issue where the checkout gets stuck if Authorize.net is used, with the _'Cannot read property 'length' of null'_&nbsp;error message in the browser console log.

### Affected products and versions

*   Magento Commerce 2.3.X

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   Configure the Authorize.net payment method in the Magento Admin.
2.   Go to the storefront.
3.   Add a product to the cart and&nbsp;proceed to checkout.
4.   Choose Authorize.net as a payment method.
5.   Click __Place Order__.

<span class="wysiwyg-underline">Expected result</span>

The Authorize.net iframe is loaded.

<span class="wysiwyg-underline"> Actual result </span>

Ajax spinner is displayed, and the page never loads. &nbsp;The following JS error is displayed in the browser console log:_ 'Uncaught TypeError: Cannot read property 'length' of null at b (jstest.authorize.net/v1/AcceptCore.js:1)'_

## Cause

One of the most common reasons of this issue is the Public Client Key not being specified in the Authorize.Net configuration in the Magento Admin.

## Solution

Under __Stores__&nbsp;&gt;&nbsp;__Settings__&nbsp;&gt;&nbsp;__Configuration__&nbsp;&gt;&nbsp;__Sales __&gt;&nbsp;__Payment Methods__, in the&nbsp;__Authorize.net__ section, check if the value is specified in the&nbsp;__Public Client Key__ field. If it is empty,&nbsp;enter the key value from your Authorize.Net merchant account.

For the changes to be applied, clean the cache by running <code class="language-bash">bin/magento cache:clean</code>.

## Related reading

*   <a href="https://docs.magento.com/m2/ee/user_guide/payment/authorize-net.html" target="_self">Authorize.net</a> in Magento User Guide.