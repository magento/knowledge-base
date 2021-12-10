---
title: "MDVA-12304: 503 error on store front and cookie error"
labels: Quality Patches Tool,QPT 1.0.12,QPT patches,quality patch,503 error,known issue,Magento Commerce,Magento Commerce Cloud,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,QPT,support tools,Adobe Commerce,on-premises,cloud infrastructure
---

This MDVA-12304 Adobe Commerce patch solves 503 errors on store fronts, with *Unable to send the cookie. Maximum number of cookies would be exceeded.* error message in logs. This is a known Adobe Commerce 2.2.5 issue. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed.

## Affected products and versions

* **The patch is created for Adobe Commerce version:** Adobe Commerce on-premises 2.2.5.
* **Compatible with Adobe Commerce versions:** Adobe Commerce (all deployment methods) 2.x.x.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Customers get a 503 error when navigating the store front. In the `var/log/exception.log` file there is the following error message *Unable to send the cookie. Maximum number of cookies would be exceeded.*

The issue occurs because the Adobe Commerce default cookies limit is set to 50, and if the client's browser hits the limit, Commerce throws an exception. The solution provided in the patch increases the cookie limit to 200.

 <ins>Steps to reproduce:</ins>

The 503 error can display at any point when the customer is trying to log in and view their cart.

In the `var/log/exception.log` file there is the following error message *Unable to send the cookie. Maximum number of cookies would be exceeded.*

 <ins>Actual result:</ins> The customer cannot check their cart or complete their order.

 <ins>Expected result:</ins> The customer can check their cart and complete their order.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.


## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
