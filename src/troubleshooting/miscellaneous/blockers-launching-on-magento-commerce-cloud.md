---
title: Blockers launching on Adobe Commerce on cloud infrastructure
labels: Fastly,Magento Commerce Cloud,SSL,TLS,UAT,VCL,performance,troubleshooting,Magento,Adobe Commerce,cloud infrastructure
---

This article provides a fix for blockers to launching on Adobe Commerce on cloud infrastructure including issues related to Fastly config, SSL certificates, 301 redirects, and static asset performance.

## 1. Fastly Configuration

 [Fastly](https://www.fastly.com/) is a Varnish-based Content Delivery Network (CDN) for serving static assets. It is required for Adobe Commerce on cloud infrastructure on Production environments, so it's important to configure Fastly and test your website (UAT) with Fastly enabled and configured — on both Staging and Production environments.

>![warning]
>
>With Full Page Cache (FPC) enabled, your website performs differently; make sure you test it before going live.

The process of Fastly configuration is documented in detail in the [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html) topic in our developer documentation. Below are the important steps.

### 1a. Make sure you have the most recent version of the Fastly module installed

Make sure you have the most recent version of the Fastly module installed to get the latest features and improvements. To check if you have the latest version of Fastly, review [Upgrade the Fastly module](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#upgrade) in our developer documentation. For more details, review [Set up Fastly](https://devdocs.magento.com/cloud/cdn/configure-fastly.html) in our developer documentation.

### 1b. Enable and configure Fastly using the Commerce Admin

For more details, review [Get your Fastly credentials](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#cloud-fastly-creds) in our developer documentation.

### 1c. Upload Fastly VCL snippets

For more details, see [Upload VCL to Fastly](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#upload-vcl-snippets) in our developer documentation.

You can also [create and add own custom VCL snippets](https://devdocs.magento.com/cloud/cdn/cloud-vcl-custom-snippets.html).

### 1d. Configure DNS for Fastly

Refer to this article for detailed steps: [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#fastly-dns) in our developer documentation.

### Related Fastly articles in our support knowledge base

* [Fastly caching is not working on Cloud](https://support.magento.com/hc/en-us/articles/115001853074-Fastly-caching-is-not-working-for-sites-for-Magento-Commerce-Cloud)
* [Error purging Fastly cache on Cloud (The purge request was not processed successfully)](https://support.magento.com/hc/en-us/articles/115001853194-Fastly-purges-do-not-process-successfully-for-Magento-Commerce-Cloud)

## 2. Valid SSL (TLS) certificate

Problem: Without a valid and working SSL certificate, you cannot test external payment methods on the Checkout page — on the Staging environment.

Recommendation **:** Request your shared SSL certificate for Staging or Live domain names.

Read about SSL certificates in this [Quick FAQ](https://support.magento.com/hc/en-us/articles/115004685333) article in our support knowledge base.

## 3. Configure and test 301 redirects

Problem: 301 redirects are not provided or poorly configured, causing your store drop in SEO rankings and search listings.

Recommendation **:** Carefully configure and test the 301 redirects.

In case you're migrating from an old website to a new one, the 301 redirects lead your customers from the previously indexed old pages to the proper pages on your new store, like this:

http://www.mywebsite.com/old-category-page.html **>** http://www.mywebsite.com/new-seo-friendly-category-page.html

 **Related articles:**

* [Redirects through routes.yaml](http://devdocs.magento.com/guides/v2.2/cloud/project/project-routes-more-redir.html) in our developer documentation.
* [Redirects through the Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-route) in our developer documentation.
* [URL Rewrites](http://docs.magento.com/m2/ee/user_guide/marketing/url-rewrite.html) in our user guide.

## 4. Asset performance

Problem: Static assets are served slowly so your site has poor performance (long load time, multimedia content not displayed, etc). Static assets of your website are CSS resources, images, videos, attached documents and much more. The way they are organized and served is a key factor in the performance of your site.

Recommendation: To identify possible causes of poor performance consider using [Adobe Commerce Performance Toolkit](https://github.com/magento/magento2/tree/2.3/setup/performance-toolkit) for performance testing. You could also consider these third-party tools:

* [Siege](https://www.joedog.org/siege-home/) : HTTP load-testing and benchmarking utility; supports basic authentication, cookies, HTTP, HTTPS and FTP protocols.
* [Jmeter](http://jmeter.apache.org/) : A reputable load-testing and performance measuring tool. Helps gauge performance for spiked traffic, e.g., for flash sales.
* [New Relic:](https://support.newrelic.com/) Locates processes and areas of the site causing slow performance with tracked time spent per action, like transmitting data, queries, Redis, etc.
* [WebPageTest](https://www.webpagetest.org/) (free) and [Pingdom](https://www.pingdom.com/) (paid): Real-time analysis of your site pages load time with different origin locations.

You may also consider [minification](https://devdocs.magento.com/cloud/live/sens-data-over.html#cloud-clp-settings) for CSS, JavaScript, and HTML.

 **Related articles:**

* [Test deployment](http://devdocs.magento.com/guides/v2.2/cloud/live/stage-prod-test.html) in our developer documentation.
