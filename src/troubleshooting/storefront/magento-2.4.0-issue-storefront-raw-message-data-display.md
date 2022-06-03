---
title: "Adobe Commerce 2.4.0 issue: storefront raw message data display"
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,PHP 7.4.2,cookies,error message,known issues,store,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a solution for the issue when all error messages on the storefront display with a "+" sign instead of a space. This solution helps error messages remain readable.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.0
* Adobe Commerce on-premises 2.4.0.

## Issue

<ins>Steps to reproduce:</ins>

1. Go to Create New Account page on the storefront.
1. Create a new account using a registered email. The following message is displayed:

 `There+is+already+an+account+with+this+email+address.+If+you+are+sure+that+it+is+your+email+address,+click+here+to+get+your+password+and+access+your+account.`

## Cause

The issue is caused by a PHP 7.4.2 issue related to set\\read cookies. See [PHP BUG \#79174 setcookie() encodes space as \`+\`, but $\_COOKIE no longer decodes them](https://bugs.php.net/bug.php?id=79174).

## Solution

To solve this issue, use another version of PHP 7.4.x. PHP 7.4.2 is not supported by Adobe Commerce 2.4.0.

## Related readings in our support knowledge base:

<ul><li><a href="https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout">Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Adobe Commerce 2.4.0</a> </li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work</a> </li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Adobe Commerce 2.4.0 known issue - Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work</a></li>
<div> </div>
</li></ul>
