---
title: Troubleshooting 503 errors
link: https://support.magento.com/hc/en-us/articles/360034631211-Troubleshooting-503-errors
labels: Magento Commerce,error,cache,503,backend,fetch,how to,Varnish
---

<p>This article provides solutions for troubleshooting 503 errors.</p>
<h2>Backend Fetch Failed errors</h2>
<p>If the length of cache tags used by Magento exceed Varnish's default of 8192 bytes, you can see HTTP 503 (Backend Fetch Failed) errors in the browser. The errors might display similar to the following:</p>
<pre><code class="language-terminal">Error 503 Backend fetch failed
Backend fetch failed</code></pre>
<p>To resolve this issue, increase the default value of the <code>http_resp_hdr_len</code> parameter in your Varnish configuration file. The <code>http_resp_hdr_len</code> parameter specifies the max header length <em>within</em> the total default response size of 323768 bytes.</p>
<p class="info">If the <code>http_resp_hdr_len</code> value exceeds 32K, you must also increase the default response size using the <code>http_resp_size</code> parameter.</p>
<ol>
<li>
<p>As a user with <code>root</code> privileges, open your Vanish configuration file in a text editor:</p>
<ul>
<li>CentOS 6: <code>/etc/sysconfig/varnish</code>
</li>
<li>CentOS 7: <code>/etc/varnish/varnish.params</code>
</li>
<li>Debian: <code>/etc/default/varnish</code>
</li>
<li>Ubuntu: <code>/etc/default/varnish</code>
</li>
</ul>
</li>
<li>
<p>Search for the <code>http_resp_hdr_len</code> parameter.</p>
</li>
<li>If the parameter doesn't exist, add it after <code>thread_pool_max</code>.</li>
<li>
<p>Set <code>http_resp_hdr_len</code> to a value equal to the product count of your largest category multiplied by 21. (Each product tag is about 21 characters in length.)</p>
<p>For example, setting the value to 65536 bytes should work if your largest category has 3,000 products.</p>
<p>For example:</p>
<pre><code class="language-conf">-p http_resp_hdr_len=65536 \</code></pre>
</li>
<li>
<p>Set the <code>http_resp_size</code> to a value that accommodates the increased response header length.</p>
<p>For example, using the sum of the increased header length and default response size is a good starting point (e.g., 65536 + 32768 = 98304):</p>
<pre><code class="language-conf">-p http_resp_size=98304 \</code></pre>
<p>A snippet follows:</p>
<pre><code class="language-conf"># DAEMON_OPTS is used by the init script.
DAEMON_OPTS="-a ${VARNISH_LISTEN_ADDRESS}:${VARNISH_LISTEN_PORT} \
         -f ${VARNISH_VCL_CONF} \
         -T ${VARNISH_ADMIN_LISTEN_ADDRESS}:${VARNISH_ADMIN_LISTEN_PORT} \
         -p thread_pool_min=${VARNISH_MIN_THREADS} \
         -p thread_pool_max=${VARNISH_MAX_THREADS} \
         -p http_resp_hdr_len=65536 \
         -p http_resp_size=98304 \
   -p workspace_backend=98304 \
         -S ${VARNISH_SECRET_FILE} \
         -s ${VARNISH_STORAGE}"</code></pre>
</li>
</ol>
<h2>Health check timeouts</h2>
<p>If you disable the cache while Varnish is configured as the caching application and while Magento is in developer mode, it might become impossible to log in to the Admin.</p>
<p>This situation could happen because the default health check has a <code>timeout</code> value of 2 seconds. It could take more than 2 seconds for the health check to collect and merge information on every health check request. If this occurs in 6 out of 10 health checks, the Magento server is considered unhealthy. Varnish serves stale content when the server is unhealthy.</p>
<p>Because Admin is accessed through Varnish, you cannot log in to Admin to enable caching (unless Magento becomes healthy again). However, you can use the following command to enable cache:</p>
<pre><code class="language-bash">$ bin/magento cache:enable</code></pre>
<p>For more information about using the command line, see <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands.html">Get started with command-line configuration</a>.</p>