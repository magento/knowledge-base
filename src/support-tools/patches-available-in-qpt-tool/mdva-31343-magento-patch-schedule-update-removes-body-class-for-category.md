---
title: "MDVA-31343 Magento patch: schedule update removes body class for category"
labels: 2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,CSS,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,category,schedule update,support tools
---

MDVA-31343 Magento patch fixes the issue where the assigned layout body CSS class for a category gets removed during scheduled update. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.7 is installed. The issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2.

 **The patch is also compatible with:** 

Magento Commerce and Magento Commerce Cloud from 2.3.4 to 2.3.5-p2.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Layout body class gets removed from the category after scheduled update.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 1. In Magento Admin, create a category.2. Set **Layout** = *Category -- Full width* in the **Design** section.3. Save the category.4. Go to category frontend page. In the page source notice the

```css
page-layout-category-full-width
```

CSS class. 5. Under **CATALOG** > **Category** , click **Schedule New Update** in the *Scheduled Changes* section for the new category.6. Wait for the scheduled update to start, run cron and flush cache.7. Go to the category page on the frontend and inspect the page source.

 <span class="wysiwyg-underline">Actual result:</span> In the page body, you see the

```css
page-layout-2columns-left
```

CSS class, which is default for the category page.

 <span class="wysiwyg-underline">Expected result:</span> In the page body, you see the

```css
page-layout-category-full-width
```

CSS class.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.