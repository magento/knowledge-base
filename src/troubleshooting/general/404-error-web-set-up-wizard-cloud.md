---
title: 404 not found error when accessing Web Setup Wizard via Admin panel 
labels: troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,Magento Commerce,404 error,web setup wizard
---

This article provides a solution for when you experience a 404 not found error when trying to access the Web Setup Wizard via the admin panel.

## Affected products and versions

* The Web Setup Wizard functionality was deprecated in Adobe Commerce (all deployment methods) 2.3.6 and removed in 2.4.0.

## Issue

When installing an extension using Web Setup Wizard a 404 page displays.

<ins>Steps to reproduce</ins>:

Merchant clicks the Web Setup Wizard to install new module/integration.

<ins>Expected result</ins>:

Module/integration installs.

<ins>Actual result</ins>:

A 404 error displays.

## Cause

The Web Setup Wizard has been disabled for all Adobe Commerce on cloud infrastructure instances - it is not possible to enable it. Extensions have to be installed through composer.

## Solution

This feature is disabled on Adobe Commerce on cloud infrastructure.

See [Install, manage, and upgrade extensions](https://devdocs.magento.com/cloud/howtos/install-components.html) in our developer documentation for information on how to perform updates or install external modules for Adobe Commerce on our cloud infrastructure.
See [Quick start install](https://devdocs.magento.com/guides/v2.3/install-gde/composer.html) in our developer documentation for information on how to perform updates or install external modules for Adobe Commerce on-premises.
## Related reading

* See [Install an extension](https://devdocs.magento.com/cloud/howtos/install-components.html#install-an-extension) in our developer documentation.
