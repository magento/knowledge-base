---
title: Upgrade Compatibility Tool for Magento
labels: CLI,GraphQL,Magento Commerce Cloud,PHP,Upgrade Compatibility Tool,announcements,command line,deprecated,reports,update,upgrade,version
---

A Magento upgrade can be made easier with the Upgrade Compatibility Tool. The Upgrade Compatibility Tool is a command line (CLI) tool that assesses the difficulty of an upgrade. The tool identifies potential problems that must be fixed in your custom code before attempting to upgrade to a newer version of Magento. The tool outputs:

* errors (usage of non-existing classes and interface)
* warnings (usage of deprecated and non-API classes and interface)

The reports also provide a complexity score - a figure that indicates how difficult it is to upgrade from the current Magento version to the new one.

## Who can use the Upgrade Compatibility Tool?

Users on all versions of Magento Commerce Cloud.The Upgrade Compatibility Tool helps prevent issues during an upgrade to Magento 2.4.2, as well as when upgrading to older Magento versions (e.g., 2.3.3 > 2.3.6, or 2.3.5 > 2.4.1).

## Install the Upgrade Compatibility Tool

For installation steps, refer to Magento DevDocs [Upgrade Compatibility Tool > Install](https://devdocs.magento.com/upgrade-compatibility-tool/install.html) . For prerequisites for using the tool, refer to Magento DevDocs [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/prerequisites.html) .

## Release timeline

Currently, an ALPHA version of the tool is available (January 2021). The ALPHA version has limited scope, only validating PHP Magento APIs and GraphQL schema.

## Related Reading

* [Upgrade Compatibility Tool (FAQ) wiki](https://wiki.corp.adobe.com/display/MC/2.+FAQs)
* [Introducing the Magento Commerce Upgrade Compatibility Tool (Alpha)](https://magento.com/blog/magento-news/introducing-upgrade-compatibility-tool)
* Magento DevDocs [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/introduction.html) 

