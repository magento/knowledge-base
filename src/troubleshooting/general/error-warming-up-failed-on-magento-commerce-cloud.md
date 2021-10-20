---
title: "ERROR: Warming up failed on Adobe Commerce on cloud infrastructure"
labels: Magento Commerce Cloud,cache,error,troubleshooting,warming,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when the page cache is warming up and fails with an error:

 *ERROR: Warming up failed: <website link>*

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Issue

Cache warm-up failing.

<ins>Steps to reproduce</ins>:

Start cache warm-up operations.

<ins>Expected result</ins>:

Pages or whole site loads.

<ins>Actual result</ins>:

The site is unavailable or the response time is too high. *ERROR: Warming up failed: <website link>*

## Cause

Cache warm-up doesn't work with HTTP access control enabled.

## Solution

Ensure that you do not have access control enabled: go to the specific branch/environment and click on the **Settings** icon, and check the **HTTP access control** setting - cache warm-up cannot occur in this scenario, and access control has to be disabled.

## Related reading

* [Adobe Commerce User Guide > Full-Page Cache](https://docs.magento.com/user-guide/system/cache-full-page.html) in our user guide.
* [Cache warming up and site unavailable on Adobe Commerce](https://support.magento.com/hc/en-us/articles/360051308371) in our support knowledge base.
