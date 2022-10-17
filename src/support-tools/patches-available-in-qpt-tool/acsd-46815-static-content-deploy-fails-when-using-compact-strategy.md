---
title: "ACSD-46815: Static content deploy fails when using compact strategy"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.20,static content,compact strategy,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.5
---

The ACSD-46815 patch fixes the issue where the static content deployment fails when the compact strategy is used. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.20 is installed. The patch ID is ACSD-46815. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.5

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.5

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://experienceleague.adobe.com/tools/commerce-quality-patches/index.html). Use the patch ID as a search keyword to locate the patch.

## Issue

Static content deployment fails when deploying with a compact strategy.

<ins>Steps to reproduce</ins>:

1. Deploy the static content with a compact strategy by running the following command:

```bash
bin/magento setup:static-content:deploy -f -s compact
```
<ins>Expected results</ins>:

Static content deployment is completed without any error.

<ins>Actual results</ins>:

Static content deployment fails with a compact strategy. The following error occurs during the deployment process: *The contents from the /app/pub/static/adminhtml/Magento/base/default/./node_modules/@spectrum-css/vars/dist/spectrum-global.css file can't be read.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Quality Patches Tools > Usage](https://experienceleague.adobe.com/docs/commerce-operations/tools/quality-patches-tool/usage.html) in Adobe Experience League.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://experienceleague.adobe.com/tools/commerce-quality-patches/index.html) in Adobe Experience League.
