---
title: Installation stops at about 70%
link: https://support.magento.com/hc/en-us/articles/360033773871-Installation-stops-at-about-70-
labels: Magento Commerce,installation,PHP,php.ini,wizard,how to,Varnish
---

<p>This article provides a fix for when installation stops at about 70%.</p>
<h3>Issue</h3>
<p>During installation using the Setup Wizard, the process stops at about 70% (with or without sample data). No errors display on the screen.</p>
<h3>Cause</h3>
<p>Common causes for this issue include:</p>
<ul>
<li>The PHP setting for <a href="http://php.net/manual/en/info.configuration.php#ini.max-execution-time"><code>max_execution_time</code></a>
</li>
<li>Timeout values for nginx and Varnish</li>
</ul>
<h3>Solution:</h3>
<p>Set all of the following as appropriate.</p>
<h4>All web servers and Varnish</h4>
<ol>
<li>Locate your <code>php.ini</code> using a <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo"><code>phpinfo.php</code></a> file.</li>
<li>As a user with <code>root</code> privileges, open <code>php.ini</code> in a text editor.</li>
<li>Locate the <code>max_execution_time</code> setting.</li>
<li>Change its value to <code>18000</code>.</li>
<li>Save your changes to <code>php.ini</code> and exit the text editor.</li>
<li>
<p>Restart Apache:</p>
<ul>
<li>CentOS: <code>service httpd restart</code>
</li>
<li>Ubuntu: <code>service apache2 restart</code>
</li>
</ul>
<p>If you use nginx or Varnish, continue with the following sections.</p>
</li>
</ol>
<h4>nginx only</h4>
<p>If you use nginx, use our included <code>nginx.conf.sample</code> or add a timeout settings in the nginx host configuration file to the <code>location ~ ^/setup/index.php</code> section as follows:</p>
<pre><code class="language-php">location ~ ^/setup/index.php {
    .....................
    fastcgi_read_timeout 600s;
       fastcgi_connect_timeout 600s;
}</code></pre>
<p>Restart nginx: <code>service nginx restart</code></p>
<h4>Varnish only</h4>
<p>If you use Varnish, edit <code>default.vcl</code> and add a timeout limit value to the <code>backend</code> stanza as follows:</p>
<pre><code class="language-php">backend default {
.....................
      .first_byte_timeout = 600s;
}</code></pre>
<p>Restart Varnish.</p>
<pre><code class="language-php">    service varnish restart</code></pre>