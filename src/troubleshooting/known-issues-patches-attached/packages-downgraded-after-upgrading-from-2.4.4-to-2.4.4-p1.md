---
title: "Packages downgraded after upgrading from 2.4.4 to 2.4.4-p1"
labels: 2.4.4,Magento Commerce,Magento Commerce Cloud,Magento Open Source,packages downgraded,upgrading,known issues,patches,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a hotfix for the issue when packages were downgraded after upgrading from Adobe Commerce 2.4.4 (cloud infrastructure and on-premises deployments) and Magento Open Source 2.4.4 to Adobe Commerce version 2.4.4-p1 and Magento Open Source version 2.4.4-p1.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.4
* Adobe Commerce on-premises 2.4.4
* Magento Open Source 2.4.4

## Issue

There are two scenarios how this issue can occur and how it can be reproduced:

### Scenario 1

<ins>Steps to reproduce</ins>:

When upgrading from 2.4.4 to 2.4.4-p1, there is a number of modules which are downgraded with similar output:

```text
Downgrading magento/module-adobe-ims (2.1.4 => 2.1.3)
Downgrading magento/module-adobe-ims-api (2.1.2 => 2.1.1)
Downgrading magento/module-adobe-stock-admin-ui (1.3.2 => 1.3.1)
Downgrading magento/module-adobe-stock-client-api (2.1.2 => 2.1.1)
Downgrading magento/module-adobe-stock-image (1.3.3 => 1.3.2)
Downgrading magento/module-adobe-stock-image-admin-ui (1.3.3 => 1.3.2)
Downgrading magento/module-banner-page-builder (2.2.3 => 2.2.2)
Downgrading magento/module-inventory (1.2.3 => 1.2.2)
Downgrading magento/module-inventory-admin-ui (1.2.3 => 1.2.2-p1)
Downgrading magento/module-inventory-advanced-checkout (1.2.2 => 1.2.1)
Downgrading magento/module-inventory-api (1.2.3 => 1.2.2-p1)
Downgrading magento/module-inventory-bundle-product (1.2.2 => 1.2.1)
Downgrading magento/module-inventory-catalog-api (1.3.3 => 1.3.2)
Downgrading magento/module-inventory-configurable-product-admin-ui (1.2.3 => 1.2.2-p1)
Downgrading magento/module-inventory-configurable-product-frontend-ui (1.0.3 => 1.0.2)
Downgrading magento/module-inventory-import-export (1.2.3 => 1.2.2)
Downgrading magento/module-inventory-in-store-pickup-admin-ui (1.1.2 => 1.1.1)
Downgrading magento/module-inventory-in-store-pickup-frontend (1.1.3 => 1.1.2)
Downgrading magento/module-inventory-in-store-pickup-graph-ql (1.1.2 => 1.1.1)
Downgrading magento/module-inventory-in-store-pickup-sales-admin-ui (1.1.3 => 1.1.2-p1)
Downgrading magento/module-inventory-in-store-pickup-shipping (1.1.2 => 1.1.1)
Downgrading magento/module-inventory-low-quantity-notification (1.2.2 => 1.2.1)
Downgrading magento/module-inventory-low-quantity-notification-api (1.2.2 => 1.2.1-p1)
Downgrading magento/module-inventory-requisition-list (1.2.3 => 1.2.2)
Downgrading magento/module-inventory-sales-admin-ui (1.2.3 => 1.2.2)
Downgrading magento/module-inventory-sales-api (1.2.2 => 1.2.1)
Downgrading magento/module-inventory-shipping-admin-ui (1.2.3 => 1.2.2-p1)
Downgrading magento/module-inventory-source-selection-api (1.4.2 => 1.4.1-p1)
Downgrading magento/module-inventory-wishlist (1.0.2 => 1.0.1)
Downgrading magento/module-page-builder (2.2.3 => 2.2.2)
Downgrading magento/module-re-captcha-checkout-sales-rule (1.1.1 => 1.1.0)
Downgrading magento/module-re-captcha-customer (1.1.3 => 1.1.2)
Downgrading magento/module-re-captcha-frontend-ui (1.1.3 => 1.1.2)
Downgrading magento/module-staging-page-builder (2.2.3 => 2.2.2)
Downgrading magento/module-two-factor-auth (1.1.4 => 1.1.3)
Removing magento/module-admin-adobe-ims (100.4.0)
```

<ins>Expected results</ins>:

The upgrade from version 2.4.4 to 2.4.4-p1 results with the correct packages for version 2.4.4-p1.

<ins>Actual results</ins>:

Packages are downgraded after upgrading from version 2.4.4 to 2.4.4-p1.

### Scenario 2

<ins>Steps to reproduce</ins>:

When 2.4.4 merchants run the **composer:update** command, then the same modules listed above in **Scenario 1** get upgraded to their newer  versions which are compatible only with version 2.4.5 and are not supposed to be used with version 2.4.4.

<ins>Expected results</ins>:

The upgrade from version 2.4.4 to 2.4.4-p1 results with the correct packages for version 2.4.4-p1.

<ins>Actual results</ins>:

Packages are downgraded after upgrading from version 2.4.4 to 2.4.4-p1.

## Workaround 1: Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name or click the following link: [Download ACPLTSRV-2017-fix.sh](assets/ACPLTSRV-2017-fix.sh)

## Compatible Adobe Commerce versions:

The patch was created for:

* Adobe Commerce on cloud infrastructre 2.4.4
* Adobe Commerce on-premises 2.4.4
* Magento Open Source 2.4.4

>![info]
>
>Note: The patch is not compatible with any other Adobe Commerce and Magento Open Source versions and editions.

## How to Apply the Patch

Use the attached bash script as the workaround for this issue.

**Exact instructions how to use the script:**

1. Place the script [ACPLTSRV-2017-fix.sh](assets/ACPLTSRV-2017-fix.sh) in the **root** folder of your Adobe Commerce/Magento Open Source 2.4.4 installation (the same folder as the **composer.json**).
1. Run the script with an **apply** argument to lock affected packages to their 2.4.4 versions:

    ```bash
    sh ACPLTSRV-2017-fix.sh apply
    ```

1. Run composer updated to install the locked packages.
1. Once you are ready to upgrade to 2.4.5 or 2.4.4-p1, run the script with a **rollback** argument:

    ```bash
    sh ACPLTSRV-2017-fix.sh rollback
    ```

   Skipping this step will result in upgrade errors due to conflicting package requirements.
1. After completion of the above steps, you can begin upgrading.

## Workaround 2

A 2nd workaround for this issue is not to run the **composer:update** command without any arguments.

## Attached file
