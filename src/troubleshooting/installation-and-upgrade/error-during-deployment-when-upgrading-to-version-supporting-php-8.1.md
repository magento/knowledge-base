---
title: Error during deployment when upgrading to version supporting PHP 8.1
labels: Magento,cloud infrastructure,PHP 8.1,error,upgrade,JSON,2.4.4,Fastly,New Relic,Adobe Commerce,deployment 
---

This article provides a solution for the error that occurs during deployment when upgrading to a version that supports PHP 8.1.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.4. and later

* Extension or technology (Fastly, New Relic, etc.) version PHP 8.1

## Issue

The following error occurs during deployment when upgrading to a version that supports PHP 8.1.

```PHP
{{E: Error parsing configuration files:

applications: Uncaught exception: The "json" extension is not supported for php:8.1
at <script>:109:12
throw("The \"" + unsupported_extensions[0] + "\" extension is not supported for " + service.type);
^
E: Error: Invalid configuration files, aborting build}}
```

## Cause

PHP 8.1 already includes JSON support and doesn't require the extension to be installed separately.

## Solution

Remove JSON from the **Runtime** > **Extensions** section in `.magento.app.yaml` and redeploy.

## Related reading

[PHP application](https://devdocs.magento.com/cloud/project/magento-app-php-application.html) in our developer documentation.
