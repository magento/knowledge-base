---
title: "PWA Studio: browser cannot resolve the .local.pwadev site"
labels: Magento PWA,troubleshooting,browser,PWA,hostfile,PWA Studio for Adobe Commerce
---

This article provides a solution for when another program or process has edited your [host file](https://en.wikipedia.org/wiki/Hosts_(file)) and removed the entry for your project domain.

## Affected products and versions

PWA Studio for Adobe Commerce

## Issue
When browsing to the dev/staging site you cannot see the `.local.pwadev` site.

## Cause
PWA Studio lets you assign a custom hostname and SSL certificate for your project to your local computer. This involves creating a new entry in your computer's hostfile that looks something like `my-storefront-project-abc123.local.pwadev`.

This entry tells any browser on the developer's computer to look at the local storefront project when it accesses that URL. If another program or process came in and removed that entry, the browser would not know where to go and the browser cannot resolve the `.local.pwadev` site.

## Solution

You can [manually edit your hostfile](https://support.rackspace.com/how-to/modify-your-hosts-file/) to add the entry back, but you should examine your other installed software to see what has overwritten the previous change.

## Related reading in our support knowledge base

* [PWA Studio: Self-signed certificate trust error](https://support.magento.com/hc/en-us/articles/360038973172)
* [PWA Studio: Webpack hangs before beginning compilation](https://support.magento.com/hc/en-us/articles/360039475011)
* [PWA Studio: Browser displays “Cannot proxy to“ error](https://support.magento.com/hc/en-us/articles/360036581232)
* [PWA Studio: Validation errors when running developer mode](https://support.magento.com/hc/en-us/articles/360036928811)
