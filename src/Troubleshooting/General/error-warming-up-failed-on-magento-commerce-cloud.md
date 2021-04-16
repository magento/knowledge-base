---
title: ERROR: Warming up failed on Magento Commerce Cloud
labels: Magento Commerce Cloud,cache,error,troubleshooting,warming
---

This article provides a solution for when the page cache is warming up and fails with an error:

_ERROR: Warming up failed: &lt;website link>_

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

Cache warmup failing.

Steps to reproduce:

Start cache warm up operations.

Expected result:

Pages or whole site loads.

Actual result:

The site is unavailable or the response time is too high. _ERROR: Warming up failed: &lt;website link>_.

## Cause

Cache warmup doesn't work with HTTP access control enabled.

## Solution

Ensure that you do not have access control enabled: go to the specific branch/environment and click on the Settings icon, and check the HTTP access control setting - cache warmup cannot occur in this scenario and access control has to be disabled. 

## Related reading

* [Magento User Guide > Full-Page Cache](https://docs.magento.com/user-guide/system/cache-full-page.html)
* [Cache warming up and site unavailable on Magento](https://support.magento.com/hc/en-us/articles/360051308371)