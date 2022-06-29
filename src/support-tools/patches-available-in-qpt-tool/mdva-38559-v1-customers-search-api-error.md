---
title: "MDVA-38559: /V1/customers/search API returns error"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.15,API,subscription,error,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-38559 patch fixes the issue where the `/V1/customers/search` API returns an error for customers who have more than one subscription. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.15 is installed. The patch ID is MDVA-38559. Please note that the issue is fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.1-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.0 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

`/V1/customers/search` API returns an error for customers with more than one subscription.

<ins>Prerequisites</ins>:

The Adobe Commerce store uses more than one website.

<ins>Steps to reproduce</ins>:

1. Go to **Store** > **Configuration** > **Customer** > **Customer Configuration** > **Account Sharing Options** and select **Global**.
1. Go to **Customers** > **All Customers**, select **Edit** on any customer, and then select **Newsletter**.
1. Subscribe to a newsletter for more than one website and save the customer.
1. Send the following request:

```REST API
V1/customers/search?searchCriteria[filterGroups][0][filters][0][field]=email&searchCriteria[filterGroups][0][filters][0][value]=test@example.com&searchCriteria[filterGroups][0][filters][0][conditionType]=eq
```

<ins>Expected results</ins>:

The customer's search results are displayed.

<ins>Actual results</ins>:

The following error is logged to exception.log: *Item (Magento\Customer\Model\Customer\Interceptor) with the same ID "1" already exists.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
