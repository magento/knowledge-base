---
title: "MDVA-32694 patch: issue adding product to a quote"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.1,QPT 1.0.14,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,add product,quote,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-32694 patch solves the issue of being unable to add a valid product in Admin to a negotiable quote created on the non-default website.

This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.2 with B2B version 1.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.3.5-p2, 2.4.0, 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Prerequisites</ins>:

Install a fresh Adobe Commerce instance with B2B.

<ins>Steps to reproduce</ins>:

1. Go to **STORES > Configuration > GENERAL > B2B Features** and enable **Company** and **B2B quote**.
1. Create 2 more websites with **stores** and **storeviews** (In total you should have 3 websites: *base*, *website2*, *website3*).
1. Create a simple product and assign it only to *website3*.
1. Go to **STORES > All Stores** and set *website3* as **default**.
1. Go to the frontend and create a new company on *website3*.
1. Add the earlier created product to the cart and create a new negotiable quote.
1. Go to **STORES > All Stores** and set the "*base*" website back as **default**.
1. Go to **SALES > Quotes > Open created earlier quote** and try to add the same product to it.

<ins>Expected results</ins>:

The Admin user can add the same product to the quote, as expected.

<ins>Actual results</ins>:

The Admin user cannot add the same product to the quote, and this error message appears:

```php
This product is assigned to another website.
```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
