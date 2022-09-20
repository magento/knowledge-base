---
title: "Adobe Commerce 2.4.1: empty page when dotdigital Page Builder form saved"
labels: 2.4.1,Magento Commerce,Magento Commerce Cloud,Safari,blank,dotdigital,form,known issues,page builder,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a workaround for a known issue in Adobe Commerce 2.4.1 for showing an empty webpage after saving a dotdigital Page Builder form in the Admin Panel when using the Safari browser.

## Affected products and versions

* Adobe Commerce on-premises 2.4.1
* Adobe Commerce on cloud infrastructure 2.4.1

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1. Go to **Admin Panel** > **Content** > **Pages**, and select **Edit** of any page.
1. Go to **Content** and click on the **Edit with Page Builder** button.
1. Drag the **dotdigital form** block and select **Edit**.
1. Select one of the test forms, then pick **Embedded** mode and save the form.
1. Save the page modification.

<span class="wysiwyg-underline">Expected result:</span>

The webpage should be saved successfully.

<span class="wysiwyg-underline">Actual result:</span>

The webpage is empty. After reloading the webpage, the changes are applied.

## Workaround

The workaround is to use an alternative browser to Safari. The issue is scheduled to be fixed in the next release, Adobe Commerce 2.4.2, in Q1 2021.

## Related reading

* [What is Page Builder?](https://devdocs.magento.com/page-builder/docs/) in our developer documentation.
* [Page Builder Setup](https://experienceleague.adobe.com/docs/commerce-admin/page-builder/setup.html?lang=en) in our developer documentation.
* [Page Builder](https://docs.magento.com/user-guide/cms/page-builder.html) in our user guide.
* [Page Builder - Elements](https://docs.magento.com/user-guide/cms/page-builder-elements.html) in our user guide.
