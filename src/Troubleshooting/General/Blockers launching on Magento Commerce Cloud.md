---
title: Blockers launching on Magento Commerce Cloud
labels: Magento Commerce Cloud,Fastly,SSL,VCL,TLS,performance,UAT,troubleshooting
---

This article provides a fix for blockers to launching on Magento Commerce (Cloud) including issues related to Fastly config, SSL certificates, 301 redirects, and static asset performance.

## 1. Fastly Configuration

[Fastly](https://www.fastly.com/) is a Varnish-based Content Delivery Network (CDN) for serving static assets. It is required for Magento Commerce (Cloud) on Production environments, so it's important to configure Fastly and test your website (UAT) with Fastly enabled and configured — on both Staging and Production environments.

<p class="warning">With Full Page Cache (FPC) enabled, your website performs differently; make sure you test it before going live.</p>

The process of Fastly configuration is documented in detail in the [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html) topic on DevDocs. Below are the important steps.

### 1a. Make sure you have the most recent version of the Fastly module installed

Make sure you have the most recent version of the Fastly module installed to get the latest features and improvements. To check if you have the latest version of Fastly review DevDocs' [Upgrade the Fastly module](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#upgrade). For more details review DevDocs' [Set up Fastly](https://devdocs.magento.com/cloud/cdn/configure-fastly.html).

### 1b. Enable and configure Fastly using the Magento Admin

For more details review DevDocs' [Get your Fastly credentials](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#cloud-fastly-creds).

### 1c. Upload Fastly VCL snippets

For more details [Upload VCL to Fastly](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#upload-vcl-snippets). 

You can also [create and add own custom VCL snippets](https://devdocs.magento.com/cloud/cdn/cloud-vcl-custom-snippets.html).

### 1d. Configure DNS for Fastly

Refer to this article for detailed steps: [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#fastly-dns)

### Related Fastly articles on Knowledge Base

* Knowledge Base [Fastly caching is not working on Cloud](https://support.magento.com/hc/en-us/articles/115001853074-Fastly-caching-is-not-working-for-sites-for-Magento-Commerce-Cloud)
* Knowledge Base [Error purging Fastly cache on Cloud (The purge request was not processed successfully)](https://support.magento.com/hc/en-us/articles/115001853194-Fastly-purges-do-not-process-successfully-for-Magento-Commerce-Cloud)

## 1. Valid SSL (TLS) certificate

Problem: Without a valid and working SSL certificate, you cannot test external payment methods on the Checkout page — on the Staging environment.

Recommendation: Request your shared SSL certificate for Staging or Live domain names.

Read about SSL certificates on the Knowledge Base [Quick FAQ](https://support.magento.com/hc/en-us/articles/115004685333).

## 1. Configure and test 301 redirects 

Problem: 301 redirects are not provided or poorly configured, causing your store drop in SEO rankings and search listings.

Recommendation: Carefully configure and test the 301 redirects.

In case you're migrating from an old website to a new one, the 301 redirects lead your customers from the previously indexed old pages to the proper pages on your new store, like this:

http://www.mywebsite.com/old-category-page.html ->  http://www.mywebsite.com/new-seo-friendly-category-page.html

Related articles:

* [Redirects through routes.yaml](http://devdocs.magento.com/guides/v2.2/cloud/project/project-routes-more-redir.html) on DevDocs
* [Redirects through the Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-route) on DevDocs
* [URL Rewrites](http://docs.magento.com/m2/ee/user_guide/marketing/url-rewrite.html) on Magento User Guide

## 1. Asset performance

Problem: Static assets are served slowly so your site has poor performance (long load time, multimedia content not displayed, etc). Static assets of your website are CSS resources, images, videos, attached documents and much more. The way they are organized and served is a key factor in the performance of your site.

Recommendation: To identify possible causes of poor performance consider using [Magento Performance Toolkit](https://github.com/magento/magento2/tree/2.3/setup/performance-toolkit) for performance testing. You could also consider these 3rd party tools:

* [Siege](https://www.joedog.org/siege-home/): HTTP load-testing and benchmarking utility; supports basic authentication, cookies, HTTP, HTTPS and FTP protocols.
* [Jmeter](http://jmeter.apache.org/): A reputable load-testing and performance measuring tool. Helps gauge performance for spiked traffic, e.g., for flash sales.
* [New Relic:](https://support.newrelic.com/) Locates processes and areas of the site causing slow performance with tracked time spent per action, like transmitting data, queries, Redis, etc.
* [WebPageTest](https://www.webpagetest.org/) (free) and [Pingdom](https://www.pingdom.com/) (paid): Real-time analysis of your site pages load time with different origin locations.

You may also consider [minification](https://devdocs.magento.com/cloud/live/sens-data-over.html#cloud-clp-settings) for CSS, JavaScript, and HTML. 

Related articles:

* [Test deployment](http://devdocs.magento.com/guides/v2.2/cloud/live/stage-prod-test.html) on DevDocs