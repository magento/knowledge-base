---
title: Troubleshoot Quick Checkout issues
labels: troubleshooting,Adobe Commerce,Quick Checkout,Composer,memory,PHP,extension,2.4.4
---

This article explains issues you may experience while using the Quick Checkout for Adobe Commerce extension and provides solutions to fix those issues so that you can successfully use the extension.

## Affected products and versions

* [Quick Checkout](https://experienceleague.adobe.com/docs/commerce-merchant-services/quick-checkout/overview.html) is compatible with Adobe Commerce versions from 2.4.1 onwards.

## Incorrect Composer keys and minimum-stability to `RC`

<ins>Cause</ins>:

If you see the following error message, you might have incorrect composer keys:

```terminal
Could not find a matching version of package magento/quick-checkout. Check the package spelling, your version constraint and that the package is available in a stability which matches your minimum-stability (RC).
```

<ins>Solution</ins>:

Verify that your composer keys are linked to the _Magento ID_ used during the Quick Checkout registration.

To see which composer keys are configured:

1. Find the location of the `auth.json` file:

   ```bash
   composer config --global home
   ```

1. View the `auth.json` file:

   ```bash
   cat /path/to/auth.json
   ```

1. See [which keys are associated with your Magento ID](https://devdocs.magento.com/guides/v2.4/install-gde/prereq/connect-auth.html).

1. Set minimum-stability to `RC` in the `composer.json` file.

   ```json
   "minimum-stability": "RC"
   ```

## Not enough memory for PHP

<ins>Cause</ins>:

If you see the following error message denoting you do not have enough memory for PHP:

```terminal
Fatal error: Allowed memory size of 2146435072 bytes exhausted (tried to allocate 4096 bytes) in phar:///usr/local/bin/composer/src/Composer/DependencyResolver/RuleWatchGraph.php on line 52
```

<ins>Solution</ins>:

[Increase the memory limit](https://devdocs.magento.com/cloud/project/magento-app-php-ini.html#increase-php-memory-limit) for PHP on your environment in `php.ini`.

Alternatively, you can specify the memory limit using this command: `php -d memory_limit=-1 [path to composer]/composer require magento/quick-checkout`.

For example:

```bash
php -d memory_limit=-1 vendor/bin/composer require magento/quick-checkout
```

## Add street address lines with a new shipping address

There is a known issue for the Quick Checkout extension.

When you [log in with a Bolt account](https://help.bolt.com/shoppers/guides/checkout/log-in/), you can add a new shipping address with a limitation of 4 lines per street address.

If the new shipping address contains more than 4 lines, they will not be stored.

Adobe Commerce usually can be configured to support up to 20 street address lines.

## Unexpected behavior when `Display Billing Address On` is set to `payment page`

There is a known issue for the Quick Checkout extension.

If you set the `Display Billing Address On` parameter to the `payment page` and [log in with a Bolt account](https://help.bolt.com/shoppers/guides/checkout/log-in/) when you check the `My billing and shipping address are the same` checkbox, the radio button displays `use existing card`. As the billing address is only applicable for new credit cards, the address will not be visible until the Bolt user decides to add a new credit card option.

See the [Checkout](https://docs.magento.com/user-guide/configuration/sales/checkout.html) topic for more information about the `Display Billing Address On` parameter.
