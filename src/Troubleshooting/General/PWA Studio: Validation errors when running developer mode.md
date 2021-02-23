---
title: PWA Studio: Validation errors when running developer mode
link: https://support.magento.com/hc/en-us/articles/360036928811-PWA-Studio-Validation-errors-when-running-developer-mode
labels: validation,errors,PWA Studio,Venia,how to,environment variables
---

<p>This topic discusses a solution for when validation errors occur when running developer mode in Magento Progressive Web App (PWA) Studio as a result of not previously creating the venia-concept (Venia is a PWA storefront.) environment file. This file will hold the variables for your local development environment.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento PWA Studio</li>
</ul>
<h2>Issue</h2>
<p>Step to reproduce</p>
<ul>
<li>Run developer mode in Magento PWA Studio.</li>
</ul>
<p>Expected result</p>
<ul>
<li>The PWA Studio server starts normally.</li>
</ul>
<p>Actual result</p>
<ul>
<li>You see validation errors, which may look similar to:
<pre><code class="language-clike">  ⓧ  Missing required environment variables:
     MAGENTO_BACKEND_URL: Connect to an instance of Magento 2.3 by specifying its public domain name. (eg.
     "https://master-7rqtwti-mfwmkrjfqvbjk.us-4.magentosite.cloud/")
  ⚠  No .env file in ./packages/venia-concept. Autogenerate a .env file by running the command 'buildpack
     create-env-file ./packages/venia-concept'.<br/></code></pre>
</li>
</ul>
<h2>Cause</h2>
<p>The environment variables file for your local development environment is missing. The file that the below command generates will hold the variables for your local development environment.</p>
<h2>Solution</h2>
<p>Make sure that you run the command</p>
<pre><code class="language-clike">npx @magento/pwa-buildpack create-env-file packages/venia-concept<br/></code></pre>
<p>in the root directory in order to generate the file that will hold the variables for your local development environment.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://magento.github.io/pwa-studio/">Magento PWA Studio Documentation</a></li>
<li><a href="https://magento.github.io/pwa-studio/venia-pwa-concept/">Venia Storefront (Concept)</a></li>
</ul>