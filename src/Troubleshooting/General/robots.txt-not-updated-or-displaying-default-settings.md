---
title: robots.txt not updated or displaying default settings
labels: Magento Commerce Cloud,Magento Commerce,configuration,robots.txt,default,troubleshooting,settings,2.3.x,2.4.x
---

The article provides a solution for when you have configured `` robots.txt `` correctly, for example per [Best practices for Magento robots.txt](https://support.magento.com/hc/en-us/articles/360048754931) but the `` robots.txt `` is not getting updated or is displaying the default settings.

## Affected products and versions

* Magento Commerce (Cloud) 2.3.x, 2.4.x

## Issue

Cannot change the default `` robots.txt `` setting.

Steps to reproduce:

1. Access the Magento Admin panel.
1. Add content to Content > Design > Configuration > Edit Custom instruction of `` robots.txt `` file such as the text "hello" and save the changes.

Visit the ``  robots.txt `` url.

Expected result:  
`` robots.txt `` has the saved text.  
  
Actual result:

`` robots.txt `` file does not change.

## Cause

Indexing by search engines is turned off.

## Solution

Enable indexing by search engines. See [Configure indexing by search engine](https://devdocs.magento.com/cloud/trouble/robots-sitemap.html#configure-indexing-by-search-engine) in Magento Developer Documentation.

## Related reading

* [DevDocs Add site map and search engine robots](https://devdocs.magento.com/cloud/trouble/robots-sitemap.html)