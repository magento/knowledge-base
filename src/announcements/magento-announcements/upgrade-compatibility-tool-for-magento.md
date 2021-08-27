---
title: Upgrade Compatibility Tool 1.1.0 for Adobe Commerce
labels: CLI,GraphQL,Magento Commerce Cloud,PHP,Upgrade Compatibility Tool,announcements,command line,deprecated,reports,update,upgrade,version,1.1.0,Adobe Commerce,cloud infrastructure
---

The Upgrade Compatibility Tool 1.1.0 is a command-line tool that checks an Adobe Commerce customized instance against a specific version by analyzing all modules and core code installed in it. It returns a list of critical errors, issues, and warnings that must be addressed before upgrading to the latest version of Adobe Commerce.

## What is new on UCT 1.1.0?

The Upgrade Compatibility Tool 1.1.0 introduces significant improvements, including:

* **Validate core file modifications**: Adobe strongly recommends against customizing core product code. With this release, we added a checkpoint for customers and partners to identify any modifications to the core code to understand the impact of the modifications early and quickly. Adding this tool within the development process will help partners and merchants to identify issues proactively, preventing problems during future upgrades, and reducing the Total Cost of Ownership (TCO).
* **Export the report to a JSON file**: This improvement was implemented following feedback from the community. Now, when you run the tool, the details of all identified issues are exported to a JSON file so users can read, share, and manage the results without having to run the tool again.
* **Improved VBE validations**: VBEs (Vendor Bundled Extensions) are not part of Adobe Commerce core code but are tested and supported by Adobe. With this update, we now validate VBEs using the same approach we use for core code. This improvement will help users understand issues related to customizations and core code/VBEs clearly.
* **Provide error codes**: We introduced error codes to help users identify, understand, and solve issues during an upgrade. Error and warning messages provide a clear description and suggested solution.
* **Possibility to list only critical issues**: with this, users will be able to focus only on those issues that are critical and will generate problems while upgrading.
* **Delta issues between two versions**: with this improvement proposed by our community members, UCT users will be able to get a delta of the issues between two versions, which will allow them to focus only on the new issues introduced for the target version they will upgrade.

## Which versions can the tool compare?
You can use the tool to compare any 2.x version.

## Who can use the Upgrade Compatibility Tool 1.1.0?

Adobe Commerce customers.

## Install the Upgrade Compatibility Tool 1.1.0

For installation steps, refer to Adobe Commerce: [Upgrade Compatibility Tool > Install](https://devdocs.magento.com/upgrade-compatibility-tool/install.html) in our developer documentation. For prerequisites for using the tool, refer to Adobe Commerce: [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/prerequisites.html) in our developer documentation.

## What is the number next to each issue?
This is the error message reference that provides information about errors that can occur while executing the Upgrade Compatibility Tool.

The Upgrade Compatibility Tool error messages are categorized by level (critical issues, errors, and warnings) and type (core code, custom code, and GraphQL schemas). Each type contains the following information:

* Error code: The Adobe Commerce assigned identifier for the error message.
* Error description: A description that summarizes the cause of the error.
* Error suggested action: If applicable, provides guidance to troubleshoot and resolve the error.
* Codes are listed and described on the [Error message reference page](https://devdocs.magento.com/upgrade-compatibility-tool/errors.html).

## Where can I share feedback about the tool?

You can contact the UCT team on our [#upgrade-compatibility-tool](https://magentocommeng.slack.com/archives/C019Y143U9F) slack channel. We are looking forward to getting your feedback and suggestions to improve the tool.

## Related Reading

* Adobe Commerce Blog: [Introducing the Upgrade Compatibility Tool (Alpha)](https://magento.com/blog/magento-news/introducing-upgrade-compatibility-tool)
* Adobe Commerce: [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/introduction.html) in our developer documentation.
