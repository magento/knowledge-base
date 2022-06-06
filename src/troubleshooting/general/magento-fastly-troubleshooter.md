---
title: Adobe Commerce Fastly troubleshooter
labels: 500 error,DNS,Fastly,Fastly error,Magento Commerce,Magento Commerce Cloud,SSL,TLS,VCL,certificate,configuration,connection,site not loading,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This Fastly troubleshooter for Adobe Commerce users will guide you to the solutions, based on your response about the symptoms you see. Click on the questions to see the next options or answers.

<div class="zd-accordion">
<div id="zd-accordion-1" class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">Customer reports a problem involving Fastly. Is the Fastly service down?</div>
<p class="zd-accordion-text">a. YES – Check <a href="https://status.fastly.com/">Fastly Service Status</a>, and <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit an Adobe Commerce support ticket</a>. <br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.</p>
</div>
 <div id="zd-accordion-2" class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">Run your project URL through the <a href="https://magento-tester.global.ssl.fastly.net/magento-tester/">Backend Tester - Fastly</a>.  It shows the version of VCL configuration file, if the page is cacheable, the version of Fastly module and other useful troubleshooting information. Do you have any errors?</div>
<p class="zd-accordion-text">a. YES – You have the message <em>Plugin VCL version is outdated! Please re-Upload.</em> For the solution to this error, refer to <a href="https://support.magento.com/hc/en-us/articles/360036318311">Fastly Error: Plugin VCL version is outdated! Please re-Upload</a>.<br>
b. NO – <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<div id="zd-accordion-3" class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">Image optimization error?</div>
<p class="zd-accordion-text">a. YES – <a href="https://support.magento.com/hc/en-us/articles/360036557771">Error when enabling image optimization</a>.<br>
b. NO – Check DNS by running in the CLI/terminal: <code>dig [your website.com] + short</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.</p></p>
</div>
<div id="zd-accordion-4" class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">When you ran <code>dig</code> did it return a record pointing to prod.magentocloud.map.fastly.net or one of the following IP addresses (see <a href="https://devdocs.magento.com/cloud/live/site-launch-checklist.html#dns">Update DNS configuration with production setting</a> in our developer documentation):<ul>
<li>151.101.1.124</li>
<li>151.101.65.124</li>
<li>151.101.129.124</li>
<li>151.101.193.124?</li>
</ul></div>
<p class="zd-accordion-text">a. YES – The issue is not DNS related. Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.<br>
b. NO – The issue is likely DNS related. The customer should <a href="https://devdocs.magento.com/cloud/live/site-launch-checklist.html#dns" title="https://devdocs.magento.com/cloud/live/site-launch-checklist.html#dns">check DNS configuration</a> or contact their DNS provider for more information.</p>
</div>
<div id="zd-accordion-5" class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Do you get a "Connection Insecure" or "Not Secure" message returned when running <code>curl -svo /dev/null
                   "https://website.com"</code> in the CLI/terminal? </div>
<p class="zd-accordion-text">a. YES  –  This is likely a certificate issue. Visit the website in a browser and select the lock icon and look for a certificate expiration. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.<br>b. NO – Visit <a href="http://www.fastly-debug.com/">http://fastly-debug.com</a> and share this information in an <a href="https://support.magento.com/hc/en-us/articles/360019088251">Adobe Commerce support ticket</a>.</p>
</div>
<div id="zd-accordion-6"  class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">Is the certificate expired?</div><p class="zd-accordion-text">
a. YES – You need to renew your TLS certificate with the Certificate Authority (CA).<br>
b. NO – You may not have a certificate at all. If you have Adobe Commerce we recommend that you purchase a TLS certificate. If you are on  Adobe Commerce on cloud infrastructure you can have a Domain-Validated Let’s Encrypt SSL/TLS certificate to serve secure HTTPS traffic from Fastly. See <a href="https://devdocs.magento.com/cloud/cdn/configure-fastly.html#provision-ssltls-certificates"> provision SSL/TLS certificates</a> in our developer documentation.</p></div>
<p><a href="#zd-accordion-1">Back to Step 1</a></p>
</div>
