---
title: 503 error accessing Adobe Commerce in web browser
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,503 error,Apache,Magento Commerce,troubleshooting,Magento,Adobe Commerce
---

This article provides a possible solution for the issue where you get a 503 error when trying to access Adobe Commerce storefront and/or Admin.

## Affected products and versions

Adobe Commerce 2.3.x

<h2 id="symptoms">Issue</h2>

 <span class="wysiwyg-underline">Steps to reproduce</span>

(Prerequisites: make sure the store is not in [maintenance mode](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-mode.html#config-mode-show)).

Navigate to your Commerce Admin or storefront in a web browser.

 <span class="wysiwyg-underline">Expected result</span>

The page loads.

 <span class="wysiwyg-underline">Actual result</span>

You get the HTTP 503 (Service Unavailable) error. The Apache `error.log` includes the following message:

 *Invalid command 'Order', perhaps misspelled or defined by a module not included in the server configuration.*

<h2 id="details">Cause</h2>

Apache 2.4 compatibility module `mod_access_compat` is disabled, which results in Adobe Commerce URL rewrites not working properly.

<h2 id="suggested-solution">Solution</h2>

Enable the `mod_access_compat` Apache module and restart Apache, by running the following as a user with 'root' privileges:

```bash
a2enmod access_compat
service <name> restart
```

On CentOS,

```bash
<name>
```

is

```bash
httpd
```

. On Ubuntu,

```bash
<name>
```

is

```bash
apache2
```

.

<h2 id="additional-resources">Related reading</h2>

* [Apache documentation about mod\_access\_compat](http://httpd.apache.org/docs/current/mod/mod_access_compat.html)
* [Apache documentation about mod\_authz\_host](http://httpd.apache.org/docs/current/mod/mod_authz_host.html)
* [Order, Allow, Deny from the Apache Definitive Guide](http://docstore.mik.ua/orelly/linux/apache/ch05_06.htm)
* [askubuntu.com](http://askubuntu.com/questions/335228/changes-in-apache-config-between-12-04-2-and-12-04-3-lts)
