---
title: "MDVA-39966: Unable to deploy locales other than en_US"
labels: QPT patches,Quality Patches Tool,QPT,MQP,Support Tools,Magento,Adobe Commerce,on-premises,cloud infrastructure,deployment,locales,QPT 1.1.2,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1
---

The MDVA-39966 patch solves the issue where the user is unable to deploy locales other than en_US. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-39966. Please note that the issue was fixed in Adobe Commerce version 2.4.1.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.5-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.3.5-p2, 2.4.0 - 2.4.0-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Unable to deploy locales other than en_US.

<ins>Steps to reproduce</ins>:

1. Configure two store views with different locales, for example - en_US and de_DE.
1. Try to deploy static content for these locales by running the following command:

```bash
bin/magento setup:static-content:deploy --language=en_US
bin/magento setup:static-content:deploy --language=de_DE
```

<ins>Expected results</ins>:

de_DE locale is deployed.
```bash
bin/magento setup:static-content:deploy --language=de_DE

Deploy using quick strategy
adminhtml/Magento/backend/de_DE         2416/2416           ============================ 100%   9 secs              
frontend/Magento/blank/de_DE            2486/2486           ============================ 100%   7 secs              
frontend/Magento/luma/de_DE             2504/2504           ============================ 100%   8 secs

Execution time: 27.062166929245
```

<ins>Actual results</ins>:

en_US locale deployed instead of de_DE:
```bash
bin/magento setup:static-content:deploy --language=de_DE

Deploy using quick strategy
adminhtml/Magento/backend/en_US         2416/2416           ============================ 100%   2 secs              
frontend/Magento/blank/en_US            2486/2486           ============================ 100%   1 sec               
frontend/Magento/luma/en_US             2504/2504           ============================ 100%   2 secs
```
## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
