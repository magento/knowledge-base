Fastly config, SSL certificates, 301 redirects, static asset performance — problems in these areas may block the launch of your shiny new store on Magento Commerce (Cloud).

In this article, Magento Launch Managers and Support Engineers share their real-life experience of preventing those issues.

## Fastly (caching and content delivery)

<span class="wysiwyg-color-red">__Problems:__</span>

*   <span class="wysiwyg-color-black">Fastly not set up or configured for your store on the Production environment</span>
*   <span class="wysiwyg-color-black">your site hasn't been tested on Staging and Production with Fastly enabled and configured   
</span>

<span class="wysiwyg-color-green120">__Recommendation:__</span><span class="wysiwyg-color-black">&nbsp;set up Fastly and test it on both Staging and Production</span>

<a href="https://www.fastly.com/" rel="noopener">Fastly</a>&nbsp;is a Varnish-based Content Delivery Network (CDN) for serving static assets. It is required&nbsp;for Magento Commerce (Cloud) on Production environments, so&nbsp;it's important to configure Fastly and test your website (UAT) with Fastly enabled and configured — on both Staging and Production environments.

<p class="warning">With Full Page Cache (FPC) enabled, your website performs differently; make sure you test it before going live.</p>

The process of Fastly configuration is documented with many details in the [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html) topic on DevDocs. Below are the important steps.

### <span class="wysiwyg-color-orange110">1. Install Fastly in an Integration branch and deploy</span>

<a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#cloud-fastly-setup" rel="noopener" target="_blank">Read on DevDocs</a>

__Fastly__&nbsp;__is not available in the Integration environment__ although it is used in Staging and Production. So, to test your Magento site with Fastly enabled, you need to:

*   Install the Fastly module on your local environment (do not configure it)
*   Push the code to Integration
*   Deploy across to your Staging and Production environments

### <span class="wysiwyg-color-orange110">2. Enable and configure Fastly using the Magento Admin</span>

<a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#cloud-fastly-config" rel="noopener" target="_blank">Read on DevDocs</a>

See also: <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#cloud-fastly-creds" rel="noopener">Get your Fastly credentials</a>.

### <span class="wysiwyg-color-orange110">3. Upload Fastly VCL snippets</span>

<a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#upload-vcl-snippets" rel="noopener" target="_blank">Read on DevDoc</a>

You can also <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#custom-vcl" rel="noopener">create and add own&nbsp;custom VCL snippets</a>.

### <span class="wysiwyg-color-orange110">4. Configure DNS for Fastly</span>

Read the detailed articles:

