---
title: "MDVA-28661: issue with company users management when changing admin email"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,B2B,QPT 1.0.5,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,email,management,support tools,user,cloud infrastructure,on-premises,Adobe Commerce
---

The MDVA-28861 patch fixes the issue where the users get an error when changing the admin email. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.5 is installed. The Patch ID is MDVA-28861.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0 to 2.4.1 (including 2.3.5-p1) with B2B extension

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

After changing the **Company Admin** email address, an error is returned, and the **Company Users** list is not displayed.

<ins>Steps to reproduce</ins>:

1. Enable Company functionality (Learn more about that in [Install B2B: Enable B2B features in the Commerce Admin](https://devdocs.magento.com/extensions/b2b/#enable-b2b-features-in-magento-admin) in our developer documentation and create a new Company with two users - an admin and two users - all with email addresses).
1. Go to the **Commerce Admin** > **Customers** > **Companies** and open your Company account.
1. Open **Company Admin** tab and change admin to the first user, which includes changing the **Company Admin** email to the first user's email.
1. Go to the Adobe Commerce frontend and log in as the first user.
1. Go to the **Company Users** section.

<ins>Expected results</ins>:

The **Company Users** list should be displayed as expected.

<ins>Actual results</ins>:

The **Company Users** list is not displayed, and an error similar to the following displays:

```bash
No such entity with id = 2
```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.

To learn more about B2B Company functionality, refer to these articles in our developer documentation:

* [B2B Developer Guide](https://devdocs.magento.com/guides/v2.4/b2b/bk-b2b.html)
* [Manage company roles](https://devdocs.magento.com/guides/v2.4/b2b/roles.html)
* [Adobe Commerce Enterprise B2B Extension configuration paths reference](https://devdocs.magento.com/guides/v2.4/config-guide/prod/config-reference-b2b.html)
