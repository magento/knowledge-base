---
title: MDVA-39384: Unable to save custom customer attribute for a company user
labels: QPT patches,Quality Patches Tool,QPT,MQP,Support Tools,QPT 1.1.2,Magento,Adobe Commerce,on-premise,cloud infrastructure,custom customer,attribute,company,user,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-39384 patch solves the issue where the custom customer attribute for a company user is not saved. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-39384. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment types) 2.4.1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment types) 2.3.1 - 2.3.6, 2.4.1 - 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, run `./vendor/bin/magento-patches status`.

## Issue

Unable to save custom customer attribute for a company user.

<ins>Prerequisites</ins>:

B2B modules installed.

<ins>Steps to reproduce</ins>:

1. Set "Enable Company" to "Yes" under "Stores > Settings > Configuration > B2B Features
1. Create a custom customer attribute.
    * Values Required: Yes (optional, enabled so the validation error is displayed)
    * Show on Storefront: Yes
    * Forms to Use In: All available in the list
1. Create a Company and log in as the company admin.
1. Navigate to "Company Structure" in my account.
1. Click on the "Add User" link.
1. Fill the form including the custom attribute.
1. Click Save.

<ins>Expected results</ins>:

The custom attribute value is saved with the new company user creation.

<ins>Actual results</ins>:

The custom attribute value is not saved with the new company user creation.

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:	 

* Adobe Commerce or Magento Open Source on-premise: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on our cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Additional steps required after the patch installation

(This section is optional; there might be some steps required after applying the patch to fix the issue.) 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