*   <a href="https://support.magento.com/hc/en-us/articles/115004685913" rel="noopener" target="_blank">Knowledge Base</a>
*   [DevDocs](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#fastly-dns)

### <span class="wysiwyg-color-orange wysiwyg-color-orange110">Related Fastly articles on DevDocs</span>

*   [Fastly Overview](http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html)
*   [Fastly Setup for Magento Cloud](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html)
*   [Custom Fastly Varnish Configuration Language (VCL) snippets](http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html)&nbsp;
*   [Fastly caching troubleshooting](https://support.magento.com/hc/en-us/articles/115001853074-Fastly-caching-is-not-working-for-sites-for-Magento-Commerce-Cloud)
*   [Fastly purge troubleshooting](https://support.magento.com/hc/en-us/articles/115001853194-Fastly-purges-do-not-process-successfully-for-Magento-Commerce-Cloud)

## SSL (TLS) certificate

<span class="wysiwyg-color-red">__Problem:__</span> without a valid and working SSL certificate, you cannot test external payment methods on the Checkout page — on the Staging environment.

<span class="wysiwyg-color-green120">__Recommendation:__</span> request your shared SSL certificate for Staging or Live domain names.

Read about SSL certificates:

*   <a href="https://support.magento.com/hc/en-us/articles/115004685333" rel="noopener" target="_blank">Quick FAQ</a> and <a href="https://support.magento.com/hc/en-us/articles/115001978373" rel="noopener" target="_blank">detailed FAQ</a> (Knowledge Base)
*   <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#fastly-tls" rel="noopener" target="_blank">TLS and Fastly</a> (DevDocs).

## 301 redirects from your previous store

<span class="wysiwyg-color-red">__Problem:__</span><span class="wysiwyg-color-black"> 301 redirects are not provided or poorly configured, causing your store drop in SEO rankings and search listings.</span>

<span class="wysiwyg-color-green120">__Recommendation:__</span><span class="wysiwyg-color-black">&nbsp;carefully configure and test the 301 redirects.</span>

In case you're migrating from an old website to a new one, the 301 redirects lead your Customers from the previously indexed old pages to the proper pages on your new store, like this:

http://www.mywebsite.com/<span class="wysiwyg-color-red">old-category-page.html 

<font color="#009900">-<strong>&gt;&nbsp;</strong></font>

</span>http://www.mywebsite.com/<span class="wysiwyg-color-green120">new-seo-friendly-category-page.html</span>

__Related articles:__

*   <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-routes-more-redir.html" rel="noopener" target="_blank">Redirects through routes.yaml</a>&nbsp;on DevDocs
*   [Redirects through the Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-route) on DevDocs
*   [URL Rewrites](http://docs.magento.com/m2/ee/user_guide/marketing/url-rewrite.html) on Magento User Guide

## Asset performance

__<span class="wysiwyg-color-red">Problem:</span>__&nbsp;S<span class="wysiwyg-color-black">tatic assets are served slowly so your site has poor performance (long load time, multimedia content not displayed, etc).</span>

<span class="wysiwyg-color-green120">__Recommendation:__</span> Provide performance testing and optimization.

Static assets of your website are CSS resources, images, videos, attached documents and much more. The way they are organized and served is a key factor in the performance of your site.

We advise using the&nbsp;<a class="external-link" href="https://github.com/magento/magento2/tree/develop/setup/performance-toolkit" rel="nofollow">Magento Performance Toolkit</a>&nbsp;for performance testing. You could also consider these 3rd party tools:

*   <a class="external-link" href="https://www.joedog.org/siege-home/" rel="nofollow">Siege</a>: HTTP load-testing and benchmarking utility; supports basic authentication, cookies, HTTP, HTTPS and FTP protocols.
*   <a class="external-link" href="http://jmeter.apache.org/" rel="nofollow">Jmeter</a>: A reputable load-testing and performance measuring tool. Helps gauge performance for spiked traffic, e.g., for flash sales.
*   <a class="external-link" href="https://support.newrelic.com/" rel="nofollow">New Relic</a>&nbsp;(__provided__): Locates processes and areas of the site causing slow performance with tracked time spent per action, like transmitting data, queries, Redis, etc.
*   <a class="external-link" href="http://devdocs.magento.com/guides/v2.0/cloud/project/project-integrate-blackfire.html" rel="nofollow">Blackfire</a>&nbsp;(__provided__): Tracks through the issues New Relic finds and helps to dig deeper into specifics. Blackfire profiles the environment and helps locate bottlenecks in-depth: process, method call, query, load, etc.
*   <a class="external-link" href="https://www.webpagetest.org/" rel="nofollow" style="background-color: #ffffff;">WebPageTest</a>&nbsp;(free) and&nbsp;<a class="external-link" href="https://www.pingdom.com/" rel="nofollow" style="background-color: #ffffff;">Pingdom</a>&nbsp;(paid): Real-time analysis of your site pages load time with different origin locations.

You may also consider <a href="http://devdocs.magento.com/guides/v2.2/frontend-dev-guide/themes/js-bundling.html" rel="noopener" target="_blank">minification</a> for CSS, JavaScript, and HTML.

__Related articles:__

*   [Test deployment](http://devdocs.magento.com/guides/v2.2/cloud/live/stage-prod-test.html) on DevDocs