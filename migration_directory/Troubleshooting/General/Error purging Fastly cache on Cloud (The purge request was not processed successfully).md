Fastly is a CDN and caching service included with Magento Commerce (Cloud) plans and implementations. If you attempt to use a Fastly purge option, and it does not process, you may have incorrect Fastly credentials in your environment or may have encountered an issue. You may receive the error: “The purge request was not processed successfully.”

This information helps your verify and test Fastly headers for your live site and origin servers.

## Affected versions

*   Magento Commerce Cloud: 2.1.X and later
*   Fastly: 1.2.27 and later

## Issue

Caching is working, but when you try to purge, you receive an error or it doesn't work. The error includes: “The purge request was not processed successfully.”

## Cause

You may have incorrect credentials set in your environment or need to upload VCL snippets.

## Resolve

### Check Fastly credentials

Verify if you have the correct Fastly Service ID and API token in your environment. If you have Staging credentials in Production, the purges may not process or process incorrectly.

1.   Log in to your local Magento Admin as an administrator.
2.   Click Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; System and expand Full Page Cache.
3.   Expand Fastly Configuration and verify the Fastly Service ID and API token for your environment.
4.   If you modify the values, click Test Credentials.

### Check VCL snippets

If the credentials are correct, you may have issues with your VCLs. To list and review your VCLs per service, enter the following API call in a terminal:

<pre><code class="language-clike">curl -X GET -s https://api.fastly.com/service/&lt;Service ID&gt;/version/&lt;Editable Version #&gt;/snippet/ -H "Fastly-Key:FASTLY_API_TOKEN"
</code></pre>

Review the list of VCLs. If you have issues with the default VCLs from Fastly, you can upload again or verify the content per the <a href="https://github.com/fastly/fastly-magento2/tree/master/etc/vcl_snippets" rel="noopener noreferrer" target="_blank">Fastly default VCLs</a>. For editing your custom VCLs, see [Custom Fastly VCL snippets](http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html).

## More information

*   [About Fastly](http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html)
*   [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html)
*   [Custom Fastly VCL snippets](http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html)