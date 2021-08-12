---
title: Upgrade Compatibility Tool 1.1.0 for Magento
labels: CLI,GraphQL,Magento Commerce Cloud,PHP,Upgrade Compatibility Tool,announcements,command line,deprecated,reports,update,upgrade,version,1.1.0
---

A Magento upgrade can be made easier with the Upgrade Compatibility Tool 1.1.0. The Upgrade Compatibility Tool 1.1.0 is a command line (CLI) tool that assesses the difficulty of an upgrade. The tool identifies potential problems that must be fixed in your custom code before attempting to upgrade to a newer version of Magento. The tool outputs:

* errors (usage of non-existing classes and interface)
* warnings (usage of deprecated and non-API classes and interface)

The reports also provide a complexity score - a figure that indicates how difficult it is to upgrade from the current Magento version to the new one.

## What is new on UCT 1.0.1?

The Upgrade Compatibility Tool 1.1.0 introduces significant improvements including:

* **Validate core file modifications**: Adobe strongly recommends against customizing core product code. With this release, we added a checkpoint for customers and partners to identify any modifications to the core code to understand the impact of the modifications early and quickly. Adding this tool within the development process will help partners and merchants to identify issues proactively, preventing problems during future upgrades, and reducing Total Cost of Ownership (TCO).
* **Export the report to a JSON file**: This improvement was implemented following feedback from the community. Now, when you run the tool, the details of all identified issues are exported to a JSON file so users can read, share, and manage the results without having to run the tool again.
* **Improved VBE validations**: VBEs (Vendor Bundled Extensions) are not part of Adobe Commerce core code but are tested and supported by Adobe. With this update, we now validate VBEs using the same approach we use for core code. This improvement will help users understand issues related to customizations and core code/VBEs clearly.
* **Provide error codes**: We introduced error codes to help users identify, understand, and solve issues during an upgrade. Error and warning messages provide a clear description and suggested solution.
* Possibility to list only critical issues: with this users will be able to focus only on those issues that are critical and will generate problems while upgrading.
* **Delta issues between 2 versions**: with this improvement, proposed by our community members, UCT users will be able to get a delta of the issues between 2 versions which will allow them to focus only on the new issues introduced for the target version they will upgrade.

## Which versions can the tool compare?
You can use the tool to compare any 2.x version.

## Who can use the Upgrade Compatibility Tool 1.1.0?

Users on all versions of Magento Commerce Cloud. The Upgrade Compatibility Tool 1.1.0 helps prevent issues during an upgrade to Magento 2.4.2, as well as when upgrading to older Magento versions (e.g., 2.3.3 > 2.3.6, or 2.3.5 > 2.4.1).

## Install the Upgrade Compatibility Tool 1.1.0

For installation steps, refer to Magento DevDocs [Upgrade Compatibility Tool > Install](https://devdocs.magento.com/upgrade-compatibility-tool/install.html). For prerequisites for using the tool, refer to Magento DevDocs [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/prerequisites.html).

## Where can I share feedback about the tool?

You can contact the UCT team on our [magento-safe-upgrade-tool](https://magentocommeng.slack.com/archives/C019Y143U9F) slack channel. We are looking forward to getting your feedback and suggestions to improve the tool.

## Related Reading

* [Introducing the Magento Commerce Upgrade Compatibility Tool (Alpha)](https://magento.com/blog/magento-news/introducing-upgrade-compatibility-tool)
* Magento DevDocs [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/introduction.html)
