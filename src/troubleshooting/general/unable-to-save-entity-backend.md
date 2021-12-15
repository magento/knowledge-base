---
title: Unable to save entity Adobe Commerce backend
labels: troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source,configuration
---

This article provides a solution for when you are unable to save an entity in the Adobe Commerce backend. For example, when you cannot edit and save a specific `cart_price` rule.

## Affected products and versions

This issue can affect all Adobe Commerce versions which have Max Session Size configured. This was added starting from Magento Open Source 2.3.7-p1 and Adobe commerce  (all deployment methods) 2.4.3.


## Issue

When you try to reconfigure your store the page reloads and your changes are not saved. A message can be seen in `var/log/system.log`:

*[2021-11-27 00:30:52] report.WARNING: Session size of 418056 exceeded allowed session max size of 256000. [] []*

<ins>Steps to reproduce</ins>:

An example of store configuration not being saved:

1. Select a rule in the Adobe Commerce store in Production > **Marketing** > **Cart price rules**.
1. Choose a rule and set to *Inactive* and save the change.

<ins>Expected result</ins>:

The rule is set to inactive.

<ins>Actual result</ins>:

* Page reloads without any message.
* The rule is still set to active.

## Cause

This issue is related to new functionality introduced recently that has impacted the Max Session Size. See [Session management](https://docs.magento.com/user-guide/stores/security-session-management.html) in our developer documentation.

## Solution

Increase the “Max Session Size” value in (**Stores** > **Configuration** > **Advanced** > **System** > **Security** > Max Session Size).

## Related reading

* [Marketing Menu](https://docs.magento.com/user-guide/marketing/marketing-menu.html) in our user guide.
