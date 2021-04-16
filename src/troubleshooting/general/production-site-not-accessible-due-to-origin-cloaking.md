---
title: Production site not accessible due to origin cloaking
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,DNS,Fastly,Magento Commerce Cloud,origin,origin cloaking,production,security,troubleshooting
---

This article provides a solution for when your Magento Commerce Cloud production site store front and/or Admin is not accessible.

## Affected products and versions

* Magento Commerce Cloud 2.3.x, 2.4.x

## Issue

https://mydomain.com.c.&lt;projectid>.magento.cloud/ is no longer accessible.

Steps to reproduce

1. Log in to your project.
1. Click Access Project for a list of URLs and SSH.

Actual results:  
Page fails to load with the following error:

_NET::ERR\_CERT\_INVALID_  
_TLS alert, bad certificate (554):_

Expected results:

Page loads successfully.

## Cause

Origin Cloaking has been enabled so the Origin is no longer accessible directly.

Origin cloaking is a security feature that allows Magento Commerce to block any non-Fastly traffic going to the Cloud infrastructure (origin) to prevent DDoS attacks.

## Solution

* If your Cloud site is live, switch to https://mydomain.com/.
* If you have an active site (non-Cloud) using the https://mydomain.com/ domain, set up a subdomain mcprod.mydomain.com  and update your Base URL to _https://mcprod.mydomain.com_ instead, then [point the DNS to Fastly](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#update-dns-configuration-with-development-settings). 

## Related reading

[Fastly origin cloaking enablement FAQ](https://support.magento.com/hc/en-us/articles/360055181631)