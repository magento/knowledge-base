---
title: MDVA-12304 Magento patch: 503 error on store front and cookie error
labels: MDVA-12304,quality patch,503 error,known issue,Magento Commerce,2.2.5,2.2.5,2.x.x.,MQP,support tools
---

This MDVA-12304 patch solves 503 errors on store fronts, with *Unable to send the cookie. Maximum number of cookies would be exceeded.* error message in logs. This is a known Magento Commerce 2.2.5 issue. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed.

## Affected products and versions

* **The patch is created for Magento version:** Magento Commerce 2.2.5.
* **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce, 2.x.x.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Customers get a 503 error when navigating the store front. In the `var/log/exception.log` file there is the following error message *Unable to send the cookie. Maximum number of cookies would be exceeded.*

The issue occurs because the Magento default cookies limit is set to 50, and if the client's browser hits the limit, Magento throws an exception. The solution provided in the patch increases the cookie limit to 200.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

The 503 error can display at any point when the customer is trying to login and visit his or her cart.

In the `var/log/exception.log` file there is the following error message *Unable to send the cookie. Maximum number of cookies would be exceeded.*  <span class="wysiwyg-underline">Actual result:</span> The customer cannot check their cart or complete their order.

 <span class="wysiwyg-underline">Expected result:</span>

The customer can check their cart and complete their order.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
