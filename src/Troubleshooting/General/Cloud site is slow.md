---
title: Cloud site is slow
link: https://support.magento.com/hc/en-us/articles/360029728932-Cloud-site-is-slow
labels: Magento Commerce Cloud,Fastly,Cloud,cache,troubleshooting,slow performance
---

<p>This article provides recommendations how to make your Magento Commerce Cloud site better performing under heavy traffic loads, and how to cut this load.</p>
<h3>Affected versions and editions</h3>
<ul>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Visit your Magento store.</li>
<li>Browse a category page.</li>
<li>Add a product to the cart.</li>
</ol>
<p>Expected result</p>
<p>The site is responsive and adding a product to the cart is fast.</p>
<p>Actual result</p>
<p>The site is slow, or the category pages are fast but the cart page is slow.</p>
<h2>Debugging steps and solutions</h2>
<p>Take the following steps to track down the reason of the slow performance and fix it. You can switch the first and second steps, but proceed to blocking IPs only if the cache settings optimization does not help.</p>
<ol>
<li>Check the cache hit rate for the pages with high traffic and reduce the amount of heavily-updated data.</li>
<li>Check the overall site cache hit rate and verify the general cache/Fastly configuration.</li>
<li>Identify the web clients causing the high server load and block IP's causing the high load.</li>
</ol>
<p>The following paragraphs provide more details for each step.</p>
<h3>Step 1: Check the cache hit rate for the pages with high traffic</h3>
<p>The first step to fixing a site bogged down by heavy traffic is to ensure the pages with the heaviest traffic, like the store home page and the top-level category pages, are being cached properly.</p>
<p>You can find out the cache hit rates for these pages by reviewing the <code>X-Cache</code> HTTP headers using cURL, as described in <a href="https://docs.fastly.com/guides/debugging/checking-cache#using-curl">Checking cache using cURL</a> in the Fastly documentation. Or check the same headers using the network tab in the developer toolbar of your favorite web browser.</p>
<p>Fastly generally respects the response headers coming from the application; however, if the headers are all set to "do not cache" and for the page "to expire in the past," Fastly cannot cache the page.</p>
<p class="warning">Note that Fastly changes response headers, so checking the main URL with cURL or the web browser will not necessarily show which headers are being emitted by the application. It’s common for Fastly itself to respond to web browsers with “no cache” headers, but for the web application itself to allow caching and for Fastly to properly cache the item. So the "cache-control" and "pragma" headers information will not be useful in this case.</p>
<h4>Troubleshooting for pages with high traffic</h4>
<p>If the index page has a low hit rate, you can fix it by reducing the amount of heavily-updated data present on that page.</p>
<h3>Step 2: Check the overall site cache hit rate</h3>
<p>To check the overall cache hit rate:</p>
<ol>
<li>
<a href="http://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#cloud-fastly-creds">Get Fastly credentials</a> for your Magento Commerce Cloud environment.</li>
<li>Run the following Linux/macOS cURL command to check the hit rate for your site over the last 30 minutes, replacing <code>&lt;API_TOKEN&gt;</code> and <code>&lt;SERVICE_ID&gt;</code> with the values for your Fastly credentials:
<pre><code class="language-bash">curl -H "Fastly-Key: &lt;API_TOKEN&gt;" https://api.fastly.com/stats/service/&lt;SERVICE_ID&gt;/field/hit_ratio?by=minute | json_pp</code></pre>
You can also check historical hit rates over the last day or month by changing the time range query option from <code>?by=minute</code> to <code>?by=hour</code> or <code>?by=day</code>. For more information on getting Fastly cache stats, see <a href="https://docs.fastly.com/api/stats#Query">Query Options</a> in the Fastly documentation.
<p class="info">The <code>| json_pp</code> option pretty prints the JSON response output using the <code>json_pp</code> utility. If you get a <em>'json_pp not found'</em> error, install the <code>json_pp</code> utility, or use another command line tool for JSON pretty printing. Alternatively, delete the <code>| json_pp</code> parameter and run the command again. The JSON response output is not formatted, but you can run it through a JSON beautifier to clean it up.</p>
</li>
</ol>
<p>A hit rate above 0.90 or 90% indicates that the full-page cache is working.</p>
<p>A hit rate below 0.85 or 85% might indicate a site configuration problem, or you might have a third-party extension installed that does not allow its content to be cached.</p>
<h4>Troubleshooting for overall cache hit rate </h4>
<ol>
<li>Using the hourly and daily hit rate stats, identify when the hit rate started to decrease. If the hit rate suddenly dropped around the same time that you deployed a change to your site, consider rolling back the change until the site load comes down.</li>
<li>Check the configuration in the Magento Admin, under Stores &gt; Configuration &gt;Advanced &gt; System &gt; Full Page Cache. Make sure that TTL for public content value is not set too low.</li>
<li>Make sure you've <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#upload-vcl-snippets">uploaded the VCL snippets</a>.</li>
<li>If you use custom VCL snippets, debug them for correct usage of the "pass" or "pipe" actions: they should be used carefully and at the very least used with a condition of some sort. See <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-vcl-custom-snippets.html">Magento Devdocs article on custom VCL snippets</a> for other tips.</li>
</ol>
<h3>Step 3: Identify the websites causing the high server load</h3>
<p>You can use either of the following methods to get information about the IP addresses accessing your Magento store.</p>
<ul>
<li>Check the HTTP access logs through an SSH session.</li>
<li>Contact Magento Cloud support to request a list of IP addresses causing heavy load on the site.</li>
</ul>
<h4>Check the HTTP access logs</h4>
<p>To view your site's access log, run the following command from your local development environment:</p>
<pre><code class="language-bash">magento-cloud log access </code></pre>
<p>View more lines with the <code class="language-bash">--lines</code> option, for example:</p>
<pre><code class="language-bash">magento-cloud log access --lines=500</code></pre>
<p>You can view this log and check to see if a large portion of requests are coming from a specific IP address. Another way is to use <code>awk</code>, <code>sort</code> and <code>uniq</code> to automatically count the most frequently occurring IP addresses in the log, like the following:</p>
<pre><code class="language-bash">magento-cloud log access --lines 2000 | awk '{print $1}' | sort | uniq -c | sort
  -nr
</code></pre>
<p>If the <code class="language-bash" style="font-size: 15px;">magento-cloud log</code> command doesn't work, you can connect to the remote server with SSH and check the log file at <code>/var/log/access.log</code></p>
<p>After you identify the IP addresses that are causing heavy server load, you can block them by configuring an IP block list from in the Magento Admin panel, under Stores &gt; Configuration &gt; ADVANCED &gt; System &gt; Full Page Cache &gt; Fastly Configuration &gt; Blocking.</p>
<p>If you cannot access your Admin due to heavy load, you can use the Fastly API to set up the blocking rules:</p>
<ol>
<li>Create the ACL as described in the <a href="https://docs.fastly.com/guides/access-control-lists/working-with-acls-using-the-api">Working with ACLs using the API</a> Fastly doc.</li>
<li>In the <code>recv</code> section, create a VCL snippet with the following content, having replaced ACL_NAME_GOES_HERE with the name of the ACL that was created in the previous step:</li>
</ol>
<pre><code>if( req.http.Fastly-Client-IP ~ ACL_NAME_GOES_HERE ) {
  error 403 "Forbidden";
  }</code></pre>
<p>For more information on blocking IP addresses, see the Fastly Magento 2 module guide: <a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/BLOCKING.md">https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/BLOCKING.md</a></p>