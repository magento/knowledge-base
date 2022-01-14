---
title: "MDVA-35312: empty GraphQL request throws 500 error not 200 OK"
labels: 2.4.1-p1,2.4.2,500 error,GraphQL,QPT 1.0.18,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-35312 patch fixes the issue where an empty GraphQL request throws error response code 500. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-35312. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Magento version:**

Adobe Commerce on cloud infrastructure 2.4.2

**Compatible with Magento versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.4.1-p1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Empty GraphQL request throws error response code 500 instead of 200 code.

<ins>Steps to reproduce</ins>:

Send a GraphQL request, for example:

```curl
curl -i -X OPTIONS http://inv.test/graphql
```

<ins>Expected results</ins>:

Response: *200 OK*.

<ins>Actual results</ins>:

Response: *HTTP/1.1 500 Internal Server Error*.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
