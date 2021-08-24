---
title: Emails not sent when SendGrid credits exceeded on Adobe Commerce
labels: troubleshooting,Sengrid,email,Adobe Commerce,cloud infrastructure,Pro,Starter 
---
This article provides a solution for when your emails are not being sent due to your Sendgrid credits having been exceeded.
## Affected products and versions

* Adobe Commerce for Cloud, 2.3.0-2.3.7-p1, 2.4.0-2.4.3

## Issue

SendGrid credits refer to the number of allowed emails that can be sent. Only 12,000 emails can be sent per month from the integration branches. Once you have reached that limit, you will have to wait until the next month to send emails again.
There are no hard limits on the number of emails that can be sent in Production and Staging, as long as the Sender Reputation is over 95%. The reputation is affected by the number of bounced/rejected emails, and whether DNS-based spam registries have flagged your domain as potential spam sources.
In Production, a total of 12,000 emails are allocated per day, but that number can be extended within the same day based on the average number of emails that have been sent in the previous 5 days as long as the reputation is good.

## How to check if your credits have been exceeded:
Commerce on cloud Pro: Check the `/var/log/mail.log` - you might see a message like this:
May 28 21:13:00 i-<project-id> postfix/error[21335]: BC7941A2BBF: to=<to@email.com>, relay=none, delay=4642, delays=4642/0.56/0/0.03, dsn=4.0.0, status=deferred (delivery temporarily suspended: SASL authentication failed; server smtp.sendgrid.net[ip address] said: 451 Authentication failed: Maximum credits exceeded).

## Cause

There are limits on the number of allowed emails that can be sent.
## Solution

* If you see this message, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) and provide the above message and request the credits to be increased.
* If you do not see this message or you are on Commerce on cloud Starter, also [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) and mention that the `mail.log` file does not indicate that the credits have been exceeded.

## Related reading

* [SendGrid](https://devdocs.magento.com/cloud/project/sendgrid.html) in our developer documentation.
