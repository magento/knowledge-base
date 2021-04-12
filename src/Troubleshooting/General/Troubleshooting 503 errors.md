---
title: Troubleshooting 503 errors
labels: Magento Commerce,error,cache,503,backend,fetch,how to,Varnish
---

This article provides solutions for troubleshooting 503 errors.

<h2 id="backend-fetch-failed-errors">Backend Fetch Failed errors</h2>

If the length of cache tags used by Magento exceed Varnish's default of 8192 bytes, you can see HTTP 503 (Backend Fetch Failed) errors in the browser. The errors might display similar to the following:

<pre><code class="language-terminal">Error 503 Backend fetch failed
Backend fetch failed</code></pre>

To resolve this issue, increase the default value of the `` http_resp_hdr_len `` parameter in your Varnish configuration file. The `` http_resp_hdr_len `` parameter specifies the max header length _within_ the total default response size of 323768 bytes.

<p class="info">If the <code>http_resp_hdr_len</code> value exceeds 32K, you must also increase the default response size using the <code>http_resp_size</code> parameter.</p>

1. As a user with `` root `` privileges, open your Vanish configuration file in a text editor:
    
    
    
    * CentOS 6: `` /etc/sysconfig/varnish ``
    * CentOS 7: `` /etc/varnish/varnish.params ``
    * Debian: `` /etc/default/varnish ``
    * Ubuntu: `` /etc/default/varnish ``
    
    
    
1. Search for the `` http_resp_hdr_len `` parameter.
    
    
1. If the parameter doesn't exist, add it after `` thread_pool_max ``.
1. Set `` http_resp_hdr_len `` to a value equal to the product count of your largest category multiplied by 1. (Each product tag is about 21 characters in length.)
    
    
    
    For example, setting the value to 65536 bytes should work if your largest category has 3,000 products.
    
    
    
    For example:
    
    
    
    <pre><code class="language-conf">-p http_resp_hdr_len=65536 \</code></pre>
    
    
1. Set the `` http_resp_size `` to a value that accommodates the increased response header length.
    
    
    
    For example, using the sum of the increased header length and default response size is a good starting point (e.g., 65536 + 32768 = 98304):
    
    
    
    <pre><code class="language-conf">-p http_resp_size=98304 \</code></pre>
    
    
    
    A snippet follows:
    
    
    
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
    
    

<h2 id="health-check-timeouts">Health check timeouts</h2>

If you disable the cache while Varnish is configured as the caching application and while Magento is in developer mode, it might become impossible to log in to the Admin.

This situation could happen because the default health check has a `` timeout `` value of 2 seconds. It could take more than 2 seconds for the health check to collect and merge information on every health check request. If this occurs in 6 out of 10 health checks, the Magento server is considered unhealthy. Varnish serves stale content when the server is unhealthy.

Because Admin is accessed through Varnish, you cannot log in to Admin to enable caching (unless Magento becomes healthy again). However, you can use the following command to enable cache:

<pre><code class="language-bash">$ bin/magento cache:enable</code></pre>

For more information about using the command line, see [Get started with command-line configuration](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands.html).