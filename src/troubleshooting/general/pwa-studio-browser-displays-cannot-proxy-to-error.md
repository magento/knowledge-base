---
title: "PWA Studio: Browser displays “Cannot proxy to“ error"
labels: ENOTFOUND,NodeJS,PWA Studio,browser,hostfile,hostname,how to,proxy
---

This topic discusses a solution when your web browser displays a " *Cannot proxy to* " and the console displays an *

```clike
ENOTFOUND
```

* error when using Magento Progressive Web App (PWA) Studio.

### Affected products and versions

* Magento PWA Studio

## Issue

 <span class="wysiwyg-underline">Step to reproduce</span> 

* Load your Magento store in a browser.

 <span class="wysiwyg-underline">Expected result</span> 

* The Magento store loads normally in your browser.

 <span class="wysiwyg-underline">Actual result</span> 

* Your web browser displays the “ *Cannot proxy to“* error and the console displays an *    ```clike    ENOTFOUND    ```    * error.

## Cause

NodeJS cannot resolve the hostname of your Magento store.

## Solution

1. Make sure your Magento store loads in more than one web browser.
1. If you are running a local DNS server or VPN, add an entry to your hostfile (located in `/etc/hosts` ) and manually map this domain ( [Generic instructions on hostfile editing](https://linuxize.com/post/how-to-edit-your-hosts-file/) ) so NodeJS can resolve it.

## Related reading

* [Magento PWA Studio Documentation](https://magento.github.io/pwa-studio/)
* [Creating a simple server](https://magento.github.io/pwa-studio/tutorials/hello-upward/simple-server/)
* [Tools and libraries](https://magento.github.io/pwa-studio/technologies/tools-libraries/)

