---
title: "MDVA-38270: Gift card amount missing from Customer Order Total"
labels: QPT Patches,Quality Patches Tool,QPT,Support Tools,QPT 1.0.25,Magento Commerce Cloud,Magento Commerce,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,Adobe Commerce,on-premises,cloud infrastructure
---

The MDVA-38270 patch fixes the issue when the gift card amount is not found in the Customer Order Total. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-38270. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.4.2-p1

**Compatible with Adobe Commerce versions:**
Adobe Commerce (all deployment methods) 2.4.1-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue
Gift card amount is missing from the order total response.

<ins>Prerequisites</ins>:

1. Create a customer account.
1. Place an order using a gift card (gift card covers entire order).

<ins>Steps to reproduce</ins>:  

Make a customer query for customer, orders, items, total:
```GraphQL
query {
  customer {
    orders(
      pageSize: 20
    ) {
      items {
        id
        order_date
        total {
          grand_total {
            value
            currency
          }
          total_giftcard {
              applied_balance {
                value
                currency
              }
              code
              current_balance {
                value
                currency
              }
              expiration_date
          }
        }
        status
      }
    }
  }
}
```

<ins>Expected results</ins>:

`total_giftcard` field is available.

<ins>Actual results</ins>:

No gift card related fields are available.

## Apply the patch

To apply individual patches use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
