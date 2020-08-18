Having disabled module output in the Magneto Admin, under&nbsp;__Stores__ &gt; __Settings__ &gt; __Configuration__ &gt;&nbsp;ADVANCED &gt; __Advanced__, you might start seeing issues related to the module functionality.

### Affected products and versions

*   Magento Commerce Cloud,&nbsp;Magento Commerce, Magento Open Source
*   2.1.X or earlier

## Cause

Disabling a module output under __Stores__ &gt; __Settings__ &gt; __Configuration__ &gt;&nbsp;ADVANCED &gt; __Advanced&nbsp;__disables only the output (HTML, JS), but it does not disable the functionality of this module.

## Solution

If you need to disable module functionality, disable the module as described in the&nbsp;<a href="https://devdocs.magento.com/guides/v2.1/install-gde/install/cli/install-cli-subcommands-enable.html" target="_self">Enable or disable modules</a>&nbsp;article.

<p class="note">The module output disabling functionality was removed starting from version 2.2.0.</p>

&nbsp;