---
title: Site not accessible due to origin cloaking
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,DNS,Fastly,Magento Commerce Cloud,origin,origin cloaking,production,security,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when your Adobe Commerce on cloud infrastructure staging or production site storefront and/or Admin is not accessible.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.3.x, 2.4.x

## Issue

https:&#8203;//mydomain.com.c.&lt;projectid&gt;.magento.cloud/ is no longer accessible.

<ins>Steps to reproduce:</ins>

1. Log in to your project.
1. Click **Access Project** for a list of URLs and SSH.

<ins>Actual results:</ins>

Page fails to load with the following error:

*NET::ERR\_CERT\_INVALID*  *TLS alert, bad certificate (554):*

<ins>Expected results:</ins>

Page loads successfully.

## Cause

Origin Cloaking has been enabled, so the origin is no longer accessible directly.

Origin cloaking is a security feature that allows Adobe Commerce to block any non-Fastly traffic going to the cloud infrastructure (origin) to prevent DDoS attacks.

## Solution

* If your cloud site is live, switch to https://mydomain.com/.
* If you have an active site (non-cloud), using the https://mydomain.com/ domain, set up a sub-domain `mcprod.mydomain.com` and update your **Base URL** to *https://mcprod.mydomain.com* instead, then [point the DNS to Fastly](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#update-dns-configuration-with-development-settings).

## Related reading

[Fastly origin cloaking enablement FAQ](https://support.magento.com/hc/en-us/articles/360055181631) in our support knowledge base.
