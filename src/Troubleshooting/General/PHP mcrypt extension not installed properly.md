---
title: PHP mcrypt extension not installed properly 
link: https://support.magento.com/hc/en-us/articles/360034280132-PHP-mcrypt-extension-not-installed-properly-
labels: Magento Commerce Cloud,Magento Commerce,deprecated,PHP,extension,mcrypt,how to
---

<p class="warning">PLEASE NOTE: The mcrypt library feature was <a href="https://www.php.net/manual/en/intro.mcrypt.php">deprecated from PHP 7.1 and was removed from PHP 7.2</a>.</p>
<h2>Detail</h2>
<p>Errors can include the following:</p>
<pre><code class="language-php">exception 'Exception' with message 'PHP Warning: [PHP](https://glossary.magento.com/php) Startup: Unable to load dynamic [library](https://glossary.magento.com/library) '/usr/lib/php5/20121212/mcrypt.so' - /usr/lib/php5/20121212/mcrypt.so: cannot open shared object file: No such file or directory</code></pre>
<pre><code class="language-php">Installing data fixtures:
/usr/bin/php -f '/Users/username/www/magento/dev/shell/run_data_fixtures.php' -- --bootstrap='MAGE_DIRS[base][path]=/Users/username/www/magento' 2&gt;&amp;1
[ERROR] [exception](https://glossary.magento.com/exception) 'Exception' with message '
Fatal error: Uncaught exception 'Exception' with message 'Module 'Magento_Core' depends on 'mcrypt' PHP [extension](https://glossary.magento.com/extension) that is not loaded.'</code></pre>
<pre><code class="language-php">======================================================================
   The application has thrown an exception!
======================================================================
 Magento\Framework\Exception
 Command returned non-zero exit code:
`/usr/bin/php5 -f '/var/www/magento2/dev/shell/run_data_fixtures.php' -- --bootstrap='MAGE_DIRS[base][path]=/var/www/magento2' 2&gt;&amp;1`</code></pre>
<h2>Description</h2>
<p>Particularly on developer systems that include a Linux/Apache/MySQL/PHP (LAMP) "stack" that is separate from the operating system, it's possible that mcrypt is either not installed at all or it's installed in the LAMP stack's path but not the operating system's path.</p>
<p>As a result, the Magento installer cannot locate the extension and the installation fails.</p>
<h2>Suggestion</h2>
<p>Determine if the mcrypt extension is loaded in any of the following ways:</p>
<ul>
<li>Set up a <a href="http://kb.mediatemple.net/questions/764/How+can+I+create+a+phpinfo.php+page%3F#gs">phpinfo.php</a> file in the web server's root directory and examine the output in a web browser.</li>
<li>
<p>Run the following command:</p>
<pre><code class="language-php">$ php -r "phpinfo();" | grep mcrypt</code></pre>
<p>If mycrypt is <em>not</em> installed, messages similar to the following display:</p>
<pre><code class="language-php">PHP Warning:  PHP Startup: Unable to load dynamic library '/usr/lib/php5/20121212/mcrypt.so' - /usr/lib/php5/20121212/mcrypt.so: cannot open shared object file: No such file or directory in Unknown on line 0</code></pre>
</li>
</ul>
<p>In some cases, you might need to install the Magento software from the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html">command line</a> and specify the full path to the LAMP stack that has mcrypt installed.</p>