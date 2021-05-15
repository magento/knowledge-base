---
title: MDVA-20376 Magento patch: no such entity with customerId
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,MQP 1.0.13,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,customerId,error,no such entity,order placement
---

The MDVA-20376 Magento patch solves the issue for a *No such entity with customerId = 1* error for logged-in customers after order placement. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.13 is installed. Please note that the issue was fixed in Magento version 2.3.4.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.2 - 2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Navigate to the storefront, and log in as a registered user.
1. Place an order.
1. In the CLI, go to `var/log` and you will see the `exception.log` file.

Expected results:

No errors should appear in the logs, as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The exception log fills up with errors similar to:

```php
report.CRITICAL: No such entity with customerId = 1 {"exception":"[object] (Magento\\Framework\\Exception\\NoSuchEntityException(code: 0): No such entity with customerId = 1 at /mnt/data/home/nyarlaga/dev/232/vendor/magento/framework/Exception/NoSuchEntityException.php:50)"} []
```

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.