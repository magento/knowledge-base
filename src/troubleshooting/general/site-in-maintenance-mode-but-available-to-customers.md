---
title: Site in maintenance mode but available to customers
labels: Magento Commerce Cloud,maintenance mode,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a fix for when maintenance mode is enabled (an Adobe Commerce on cloud infrastructure issue), but the storefront is still available for customers.

## Affected products and versions

* Adobe Commerce on cloud infrastructure (all versions)

## Issue

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Enable the maintenance mode for the site.
1. Navigate to the storefront.

<span class="wysiwyg-underline">Expected result:</span>

The maintenance page is displayed.

<span class="wysiwyg-underline">Actual result:</span>

Storefront pages are displayed as usual.

## Cause

Pages are still cached, so the maintenance page does not show.

## Solution to site visible despite being in maintenance mode

1. SSH to your environment.
1. Run the `php bin/magento cache:clean` command.

## Related reading

[Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html) in our developer documentation.
