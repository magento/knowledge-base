---
title: MDVA-38270: Gift card amounts missing from Customer Order Totals
labels:
---

The MDVA-38270 Magento patch fixes the issue where gift card amounts are not found in Customer Order Total. This patch is available when the Magento Quality Patch (MQP) tool 1.0.25 is installed. The patch ID is MDVA-38270. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.4.2-p1

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.4.1-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue
Gift card amounts are missing from the order total responses.

<ins>Prerequisites</ins>:
1. Create a customer account.
1. Place an order using a gift card (gift card covers entire order).

<ins>Steps to reproduce</ins>:  
Makes a customer query for customer.orders.items.total
```sql
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

total_giftcard field is available.

<ins>Actual results</ins>:

No gift card related fields are available.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
