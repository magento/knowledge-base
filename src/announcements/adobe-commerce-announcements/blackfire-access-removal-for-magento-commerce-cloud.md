---
title: Blackfire access removal for Adobe Commerce on cloud infrastructure
labels: Blackfire,Blackfire access,Blackfire removal,Magento Commerce Cloud,Pro,Magento,Starter,New Relic,PHP,blackfire.io,extensions,Adobe Commerce,cloud infrastructure
---

On April 11, 2020, free access to Blackfire performance monitoring will no longer be included with Adobe Commerce on cloud infrastructure Pro plan architecture or Adobe Commerce on cloud infrastructure Starter plan architecture subscriptions.  You will no longer be able to log in to your Blackfire account. It is possible to continue using Blackfire beyond April 11 by purchasing a license directly through Blackfire.io. Adobe Commerce merchants who have not purchased licenses directly from Blackfire by that date will have their free, Adobe-provided Blackfire licenses deactivated. Along with this, functionality to create new reports using the Profiler tool will be disabled. It is still possible for customers using Pro architecture hosted on cloud infrastructure to receive free monitoring of infrastructure performance via New Relic Infrastructure.

**If you want to continue to use Blackfire**:

1. You must purchase a license with Blackfire directly.
1. Then setup Blackfire using these [steps](https://blackfire.io/docs/integrations/paas/magentocloud).
1. If you experience any difficulties with the installation you can [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to request assistance. For Blackfire specific questions, reach out to Blackfire support directly at [support@blackfire.io](mailto:support@blackfire.io).

## If you have errors when running a deployment:

If when running a deployment you get Blackfire related errors do the following:

1. Remove Blackfire from your configuration. Edit the `.magento.app.yaml` file and remove Blackfire from the runtime section:
    ```YAML
    ...
    # Enable extensions required by Magento 2
    runtime:
      extensions:
      - redis
      - xsl
      - json
      -**blackfire**
       - imap
    ...
    ```
1. Complete this on the Local development environment and push up to the cloud.

Only [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) if you see the following error after you run a deployment:

 *PHP Warning: PHP Startup: Unable to load dynamic library 'blackfire.so' (tried: /usr/lib/php/20180731-zts/blackfire.so (/usr/lib/php/20180731-zts/blackfire.so: cannot open shared object file: No such file or directory), /usr/lib/php/20180731-zts/blackfire.so.so (/usr/lib/php/20180731-zts/blackfire.so.so: cannot open shared object file: No such file or directory)) in Unknown on line 0*

This error means that the Blackfire plugin must be updated and stopped from loading.

**If you want to use New Relic Infrastructure**:

To learn how to access New Relic Infrastructure, see [Access New Relic](https://support.magento.com/hc/en-us/articles/360039127712) in our support knowledge base.
