---
title: Magento best practice: update services and components to latest version
link: https://support.magento.com/hc/en-us/articles/360048603692-Magento-best-practice-update-services-and-components-to-latest-version
labels: upgrade,Magento Commerce Cloud,service,security,PCI,End of Life,best practices,2.4,2.4.0
---

<p>This article provides recommendations to keep your Magento Commerce Cloud technology stack updated and links to helpful resources. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud v2.4</li>
</ul>
<h2>Best practice</h2>
<p>Upgrade the services and components used by Magento before they reach or are close to the end of life date. This will help keep up with PCI compliance and decrease security vulnerabilities. </p>
<p>Customers with Starter plan can self-service with services upgrades. Refer to <a href="https://devdocs.magento.com/cloud/project/services.html#change-service-version">Configure services &gt; Change service version</a> for details on how to do this.  </p>
<p>Customers with Pro plan, can only self-serve the services upgrades on their Integration environment. For services upgrades on Production, they need to <a href="https://support.magento.com/hc/en-us/articles/360000913794-Magento-Help-Center-User-Guide#submit-ticket">submit a support ticket</a> requesting this upgrade. </p>
<p class="warning">Please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. </p>
<p>You can view the list of services/components versions and end-of-life dates in the following file supported by Magento:</p>
<p><a href="https://github.com/magento/ece-tools/blob/develop/config/eol.yaml">https://github.com/magento/ece-tools/blob/develop/config/eol.yaml</a> </p>
<p class="info">Note: this file cannot be considered a single source of truth, please refer to the official vendor websites for these technologies if in doubt. </p>
<p>For information about technologies and versions supported by Magento Commerce 2.4, refer to <a href="https://devdocs.magento.com/guides/v2.4/architecture/tech-stack.html">Magento 2.4 technology stack requirements</a>.</p>