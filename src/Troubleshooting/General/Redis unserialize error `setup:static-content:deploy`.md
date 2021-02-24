---
title: Redis unserialize error `setup:static-content:deploy` 
link: https://support.magento.com/hc/en-us/articles/115002729613-Redis-unserialize-error-setup-static-content-deploy-
labels: Magento Commerce Cloud,Magento Commerce,Redis,troubleshooting,unserialize error
---

<p>This article provides a fix for the Redis unserialize error when running <code>magento setup:static-content:deploy</code>.</p>
<p>Running <code>magento setup:static-content:deploy</code> causes the Redis error:</p>
<pre>[Exception] 
Notice: unserialize(): Error at offset 0 of 1 bytes in
/var/www/domain.com/vendor/magento/module-config/App/Config/Type/System.php on line 214
</pre>
<p>The problem is caused by parallel interfering processes on the Redis connection.</p>
<p>To resolve, run <code>setup:static-content:deploy</code> in a single-thread mode by setting the following environment variable:</p>
<pre><code class="language-clike">STATIC_CONTENT_THREADS = 1</code></pre>
<p>or, run the  <code>setup:static-content:deploy</code> command followed by the  <code>-j 1</code> (or <code>--jobs=1</code>) argument.</p>
<p>Note that disabling the multithreading slows down the process of deploying static assets.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce: 2.1.2 and later</li>
<li>Magento Commerce Cloud 2.1.2 and later</li>
<li>Redis, any version</li>
</ul>
<h2>Issue</h2>
<p>Running the  <code>setup:static-content:deploy</code> command causes the Redis error:</p>
<pre class="line-numbers"><code class="language-php">)
[2017-06-02 19:57:59] Command:php ./bin/magento setup:static-content:deploy --jobs=3  en_US
        
[Exception]                                                                                                                        
                                                                                
Notice: unserialize(): Error at offset 0 of 1 bytes in /app/&lt;domain&gt;/vendor/magento/module-config/App/Config/Type/System.php
on line 214
                        
.....

[CredisException]
read error on connection
                                                                    
[RedisException]
read error on connection
                                                                              
.....
<br/>                                                                                     
[Exception]
                                                                                            
Notice: unserialize(): Error at offset 0 of 1 bytes in /app/&lt;domain&gt;/vendor/magento/module-config/App/Config/Type/System.php
on line 214                         

.....

[RuntimeException]                                                                                       
Command php ./bin/magento setup:static-content:deploy --jobs=3  en_US  returned code 3            
</code></pre>
<h2>Cause</h2>
<p>The issue is caused by parallel interfering processes on the Redis connection.</p>
<p>Here, a process in  <code>App/Config/Type/System.php</code> was expecting a response for  <code>system_defaultweb</code> but received a response for  <code>system_cache_exists </code>that was made by a different process. See the detailed explanation in the  <a href="https://github.com/magento/magento2/issues/9287#issuecomment-302362283">Jason Woods' post</a>.</p>
<h2>Solution</h2>
<p>Disable parallelism and run <code>setup:static-content:deploy</code> in a single-thread mode by setting the following environment variable:</p>
<pre><code class="language-clike">STATIC_CONTENT_THREADS = 1</code></pre>
<p>Also, you may run the  <code>setup:static-content:deploy</code> command followed by the  <code>-j 1</code> (or <code>--jobs=1</code>) argument.</p>
<p class="info">In the single-thread mode, the static content deployment process may take four times longer.</p>
<h2>More information</h2>
<p>DevDocs:</p>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/config-guide/redis/config-redis.html">Configure Redis</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/comp-mgr/cli/cli-upgrade.html">Command-line upgrade</a></li>
</ul>