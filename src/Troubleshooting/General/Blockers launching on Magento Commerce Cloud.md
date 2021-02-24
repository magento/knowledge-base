---
title: Blockers launching on Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/115002517274-Blockers-launching-on-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,Fastly,SSL,VCL,TLS,performance,UAT,troubleshooting
---

<p>This article provides a fix for blockers to launching on Magento Commerce (Cloud) including issues related to Fastly config, SSL certificates, 301 redirects, and static asset performance.</p>
<h2>1. Fastly Configuration</h2>
<p><a href="https://www.fastly.com/">Fastly</a> is a Varnish-based Content Delivery Network (CDN) for serving static assets. It is required for Magento Commerce (Cloud) on Production environments, so it's important to configure Fastly and test your website (UAT) with Fastly enabled and configured — on both Staging and Production environments.</p>
<p class="warning">With Full Page Cache (FPC) enabled, your website performs differently; make sure you test it before going live.</p>
<p>The process of Fastly configuration is documented in detail in the <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html">Set up Fastly</a> topic on DevDocs. Below are the important steps.</p>
<h3>1a. Make sure you have the most recent version of the Fastly module installed</h3>
<p>Make sure you have the most recent version of the Fastly module installed to get the latest features and improvements. To check if you have the latest version of Fastly review DevDocs' <a href="https://devdocs.magento.com/cloud/cdn/configure-fastly.html#upgrade">Upgrade the Fastly module</a>. For more details review DevDocs' <a href="https://devdocs.magento.com/cloud/cdn/configure-fastly.html">Set up Fastly</a>.</p>
<h3>1b. Enable and configure Fastly using the Magento Admin</h3>
<p>For more details review DevDocs' <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#cloud-fastly-creds">Get your Fastly credentials</a>.</p>
<h3>1c. Upload Fastly VCL snippets</h3>
<p>For more details <a href="https://devdocs.magento.com/cloud/cdn/configure-fastly.html#upload-vcl-snippets">Upload VCL to Fastly</a>. </p>
<p>You can also <a href="https://devdocs.magento.com/cloud/cdn/cloud-vcl-custom-snippets.html">create and add own custom VCL snippets</a>.</p>
<h3>1d. Configure DNS for Fastly</h3>
<p>Refer to this article for detailed steps: <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#fastly-dns">Set up Fastly</a></p>
<h3>Related Fastly articles on Knowledge Base</h3>
<ul>
<li>Knowledge Base <a href="https://support.magento.com/hc/en-us/articles/115001853074-Fastly-caching-is-not-working-for-sites-for-Magento-Commerce-Cloud">Fastly caching is not working on Cloud</a>
</li>
<li>Knowledge Base <a href="https://support.magento.com/hc/en-us/articles/115001853194-Fastly-purges-do-not-process-successfully-for-Magento-Commerce-Cloud">Error purging Fastly cache on Cloud (The purge request was not processed successfully)</a>
</li>
</ul>
<h2>2. Valid SSL (TLS) certificate</h2>
<p>Problem: Without a valid and working SSL certificate, you cannot test external payment methods on the Checkout page — on the Staging environment.</p>
<p>Recommendation: Request your shared SSL certificate for Staging or Live domain names.</p>
<p>Read about SSL certificates on the Knowledge Base <a href="https://support.magento.com/hc/en-us/articles/115004685333">Quick FAQ</a>.</p>
<h2>3. Configure and test 301 redirects </h2>
<p>Problem: 301 redirects are not provided or poorly configured, causing your store drop in SEO rankings and search listings.</p>
<p>Recommendation: Carefully configure and test the 301 redirects.</p>
<p>In case you're migrating from an old website to a new one, the 301 redirects lead your customers from the previously indexed old pages to the proper pages on your new store, like this:</p>
<p>http://www.mywebsite.com/old-category-page.html  -&gt;  http://www.mywebsite.com/new-seo-friendly-category-page.html</p>
<p>Related articles:</p>
<ul>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-routes-more-redir.html">Redirects through routes.yaml</a> on DevDocs</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-route">Redirects through the Project Web Interface</a> on DevDocs</li>
<li>
<a href="http://docs.magento.com/m2/ee/user_guide/marketing/url-rewrite.html">URL Rewrites</a> on Magento User Guide</li>
</ul>
<h2>4. Asset performance</h2>
<p>Problem: Static assets are served slowly so your site has poor performance (long load time, multimedia content not displayed, etc). Static assets of your website are CSS resources, images, videos, attached documents and much more. The way they are organized and served is a key factor in the performance of your site.</p>
<p>Recommendation: To identify possible causes of poor performance consider using <a href="https://github.com/magento/magento2/tree/2.3/setup/performance-toolkit">Magento Performance Toolkit</a> for performance testing. You could also consider these 3rd party tools:</p>
<ul>
<li>
<a href="https://www.joedog.org/siege-home/">Siege</a>: HTTP load-testing and benchmarking utility; supports basic authentication, cookies, HTTP, HTTPS and FTP protocols.</li>
<li>
<a href="http://jmeter.apache.org/">Jmeter</a>: A reputable load-testing and performance measuring tool. Helps gauge performance for spiked traffic, e.g., for flash sales.</li>
<li>
<a href="https://support.newrelic.com/">New Relic:</a> Locates processes and areas of the site causing slow performance with tracked time spent per action, like transmitting data, queries, Redis, etc.</li>
<li>
<a href="https://www.webpagetest.org/">WebPageTest</a> (free) and <a href="https://www.pingdom.com/">Pingdom</a> (paid): Real-time analysis of your site pages load time with different origin locations.</li>
</ul>
<p>You may also consider <a href="https://devdocs.magento.com/cloud/live/sens-data-over.html#cloud-clp-settings">minification</a> for CSS, JavaScript, and HTML. </p>
<p>Related articles:</p>
<ul>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/live/stage-prod-test.html">Test deployment</a> on DevDocs</li>
</ul>