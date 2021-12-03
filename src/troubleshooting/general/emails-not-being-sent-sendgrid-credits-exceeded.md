---
title: Emails not sent when SendGrid credits exceeded on Adobe Commerce
labels: troubleshooting,SendGrid,email,Adobe Commerce,cloud infrastructure,Pro,Starter,Magento,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---
This article provides a solution when your emails are not being sent because you have exceeded your SendGrid credits limit on Adobe Commerce.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.3.0 - 2.3.7-p1, 2.4.0 - 2.4.3

## Issue

SendGrid credits refer to the number of allowed emails that can be sent. Only 12,000 emails can be sent per month from the integration and Staging branches. Credits are renewed at the start of the month, so if you run out of credits, you will have to wait for the renewal.

There are no hard limits on the number of emails that can be sent in Production, as long as the Sender Reputation is over 95%. The reputation is affected by the number of bounced/rejected emails and whether DNS-based spam registries have flagged your domain as a potential spam source. In Production, a total of 12,000 emails are allocated per day, but that number can be extended based on the average number of emails that have been sent in the prior five days.

## How to check if your credits have been exceeded:

Adobe Commerce on cloud infrastructure Pro plan architecture: Check the `/var/log/mail.log` - you might see a message like this:

*May 28 21:13:00 <i-node> postfix/error[21335]: BC7941A2BBF: to=<to@email.com>, relay=none, delay=4642, delays=4642/0.56/0/0.03, dsn=4.0.0, status=deferred (delivery temporarily suspended: SASL authentication failed; server smtp.sendgrid.net[ip address] said: 451 Authentication failed: Maximum credits exceeded)*.

## Cause

There are limits on the number of allowed emails that can be sent.

## Solution

* If you see this message, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) and provide the above message and request the credits to be increased.
* If you do not see this message or you are on Adobe Commerce on cloud infrastructure Starter plan architecture, also [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) and mention that the `mail.log` file does not indicate that the credits have been exceeded.

## Related reading

* [SendGrid](https://devdocs.magento.com/cloud/project/sendgrid.html) in our developer documentation.
