---
title: "MDVA-30599: customer_is_guest is set incorrectly"
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0-p1,2.4.1,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,customer_is_guest,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30599 patch fixes the issue where guest quotes created using API are incorrectly marked as quotes for logged-in customers. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.6 is installed. The issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.4 - 2.4.0

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Guest quotes created using API are incorrectly marked as quotes for logged-in customers.

<ins>Steps to reproduce</ins>:

1. On the Adobe Commerce storefront, add a product to the cart as a guest user.
1. In your Adobe Commerce DB, find the corresponding `quote_id_mask`.
1. Send an API request to `quoteGuestCartRepositoryV1` Cart Repository interface for guest carts. It can be done via Swagger or cURL request.    

```curl
curl -X GET "http://web2-73.sparta.corp.magento.com/dev/support/ee24dev/rest/all/V1/guest-carts/ToOwPtSBxkorkCLq6ztwupPd99y8zhky" -H "accept: application/json"    
```    

<ins>Expected results</ins>:

In response you get `"customer_is_guest": true`

<ins>Actual results</ins>:

In response you get `"customer_is_guest": false`

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Additional steps required after the patch installation

The patch will be effective for all new guest carts. If you need to fix existing guest carts, set `quote.customer_is_guest = 1` for those records where `quote.customer_id` is NULL. You could run a query similar to the following:

```sql
UPDATE quote SET customer_is_guest = 1 WHERE customer_id IS NULL;
```

>![warning]
>
>We strongly recommend testing the query on the Staging/Integration environment before running it in Production. We also recommend having a recent backup before any manipulations with DB.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
