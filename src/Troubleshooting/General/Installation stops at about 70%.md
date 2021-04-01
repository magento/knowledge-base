---
title: Installation stops at about 70%
labels: Magento Commerce,installation,PHP,php.ini,wizard,how to,Varnish
---

This article provides a fix for when installation stops at about 70%.

### Issue

During installation using the Setup Wizard, the process stops at about 70% (with or without sample data). No errors display on the screen.

### Cause

Common causes for this issue include:

* The PHP setting for [`` max_execution_time ``](http://php.net/manual/en/info.configuration.php#ini.max-execution-time)
* Timeout values for nginx and Varnish

### Solution:

Set all of the following as appropriate.

#### All web servers and Varnish

1. Locate your `` php.ini `` using a [`` phpinfo.php ``](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo) file.
1. As a user with `` root `` privileges, open `` php.ini `` in a text editor.
1. Locate the `` max_execution_time `` setting.
1. Change its value to `` 18000 ``.
1. Save your changes to `` php.ini `` and exit the text editor.
1. Restart Apache:
    
    
    
    * CentOS: `` service httpd restart ``
    * Ubuntu: `` service apache2 restart ``
    
    
    
    
    If you use nginx or Varnish, continue with the following sections.
    
    

#### nginx only

If you use nginx, use our included `` nginx.conf.sample `` or add a timeout settings in the nginx host configuration file to the `` location ~ ^/setup/index.php `` section as follows:

<pre><code class="language-php">location ~ ^/setup/index.php {
    .....................
    fastcgi_read_timeout 600s;
       fastcgi_connect_timeout 600s;
}</code></pre>

Restart nginx: `` service nginx restart ``

#### Varnish only

If you use Varnish, edit `` default.vcl `` and add a timeout limit value to the `` backend `` stanza as follows:

<pre><code class="language-php">backend default {
.....................
      .first_byte_timeout = 600s;
}</code></pre>

Restart Varnish.

<pre><code class="language-php">    service varnish restart</code></pre>