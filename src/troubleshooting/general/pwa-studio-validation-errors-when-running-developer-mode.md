---
title: "PWA Studio: Validation errors when running developer mode"
labels: PWA Studio,Venia,environment variables,errors,how to,validation,Adobe Commerce,PWA Studio for Adobe Commerce
---

This topic discusses a solution for when validation errors occur when running developer mode in Progressive Web App (PWA) Studio for Adobe Commerce as a result of not previously creating the venia-concept (Venia is a PWA storefront.) environment file. This file will hold the variables for your local development environment.

## Affected products and versions

* PWA Studio for Adobe Commerce

## Issue

 <ins>Step to reproduce</ins>:

* Run developer mode in PWA Studio for Adobe Commerce.

 <ins>Expected result</ins>:

* The PWA Studio server starts normally.

 <ins>Actual result</ins>:

* You see validation errors, which may look similar to:    

```clike
    ⓧ  Missing required environment variables:         MAGENTO_BACKEND_URL: Connect to an instance of Adobe Commerce 2.3 by specifying its public domain name. (eg.         "https://master-7rqtwti-mfwmkrjfqvbjk.us-4.magentosite.cloud/")      ⚠  No .env file in ./packages/venia-concept. Autogenerate a .env file by running the command 'buildpack         create-env-file ./packages/venia-concept'.    
```    

## Cause

The environment variables file for your local development environment is missing. The file that the below command generates will hold the variables for your local development environment.

## Solution

Make sure that you run the command

```clike
npx @magento/pwa-buildpack create-env-file packages/venia-concept
```

in the root directory in order to generate the file that will hold the variables for your local development environment.

## Related reading

* [PWA Studio for Adobe Commerce Documentation](https://magento.github.io/pwa-studio/)
* [Venia Storefront (Concept)](https://magento.github.io/pwa-studio/venia-pwa-concept/)
