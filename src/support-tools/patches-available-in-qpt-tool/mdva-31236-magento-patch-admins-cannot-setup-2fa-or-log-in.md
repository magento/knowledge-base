---
title: "MDVA-31236: admins cannot setup 2FA or log in"
labels: 2.4.0,2.4.0-p1,2.4.1,2FA,QPT 1.0.12,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools, cloud infrastructure,on-premises
---

The MDVA-31236 patch fixes the issue where the Commerce admin users with custom resource access cannot set up [two-factor authentication (2FA)](https://docs.magento.com/user-guide/stores/security-two-factor-authentication.html) or log in. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.0.

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.4.0-2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users without administrator privileges cannot currently set up their personal 2FA access. 2FA as implemented in Adobe Commerce includes two ACL roles. One role affects global system configuration, and it is needed only when configuring the system. The second ACL role affects individual user 2FA accounts. An admin user needs to configure this second type of 2FA ACL.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
