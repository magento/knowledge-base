---
title: FAQ for New Adobe Commerce Release Strategy and Updated Lifecycle Policy
labels: FAQ,Magento,release strategy,lifecycle policy,Adobe Commerce,update,Adobe Support,Magento Open Source
---

## How are Adobe Commerce releases changing?
We are reducing the frequency of core Commerce application upgrades from four to three releases in 2022. We will be providing two full patches and one security patch. See our [new release calendar](https://devdocs.magento.com/release/?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=schedule) for timing details.

We are also reducing the complexity of upgrades and accelerating innovation by narrowing the focus of full patch releases to include only security, compliance, performance, and high priority bugs. New innovations and features will continue to be released as independent services, allowing Merchants to adopt features and innovate faster; Live Search, Product Recommendations, and Amazon Sales Channel are all examples of existing independent services that enabled us to reduce complexity in the core Commerce application. Community contributions and lower priority issues will be released through the [Quality Patches Tool](https://devdocs.magento.com/quality-patches/tool.html), providing faster time to market and letting merchants choose the updates that are important to them.

## How is the lifecycle policy changing?
We will be moving our end of support (EOS) dates to align closely with those of PHP, the third-party scripting language that Adobe Commerce is built on. Whenever a PHP version reaches its end of life (EOL), Adobe must update our code to maintain PCI compliance. Aligning our EOS dates to PHP EOL dates will help reduce the frequency and impact of PHP version changes and make it even simpler for Merchants to follow the most effective path for staying current.

## How will these changes benefit customers?
Reducing the frequency and complexity of patch releases means customers can reduce the time, resources, and development dollars they spend on upgrades. In addition, as we continue to release features as independent services, customers will be able to adopt these features faster, accelerating their time to innovation. To learn more about the benefits of our simplified upgrade process, visit our recent release strategy [blog post](https://magento.com/blog/accelerating-innovation-through-simplified-release-strategy).

## What are the different types of upgrades that will be released in 2022?
To streamline upgrades, we will be delivering three types of releases throughout 2022.

* **Patch releases**. We will release two core application upgrades in 2022 that include security, compliance, performance, and high-priority quality fixes.
* **Security patch releases**. These are security-only updates to the core application released to keep merchants secure and compliant.
* **Feature releases**. These are releases of new features and feature updates that are delivered as independent services, separate from the patch releases. Examples include services like Product Recommendations and Live Search, independent modules like PWA Studio and Inventory Management (MSI), and updates to our cloud services and infrastructure.

## What are Quality patches?
Quality patches are a way to distribute fixes for individual quality issues outside of patch releases (like 2.4.4). Customers can easily search for and apply a specific fix appropriate for their version without contacting Support or waiting for a release. Both Adobe and the Commerce community can contribute Quality patches. Fixes provided by the community are reviewed by Maintainers before they are made available to customers. This [dev blog post](https://community.magento.com/t5/Magento-DevBlog/New-Delivery-Process-for-Community-Contributions/ba-p/479563) details this community contribution program.

## What is the release schedule for 2022?
Release dates can be found in our [2022 release calendar](https://devdocs.magento.com/release/?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=schedule). There will be two patch releases, one security patch release and six announcements about feature releases throughout the year.

## With the new lifecycle policy, how do Merchants stay secure?
To stay up to date on the latest security fixes released by Adobe Commerce, merchants should take the latest patch or security patch release. Merchants who fall behind on upgrades are at risk and have more exposure to security vulnerabilities.

## With the new lifecycle policy, how long will Merchants be able to get quality fixes from Adobe Support?  
Merchants will be able to receive quality fixes until their version reaches End of Support.   

## Which resources are available to help with planning, budgeting and upgrades in general?
You can now use a set of resources to help you plan, budget, and complete upgrades like the [upgrade plan checklist](https://support.magento.com/hc/en-us/articles/360057968951), the [upgrade best practices guide](https://devdocs.magento.com/guides/v2.4/comp-mgr/upgrade-best-practices.html), and the [upgrade compatibility tool](https://devdocs.magento.com/upgrade-compatibility-tool/introduction.html) for which we continue investing in as it has proved to be a success for our users. The tool has now over 400 downloads, more than 2,000 executions, and +80 active users on the community slack channel (#upgrade-compatibility-tool).

## Will this new release strategy be applicable to both Adobe Commerce and Magento Open Source Merchants?  
Yes, both Adobe Commerce and Magento Open Source merchants will follow the same release process and schedule.
