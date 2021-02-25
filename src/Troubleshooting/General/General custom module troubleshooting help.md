---
title: General custom module troubleshooting help
link: https://support.magento.com/hc/en-us/articles/360031030751-General-custom-module-troubleshooting-help
labels: Magento Commerce Cloud,Magento Commerce,log,custom,troubleshooting
---

This article talks about general tools to help in troubleshooting custom modules in Magento.

## Issue

If you realize there is an issue with the features from your custom module, and you get no obvious error messages that state the issue, then you will want to consult your instance's logs.

## Solution

Check the logs to see if there are entries with custom module's name in the error.  Depending on the errors involved, the solution may present itself, or you may need to include your helpful Magento log information if you want to open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket). See the following paragraphs for the info about logs location and possible solutions.

### Magento Commerce, Magento Open Source, all 2.X versions

1. Logs locations:
    
    * [Starter plan logs](https://support.magento.com/hc/en-us/articles/360020127552)
    * [Pro plan logs](https://support.magento.com/hc/en-us/articles/360000318834-Log-locations-directories-for-Pro-plan-Integration-Staging-Production)
    
    
    
1. Depending on the errors you find, if you want to enable, disable, or uninstall a custom module, these articles detail those actions:
    
    
    
    * [Enable or disable modules](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-enable.html)
    * [Uninstall modules](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-uninstall-mods.html)
    
    
    

### Magento Commerce Cloud, all versions

1. Logs locations: [Magento Commerce Cloud logs](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html)
1. Depending on the errors you find, if you want to enable, disable, or uninstall a custom module, these articles detail those actions:
    
    
    
    * [Install, manage, and upgrade extensions](https://devdocs.magento.com/guides/v2.3/cloud/howtos/install-components.html)
    * [Component deployment failure](https://devdocs.magento.com/guides/v2.3/cloud/trouble/trouble_comp-deploy-fail.html)
    
    
    

## Related reading

* [Module overview](https://devdocs.magento.com/guides/v2.3/architecture/archi_perspectives/components/modules/mod_intro.html)
* [Errors installing optional sample data](https://devdocs.magento.com/guides/v2.3/install-gde/trouble/tshoot_sample-data.html)
* [Exception handling](https://devdocs.magento.com/guides/v2.3/graphql/develop/exceptions.html)
* [Exceptions during installation](https://devdocs.magento.com/guides/v2.3/install-gde/trouble/tshoot_exceptions.html)
* [Run the Module Manager](https://devdocs.magento.com/guides/v2.3/comp-mgr/module-man/compman-checklist.html)
* [Module configuration files](https://devdocs.magento.com/guides/v2.3/config-guide/config/config-files.html)
* [Out of memory errors](https://devdocs.magento.com/guides/v2.3/comp-mgr/trouble/cman/out-of-memory.html)