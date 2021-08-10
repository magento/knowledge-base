---
title: "MDVA-34948: Slowing of website"
labels: MQP patches,Magento Quality Patches,Support Tools,MQP 1.1.1,Magento Commerce,Magento Commerce Cloud,Adobe Commerce,on-premise,cloud infrastructure,2.4.1,2.4.0-p1,2.3.6,2.3.6-p1
---
The MDVA-34948 Adobe Commerce patch fixes the issue of slowing of the website. This patch is available when the [quality patches for Adobe Commerce (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.1 is installed. The patch ID is MDVA-34948. Please note that the issue is fixed in Adobe Commerce version 2.4.1.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on our cloud infrastructure 2.4.0-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce on-premise and Adobe Commerce on our cloud infrastructure 2.3.6-2.3.6-p1, 2.4.0-2.4.0-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Adobe Commerce version, run `./vendor/bin/magento-patches status`.

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

To apply individual patches use the following links depending on your deployment type:

* Adobe Commerce on-premise: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce for cloud: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about quality patches for Adobe Commerce, refer to:

* [Quality patches for Adobe Commerce released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using quality patches for Adobe Commerce](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
