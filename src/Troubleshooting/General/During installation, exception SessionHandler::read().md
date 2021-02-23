---
title: During installation, exception SessionHandler::read()
link: https://support.magento.com/hc/en-us/articles/360033427272-During-installation-exception-SessionHandler-read-
labels: Magento Commerce Cloud,Magento Commerce,PHP,SessionHandler,exception,2.x.x,how to
---

<p>This article provides a fix for an exception SessionHandler::read() error during Magento 2 installation.</p>
<h2>Issue</h2>
<p>At the last step of installing Magento 2, the following exception displays:</p>
<pre><code class="language-temrinal">exception 'Exception' with message 'Warning: SessionHandler::read():
open(..) failed: No such file or directory (2) ../magento2/lib/internal/Magento/Framework/Session/SaveHandler.php on line 74'
in ../magento2/lib/internal/Magento/Framework/App/ErrorHandler.php:67</code></pre>
<p class="info">This error occurs only in code versions earlier than September 28, 2015. If you installed code dated September 29 or later, this error should not occur. For more information about configuration options for Redis, see <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html">Configure Redis</a>. For more information about specifying Redis using the command-line installer, see the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-install.html">installation topic</a> or the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-deployment.html#instgde-cli-subcommands-configphp">deployment configuration</a> topic.</p>
<h2>Cause</h2>
<p>This happens when your <code>session.save_handler</code> PHP parameter is set to some another session storage than <code>files</code> (for example, <code>redis</code>, <code>memcached</code>, and so on). This is a known issue we're working to resolve.</p>
<h2>Solutions:</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-uninstall.html#instgde-install-magento-update">Upgrade your Magento 2 code</a></li>
<li>Use the following workaround with existing code.</li>
</ul>
<h2>Locate <code>php.ini</code>
</h2>
<p>Locate <code>php.ini</code> by entering the following command:</p>
<pre><code class="language-php">php -i | grep "Loaded Configuration File"</code></pre>
<p>Typical locations follow:</p>
<ul>
<li>Ubuntu: <code>/etc/php5/cli/php.ini</code>
</li>
<li>CentOS: <code>/etc/php.ini</code>
</li>
</ul>
<h2>Workaround</h2>
<ol>
<li>As a user with <code>root</code> privileges, open <code>php.ini</code> in a text editor.</li>
<li>Locate <code>session.save_handler</code>
</li>
<li>
<p>Set it in any of the following ways:</p>
<ul>
<li>
<p>To comment it out:</p>
<pre><code class="language-php">;session.save_path = &lt;path&gt;</code></pre>
</li>
<li>
<p>To set it to a file system path:</p>
<pre><code class="language-php">session.save_handler = files</code></pre>
</li>
</ul>
</li>
</ol>