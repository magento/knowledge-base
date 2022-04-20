---
title: "Deployment failed: Unable to apply MDVA-43395 patch"
labels: failed deployment,MDVA-43395,patch,Adobe Commerce,cloud infrastructure,m2-hotfixes,magento/magento-cloud-patches 1.0.16
---

This article provides a solution for the issue where the user is not able to apply MDVA-43395 patch.

## Affected products and versions

* Adobe Commerce on cloud infrastructure (all versions)

## Issue

The user is not able to apply MDVA-43395 patch.

## Cause

There is no need to apply the MDVA-43395 patch separately; it is already included in `magento/magento-cloud-patches 1.0.16`

## Solution

Remove the MDVA-43395 and MDVA-43443 patches from `m2-hotfixes` and redeploy.

## Related reading

* [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731)
