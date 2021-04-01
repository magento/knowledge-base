---
title: robots.txt gives 404 error Magento Commerce Cloud 2.3.x  
labels: Magento Commerce Cloud,robots.txt,nginx,404 error,2.3.x,search engine robots,how to
---

This article provides a fix for when the `` robots.txt `` file throws a 404 error in Magento Commerce Cloud 2.3.x.

## Affected products and versions

Magento Commerce Cloud versions 2.3.x

## Issue

The `` robots.txt `` file is not working and throws a Nginx exception. The `` robots.txt `` file is generated dynamically "on the fly." The `` robots.txt `` file is not accessible by the `` /robots.txt `` URL because Nginx has a rewrite rule which forcibly redirects all `` /robots.txt `` requests to the `` /media/robots.txt `` file that does not exist.

## Cause

This typically happens when Nginx is not configured properly.

## Solution

The solution is to disable the Nginx rule.

[Submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting removal of the Nginx redirect rule from `` /robots.txt `` requests to `` /media/robots.txt ``.

## Related Reading

* [How to block malicious traffic for Magento Commerce Cloud on Fastly level](https://support.magento.com/hc/en-us/articles/360039447892)
* DevDocs' [Add site map and search engine robots](https://devdocs.magento.com/cloud/trouble/robots-sitemap.html)
* MerchDocs' [Search Engine Robots](https://docs.magento.com/user-guide/marketing/search-engine-robots.html)