---
title: Site fails to load due to maintenance mode left enabled
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,how to,maintenance mode,enable,disable,site not loading,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a fix for when your site doesn't load due to maintenance mode being left enabled or not been disabled automatically. You may receive an error message: *Service Temporarily Unavailable The server is temporarily unable to service your request due to maintenance downtime or capacity problems.*

## Affected versions and products

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x
* Adobe Commerce on-premises 2.2.x, 2.3.x

## Issue

Maintenance mode is a part of the deployment process. However, if it has been enabled automatically and has not been disabled, or the merchant enabled maintenance mode manually and forgot to disable, it can cause a failed deployment.

## Cause

Having maintenance mode enabled prevents the site to load.

## Solution

To check the current maintenance mode status, run the following command from the CLI:

```clike
bin/magento maintenance:status
```

To disable maintenance mode, run the following command in CLI:

```clike
bin/magento maintenance:disable
```

## Related Reading

To learn when to use maintenance mode, refer to [Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=maintenance%20mode) in our developer documentation.
