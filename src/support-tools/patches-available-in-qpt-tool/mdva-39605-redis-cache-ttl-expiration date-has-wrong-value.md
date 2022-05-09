---
title: "MDVA-39605: Redis cache TTL (expiration date) has wrong value"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT 1.1.13,redis cache,TTL,expiration date,2.3.4,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.3.7-p3,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.4
---

The MDVA-39605 patch solves the issue where the Redis cache TTL (expiration date) has a wrong value. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.13 is installed. The patch ID is MDVA-39605. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.4 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The Redis cache TTL (expiration date) has a wrong value.

<ins>Steps to reproduce</ins>:

In order to test the fix, flush cache and open a configurable product on the storefront. Then open a terminal (console) and follow the steps below:

1. Run the command: `redis-cli`.
1. Run `KEYS "*PRICE"` (there should be only one key in the result, for example, zc:ti:e54_PRICE). Copy the key.
1. Run `SMEMBERS` followed by the key from the previous step (for example, `SMEMBERS zc:ti:e54_PRICE`). Copy any key from the result (for example, e54_4E67B390D5C28FC7C3D9BB0D37AB3F7B5E576421).
1. Run `KEYS "*<key>"` with the key name from the previous step to get the full key name (for example, `KEYS "*e54_4E67B390D5C28FC7C3D9BB0D37AB3F7B5E576421"`). There should be only one key in the result (for example, zc:k:e54_4E67B390D5C28FC7C3D9BB0D37AB3F7B5E576421). As you may notice, the full key name is simply the key name with prefix "zc:k:". Now copy the full key name.
1. Run `HGETALL` followed by the full key name from Step 4 to check the value. The value should contain serialized data of associated products of a related configurable product.
1. Run `TTL` followed by the full key name from Step 4 to check whether the key has an expiration. The result should be different from **-1** and **-2** and should be approximately 2592000 (30 days). Although the expiration set in the code is one year, the Redis library used in Adobe Commerce has a hard max expiration limit of 2592000s.

<ins>Expected results</ins>:

Expiration limit is 2592000s

<ins>Actual results</ins>:

Expiration limit is set to **-1** or **-2**.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
