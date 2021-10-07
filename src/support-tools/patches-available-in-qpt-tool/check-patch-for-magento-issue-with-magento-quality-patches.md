---
title: Check patch for Magento issue with Quality Patches Tool
labels: 2.3,2.3.x,2.4,2.4.x,QPT,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,how to,patches
---

This provides an overview of Quality Patches Tool (QPT) and links to resources explaining how to use it.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## What are Quality Patches Tool

The [Quality Patches Tool](https://github.com/magento/quality-patches) (QPT) individual patches developed by Adobe and the Magento Open Source community.

It allows you to:

* apply quality patches included to the package
* revert previously applied patches
* view the general information about quality patches available for the installed version of Magento.

Here's an example of the status table you can get to view the available patches:

![Magento_patches_list](assets/status_table.png)

The tool is aimed to enable you to self-serve with patches for issues you might experience with Magento, or easily apply patches suggested by Magento Support.

>![info]
>
>Note: QPT is for quality patches only. Security patches are available in the [Magento Security Center](https://magento.com/security/patches) .

## How to install and use Quality Patches Tool

The installation and usage commands are different for Magento Commerce and Magento Commerce Cloud, because for Cloud the QPT package is included to the ece-tools package.

### How to install and use QPT for Magento Commerce

Please refer to [Patching](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) article in Magento Developer Documentation for details on how to install and use QPT for applying and reverting patches.

### How to install and use QPT for Magento Commerce Cloud

Please refer to [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) article in Magento Commerce Cloud Developer Documentation for details on how to install and use QPT for applying and reverting patches on Magento Commerce Cloud.

## Related reading

* [Quality Patches Tool release notes](https://devdocs.magento.com/quality-patches/release-notes.html)
* [How to apply composer patches provided by Magento Support](https://support.magento.com/hc/en-us/articles/360028367731)
