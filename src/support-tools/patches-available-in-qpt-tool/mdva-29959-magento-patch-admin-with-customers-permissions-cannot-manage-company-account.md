---
title: 'MDVA-29959 Magento patch: admin with "Customers" permissions cannot manage company account'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,ACL,B2B,QPT 1.0.5,QPT patches,Magento Commerce,Quality Patches Tool,support tools
---

MDVA-29959 Magento patch available in the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) tool version 1.0.5 fixes the issue where a restricted admin user with all permissions for "Customer" ACL cannot manage companies (add or delete a company). Please note, that the issue is fixed in Magento Commerce B2B 2.3.4.

## Affected products and versions

Magento Commerce B2B v2.3.0-2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin user with all permissions for "Customer" ACL cannot manage companies (add or delete a company).

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. In the Magento Admin, create a new admin role and assign a user to that role.
1. Assign only "Customer" resources to the role.
1. Login as a user with this role.
1. Try to delete a company account.

 <span class="wysiwyg-underline">Expected result:</span>

The company account is successfully deleted.

 <span class="wysiwyg-underline">Actual result:</span>

You are not able to delete the company account. You get the *Sorry, you need permissions to view this content.* error message.

## Apply the patch

To apply individual patches use the following links depending on your version of Magento:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

The patch adds new ACL for managing companies. Following is an illustration of the ACL you get after the patch is installed:

![new-acl.png](assets/new-acl.png)

## Related reading

To learn more about Quality Patches Tool, refer to:

* KB [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* KB [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
