---
title: "MDVA-35312: empty GraphQL request throws 500 error not 200 OK"
labels: 2.4.1-p1,2.4.2,500 error,GraphQL,QPT 1.0.18,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools
---

The MDVA-35312 Magento patch fixes the issue where an empty GraphQL request throws error response code 500. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-35312. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.2

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.4.1-p1-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Empty GraphQL request throws error response code 500, instead of 200 code.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

Send a GraphQL request, for example:

```curl
curl -i -X OPTIONS http://inv.test/graphql
```

 <span class="wysiwyg-underline">Actual result:</span> Response: *HTTP/1.1 500 Internal Server Error.* 

 <span class="wysiwyg-underline">Expected result:</span>  *200 OK* response.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.