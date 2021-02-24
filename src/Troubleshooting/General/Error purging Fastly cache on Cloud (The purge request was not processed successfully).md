---
title: Error purging Fastly cache on Cloud (The purge request was not processed successfully)
link: https://support.magento.com/hc/en-us/articles/115001853194-Error-purging-Fastly-cache-on-Cloud-The-purge-request-was-not-processed-successfully-
labels: Magento Commerce Cloud,Fastly,purge,API,VCL,troubleshooting
---

<p>This article provides a fix for when you use a Fastly purge option, and you receive the error: <em>The purge request was not processed successfully</em>. Fastly is a CDN and caching service included with Magento Commerce (Cloud) plans and implementations. If you attempt to use a Fastly purge option, and it does not process, you may have incorrect Fastly credentials in your environment or may have encountered an issue. </p>
<p>This information helps you verify and test Fastly headers for your live site and origin servers.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce Cloud: 2.1.X and later</li>
<li>Fastly: 1.2.27 and later</li>
</ul>
<h2>Issue</h2>
<p>Caching is working, but when you try to purge, you receive an error or it doesn't work. The error includes: “The purge request was not processed successfully.”</p>
<h2>Cause</h2>
<p>You may have incorrect credentials set in your environment or need to upload VCL snippets.</p>
<h2>Resolve</h2>
<h3>Check Fastly credentials</h3>
<p>Verify if you have the correct Fastly Service ID and API token in your environment. If you have Staging credentials in Production, the purges may not process or process incorrectly.</p>
<ol>
<li>Log in to your local Magento Admin as an administrator.</li>
<li>Click Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; System and expand Full Page Cache.<br/><br/><img alt="magento_full_page_cache_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086186652/magento_full_page_cache_2.4.1.png"/><br/><br/>
</li>
<li>Expand Fastly Configuration and verify the Fastly Service ID and API token for your environment.</li>
<li>If you modify the values, click Test Credentials.</li>
</ol>
<h3>Check VCL snippets</h3>
<p>If the credentials are correct, you may have issues with your VCLs. To list and review your VCLs per service, enter the following API call in a terminal:</p>
<pre><code class="language-clike">curl -X GET -s https://api.fastly.com/service/&lt;Service ID&gt;/version/&lt;Editable Version #&gt;/snippet/ -H "Fastly-Key:FASTLY_API_TOKEN"
</code></pre>
<p>Review the list of VCLs. If you have issues with the default VCLs from Fastly, you can upload again or verify the content per the <a href="https://github.com/fastly/fastly-magento2/tree/master/etc/vcl_snippets">Fastly default VCLs</a>. For editing your custom VCLs, see <a href="http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html">Custom Fastly VCL snippets</a>.</p>
<h2>More information</h2>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html">About Fastly</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html">Set up Fastly</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html">Custom Fastly VCL snippets</a></li>
</ul>