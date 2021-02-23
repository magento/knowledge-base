---
title: During installation, Reflection Exception error
link: https://support.magento.com/hc/en-us/articles/360034633551-During-installation-Reflection-Exception-error
labels: Magento Commerce Cloud,Magento Commerce,installation,Redis,cache,Reflection,Exception,Error,how to
---

<p>This article provides a solution for the Reflection Exception error, during installation.</p>
<h2>Details</h2>
<p>During the installation, a message similar to the following displays:</p>
<pre><code class="language-php">[ERROR] exception 'ReflectionException' with message 'Class Magento\Framework\StoreManagerInterface does not exist' in /&lt;path&gt;/lib/internal/Magento/Framework/Code/Reader/ClassReader.php</code></pre>
<h2>Solution</h2>
<p>Clear all directories and files under Magento's <code>var</code> subdirectory and install the Magento software again.</p>
<p>As the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html">Magento file system owner</a> or as a user with <code>root</code> privileges, enter the following commands:</p>
<pre><code class="language-bash">$ cd &lt;your Magento install directory&gt;/var</code></pre>
<pre><code class="language-bash">$ rm -rf var/cache/* di/* generation/* page_cache/*</code></pre>
<h3>Redis</h3>
<p>If you use Redis and still get an error, clear the Redis cache as follows:</p>
<pre><code class="language-bash">$ redis-cli FLUSHALL</code></pre>