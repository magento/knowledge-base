This article talks about the Magento Commerce Cloud issue, where you enable the maintenance mode, but the store front is still available for customers.

### Affected products/versions

*   Magento Commerce Cloud, all versions

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   Enable the maintenance mode for the site.
2.   Navigate to the store front.

<span class="wysiwyg-underline">Expected result</span>

The maintenance page is displayed.

<span class="wysiwyg-underline">Actual result</span>

Store front pages are displayed as usual.&nbsp;

## Cause

Pages are still cached so the maintenance page does not show.

## Solution

1.   SSH to your environment.&nbsp;
2.   Run the `` php bin/magento cache:clean `` command.

## Related reading

<a class="external-link" href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html" rel="nofollow">Enable or disable maintenance mode</a>