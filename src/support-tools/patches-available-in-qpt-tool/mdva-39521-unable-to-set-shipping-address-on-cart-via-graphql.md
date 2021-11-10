---
title: "MDVA-39521: Unable to set shipping address on carts via GraphQL"
labels: QPT patches,Quality Patches Tool,QPT,MQP,QPT 1.1.2,Magento,Adobe Commerce,on-premises,cloud infrastructure,shipping,address,GraphQL,phone number,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-39521 patch solves the issue where the user is unable to set shipping address on carts with an empty phone number via GraphQL. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-39521. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.0 - 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The user is not able to set shipping address on the carts with an empty telephone number via GraphQL despite the fact that the Show Telephone is configured as optional.

<ins>Steps to reproduce</ins>:

1. Create a simple product.
1. Go to **Stores** > **Configuration** > **Customers** > **Customer Configuration** > **Name and Address Options** and set the Show Telephone as Optional.
1. Create an empty cart via GraphQL request.
    ```GraphQL
    mutation {
    createEmptyCart
    }
    ```
1. Add product to cart.
    ```GraphQL
    mutation {
    addSimpleProductsToCart(
    input: {
      cart_id: "{ CART_ID }"
      cart_items: [
        {
          data: {
            quantity: 1
            sku: "24-MG04"
          }
        }
      ]
    }
    ) {
    cart {
      items {
        id
        product {
          sku
          stock_status
        }
        quantity
      }
    }
    }
    }
    ```
1. Add address: GRAPHQL VARIABLES.
    ```GraphQL
    {
      "cartId": "6Efw00UbjPoP5cvTFhsswDTjpxs0Xupt"
    }
    ```
    ```GraphQL
    mutation ($cartId: String!) {
      setShippingAddressesOnCart(input: {cart_id: $cartId, shipping_addresses:
      {address: {firstname: "John", lastname: "Doe", company: "Company Name",
      street: ["820 Burrard Street"], city: "Vancouver", region: "BC", postcode: "V6Z 2J1",
      country_code: "CA", telephone: "123-456-0000", save_in_address_book: false}}}) {
        cart {
          shipping_addresses {
            firstname
            lastname
            company
            street
            city
            postcode
            telephone
            country {
              code
              label
            }
          }
        }
      }
    }
    ```

    Result:

    ```GraphQL
      {
          "data": {
              "setShippingAddressesOnCart": {
                  "cart": {
                      "shipping_addresses": [
                          {
                              "firstname": "John",
                              "lastname": "Canada",
                              "company": "Company Name",
                              "street": [
                                  "820 Burrard Street"
                              ],
                              "city": "Vancouver",
                              "postcode": "V6Z 2J1",
                              "telephone": "123-456-0000",
                              "country": {
                                  "code": "CA",
                                  "label": "CA"
                              }
                          }
                      ]
                  }
              }
          }
      }
   ```
1. Add address with empty phone number.
    ```GraphQL
    mutation ($cartId: String!) {
      setShippingAddressesOnCart(input: {cart_id: $cartId, shipping_addresses: {address: {firstname:
        "John", lastname: "Canada", company: "Company Name", street: ["820 Burrard Street"], city:
        "Vancouver", region: "BC", postcode: "V6Z 2J1", country_code: "CA", telephone: "123-456-0000",
        save_in_address_book: false}}}) {
        cart {
          shipping_addresses {
            firstname
            lastname
            company
            street
            city
            postcode
            telephone
            country {
              code
              label
            }
          }
        }
      }
    }
    ```

<ins>Expected results</ins>:
```GraphQL
{
    "data": {
        "setShippingAddressesOnCart": {
            "cart": {
                "shipping_addresses": [
                    {
                        "firstname": "John",
                        "lastname": "Doe",
                        "company": "Company Name",
                        "street": [
                            "820 Burrard Street"
                        ],
                        "city": "Vancouver",
                        "postcode": "V6Z 2J1",
                        "telephone": "",
                        "country": {
                            "code": "CA",
                            "label": "CA"
                        }
                    }
                ]
            }
        }
    }
}
```

<ins>Actual results</ins>:
```GraphQL
{
    "data": {
        "setShippingAddressesOnCart": {
            "cart": {
                "shipping_addresses": []
            }
        }
    }
}
```
## Apply the patch

To apply individual patches, use the following links depending on your deployment type:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
