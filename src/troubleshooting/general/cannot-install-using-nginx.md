---
title: Cannot install using nginx
labels: Magento Commerce,Magento Commerce Cloud,fail,how to,install,nginx
---

This article provides a fix for a failed Magneto installation, when using the nginx web server.

### Issue

If you use the nginx web server and you attempt to install the Magento software, the installation sometimes fails.

### Solution

You can confirm the issue by the following error in the `var/report` directory:

```php
NOTE: You cannot install Magento using the Setup Wizard because the Magento setup directory cannot be accessed.
You can install Magento using either the command line or you must restore access to the following directory: /var/www/html/setup
If you are using the sample nginx configuration, please go to http://ce.mtf03.bcn.magento.com/setup/";i:1;s:641:"#0 /var/www/html/lib/internal/Magento/Framework/App/Http.php(213): Magento\Framework\App\Http->redirectToSetup(Object(Magento\Framework\App\Bootstrap), Object(Exception))
```

<h3 id="workaround">Workaround</h3>

Append `/setup` to the URL by which you access the Setup Wizard or install the Magento software using the [command line](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html) .