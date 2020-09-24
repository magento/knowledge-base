This article provides recommendations how to make your Cloud site better performing under heavy traffic loads, and how to cut this load.

### Affected versions and editions

*   Magento Commerce Cloud, all versions

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   Visit your Magento store.
2.   Browse a category page.
3.   Add a product to the cart.

<span class="wysiwyg-underline">Expected result</span>

The site is responsive and adding a product to the cart is fast.

<span class="wysiwyg-underline">Actual result</span>

The site is slow, or the category pages are fast but the cart page is slow.

## Debugging steps and solutions

Take the following steps to track down the reason of the slow performance and fix it. You can switch the first and second steps, but proceed to blocking IPs only if the cache settings optimization does not help.

1.   Check the cache hit rate for the pages with high traffic and reduce the amount of heavily-updated data.
2.   Check the overall site cache hit rate and verify the general cache/Fastly configuration.
3.   Identify the web clients causing the high server load and block IP's causing the high load.

The following paragraphs provide more details for each step.

### Step 1: Check the cache hit rate for the pages with high traffic

The first step to fixing a site bogged down by heavy traffic is to ensure the pages with the heaviest traffic, like the store home page and the top-level category pages, are being cached properly.

You can find out the cache hit rates for these pages by reviewing the `` X-Cache ``&nbsp;HTTP headers using cURL, as described in <a href="https://docs.fastly.com/guides/debugging/checking-cache#using-curl" target="_self">Checking cache using cURL</a>&nbsp;in the Fastly documentation. Or check the same headers using the network tab in the developer toolbar of your favorite web browser.

Fastly generally respects the response headers coming from the application; however, if the headers are all set to "do not cache" and for the page "to expire in the past," Fastly cannot cache the page.

<p class="warning">Note that Fastly changes response headers, so checking the main URL with cURL or the web browser will not necessarily show which headers are being emitted by the application. It’s common for Fastly itself to respond to web browsers with “no cache” headers, but for the web application itself to allow caching and for Fastly to properly cache the item. So the "cache-control" and "pragma" headers information will not be useful in this case.</p>

#### Troubleshooting for pages with high traffic

If the index page has a low hit rate, you can fix it by reducing the amount of heavily-updated data present on that page.

### Step 2: Check the overall site cache hit rate

To check the overall cache hit rate:

<ol><li>
<a href="http://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#cloud-fastly-creds" target="_self">Get Fastly credentials</a>&nbsp;for your Magento Commerce Cloud environment.</li><li>Run the following Linux/macOS cURL command to check the hit rate for your site over the last 30 minutes, replacing <code>&lt;API_TOKEN&gt;</code> and <code>&lt;SERVICE_ID&gt;</code> with the values for your Fastly credentials:
<pre><code class="language-bash">curl -H "Fastly-Key: &lt;API_TOKEN&gt;" https://api.fastly.com/stats/service/&lt;SERVICE_ID&gt;/field/hit_ratio?by=minute | json_pp</code></pre>
You can also check historical hit rates over the last day or month by changing the time range query option from <code>?by=minute</code> to <code>?by=hour</code> or <code>?by=day</code>.&nbsp;For more information on getting Fastly cache stats, see <a href="https://docs.fastly.com/api/stats#Query" target="_self">Query Options</a> in the Fastly documentation.
<p class="info">The <code>| json_pp</code> option pretty prints the JSON response output using the <code>json_pp</code> utility. If you get a <em>'json_pp not found'</em> error, install the <code>json_pp</code> utility, or use another command line tool for JSON pretty printing. Alternatively, delete the <code>| json_pp</code> parameter and run the command again. The JSON response output is not formatted, but you can run it through a JSON beautifier to clean it up.</p>
</li></ol>

A hit rate above 0.90 or 90% indicates that the full-page cache is working.

A hit rate below 0.85 or 85% might indicate a site configuration problem, or you might have a third-party extension installed that does not allow its content to be cached.

#### Troubleshooting for overall cache hit rate&nbsp;

1.   Using the hourly and daily hit rate stats, identify when the hit rate started to decrease. If the hit rate suddenly dropped around the same time that you deployed a change to your site, consider rolling back the change until the site load comes down.
2.   Check the configuration in the Magento Admin, under __Stores__ &gt; __Configuration__ &gt;Advanced &gt;&nbsp;__System__ &gt; __Full Page Cache__. Make sure that __TTL for public content__ value is not set too low.
3.   Make sure you've <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html#upload-vcl-snippets" target="_self">uploaded the VCL snippets</a>.
4.   If you use custom VCL snippets, debug them for correct usage of the&nbsp;"pass" or "pipe" actions: they should be used carefully and at the very least used with a condition of some sort. See <a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-vcl-custom-snippets.html" target="_self">Magento Devdocs article on custom VCL snippets</a> for other tips.

### Step 3:&nbsp;Identify the websites causing the high server load

You can use either of the following methods to get information about the IP addresses accessing your Magento store.

*   Check the HTTP access logs through an SSH session.
*   Contact Magento Cloud support to request a list of IP addresses causing heavy load on the site.

#### Check the HTTP access logs

To view your site's access log, run the following command from your local development environment:

<pre><code class="language-bash">magento-cloud log access </code></pre>

View more lines with the <code class="language-bash">--lines</code> option, for example:

<pre><code class="language-bash">magento-cloud log access --lines=500</code></pre>

You can view this log and check to see if a large portion of requests are coming from a specific IP address. Another way is to use `` awk ``, `` sort `` and `` uniq `` to automatically count the most frequently occurring IP addresses in the log, like the following:

<pre><code class="language-bash">magento-cloud log access --lines 2000 | awk '{print $1}' | sort | uniq -c | sort
  -nr
</code></pre>

If the <code class="language-bash" style="font-size: 15px;">magento-cloud log</code> command doesn't work, you can connect to the remote server with SSH and check the log file at `` /var/log/access.log ``

After you identify the IP addresses that are causing heavy server load, you can block them by configuring an IP block list from in the Magento Admin panel, under&nbsp;__Stores__&nbsp;&gt; __Configuration__&nbsp;&gt; ADVANCED &gt; __System__&nbsp;&gt; __Full Page Cache__ &gt; __Fastly Configuration__ &gt; __Blocking__.

If you cannot access your Admin due to heavy load, you can use the Fastly API to set up the blocking rules:

1.   Create the ACL as described in the&nbsp;<a href="https://docs.fastly.com/guides/access-control-lists/working-with-acls-using-the-api" target="_self">Working with ACLs using the API</a> Fastly doc.
2.   In the `` recv `` section, create&nbsp;a VCL snippet with the following content, having replaced ACL\_NAME\_GOES\_HERE with the name of the ACL that was created in the previous step:

    if( req.http.Fastly-Client-IP ~ ACL_NAME_GOES_HERE ) {
      error 403 "Forbidden";
      }

For more information on blocking IP addresses, see the Fastly Magento 2 module guide:&nbsp;<a class="external-link" href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/BLOCKING.md" rel="nofollow">https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/BLOCKING.md</a>