---
title: Issues after disabling a module
link: https://support.magento.com/hc/en-us/articles/360028721172-Issues-after-disabling-a-module
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,module disable,2.1.x
---

This article provides a solution for module functionality issues after having disabled module output in the Magento Admin.

 ### Affected products and versions

 
 * Magento Commerce Cloud, Magento Commerce
 * 2.1.X or earlier
 
 Issue
-----

 Having disabled module output in the Magneto Admin, under **Stores** > **Settings** > **Configuration** > ADVANCED > **Advanced**, you might start seeing issues related to the module functionality.

 Cause
-----

 Disabling a module output under **Stores** > **Settings** > **Configuration** > ADVANCED > **Advanced** disables only the output (HTML, JS), but it does not disable the functionality of this module.

 Solution
--------

 If you need to disable module functionality, disable the module as described in the [Enable or disable modules](https://devdocs.magento.com/guides/v2.1/install-gde/install/cli/install-cli-subcommands-enable.html) article.

 The module output disabling functionality was removed starting from version 2.2.0.

