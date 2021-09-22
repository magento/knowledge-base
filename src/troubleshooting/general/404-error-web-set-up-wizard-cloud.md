---
title: 404 not found error when accessing Web Setup Wizard via admin panel 
labels: troubleshooting,Adobe Commerce,Magento Commerce,404 error,web setup wizard
---

This article provides a solution for when you experience a 404 not found error when trying to access the Web Setup Wizard via admin panel.

## Affected products and versions

* The web setup wizard functionality was deprecated in Adobe Commerce on cloud infrastructure 2.3.6 and removed in 2.4.0.

## Issue

When installng an extension using Web Setup Wizard a 404 page displays.

<ins>Steps to reproduce</ins>:

Merchant clicks the Web Setup Wizard to install new module/integration.

<ins>Expected result</ins>:

Module/integration installs.

<ins>Actual result</ins>:

A 404 error displays.

## Cause

The Web Setup Wizard has been disabled for all Adobe Commerce on cloud infrastructure instances - it is not possible to enable it. Extensions have to be installed through composer.

## Solution

This feature is disabled on Adobe on cloud infrastructure.

See to [Install, manage, and upgrade extensions
](https:/devdocs.magento.com/cloud/howtos/install-components.html) in our developer doccumentation for information on how to perform updates or install external modules.

## Related reading

* [Install an extension](https://devdocs.magento.com/cloud/howtos/install-components.html#install-an-extension) in our developer documentation.
