---
title: General custom module troubleshooting help
labels: Magento Commerce,Magento Commerce Cloud,custom,log,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,Pro,Starter
---

This article talks about general tools to help in troubleshooting custom modules in Adobe Commerce.

## Issue

If you realize there is an issue with the features from your custom module, and you get no obvious error messages that state the issue, then you will want to consult your instance's logs.

## Solution

Check the logs to see if there are entries with custom module's name in the error.  Depending on the errors involved, the solution may present itself, or you may need to include your helpful Adobe Commerce log information if you want to open a [Support Ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket). See the following paragraphs for the info about logs' location and possible solutions.

### Adobe Commerce (all deployment methods), Magento Open Source, all 2.X versions

1. Logs locations:
    * [Adobe Commerce on cloud infrastructure Starter plan architecture logs](https://support.magento.com/hc/en-us/articles/360020127552) in our support knowledge base.
    * [Adobe Commerce on cloud infrastructure Pro plan architecture logs](https://support.magento.com/hc/en-us/articles/360000318834-Log-locations-directories-for-Pro-plan-Integration-Staging-Production) in our support knowledge base.
1. Depending on the errors you find, if you want to enable, disable, or uninstall a custom module, these articles detail those actions:    
    * [Enable or disable modules](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-enable.html) in our developer documentation.
    * [Uninstall modules](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-uninstall-mods.html) in our developer documentation.

### Adobe Commerce on cloud infrastructure, all versions

1. Logs locations: [Adobe Commerce on cloud infrastructure logs](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html) in our developer documentation.
1. Depending on the errors you find, if you want to enable, disable, or uninstall a custom module, these articles in our developer documentation detail those actions:    
    * [Install, manage, and upgrade extensions](https://devdocs.magento.com/guides/v2.3/cloud/howtos/install-components.html).
    * [Component deployment failure](https://devdocs.magento.com/guides/v2.3/cloud/trouble/trouble_comp-deploy-fail.html).

## Related reading

In our developer documentation:

* [Module overview](https://devdocs.magento.com/guides/v2.3/architecture/archi_perspectives/components/modules/mod_intro.html)
* [Errors installing optional sample data](https://devdocs.magento.com/guides/v2.3/install-gde/trouble/tshoot_sample-data.html)
* [Exception handling](https://devdocs.magento.com/guides/v2.3/graphql/develop/exceptions.html)
* [Exceptions during installation](https://devdocs.magento.com/guides/v2.3/install-gde/trouble/tshoot_exceptions.html)
* [Run the Module Manager](https://devdocs.magento.com/guides/v2.3/comp-mgr/module-man/compman-checklist.html)
* [Module configuration files](https://devdocs.magento.com/guides/v2.3/config-guide/config/config-files.html)
* [Out of memory errors](https://devdocs.magento.com/guides/v2.3/comp-mgr/trouble/cman/out-of-memory.html)
