---
title: "MDVA-30599 Magento patch: customer_is_guest is set incorrectly"
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0-p1,2.4.1,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,customer_is_guest,support tools
---

The MDVA-30599 Magento patch fixes the issue where guest quotes created using API are incorrectly marked as quotes for logged in customers. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.6 is installed. The issue is scheduled to be fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce/ Magento Commerce Cloud 2.3.4-2.4.0

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Guest quotes created using API are incorrectly marked as quotes for logged-in customers.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. On the Magento storefront, add a product to the cart as a guest user.
1. In your Magento DB, find the corresponding `quote_id_mask` .
1. Send an API request to `quoteGuestCartRepositoryV1` Cart Repository interface for guest carts. It can be done via Swagger or cURL request    ```curl    curl -X GET "http://web2-73.sparta.corp.magento.com/dev/support/ee24dev/rest/all/V1/guest-carts/ToOwPtSBxkorkCLq6ztwupPd99y8zhky" -H "accept: application/json"    ```    

 <span class="wysiwyg-underline">Expected result:</span>

In response you get `"customer_is_guest":
true`

 <span class="wysiwyg-underline">Actual result:</span>

In response you get `"customer_is_guest":
  false`

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .

## Additional steps required after the patch installation

The patch will be effective for all new guest carts. If you need to fix existing guest carts, set `quote.customer_is_guest = 1` for those records where `quote.customer_id` is NULL. You could run a query similar to the following:

```sql
UPDATE quote SET customer_is_guest = 1 WHERE customer_id IS NULL;
```

>![warning]
>
>We strongly recommend testing the query on the Staging/Integration environment, before running it in Production. We also recommend to have a recent backup before any manipulations with DB.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
