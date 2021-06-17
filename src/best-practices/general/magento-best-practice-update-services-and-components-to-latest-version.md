---
title: "Magento best practice: update services and components to latest version"
labels: 2.4,2.4.0,End of Life,Magento Commerce Cloud,PCI,best practices,security,service,upgrade
---

This article provides recommendations to keep your Magento Commerce Cloud technology stack updated and links to helpful resources.

## Affected products and versions

* Magento Commerce Cloud v2.4

## Best practice

Upgrade the services and components used by Magento before they reach or are close to the end of life date. This will help keep up with PCI compliance and decrease security vulnerabilities.

Customers with Starter plan can self-service with services upgrades. Refer to [Configure services > Change service version](https://devdocs.magento.com/cloud/project/services.html#change-service-version) for details on how to do this.

Customers with Pro plan, can only self-serve the services upgrades on their [Integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter) . For services upgrades on Production, they need to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794-Magento-Help-Center-User-Guide#submit-ticket) requesting this upgrade.

>![warning]
>
>Please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment.

You can view the list of services/components versions and end-of-life dates in the following file supported by Magento:

<https://github.com/magento/ece-tools/blob/develop/config/eol.yaml> 

>![info]
>
>Note: this file cannot be considered a single source of truth, please refer to the official vendor websites for these technologies if in doubt.

For information about technologies and versions supported by Magento Commerce 2.4, refer to [Magento 2.4 technology stack requirements](https://devdocs.magento.com/guides/v2.4/architecture/tech-stack.html) .