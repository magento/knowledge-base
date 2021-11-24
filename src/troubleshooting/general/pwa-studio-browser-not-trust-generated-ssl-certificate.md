---
title: "PWA Studio: browser not trust generated SSL certificate"
labels: Magento PWA,troubleshooting,browser,PWA,SSL,certificate,PWA Studio for Adobe Commerce
---

This article provides a solution to an untrusted, generated SSL certificate warning in your browser when you navigate to a local instance of your PWA Studio storefront during development.

## Affected products and versions
PWA Studio for Adobe Commerce

## Issue
The browser does not trust the generated SSL certificate of your local PWA Studio storefront.

## Cause
Browsing to the dev/staging site.

## Solution

In your storefront project, run the command for adding a custom hostname and SSL certificate to your local development instance:

```sh
yarn buildpack create-custom-origin ./
```

Generating certificates is handled by [devcert](https://github.com/davewasmer/devcert). It depends on OpenSSL, so make sure you have a current version of openssl on your system using the following command:

`openssl version`

The version should be 1.0 or above (or LibreSSL 2, in the case of OSX High Sierra).

You can install higher versions of OpenSSL with [Homebrew](https://brew.sh/) on OSX, [Chocolatey](https://chocolatey.org/) on Windows, or your Linux distribution’s package manager.

If you’re running Linux, make sure that `libnss3-tools` (or the equivalent) is installed on your system. Further information provided in this section of the [devcert](https://github.com/davewasmer/devcert#skipcertutil) readme.

Some users have suggested deleting the devcert folder to trigger certificate regeneration.

* For MacOS users, this folder is usually found at: `{{~/Library/Application Support/devcert }}`
* For Windows users, this folder is usually found at: `${User}\AppData\Local\devcert`

## Related reading in our support knowledge base

* [PWA Studio: Self-signed certificate trust error](https://support.magento.com/hc/en-us/articles/360038973172)
* [PWA Studio: Webpack hangs before beginning compilation](https://support.magento.com/hc/en-us/articles/360039475011)
* [PWA Studio: Browser displays “Cannot proxy to“ error](https://support.magento.com/hc/en-us/articles/360036581232)
* [PWA Studio: Validation errors when running developer mode](https://support.magento.com/hc/en-us/articles/360036928811)
