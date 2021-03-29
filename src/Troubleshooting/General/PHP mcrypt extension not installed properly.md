---
title: PHP mcrypt extension not installed properly 
labels: Magento Commerce Cloud,Magento Commerce,deprecated,PHP,extension,mcrypt,how to
---

<p class="warning">PLEASE NOTE: The mcrypt library feature was <a href="https://www.php.net/manual/en/intro.mcrypt.php">deprecated from PHP 7.1 and was removed from PHP 7.2</a>.</p>

## Detail

Errors can include the following:

<pre><code class="language-php">exception 'Exception' with message 'PHP Warning: [PHP](https://glossary.magento.com/php) Startup: Unable to load dynamic [library](https://glossary.magento.com/library) '/usr/lib/php5/20121212/mcrypt.so' - /usr/lib/php5/20121212/mcrypt.so: cannot open shared object file: No such file or directory</code></pre>

<pre><code class="language-php">Installing data fixtures:
/usr/bin/php -f '/Users/username/www/magento/dev/shell/run_data_fixtures.php' -- --bootstrap='MAGE_DIRS[base][path]=/Users/username/www/magento' 2>&amp;1
[ERROR] [exception](https://glossary.magento.com/exception) 'Exception' with message '
Fatal error: Uncaught exception 'Exception' with message 'Module 'Magento_Core' depends on 'mcrypt' PHP [extension](https://glossary.magento.com/extension) that is not loaded.'</code></pre>

<pre><code class="language-php">======================================================================
   The application has thrown an exception!
======================================================================
 Magento\Framework\Exception
 Command returned non-zero exit code:
`/usr/bin/php5 -f '/var/www/magento2/dev/shell/run_data_fixtures.php' -- --bootstrap='MAGE_DIRS[base][path]=/var/www/magento2' 2>&amp;1`</code></pre>

## Description

Particularly on developer systems that include a Linux/Apache/MySQL/PHP (LAMP) "stack" that is separate from the operating system, it's possible that mcrypt is either not installed at all or it's installed in the LAMP stack's path but not the operating system's path.

As a result, the Magento installer cannot locate the extension and the installation fails.

## Suggestion

Determine if the mcrypt extension is loaded in any of the following ways:

* Set up a [phpinfo.php](http://kb.mediatemple.net/questions/764/How+can+I+create+a+phpinfo.php+page%3F#gs) file in the web server's root directory and examine the output in a web browser.
* Run the following command:
    
    
    
    <pre><code class="language-php">$ php -r "phpinfo();" | grep mcrypt</code></pre>
    
    
    
    If mycrypt is _not_ installed, messages similar to the following display:
    
    
    
    <pre><code class="language-php">PHP Warning:  PHP Startup: Unable to load dynamic library '/usr/lib/php5/20121212/mcrypt.so' - /usr/lib/php5/20121212/mcrypt.so: cannot open shared object file: No such file or directory in Unknown on line 0</code></pre>
    
    

In some cases, you might need to install the Magento software from the [command line](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html) and specify the full path to the LAMP stack that has mcrypt installed.