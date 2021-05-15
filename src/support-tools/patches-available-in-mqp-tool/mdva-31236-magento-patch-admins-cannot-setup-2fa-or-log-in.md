---
title: MDVA-31236 Magento patch: admins cannot setup 2FA or log in
labels: 2.4.0,2.4.0-p1,2.4.1,2FA,MQP 1.0.12,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools
---

The MDVA-31236 Magento patch fixes the issue where Magento admin users with custom resource access cannot set up [two-factor authentication (2FA)](https://docs.magento.com/user-guide/stores/security-two-factor-authentication.html) or log in. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0.

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.4.0-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Users without administrator privileges cannot currently set up their personal 2FA access. 2FA as implemented in Magento includes two ACL roles. One role affects global system configuration, and it is needed only when configuring the system. The second ACL role affects individual user 2FA accounts. An admin user needs to configure this second type of 2FA ACL.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.