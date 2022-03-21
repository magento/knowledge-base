---
title: Adobe Commerce Software End of Support FAQ
labels: Adobe Commerce,end of life,faq,EOS,EOL,end of support
---

The following FAQ is intended to help merchants, developers, and partners understand the implications of Adobe Commerce’s published End of Support (EOS) date for affected versions of Adobe Commerce.

## General provisions

### Where can I find the software support dates for all versions of Adobe Commerce?
You can find the Adobe Commerce software lifecycle policy and dates of software support in the [Adobe Commerce Software Lifecycle Policy](https://www.adobe.com/content/dam/cc/en/legal/terms/enterprise/pdfs/Adobe-Commerce-Software-Lifecycle-Policy.pdf). We also publish end of support (EOS) dates on our [developer documentation page](https://devdocs.magento.com/release/released-versions.html).

### What does it mean when Adobe ends support for a version of Adobe Commerce software?
When Adobe ends the support for a version of its Adobe Commerce software, you can expect the following:

* Adobe Commerce will no longer create further product changes for that version (including functional, quality, security, and PCI compliance changes.
* Community pull requests will no longer be accepted or merged for the EOS version. Extensions in the Commerce Marketplace that are only compatible with unsupported versions of Adobe Commerce will be removed.
* Online documentation for the unsupported versions will be removed (e.g., developer documentation materials).
* Support tickets submitted after an Adobe Commerce version’s end of support will not be resolved (more technical support details are below).

### What are the implications for merchants using unsupported Adobe Commerce software?
We strongly recommend only using software that is supported.

If you decide to continue using software that has ended support you will no longer receive important product updates or technical support, which often includes the latest security updates. Using unsupported software can impact the following areas:

**Providing secure shopping experiences:**

* You will need to spend resources to evaluate and employ third-party vendors to provide security support, fixes, and updates.
* Once a version of Adobe Commerce software is no longer supported, that version is no longer [PCI compliant](https://www.pcisecuritystandards.org/pci_security/maintaining_payment_security). When this happens you may be subject to fines, removal of credit card processing ability, or other penalties as a result.
* As most exploits tend to target installations that are not up-to-date with the latest security updates, we always recommend that merchants keep their software up-to-date and install security updates as soon as they become available. It is up to the merchant to keep their online store secure with adequate safeguards and security controls to protect their website and their customers’ personal data. One of the best ways to do this is to have the latest patches, fixes, and software updates installed, and continually monitoring your site and admin console for unusual activity.

**Operating efficiently and effectively**

* As unsupported versions of Adobe Commerce software age, there is a diminishing pool of developers and partners available and able to provide support for outdated versions as they orient their operations to newer technologies. Generally, the result is that the quantity and quality of talent for software maintenance decreases, while the cost to maintain the software increases.
* For unsupported Adobe Commerce software, peripheral technologies and dependencies may also reach their own end of life cycle (e.g., PHP, MYSQL, REDIS, SOLR). This makes it increasingly difficult to manage and maintain a secure and compliant site.
* Extension developers are also increasing focus on the latest technologies and compatible platforms. As a result, they might not continue to maintain extensions for unsupported versions of Adobe Commerce.
* Using unsupported versions of Adobe Commerce software often leads to spending more money and resources maintaining an old platform, instead of applying those resources towards continued business innovation and growth.

**Growing aggressively**

* Adobe continues to invest in new technologies and capabilities. By keeping software up-to-date, you are able to take advantage of newer technologies and capabilities that can help your business operate more strategically and grow even quicker.

### What are some examples of how merchants can benefit from new technology by staying current with their Adobe Commerce software?
There are several ways you significantly benefit from staying current on your Adobe Commerce software:

* In addition to keeping your platform up-to-date with the latest security protections including PCI-compliance, upgrading to a supported version can bring improvements in performance and scalability, giving you access to the latest innovations.
* Adobe Commerce 2.4.4, coming April 12, 2022, marks a new step forward in commerce capabilities, performance, and protection. It sets the foundation for the next several years of Adobe innovation help with commerce business resiliency. Built on the newest version of PHP 8.1, the latest version enables merchants to future-proof their digital commerce businesses with:
    * Faster access to innovative features delivered as SaaS services, such as Product Recommendations, Pay Services, and Live Search
    * Easier, more cost-effective maintenance and upgrades
    * Continued flexibility to customize and meet unique business needs
    * Significant increases in performance and scalability
    * Better developer experience and tooling to monitor platform health

### What should I do to avoid software end of support issues?
Your commerce platform is an important business system for your company and staying up-to-date and current is a critical ongoing investment in the business. The latest technology and security updates for your digital storefront is important on many levels and can help enhance innovations and growth.

Moving to the latest version of Adobe Commerce software can take time and resources to execute well. It is best practice for you to plan as far in advance of the end of support date as possible to help ensure you have the appropriate time and resources to achieve your strategic goals on schedule and within budget. To help you with your next upgrade, Adobe has published the [2.4 Upgrade Guide](https://experienceleague.adobe.com/docs/commerce-operations/assets/adobe-commerce-2-4-upgrade-guide.pdf?lang=pt-BR) that includes the best practices and technical steps to follow, as well as the tools and resources to use when performing your upgrade.

Another important consideration is to reserve developer and partner resources as early as possible. Partner time and resources frequently get booked up well ahead of the end of support date, resulting in significantly fewer resources to assist with migration projects. It is recommended that you have a three-year rolling plan that you discuss annually at a minimum and ensure the next year is planned and budgeted for. Use [Adobe’s release calendar](https://devdocs.magento.com/release/) to keep track of release dates.

### Can I use a third-party service provider for software support when Adobe Commerce Support ceases?
Yes, you can look for security firms, developers, or partners who will provide support for unsupported versions of Adobe Commerce. It will be your responsibility to evaluate these providers, re-certify compliance as necessary, and identify and resolve on-going security threats that may impact your business and customers.

### Can Adobe recommend a third-party service provider for extended support beyond the end of support date?
Running an unsupported version of a third-party technology, such as PHP, may impact PCI compliance because potential security vulnerabilities may not be patched by the third party. Adobe recommends merchants who decide to use outdated PHP purchase extended support from vendors such as Zend, who can provide security patches and updates for these unsupported PHP versions.

### I have a license for Adobe Commerce that extends beyond the stated end of support date or that version. Will Adobe continue to provide software support for my unsupported version through the life of my license if I choose not to move to a supported version?
The Adobe Commerce license provides you the right to access and use generally available versions of Adobe Commerce, including accessing and using unsupported versions. Regardless of whether your software version is supported, you are required to continue to stay up-to-date with your current license fees to continue to access and use Adobe Commerce software. This ends when your Adobe Commerce contract ends.

An Adobe Commerce license does not provide software support for versions that have reached and passed their end of support date. Importantly, if you remain on unsupported software, you will need to manage and pay for your own security patches and PCI compliance re-certification and will likely take on additional security risk and liability.

### Does a software version “shut down” when it reaches and passes its end of support date?
No, Adobe Commerce software does not “shut down” once the end of support date is reached or passed. Your license remains valid even for unsupported Adobe Commerce software as long as your account is in good standing, however you will be responsible for PCI compliance re-certification and will no longer be able to file support tickets. Most importantly, you will no longer receive security patches that help protect your digital storefront.

### Can I continue to use Adobe Commerce software after my license has expired?
Once your Adobe Commerce license expires, you are required to cease using Adobe Commerce software and must delete all versions of that software. As long as your account is in good standing, the Adobe Commerce license provides you with the right to access and use generally available versions of Adobe Commerce.

## Technical provisions

### Will support tickets that have been opened BEFORE the end of support date of a software version continue to be worked on to resolution even after the end of support date has passed?

Yes, support tickets opened prior to a software version’s end of support date will continue to be worked on and resolved even if the end of support date for that software version has passed. However, resolving support tickets may be dependent on whether resolution relies on components outside of Adobe Commerce’s control (i.e., PHP, jQuery, etc.) that have expired or reached end of support. In these instances, the support ticket may be resolved by instructing you to upgrade to the latest release.

### If I open a ticket for a software version where software support ends soon, will Adobe prioritize those tickets so that they are resolved before the end of support date?
No, Adobe does not re-prioritize support tickets based on the end of support date of those software versions. Support tickets are addressed based on internal algorithms derived by the ticket's contact reason, environment, and business impact.

### For support tickets opened BEFORE the end of support date, is there an alert to remind merchants of the upcoming end of support?
No, there are no reminder alerts notifying support ticket users of upcoming end of support dates. It is the responsibility of the ticket opener to know the end of support dates for the Adobe Commerce version that they are on, which can be found on our [Adobe Commerce Software Lifecycle policy](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

### If a support ticket for a software version is opened AFTER the end of support date for that version, will it still be worked on to resolution?
No, Adobe Commerce will not work to resolve support tickets that were opened after the end of support date for that software version.
