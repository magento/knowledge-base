---
title: Site in maintenance mode but available to customers
labels: Magento Commerce Cloud,maintenance mode,troubleshooting
---

This article provides a fix for when maintenance mode is enabled (a Magento Commerce Cloud issue) but the store front is still available for customers.

### Affected products/versions

* Magento Commerce Cloud, all versions

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Enable the maintenance mode for the site.
1. Navigate to the store front.

 <span class="wysiwyg-underline">Expected result</span> 

The maintenance page is displayed.

 <span class="wysiwyg-underline">Actual result</span> 

Store front pages are displayed as usual.

## Cause

Pages are still cached so the maintenance page does not show.

## Solution to site visible despite being in maintenance mode

1. SSH to your environment.
1. Run the `php bin/magento cache:clean` command.

## Related reading

 [Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html) 