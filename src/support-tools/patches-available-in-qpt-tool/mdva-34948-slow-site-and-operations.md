---
title: "MDVA-34948: Slowing of website"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.1,Magento Commerce,Magento Commerce Cloud,Adobe Commerce,on-premise,cloud infrastructure,2.4.1,2.4.0-p1,2.3.6,2.3.6-p1,slow website,MySQL,queries,Adobe Commerce,cloud infrastructure,on-premises
---
The MDVA-34948 Adobe Commerce patch fixes the issue of slowing of the website. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.1 is installed. The patch ID is MDVA-34948. Please note that the issue was fixed in Adobe Commerce version 2.4.1.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on our cloud infrastructure 2.4.0-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce on-premises and Adobe Commerce on our cloud infrastructure 2.3.6-2.3.6-p1, 2.4.0-2.4.0-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The website gets slow, which hampers operations.

<ins>Steps to reproduce</ins>:

1. Run `show processlist` in MySQL.
1. Check if there are multiple queries like:

```sql
   SELECT GET_LOCK(SYSTEM_CONFIG', '10');
```

<ins>Expected results</ins>:

`GET_LOCK` should be executed immediately.

<ins>Actual results</ins>:

Multiple `GET_LOCK` queries get stuck for up to 10 seconds each.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
