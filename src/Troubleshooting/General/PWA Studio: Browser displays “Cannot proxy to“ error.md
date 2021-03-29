---
title: PWA Studio: Browser displays “Cannot proxy to“ error
labels: ENOTFOUND,proxy,NodeJS,browser,hostfile,PWA Studio,how to,hostname
---

This topic discusses a solution when your web browser displays a "_Cannot proxy to_" and the console displays an _<code class="language-clike">ENOTFOUND</code>_ error when using Magento Progressive Web App (PWA) Studio.

### Affected products and versions

* Magento PWA Studio

## Issue

Step to reproduce

* Load your Magento store in a browser.

Expected result

* The Magento store loads normally in your browser.

Actual result

* Your web browser displays the “_Cannot proxy to“_ error and the console displays an _<code class="language-clike">ENOTFOUND</code>_ error.

## Cause

NodeJS cannot resolve the hostname of your Magento store.

## Solution

1. Make sure your Magento store loads in more than one web browser.
1. If you are running a local DNS server or VPN, add an entry to your hostfile (located in `` /etc/hosts ``) and manually map this domain ([Generic instructions on hostfile editing](https://linuxize.com/post/how-to-edit-your-hosts-file/)) so NodeJS can resolve it.

## Related reading

* [Magento PWA Studio Documentation](https://magento.github.io/pwa-studio/)
* [Creating a simple server](https://magento.github.io/pwa-studio/tutorials/hello-upward/simple-server/)
* [Tools and libraries](https://magento.github.io/pwa-studio/technologies/tools-libraries/)