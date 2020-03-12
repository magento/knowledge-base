This article provides configuration solutions to the Varnish&nbsp;Edge Side Includes (ESI) issues, where certain pages' content, usually the top navigation panel, is not displayed on the store front, if Varnish is used for caching.

### Affected products and versions

*   Magento 2.X.X Commerce&nbsp;
*   All Varnish versions

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

Prerequisites: Install and configure Varnish for your Magento store.

1.   Go to the store front.
2.   Browse through the store pages.

<span class="wysiwyg-underline">Actual result:</span>

Observe that some content blocks, like the top navigation panel with categories, are not loading. Blank space is displayed instead.

<span class="wysiwyg-underline">Expected result:</span>

<span class="wysiwyg-color-black">All content and all page blocks load successfully.&nbsp;</span>

## <span class="wysiwyg-color-black">Cause</span>

The possible reasons for the issue are the following:

*   ESI include tags are generated with HTTPS access protocol, while Varnish only works with HTTP.
*   Varnish does not process ESI inside JSON.&nbsp;
*   Response headers are too big for Varnish; it cannot process them.

## Solution

To resolve the issues, you need to perform additional Varnish configuration and restart Varnish.

1.   As a user with&nbsp;<code class="highlighter-rouge">root</code>&nbsp;privileges, open your Vanish configuration file in a text editor. See the&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/config-guide/varnish/config-varnish-configure.html#config-varnish-config-sysvcl" target="_self">Modify the Varnish system configuration</a> section for info on where this file might be located for different operating systems.
2.   In the `` DAEMON_OPTS variable ``, add&nbsp;`` -p feature=+esi_ignore_https ``,&nbsp; `` -p &nbsp;feature=+esi_ignore_other_elements ``, `` -p  feature=+esi_disable_xml_check ``. This would look like:
    
    <pre><code class="language-bash">DAEMON_OPTS="-a :6081 \
-p feature=+esi_ignore_other_elements \
-p feature=+esi_disable_xml_check \
-p feature=+esi_ignore_https \
-T localhost:6082 \
-f /etc/varnish/default.vcl \
-S /etc/varnish/secret \
-s malloc,256m"
</code></pre>
    
    
3.   Save your changes and exit the text editor.
4.   In the VCL configuration file, increase the response headers by increasing the values of the these parameters: `` http_resp_hdr_len ``, `` http_resp_size ``, `` workspace_backend ``.  
     Make sure that the last two of them have similar values.
5.   When you change this, you need to run <code class="docutils literal"><span class="pre">service</span> <span class="pre">varnish</span> <span class="pre">restart</span></code> for the changes to take effect.

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/varnish/config-varnish-configure.html#config-varnish-config-sysvcl" rel="noopener" target="_blank">Configure Varnish and your web server</a> on Magento Devdocs
*   <a href="https://varnish-cache.org/docs/5.1/reference/index.html" target="_self">Varnish documentation</a>

&nbsp;