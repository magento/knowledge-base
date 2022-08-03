---
title: FAQ for New Adobe Commerce Release Strategy, Updated Lifecycle Policy, and Extended Support
labels: FAQ,Magento,release strategy,lifecycle policy,Adobe Commerce,update,Adobe Support,Magento Open Source,Extended Support
---

## 2022 Release Strategy and Updated Lifecycle Policy

### How are Adobe Commerce releases changing?

We are reducing the frequency of core Commerce application upgrades in 2022 and will be providing two full patches and several security patches for versions still under Adobe Commerce Support throughout the year. See our new [release calendar](https://devdocs.magento.com/release/?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=schedule) for timing details.

We are also reducing complexity of upgrades and accelerating innovation by narrowing the focus of full patch releases to include only security, compliance, performance, and high priority bugs. New features will continue to be released as independent services, allowing Merchants to adopt features and innovate faster; Live Search, Product Recommendations, and Amazon Sales Channel are all examples of existing independent services that enabled us to reduce complexity in the core Commerce application. Community contributions and lower priority issues will be released through the [Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047139492-Magento-Quality-Patches-released-new-tool-to-self-serve-quality-patches), providing faster time to market and letting merchants choose the updates that are important to them.

### How is the lifecycle policy changing?

We will be moving our end of support (EOS) dates to align closely with those of PHP, the 3rd-party scripting language that Adobe Commerce is built on. Whenever a PHP version reaches its end of life (EOL), Adobe must update our code to maintain PCI compliance. Aligning our EOS dates to PHP EOL dates will help reduce the frequency and impact of PHP version changes and make it even simpler for merchants to follow the most effective path for staying current.

### How will these changes benefit customers?

Reducing the frequency and complexity of patch releases means customers can reduce the time, resources, and development dollars they spend on upgrades. In addition, as we continue to release features as independent services, customers will be able to adopt these features faster, accelerating their time to innovation. To learn more about the benefits of our simplified upgrade process, visit our recent [release strategy blog post](https://business.adobe.com/blog/how-to/accelerating-innovation-through-simplified-release-strategy).

### What are the different types of upgrades that will be released in 2022?

To streamline upgrades, we will be delivering three types of releases throughout 2022.

* **Patch releases**. Core application upgrades include security, performance, and high-priority quality fixes.
* **Feature releases**. Releases of new features and feature updates that are delivered as independent services, separate from the patch releases. Examples include services like Product Recommendations and Live Search, independent modules like PWA Studio and Inventory Management (MSI), and updates to our cloud services and infrastructure.
* **Security patch releases**. Security-only updates to the core application released to keep merchants secure and compliant.

### What are Quality patches?

Quality patches are a way to distribute fixes for individual quality issues outside of patch releases (like 2.4.4). Customers can easily search for and apply a specific fix appropriate for their version without contacting Support or waiting for a release. Both Adobe and the Commerce community can contribute Quality patches. Fixes provided by the community are reviewed by Maintainers before they are made available to customers. This [dev blog post](https://community.magento.com/t5/Magento-DevBlog/New-Delivery-Process-for-Community-Contributions/ba-p/479563) details this community contribution program.

### What is the release schedule for 2022?

Release dates can be found in our [2022 release calendar](https://devdocs.magento.com/release/?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=schedule). There will be two patch releases, several security patch releases for versions still under support, and six feature releases throughout the year.

### Will this new release strategy be applicable to both Adobe Commerce and Magento Open Source Merchants?  

Yes, both Adobe Commerce and Magento Open Source merchants will follow the same release process and schedule.

### With the new lifecycle policy, how do Merchants stay secure?

Adobe Commerce will continue to provide security patch releases for versions still under support. To stay up to date on the latest security fixes, merchants must take the latest patch or security patch release. For example, when Adobe Commerce 2.4.5 is released in August 2022, merchants must either adopt 2.4.5 or 2.4.4-p1 (also released in August 2022) to adopt the latest security fixes. The security fixes will not be backported to previous patch releases of the 2.4 release line (e.g., 2.4.0-2.4.4). Merchants who fall behind on upgrades are at risk and have more exposure to security vulnerabilities.

### With the new lifecycle policy, how long will Merchants be able to get quality fixes from Adobe Support?  

Merchants will be able to receive quality fixes until their version reaches End of Support. Merchants can access quality fixes through the Adobe Commerce [Quality Patch Tool](https://support.magento.com/hc/en-us/articles/360047139492-Magento-Quality-Patches-released-new-tool-to-self-serve-quality-patches) or by contacting the Support team.

### Would upgrading to 2.4.4 or higher require all extensions be updated as well?

Most extensions will need to be updated to work with 2.4.4 or higher, given that it is based on a new version of PHP and there will be backward incompatible changes. We are taking proactive measures to ensure our Marketplace extensions stay up to date with each Commerce release.  

## Upgrade Resources

### Which resources are available to help with planning, budgeting, and upgrades in general?  

Merchants can use a set of resources to help plan, budget, and complete upgrades like the comprehensive [2.4 Upgrade Guide](https://experienceleague.adobe.com/docs/commerce-operations/assets/adobe-commerce-2-4-upgrade-guide.pdf?lang=pt-BR) and the [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/introduction.html). The tool has now over 400 downloads, more than 2,000 executions, and +80 active users on the community slack channel (#upgrade-compatibility-tool).  

A [2.4 Technical Upgrade Workshop](https://register.gotowebinar.com/register/6951278956217776911) will be held on January 26, 8am PST for customers and a recording will be available on demand under the [Tutorials section of Experience League](https://experienceleague.adobe.com/docs/commerce.html?lang=en#tutorials) shortly after the event.

### As a Managed Services customer, how can Customer Engineering help me in the upgrade to 2.4.4?

Managed Services customers can work with our Customer Engineering team for assistance with several components of the upgrade process, including analysis, upgrading cloud services, quality and user acceptance testing (QA and UAT), and production launch.

### Upgrade Analysis

* Arrange Kick Off Call
* Review Environments that need to be upgraded
* Assist with running Upgrade Compatibility Tool

### Upgrading Cloud Services, QA and UAT

* Upgrading Cloud Services for Development and Staging Environments
* Assist with Load Testing and Review of Best Practices for Performance

### Production Launch

* Coordinating Go Live Readiness and Checklist
* Coordinating Cloud Service Upgrades
* Coordinating Launch Event Conference Call for Live Launch Assistance
* Monitor Application Performance post upgrade

## Extended Support Options

### [NEW] I am currently using Adobe Commerce 2.3.x and would like to upgrade to the latest 2.4.x version in 2022. However, with the 2.3 line reaching end of support in April 2022, that does not give me enough time to upgrade while staying supported. What are my options?

We understand that it takes time to upgrade, and we are here to support you on your path to 2.4.4. We are shifting the 2.3 line End of Support date from April 28, 2022, to September 8, 2022, to provide you with additional time to prepare for and execute your upgrade to 2.4.4.

We still encourage you to upgrade to 2.4.4 at your earliest convenience to help ensure PCI compliance and to gain access to new features that enable business growth. Being on a version with third-party technologies that are no longer supported (i.e., versions 2.3.6 and lower are based on PHP versions that have reached end of life) puts you at risk of security vulnerabilities. Review our [lifecycle policy](https://www.adobe.com/content/dam/cc/en/legal/terms/enterprise/pdfs/Adobe-Commerce-Software-Lifecycle-Policy.pdf) for more information on our EOS schedule and terms.

If making the move to 2.4.4 is not feasible within this timeframe, we recommend that you upgrade first to 2.3.7 by September 8, which will be a lower-level effort. We will be offering a paid extended support option for 2.3.7 for an additional year (Sept 2022 – Sept 2023) so that you can prepare for your next upgrade to 2.4.4 or higher. More details will be announced in March.

### [NEW] I am currently using Adobe Commerce 2.4.0-2.4.2 and would like to upgrade to the latest 2.4.x version. However, I am unable to plan for another upgrade before my version reaches end of support in November 2022. What are my options?

We have updated our lifecycle policy so that our version end of support dates are now aligned with PHP end of life dates. While this change is ultimately beneficial and extends the amount of time between versions that cause breaking changes, we recognize that it means a shorter support window for some customers.  

We will be offering a paid extended support offering that will keep your version supported for an additional year (Nov 2022 – Nov 2023) so that you have additional time to prepare for your next upgrade. More details will be announced in March.

### [NEW] I recently upgraded to Adobe Commerce 2.4.3 and am not able to plan for another upgrade in 2022. With 2.4.3 reaching end of support in November 2022, what are my options to stay supported?

We recognize that you recently upgraded to or are in the process of upgrading to 2.4.3, and planning your next upgrade immediately may not be feasible. As your partner in your digital commerce journey, we will be offering a paid extended support offering that will keep your version supported for an additional year (Nov 2022 – Nov 2023) so that you have additional time to prepare for your next upgrade. More details will be announced in March.

### [NEW] What is paid extended support and how do I learn more about it?

Adobe Commerce will offer a paid extended support option for versions based on PHP 7.4 (customers on 2.3.7 and/or 2.4.0-2.4.3) that includes both quality and security fixes for up to one year. These new offerings will give merchants more time to be supported as they plan and execute their upgrade to 2.4.4 or higher.  

Extended support for 2.3.7 will start after 2.3 reaches EOS on September 8, 2022 and can be received until September 8, 2023. Extended support for 2.4.0-2.4.3 will start after EOS on November 28, 2022, and can be received until November 28, 2023.  

It is important to note that even under extended support, you may need to take additional measures to stay PCI compliant. Adobe Commerce cannot provide support for third-party technologies, such as PHP, that have reached end of life.

### [NEW] What is PCI compliance and why won’t extended support keep me compliant?

Payment Card Industry (PCI) compliance is a set of industry standards that all businesses that process credit card information need to follow to maintain a secure environment for their customers. Companies must keep their commerce platform and all technological dependencies up to date in order to remain PCI compliant.   

While a customer is under extended support, our Customer Engineering team will continue to provide the same quality and security fixes as usual, without any scope degradations. However, customers will need to take additional measures to remain PCI compliant due to underlying platform technologies reaching end of life.

For instance, 2.4.3 is based on a version of PHP that will reach EOL in November 2022. Even if a customer purchases extended support for 2.4.3 starting in November, they will not remain PCI compliant because PHP is a third-party software that Adobe does not support. They will need to either upgrade each outdated software component, or upgrade to the latest version of Adobe Commerce to become compliant.

Please refer to [Adobe Commerce System Requirements](https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html) for a full list of tested and supported third-party technologies.

### [NEW] What actions can I take to address PCI failure caused by outdated software?

Running an unsupported version of a third-party technology, such as PHP, may impact PCI compliance because any security vulnerability discovered will not be patched by the third party. Adobe recommends customers using outdated PHP purchase extended support from vendors such as [Zend](https://www.zend.com/services/php-long-term-support), who can provide security patches and updates for vulnerabilities discovered on unsupported PHP versions.  
