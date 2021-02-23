---
title: Common PHP Fatal Errors and solutions
link: https://support.magento.com/hc/en-us/articles/360030568432-Common-PHP-Fatal-Errors-and-solutions
labels: Magento Commerce,troubleshooting,PHP Fatal Error
---

<p>This article lists some common PHP Fatal Error quick examples that you could find when looking through your Magento logs and the solutions for problems they indicate.</p>
<h2>Example</h2>
<p><em>'PHP Fatal error:  Maximum execution time of 60 seconds exceeded in....'</em></p>
<h2>Solution</h2>
<p>You can update the maximum execution time by setting a custom <code class="language-bash">max_execution_time</code> value in your <code class="language-bash">php.ini</code> file and redeploying. For example:</p>
<pre><code class="language-bash">max_execution_time = 120</code></pre>
<p>Consult the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings">Customize php.ini settings</a> article.</p>
<p> </p>
<h2>Example</h2>
<p><em>'PHP Fatal error: Allowed memory size of 792723456 bytes exhausted'</em> (That's just an example byte size.)</p>
<h2>Solution</h2>
<p>Customize your <code class="language-bash">php.ini</code> settings. Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings">Customize php.ini settings</a> article.</p>
<h2> </h2>
<h2>Example</h2>
<p><em>'PHP Warning: Unknown: failed to open stream: No such file or directory' </em></p>
<h2>Solution</h2>
<p>Make sure you do not remove the windows-style endings in the <code class="language-bash">php.ini</code> file.  Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_magento-app.html#customize-phpini-settings">Customize php.ini settings</a> article.</p>
<p> </p>
<h2>Example</h2>
<p><em>'PHP Fatal error: Uncaught PDOException: SQLSTATE[HY000] [1040] Too many connections in'</em></p>
<h2>Solution</h2>
<p>The MySQL environment has run out of disk space. Provide more disk space for the MySQL environment.</p>
<p> </p>
<h2>Example</h2>
<p><em>'PHP Fatal error: Uncaught TypeError: Return value of Magento' </em></p>
<h2>Solution</h2>
<p>Check the <code>&lt;root&gt;/tmp</code> directory, because it is probably full. If it is full, provide more space in the directory. This could involve simply moving files to another directory or deleting them.</p>
<p> </p>
<h2>Example</h2>
<p><em>'PHP Fatal error: Uncaught RedisException: read error on connection in'</em></p>
<h2>Solution</h2>
<p>This is a common issue with Redis following a website downsize. Redis must be reconfigured to reflect the downsize. Consult this <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/redis-troubleshooting.html#static-content">Redis and static-content deployment</a> article for more detail.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/trouble/php/tshoot_php-set.html">PHP settings errors</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html">Required PHP settings</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/redis-troubleshooting.html">Redis troubleshooting</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-session.html#redis-verify">Redis verification</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html">Configure Redis</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/trouble/php/tshoot_php-set.html#trouble-php-memory">PHP memory limit error</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/test/unit/unit_test_execution_cli.html#solutions-to-common-problems">Solutions to common problems - Memory limit</a></li>
</ul>