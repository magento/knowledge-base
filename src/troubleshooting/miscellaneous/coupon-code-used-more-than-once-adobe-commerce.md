---
title: Coupon for single use is used multiple times, Adobe Commerce
labels: troubleshooting,coupon,Adobe Commerce,cart price rule,2.4.3-p1,2.4.3-p2,2.4.3
---

This article provides a solution for the issue when cart price rule coupons are not working properly. Merchants set up a coupon for single use and customers are able to use it multiple times.


## Affected products and versions

Adobe Commerce (all deployment methods) 2.4.3 and above

## Issue

Merchants set up a coupon for single use and customers are able to use it multiple times.

<ins>Steps to reproduce</ins>:

1. Create a coupon and configure the coupon to single use.
1. Proceed to checkout.
1. Use the coupon that you just created.
1. Proceed to checkout again and use the same coupon.

<ins>Expected result</ins>:

The coupon can only be used once. A message displays: *The coupon code "COUPON_NAME" is not valid*.

<ins>Actual result</ins>:

The coupon can be used more than once.


## Cause

Merchants do not have `sales.rule.update.coupon.usage` consumer set up and running that results in improper behavior.

## Solution

Add the `sales.rule.update.coupon.usage` consumer to the `app/etc/env.php` file.

```php
...
    'cron_consumers_runner' =>
    array [
        'cron_run' => true,
        'max_messages' => 20000,
        'consumers' =>
        array [
            'sales.rule.update.coupon.usage'
        ]
    ],
...
```
For detailed steps, refer to [Manage message queues > Configuration](https://devdocs.magento.com/guides/v2.4/config-guide/mq/manage-message-queues.html#configuration) in our developer documentation.

## Related reading

[Message Queues Overview](https://devdocs.magento.com/guides/v2.4/config-guide/mq/rabbitmq-overview.html) in our developer documentation.
