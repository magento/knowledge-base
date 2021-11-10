---
title: "MDVA-41164: Cannot save or edit Company with custom customer attributes"
labels: QPT patches,Quality Patches Tool,QPT,MQP,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,edit,custom customer,attributes,exception log,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-41164 patch solves the issue where the admin user is not able to save or edit a company with custom customer attributes of files or images of any type. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.5 is installed. The patch ID is MDVA-41164. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin user is not able to save or edit a company with custom customer attributes of files or images of any type.

<ins>Prerequisites</ins>:

B2B module is installed.

<ins>Steps to reproduce</ins>:

1. Enable Company in **Stores** > **Config** > **B2B Features**.
1. Create a customer attribute in **Stores** > **Attributes** > **Customers** > **Add New Attribute**:
    * Input type: File (attachment)
    * Show on Storefront: Yes
    * Sort order: Any
    * Forms to Use In: Select all
1. Create a new company in **Customers** > **Companies** > **Add New Company** and upload a file for the new attribute created above.

<ins>Expected results</ins>:

User is able to complete the creation of the company and the attachment is uploaded without any error.

<ins>Actual results</ins>:

* You get an error message: *Something went wrong while saving file.*
* Exception log contains a record like the following:
    ```php
    report.CRITICAL: Notice: Undefined index: customer in
    ../app/code/Magento/Customer/Controller/Adminhtml/File/Customer/Upload.php on line 69
    ```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
