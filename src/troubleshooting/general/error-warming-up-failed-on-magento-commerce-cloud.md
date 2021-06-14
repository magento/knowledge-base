---
title: "ERROR: Warming up failed on Magento Commerce Cloud"
labels: "Magento Commerce Cloud,cache,error,troubleshooting,warming"
---

This article provides a solution for when the page cache is warming up and fails with an error:

 *ERROR: Warming up failed: <website link>* 

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) .

## Issue

Cache warmup failing.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

Start cache warm up operations.

 <span class="wysiwyg-underline">Expected result:</span> 

Pages or whole site loads.

 <span class="wysiwyg-underline">Actual result:</span> 

The site is unavailable or the response time is too high. *ERROR: Warming up failed: <website link>* .

## Cause

Cache warmup doesn't work with HTTP access control enabled.

## Solution

Ensure that you do not have access control enabled: go to the specific branch/environment and click on the **Settings** icon, and check the **HTTP access control** setting - cache warmup cannot occur in this scenario and access control has to be disabled.

## Related reading

* [Magento User Guide > Full-Page Cache](https://docs.magento.com/user-guide/system/cache-full-page.html)
* [Cache warming up and site unavailable on Magento](https://support.magento.com/hc/en-us/articles/360051308371)

