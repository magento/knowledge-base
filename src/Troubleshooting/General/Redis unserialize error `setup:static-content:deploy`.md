---
title: Redis unserialize error `setup:static-content:deploy` 
link: https://support.magento.com/hc/en-us/articles/115002729613-Redis-unserialize-error-setup-static-content-deploy-
labels: Magento Commerce Cloud,Magento Commerce,Redis,troubleshooting,unserialize error
---

This article provides a fix for the Redis unserialize error when running `` magento setup:static-content:deploy ``.

Running `` magento setup:static-content:deploy `` causes the Redis error:

<pre>[Exception] 
Notice: unserialize(): Error at offset 0 of 1 bytes in
/var/www/domain.com/vendor/magento/module-config/App/Config/Type/System.php on line 214
</pre>

The problem is caused by parallel interfering processes on the Redis connection.

To resolve, run `` setup:static-content:deploy `` in a single-thread mode by setting the following environment variable:

<pre><code class="language-clike">STATIC_CONTENT_THREADS = 1</code></pre>

or, run the  `` setup:static-content:deploy `` command followed by the  `` -j 1 `` (or `` --jobs=1 ``) argument.

Note that disabling the multithreading slows down the process of deploying static assets.

## Affected versions

* Magento Commerce: 2.1.2 and later
* Magento Commerce Cloud 2.1.2 and later
* Redis, any version

## Issue

Running the  `` setup:static-content:deploy `` command causes the Redis error:

<pre class="line-numbers"><code class="language-php">)
[2017-06-02 19:57:59] Command:php ./bin/magento setup:static-content:deploy --jobs=3  en_US
        
[Exception]                                                                                                                        
                                                                                
Notice: unserialize(): Error at offset 0 of 1 bytes in /app/&lt;domain>/vendor/magento/module-config/App/Config/Type/System.php
on line 214
                        
.....

[CredisException]
read error on connection
                                                                    
[RedisException]
read error on connection
                                                                              
.....
<br/>                                                                                     
[Exception]
                                                                                            
Notice: unserialize(): Error at offset 0 of 1 bytes in /app/&lt;domain>/vendor/magento/module-config/App/Config/Type/System.php
on line 214                         

.....

[RuntimeException]                                                                                       
Command php ./bin/magento setup:static-content:deploy --jobs=3  en_US  returned code 3            
</code></pre>

## Cause

The issue is caused by parallel interfering processes on the Redis connection.

Here, a process in  `` App/Config/Type/System.php `` was expecting a response for  `` system_defaultweb `` but received a response for  `` system_cache_exists  ``that was made by a different process. See the detailed explanation in the  [Jason Woods' post](https://github.com/magento/magento2/issues/9287#issuecomment-302362283).

## Solution

Disable parallelism and run `` setup:static-content:deploy `` in a single-thread mode by setting the following environment variable:

<pre><code class="language-clike">STATIC_CONTENT_THREADS = 1</code></pre>

Also, you may run the  `` setup:static-content:deploy `` command followed by the  `` -j 1 `` (or `` --jobs=1 ``) argument.

<p class="info">In the single-thread mode, the static content deployment process may take four times longer.</p>

## More information

DevDocs:

* [Configure Redis](http://devdocs.magento.com/guides/v2.2/config-guide/redis/config-redis.html)
* [Command-line upgrade](http://devdocs.magento.com/guides/v2.2/comp-mgr/cli/cli-upgrade.html)