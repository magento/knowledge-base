---
title: "PWA Studio: Browser displays “Cannot proxy to“ error"
labels: ENOTFOUND,NodeJS,PWA Studio,browser,hostfile,hostname,how to,proxy,Adobe Commerce,PWA Studio for Adobe Commerce,Progressive Web App Studio
---

This topic discusses a solution when your web browser displays a "*Cannot proxy to*" and the console displays an

```clike
ENOTFOUND
```

error when using Progressive Web App (PWA) Studio for Adobe Commerce.

## Affected products and versions

* PWA Studio for Adobe Commerce

## Issue

<ins>Step to reproduce</ins>:

* Load your Adobe Commerce store in a browser.

<ins>Expected result</ins>:

* The Adobe Commerce store loads normally in your browser.

<ins>Actual result</ins>:

* Your web browser displays the “*Cannot proxy to*“ error and the console displays an error like:  

```clike
    ENOTFOUND    
```


## Cause

NodeJS cannot resolve the hostname of your Adobe Commerce store.

## Solution

1. Make sure your Adobe Commerce store loads in more than one web browser.
1. If you are running a local DNS server or VPN, add an entry to your hostfile (located in `/etc/hosts`) and manually map this domain ([Generic instructions on hostfile editing](https://linuxize.com/post/how-to-edit-your-hosts-file/)) so NodeJS can resolve it.

## Related reading

* [PWA Studio for Adobe Commerce Documentation](https://magento.github.io/pwa-studio/)
* [Tools and libraries](https://magento.github.io/pwa-studio/technologies/tools-libraries/)
