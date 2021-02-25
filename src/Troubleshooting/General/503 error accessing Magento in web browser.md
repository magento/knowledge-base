---
title: 503 error accessing Magento in web browser
link: https://support.magento.com/hc/en-us/articles/360033432371-503-error-accessing-Magento-in-web-browser
labels: Magento Commerce,troubleshooting,2.3.5-p1,2.3.1,2.3.4-p2,2.3.4,2.3.0,2.3.3,2.3.2,2.3.6,2.3.5-p2,2.3.3-p1,Apache,2.3.2-p2,503 error
---

This article provides a possible solution for the issue where you get 503 error when trying to access Magento storefront and/or Admin.

### Affected products and versions

* Magento Commerce 2.3.x

## Issue

Steps to reproduce

(Prerequisites: make sure the store is not in [maintenance mode](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-mode.html#config-mode-show).)

Navigate to your Magento Admin or storefront in a web browser.

Expected result

The page loads.

Actual result

You get the HTTP 503 (Service Unavailable) error. The Apache `` error.log `` includes the following message: 

_Invalid command 'Order', perhaps misspelled or defined by a module not included in the server configuration._

## Cause

Apache 2.4 compatibility module `` mod_access_compat `` is disabled, which results in Magento URL rewrites not working properly.

## Solution

Enable the `` mod_access_compat `` Apache module and restart Apache, by running the following as a user with 'root' privileges: 

<pre><code class="language-bash">a2enmod access_compat
service &lt;name> restart</code></pre>

On CentOS, <code class="language-bash">&lt;name></code> is <code class="language-bash">httpd</code>. On Ubuntu, <code class="language-bash">&lt;name></code> is <code class="language-bash">apache2</code>.

## Related reading

* [Apache documentation about mod\_access\_compat](http://httpd.apache.org/docs/current/mod/mod_access_compat.html)
* [Apache documentation about mod\_authz\_host](http://httpd.apache.org/docs/current/mod/mod_authz_host.html)
* [Order, Allow, Deny from the Apache Definitive Guide](http://docstore.mik.ua/orelly/linux/apache/ch05_06.htm)
* [askubuntu.com](http://askubuntu.com/questions/335228/changes-in-apache-config-between-12-04-2-and-12-04-3-lts)