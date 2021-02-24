---
title: Fastly caching is not working on Magento Cloud
link: https://support.magento.com/hc/en-us/articles/115001853074-Fastly-caching-is-not-working-on-Magento-Cloud
labels: headers,caching,x-cache,Magento Commerce Cloud,Fastly,troubleshooting
---

<p>This article provides a fix for Fastly caching not working on your site. Fastly is a CDN and caching service included with Magento Commerce (Cloud) plans and implementations. To verify the Fastly extension is working or to debug the Fastly extension, you can use the curl command to display certain response headers. The values of these response headers indicate whether or not Fastly is enabled and functioning properly. You can further investigate issues based on the values of headers and caching behavior.</p>
<p>This information helps your verify and test Fastly headers for your live site and origin servers.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce Cloud</li>
<li>Fastly 1.2.27 and later</li>
</ul>
<h2>Issue</h2>
<p>Caching may not be working for your live site, Production, or Staging environments.</p>
<h2>Cause</h2>
<p>Typically, configurations, incorrect credentials, or unsupported Magento extensions are the issue for Fastly caching not working. If you set up Fastly incorrectly, or use an unsupported extension that strips headers, Fastly caching won't work.</p>
<h2>Test with commands and check response headers</h2>
<h3>Test with dig command</h3>
<p>First, check for headers with a dig command to the URL. In a terminal application, enter dig &lt;url&gt; to verify Fastly services display in the headers. For additional dig tests, see Fastly’s <a href="https://docs.fastly.com/guides/basic-configuration/testing-setup-before-changing-domains">Testing before changing DNS</a>.</p>
<p>For example:</p>
<ul>
<li>Live site: <code>dig http[s]://&lt;your domain&gt;</code>
</li>
<li>Staging: <code>dig http[s]://staging.&lt;your domain&gt;.c.&lt;instanceid&gt;.ent.magento.cloud</code>
</li>
<li>Production: <code>dig http[s]://&lt;your domain&gt;.{1|2|3}.&lt;project ID&gt;.ent.magento.cloud</code>
</li>
</ul>
<h3>Test with curl command</h3>
<p>Next, use a curl command to verify X-Magento-Tags exist and additional header information. The command format differs for Staging and Production.</p>
<p>For more information on these commands, you bypass Fastly when you inject <code>-H "host:URL"</code>, replace with origin to connecting location (CNAME information from your OneDrive Spreadsheet), <code>-k</code> ignores SSL, and <code>-v</code> provides verbose responses. If headers display correctly, check the live site and verify headers again.</p>
<ul>
<li>If header issues occur when directly hitting the origin servers bypassing Fastly, you may have issues in your code, with extensions, or with the infrastructure.</li>
<li>If you encounter no errors directly hitting the origin servers, but headers are missing hitting the live domain through Fastly, you may have Fastly errors.</li>
</ul>
<p>First, check your live site to verify the response headers. The command goes through the Fastly extension to receive responses. If you don’t receive the correct headers, then you should test the origin servers directly. This command returns the values of the <code>Fastly-Magento-VCL-Uploaded</code> and <code>X-Cache</code> headers.</p>
<ol>
<li>In a terminal, enter the following command to test your live site URL:<br/>
<pre><code class="language-clike">curl http://&lt;live URL&gt; -vo /dev/null -HFastly-Debug:1 [--resolve]</code></pre>
<br/>Use <code>--resolve</code> only if your live URL isn’t set up with DNS and you don’t have a static route set. For example:
<pre><code class="language-clike">curl http://www.mymagento.biz -vo /dev/null -HFastly-Debug:1</code></pre>
</li>
<li>Verify the response headers to ensure Fastly is working. The output for this command is similar to curl Staging and Production. For example, you should see the returned unique headers by this command:<br/>
<pre><code class="language-clike">&lt; Fastly-Magento-VCL-Uploaded: yes
&lt; X-Cache: HIT, MISS</code></pre>
</li>
</ol>
<p>To test Staging:</p>
<pre><code class="language-clike">curl http[s]://staging.&lt;your domain&gt;.c.&lt;instanceid&gt;.ent.magento.cloud -H "host: &lt;url&gt;" -k -vo /dev/null -HFastly-Debug:1
</code></pre>
<p>To test Production load balancer:</p>
<pre><code class="language-clike">curl http[s]://&lt;your domain&gt;.c.&lt;project ID&gt;.ent.magento.cloud -H "host: &lt;url&gt;" -k -vo /dev/null -HFastly-Debug:1
</code></pre>
<p>To test Production Origin node:</p>
<pre><code class="language-clike">curl http[s]://&lt;your domain&gt;.{1|2|3}.&lt;project ID&gt;.ent.magento.cloud -H "host: &lt;url&gt;" -k -vo /dev/null -HFastly-Debug:1
</code></pre>
<p>A direct Origin node:</p>
<pre><code class="language-clike">curl http[s]://&lt;your domain&gt;.{1|2|3}.&lt;project ID&gt;.ent.magento.cloud -H "host: &lt;url&gt;" -k -vo /dev/null -HFastly-Debug:1
</code></pre>
<p>For example, if you have a public URL www.mymagento.biz, enter a command similar to the following to test the production site:</p>
<pre><code class="language-clike">curl -k https://www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud -H 'Host: www.mymagento.biz' -vo /dev/null -HFastly-Debug:1
</code></pre>
<h3>Check response headers</h3>
<ul>
<li>Check the returned response headers and values:</li>
<li>Fastly-Magento-VCL-Uploaded should be present</li>
<li>X-Magento-Tags should be returned</li>
<li>Fastly-Module-Enabled should be either Yes or the Fastly extension version number</li>
<li>X-Cache should be either HIT or HIT, HIT</li>
<li>x-cache-hits should be 1,1</li>
<li>Cache-Control: max-age should be greater than 0</li>
<li>Pragma should be cache</li>
</ul>
<p>The following example shows the correct values for Pragma, X-Magento-Tags, and Fastly-Module-Enabled.</p>
<p>The output for curl commands can be lengthy. The following is a summary only:</p>
<pre><code class="language-clike">* STATE: INIT =&gt; CONNECT handle 0x600057800; line 1402 (connection #-5000)
* Rebuilt URL to: https://www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud/
* Added connection 0. The cache now contains 1 members
*   Trying 192.0.2.31...
* STATE: CONNECT =&gt; WAITCONNECT handle 0x600057800; line 1455 (connection #0)
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                             Dload  Upload   Total   Spent    Left  Speed
  0     0    0     0    0     0      0      0 --:--:-- --:--:-- --:--:--     0* Connected to www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud (54.229.163.31) port 443 (#0)
* STATE: WAITCONNECT =&gt; SENDPROTOCONNECT handle 0x600057800; line 1562 (connection #0)
  0     0    0     0    0     0      0      0 --:--:-- --:--:-- --:--:--     0* ALPN, offering h2

  ... portion omitted for brevity ...

&lt; Set-Cookie: mage-messages=%5B%5D; expires=Wed, 22-Nov-2017 17:39:58 GMT; Max-Age=31536000; path=/
&lt; Pragma: cache
&lt; Expires: Wed, 23 Nov 2016 17:39:56 GMT
&lt; Cache-Control: max-age=86400, public, s-maxage=86400, stale-if-error=5, stale-while-revalidate=5
&lt; X-Magento-Tags: cb_welcome_popup store cb cb_store_info_mobile cb_header_promotional_bar cb_store_info cb_discount-promo-bar cpg_2 cb_83 cb_81 cb_84 cb_85 cb_86 cb_87 cb_88 cb_89 p5646 catalog_product p5915 p6040 p6197 p6227 p7095 p6109 p6122 p6331 p7592 p7651 p7690
&lt; Fastly-Module-Enabled: yes
&lt; Strict-Transport-Security: max-age=31536000
	&lt; Content-Security-Policy: upgrade-insecure-requests
&lt; X-Content-Type-Options: nosniff
&lt; X-XSS-Protection: 1; mode=block
&lt; X-Frame-Options: SAMEORIGIN
&lt; X-Platform-Server: i-dff64b52
&lt;
* STATE: PERFORM =&gt; DONE handle 0x600057800; line 1955 (connection #0)
* multi_done
  0     0    0     0    0     0      0      0 --:--:--  0:00:02 --:--:--     0
* Connection #0 to host www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud left intact
</code></pre>
<h2>Resolve</h2>
<h3>Fastly-Module-Enabled is not present</h3>
<p>If you don’t receive a “yes” for the Fastly-Module-Enabled in the response headers, you need to verify the Fasty module is installed and selected.</p>
<p>To verify Fastly is enabled in Staging and Production, check the configuration in the Magento Admin for each environment:</p>
<ol>
<li>Log into the Admin console for Staging and Production using the URL with /admin (or the changed Admin URL).</li>
<li>Navigate to Stores &gt; Configuration &gt; Advanced &gt; System. Scroll and click Full Page Cache.</li>
<li>Ensure Fastly CDN is selected.</li>
<li>Click on Fastly Configuration. Ensure the Fastly Service ID and Fastly API token are entered (your Fastly credentials). Verify you have the correct credentials entered for the Staging and Production environment. Click Test credentials to help.</li>
<li>Edit your composer.json and ensure the Fasty module is included with version. This file has all modules listed with versions.
<ul>
<li>In the “require” section, you should have "fastly/magento2": &lt;version number&gt;</li>
<li>In the “repositories” section, you should have:
<pre><code class="language-clike">"fastly-magento2": {
"type": "vcs",
"url": "https://github.com/fastly/fastly-magento2.git"
}</code></pre>
</li>
</ul>
</li>
<li>If you use Configuration Management, you should have a configuration file. Edit the app/etc/config.app.php (2.0, 2.1) or app/etc/config.php (2.2) file and make sure the setting <code>'Fastly_Cdn' =&gt; 1</code> is correct. The setting should not be <code>'Fastly_Cdn' =&gt; 0</code> (meaning disabled).<br/>If you enabled Fastly, delete the configuration file and run the bin/magento magento-cloud:scd-dump command to update. For a walk-through of this file, see <a href="http://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-initial.html">Example of managing system-specific settings</a>.</li>
</ol>
<p>If the module is not installed, you need to install in an Integration environment branch and deployed to Staging and Production. See <a href="http://devdocs.magento.com/guides/v2.1/cloud/access-acct/fastly.html">Set up Fastly</a> for instructions.</p>
<h3>Fastly-Magento-VCL-Uploaded is not present</h3>
<p>During installation and configuration, you should have uploaded the Fastly VCL. These are the base VCL snippets provided by the Fastly module, not custom VCL snippets you create. For instructions, see <a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#upload-vcl-snippets">Upload Fastly VCL snippets</a>.</p>
<h3>X-Cache includes MISS</h3>
<p>If X-Cache is either HIT, MISS or MISS, MISS, enter the same curl command again to make sure the page wasn’t recently evicted from the cache.</p>
<p>If you get the same result, use the curl commands and verify the response headers:</p>
<ul>
<li>Pragma is cache</li>
<li>X-Magento-Tags exists</li>
<li>Cache-Control: max-age is greater than 0</li>
</ul>
<p>If the issue persists, another extension is likely resetting these headers. Repeat the following procedure in Staging to disable extensions to find which one is causing the issue. After you locate the extension(s) causes issues, you will need to disable the extension(s) in Production.</p>
<ol>
<li>Log in to the Magento Admin on your Staging or Production site.</li>
<li>Navigate to Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; Advanced.</li>
<li>In the Disable Modules Output section in the right pane, locate and disable all of your extensions*.</li>
<li>Click Save Config.</li>
<li>Click System &gt; Tools &gt; Cache Management.</li>
<li>Click Flush Magento Cache.</li>
<li>Now enable one extension at a time, saving the configuration and flushing the Magento cache.</li>
<li>Try the curl commands and verify the response headers.</li>
<li>Repeat steps 8 and 9 to enable and test the curl commands. When the Fastly headers no longer display, you have found the extension causing issues with Fastly.</li>
</ol>
<p>When you isolate the extension that is resetting Fastly headers, contact the extension developer for additional assistance. We cannot provide fixes or updates for 3rd party extension developers to work with Fastly caching.</p>
<h2>More information</h2>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.1/cloud/basic-information/cloud-fastly.html">About Fastly</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.1/cloud/access-acct/fastly.html">Set up Fastly</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.1/cloud/configure/cloud-vcl-custom-snippets.html">Custom Fastly VCL snippets</a></li>
</ul>