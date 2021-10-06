---
title: 403 errors when accessing Site-Wide Analysis Tool on Adobe Commerce
labels: 2.4.1,2.4.1+,Magento Commerce Cloud,Site-Wide Analysis Tool,admin,error,permissions,troubleshooting,Magento,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when you receive 403 errors when trying to access the Site-Wide Analysis Tool on Adobe Commerce.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.4.1+

## Issue

You get a 403 error when trying to access the Site-Wide Analysis Tool.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

Log in to the Commerce Admin panel and click **Reports** > *System Insights* > **Site-Wide Analysis Tool**.

 <span class="wysiwyg-underline">Expected result:</span>

You see the Site-Wide Analysis Tool.

<span class="wysiwyg-underline">Actual result:</span>

You see: *Error 403.*

## Cause

There are two potential causes:

* You may have HTTP access control enabled. The Site-Wide Analysis Tool Dashboard does NOT support customers if they have HTTP Auth enabled.
* Your Commerce administrator account may not have been assigned to the *Site-Wide Analysis Tool* Resource.

## Solution

Check if you have HTTP access control enabled:

1. Go to your Cloud Project URL and select your production or staging environment.
1. Ensure HTTP access control is not enabled (see screen shot).  

    ![swat_http_access_control.png](assets/swat_http_access_control.png)

If when you next try to access the Site-Wide Analysis Tool, there is still a 403 error, you may not have added the *Site-Wide Analysis Tool* role also known as *Super Admin* to your Admin profile. The *Site-Wide Analysis Tool* role is not assigned by default. It must be added manually, by the Customer Account Owner/Admin to each Customer Admin that wants access to the Site-Wide Analysis Tool:

1. Go to **System** > Permissions > **User Roles**. In the upper-right corner, click **Add New Role**.
1. In the **Role Info** tab under ROLE INFORMATION, enter a descriptive role name and under Current User Identity Verification, enter your password.
1. On the **Role Resources** tab under ROLE INFORMATION set Role Scopes to *All* or *Custom*.
1. Under *Roles Resources*, set **Resource Access** to *Custom*.
1. In the tree, select the checkbox next to Site-Wide Analysis Tool, and click **Save Role**.

    ![swat_access_role.png](assets/swat_access_role.png)


You should be able to access the Site-Wide Analysis Tool when you log in next time in to the Commerce Admin panel and navigate to **Reports** > *System Insights* > **Site-Wide Analysis Tool**. If you still get the 403 error, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related Reading

Articles in the Related reading section are visible for signed in users only.

* [Adobe Commerce Site-Wide Analysis Tool report, an introduction video](https://support.magento.com/hc/en-us/articles/360048980691-Magento-Site-Wide-Analysis-Tool-report-an-introduction-video) in our support knowledge base.
* [Adobe Commerce Site-Wide Analysis Tool Report FAQ](https://support.magento.com/hc/en-us/articles/360048646671-Magento-Site-Wide-Analysis-Tool-Report-FAQ) in our support knowledge base.
