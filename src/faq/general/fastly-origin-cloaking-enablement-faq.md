---
title: Fastly origin cloaking enablement FAQ
labels: DDoS,FAQ,Fastly,Magento Commerce,Magento Commerce Cloud,REST API,origin cloaking,security,staging,Adobe Commerce,cloud infrastructure
---

This FAQ discusses common questions about Fastly origin cloaking enablement in Adobe Commerce.

## What is Fastly origin cloaking?

Origin cloaking is a security feature that allows Adobe Commerce on cloud infrastructure to block any non-Fastly traffic (to prevent DDoS attacks, going to the cloud infrastructure (origin).

## What are origin cloaking’s benefits?

Origin cloaking is designed to prevent traffic from bypassing the Fastly Web Application Firewall (WAF) and routing it through the strictly defined flow of **Fastly** > **Load Balancer** > **Instances**. With this implementation, all the traffic is guaranteed to go through the Fastly WAF as well as the internal WAF built into the load balancer.

## Why is this origin cloaking enablement happening now?

This feature was newly created to benefit Adobe Commerce on cloud infrastructure.

## Does origin cloaking change the outgoing IP address?

No, it does not.

## Does origin cloaking impact REST API?

Fastly does not cache API calls, so the client should be fine with the change. Origin cloaking only blocks requests that go straight to the origin, such as:

```php
mywebsite.com.c.abcdefghijkl.ent.magento.cloud
```

In this example, the client will still be able to hit the API if they change the URL to ``mywebsite.com``:

```php
mywebsite.com/rest/default/V1/integration/admin/token?username=XXXX&password=XXXXX;
mywebsite.com/rest/default/V1/orders/
mywebsite.com/rest/default/V1/products/
mywebsite.com/rest/default/V1/inventory/source-items
```

## Will this change impact deployment and downtime?

No, this change will **NOT** impact deployment and downtime.

## If the project has multiple stagings, will origin cloaking be applied to all stagings?

Yes, if the project has multiple stagings, the change will be applied to all stagings.
