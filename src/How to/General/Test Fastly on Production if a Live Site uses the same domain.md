---
title: Test Fastly on Production if a Live Site uses the same domain
link: https://support.magento.com/hc/en-us/articles/360003581393-Test-Fastly-on-Production-if-a-Live-Site-uses-the-same-domain
labels: test,production,Magento Commerce Cloud,Fastly,domain,DNS,how to
---

<p>If you have a live site up-and-running on your production domain (<code>example.com</code>) and you need to test your new store on Magento Cloud's Production environment with Fastly CDN enabled, we recommend using the subdomain (like <code>prod.example.com</code>), having previously added it to Fastly, for any pre-launch testing activities. This article discusses the details and provides useful links to the related Magento documentation resources. </p>
<h2>Issue</h2>
<p>Your current store that uses the <code>example.com</code> production domain is live and operating. However, you need to test your new store, built with Magento Commerce (Cloud) and deployed to the Production environment, with the Fastly full page cache service enabled.</p>
<p>The problem is that the Production environment of your Magento Cloud project uses the same live domain (<code>example.com</code>), and you cannot switch your new site to this domain, simultaneously having your current live store running — on the same domain.</p>
<h3>Why use Fastly for testing on Production environment?</h3>
<p>In theory, you could skip using Fastly CDN and test your Magento Cloud store on the Production environment without full page cache enabled.</p>
<p>However, with full page cache enabled, your store performs differently; you never know the real live performance of your site if you have not tested it with CDN before launching. Testing your store on Production with Fastly CDN enabled is the official Magento recommendation.</p>
<h2>Solution: use production subdomain</h2>
<p>Use the first-level subdomain (<code>prod.example.com</code>) for your new Magento Cloud store on the Production environment while keeping the current live site on the base domain (<code>example.com</code>).</p>
<p>When planning your Magento Cloud project, you may specify such a production subdomain and request the Cloud Infrastructure Team to point the subdomain to the Fastly service.</p>
<p>Follow these steps to process the subdomain within your Magento Cloud project:</p>
<ul>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a> requesting to add the subdomain to the Fastly service / Nginx configuration (for Pro plan).</li>
<li>Configure the corresponding DNS settings on your side.</li>
</ul>
<p>After performing the steps for subdomain configuration, you must also take these steps to validate your production domain for the SSL certificate:</p>
<ul>
<li>Upload the DNS TXT record for SSL validation of your production domain.</li>
<li>Submit a support ticket requesting to validate the production domain for the SSL certificate.</li>
</ul>
<p>Using the subdomain allows you to perform a "soft launch" of your store in future — since such launch only requires updating the corresponding DNS settings.</p>
<h2>Related documentation</h2>
<h3>Knowledge Base</h3>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/115004685913">Configure Fastly DNS settings on Staging and Production environments</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360002491773">Set up Fastly for Starter plan on Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/115002517274">Potential blockers for launching on Magento Commerce (Cloud)</a></li>
</ul>
<h3>DevDocs</h3>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html">Fastly Overview</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/live/go-live-checklist.html#dns">Go live checklist: DNS configurations for Fastly</a></li>
</ul>