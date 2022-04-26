---
title: "Deployment failed: unable to apply MDVA-43395 patch"
labels: failed deployment,MDVA-43395,patch,Adobe Commerce,cloud infrastructure,m2-hotfixes,magento-cloud-patches,troubleshooting
---

This article provides a solution for the issue, where trying to apply the MDVA-43395 patch results in failed deployment.

## Affected products and versions

* Adobe Commerce on cloud infrastructure (all versions)

## Issue

You are not able to apply the MDVA-43395 patch.

## Cause

Cloud merchants do not need to apply the MDVA-43395 patch separately if they have [magento/magento-cloud-patches 1.0.16](https://devdocs.magento.com/cloud/release-notes/mcp-release-notes.html#v1016) installed, which already includes the patch.

## Solution

To resolve the issue, remove the MDVA-43395 and MDVA-43443 patches from `m2-hotfixes` and redeploy.

## Related reading

* [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.
* [Cloud Patches for Commerce](https://devdocs.magento.com/cloud/release-notes/mcp-release-notes.html#v1016) in our developer documentation.
