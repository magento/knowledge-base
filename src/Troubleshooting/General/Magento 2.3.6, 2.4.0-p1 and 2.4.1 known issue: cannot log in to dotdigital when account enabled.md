---
title: Magento 2.3.6, 2.4.0-p1 and 2.4.1 known issue: cannot log in to dotdigital when account enabled
link: https://support.magento.com/hc/en-us/articles/360050092291-Magento-2-3-6-2-4-0-p1-and-2-4-1-known-issue-cannot-log-in-to-dotdigital-when-account-enabled
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,2.3.6,2.4.1,2.4.0-p1,dotdigital
---

This article describes a Magento 2.3.6, 2.4.0-p1, and 2.4.1 known issue where it is impossible to log in to [dotdigital](https://dotdigital.com/) via the Admin Panel when the dotdigital account is enabled.

## Affected products and versions

* Magento Commerce Cloud and Magento Commerce 2.3.6 (Safari browser only)

* Magento Commerce Cloud and Magento Commerce 2.4.0-p1 (Safari browser only)

* Magento Commerce Cloud and Magento Commerce 2.4.1 (Safari browser only)

## Issue

Prerequisites:

1. dotdigital account exists.

1. Valid dotdigital API credentials exist in Magento.

Steps to reproduce:

1. Go to **Stores** > **Configuration** > **DOTDIGITAL** > **Chat Settings** > **Enabled** is set to *Yes.*

1. Click on **Configure** in **Configure Chat Widget** or **Configure Chat Teams**.

Expected result:

Chat settings page should open successfully via Admin Panel.

Actual result:

Unable to log in to dotdigital.

## Solution

Workaround: use an alternative browser to Safari for this particular situation.

## Related Reading

[Magento 2.4.1 Known Issue - Vertex address not validating with different shipping/billing addresses](https://support.magento.com/hc/en-us/articles/360050139631)

