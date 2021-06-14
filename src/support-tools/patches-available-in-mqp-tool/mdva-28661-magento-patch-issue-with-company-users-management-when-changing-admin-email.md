---
title: "MDVA-28661 Magento patch: issue with company users management when changing admin email"
labels: "2.3.0,2.3.1,2.3.2,2.3.3,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.1,B2B,MQP 1.0.5,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,email,management,support tools,user"
---

MDVA-28661 Magento patch available in the [Magento Quality Patches (MQP)](https://support.magento.com/hc/en-us/articles/360047139492) tool version 1.0.5 fixes the issue where an error is thrown in the **Company Users** company account section after **Company Admin** email address is changed.

## Affected products and versions

Magento Commerce and Magento Commerce Cloud 2.3.0 to 2.4.1 (including 2.3.5-p1) with B2B extension

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

After changing the **Company Admin** email address, an error is returned, and the **Company Users** list is not displayed.

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Enable Company functionality (Learn more about that in DevDocs [Install B2B: Enable B2B features in Magento Admin](https://devdocs.magento.com/extensions/b2b/#enable-b2b-features-in-magento-admin) ) and create a new Company with 2 users (an admin and 2 users), all with email addresses.
1. Go to **Magento Admin > Customers > Companies** and open your Company account.
1. Open **Company Admin** tab and change admin to the first user, which includes changing the **Company Admin** email to the first user's email.
1. Go to the Magento frontend, and login as the first user.
1. Go to **Company Users** section.

 <span class="wysiwyg-underline">Expected result:</span> 

The **Company Users** list should be displayed as expected.

 <span class="wysiwyg-underline">Actual result:</span> 

The **Company Users** list is not displayed, and an error similar to the following displays:

```bash
No such entity with id = 2
```

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) 
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) 

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.

To learn more about B2B Company functionality, refer to these DevDocs articles:

* [B2B Developer Guide](https://devdocs.magento.com/guides/v2.4/b2b/bk-b2b.html)
* [Manage company roles](https://devdocs.magento.com/guides/v2.4/b2b/roles.html)
* [Magento Enterprise B2B Extension configuration paths reference](https://devdocs.magento.com/guides/v2.4/config-guide/prod/config-reference-b2b.html)

