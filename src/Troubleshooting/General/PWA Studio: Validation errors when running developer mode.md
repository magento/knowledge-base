This topic discusses a solution for when validation errors occur when running developer mode in Magento Progressive Web App (PWA) Studio as a result of not previously creating the venia-concept (Venia is a PWA storefront.) environment file. This file will hold the variables for your local development environment.

### Affected products and versions

*   Magento PWA Studio

## Issue

<span class="wysiwyg-underline">Step to reproduce</span>

*   Run developer mode in Magento PWA Studio.

<span class="wysiwyg-underline">Expected result</span>

*   The PWA Studio server starts normally.

<span class="wysiwyg-underline">Actual result</span>

*   You see validation errors, which may look similar to:
    
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

*   <a href="https://magento.github.io/pwa-studio/" target="_self">Magento PWA Studio Documentation</a>
*   <a href="https://magento.github.io/pwa-studio/venia-pwa-concept/" target="_self">Venia Storefront (Concept)</a>