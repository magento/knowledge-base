---
title: 'MDVA-29959 patch: admin with "Customers" permissions cannot manage company account'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,ACL,B2B,QPT 1.0.5,QPT patches,Magento Commerce,Quality Patches Tool,support tools,Adobe Commerce,cloud infrastructure
---

MDVA-29959 patch available in the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) tool version 1.0.5 fixes the issue where a restricted admin user with all permissions for "Customer" ACL cannot manage companies (add or delete a company). Please note, that the issue is fixed in B2B for Adobe Commerce 2.3.4.

## Affected products and versions

B2B for Adobe Commerce on cloud infrastructure 2.3.0-2.3.3-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin user with all permissions for "Customer" ACL cannot manage companies (add or delete a company).

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. In the Commerce Admin, create a new admin role and assign a user to that role.
1. Assign only "Customer" resources to the role.
1. Log in as a user with this role.
1. Try to delete a company account.

 <span class="wysiwyg-underline">Expected result:</span>

The company account is successfully deleted.

 <span class="wysiwyg-underline">Actual result:</span>

You are not able to delete the company account. You get the *Sorry, you need permissions to view this content.* error message.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
