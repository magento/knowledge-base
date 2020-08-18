This article explains that most of the payment methods are not displayed on checkout when multiple shipping addresses are specified, because the functionality is only implemented for Cybersource.

### Affected products and versions

*   Magento Commerce, Magento Commerce Cloud, Magento Open Source
*   2.X.X

## Issue

Prerequisites: In the Magento Admin, enable and configure PayPal and Cybersource payment methods, and enable Multishipping for your store.&nbsp;

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   On the storefront, add multiple products to the cart.
2.   Go to the shopping cart page.
3.   Click __Check Out with Multiple Addresses__.
4.   Log in or create account.
5.   Split up products between the addresses on the Ship to Multiple Addresses page.
6.   Click __Go to Shipping Information__.
7.   Select shipping methods for each shipment.
8.   Click __Continue to Billing Information__.

<span class="wysiwyg-underline">Expected result</span>  
 PayPal and Cybersource are available as payment options.

<span class="wysiwyg-underline">Actual result</span>  
 Only Cybersource appears as available payment option.

## Cause&nbsp;

Currently Cybersource is the only supported live payment method for multishipping checkout, starting from version&nbsp;2.2.4.&nbsp;Support for multishipping&nbsp;will likely be built for each payment method one by one. No exact dates or release numbers can be provided at the moment.