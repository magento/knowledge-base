---
title: PWA Studio: Validation errors when running developer mode
link: https://support.magento.com/hc/en-us/articles/360036928811-PWA-Studio-Validation-errors-when-running-developer-mode
labels: validation,errors,PWA Studio,Venia,how to,environment variables
---

This topic discusses a solution for when validation errors occur when running developer mode in Magento Progressive Web App (PWA) Studio as a result of not previously creating the venia-concept (Venia is a PWA storefront.) environment file. This file will hold the variables for your local development environment.

### Affected products and versions

* Magento PWA Studio

## Issue

Step to reproduce

* Run developer mode in Magento PWA Studio.

Expected result

* The PWA Studio server starts normally.

Actual result

* You see validation errors, which may look similar to:
    
    <pre><code class="language-clike">  ⓧ  Missing required environment variables:
     MAGENTO_BACKEND_URL: Connect to an instance of Magento 2.3 by specifying its public domain name. (eg.
     "https://master-7rqtwti-mfwmkrjfqvbjk.us-4.magentosite.cloud/")
  ⚠  No .env file in ./packages/venia-concept. Autogenerate a .env file by running the command 'buildpack
     create-env-file ./packages/venia-concept'.<br/></code></pre>
    
    

## Cause

The environment variables file for your local development environment is missing. The file that the below command generates will hold the variables for your local development environment.

## Solution

Make sure that you run the command

<pre><code class="language-clike">npx @magento/pwa-buildpack create-env-file packages/venia-concept<br/></code></pre>

in the root directory in order to generate the file that will hold the variables for your local development environment.

## Related reading

* [Magento PWA Studio Documentation](https://magento.github.io/pwa-studio/)
* [Venia Storefront (Concept)](https://magento.github.io/pwa-studio/venia-pwa-concept/)