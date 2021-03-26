---
title: 403 errors when accessing Site-Wide Analysis Tool on Magento
link: https://support.magento.com/hc/en-us/articles/360057400172-403-errors-when-accessing-Site-Wide-Analysis-Tool-on-Magento
labels: Magento Commerce Cloud,error,admin,troubleshooting,permissions,2.4.1,Site-Wide Analysis Tool,2.4.1+
---

This article provides a solution for when you receive 403 errors when trying to access the Site-Wide Analysis Tool on Magento.

## Affected products and versions

Magento Commerce Cloud 2.4.1+

## Issue

You get a 403 error when trying to access the Site-Wide Analysis Tool.

Steps to reproduce:

Log in to the Magento Admin panel and click Reports > _System Insights_ > Site-Wide Analysis Tool.

Expected result:

You see the Site-Wide Analysis Tool.  
  
Actual result:

You see: _Error 403._

## Cause

There are two potential causes:

* You may have HTTP access control enabled. The Site-Wide Analysis Tool Dashboard does NOT support customers if they have HTTP Auth enabled. 
* Your Magento administrator account may not have been assigned to the _Site-Wide Analysis Tool_ Resource.

## Solution

Check if you have HTTP access control enabled:

1. Go to your Cloud Project URL and select your production or staging environment.
1. Ensure HTTP access control is not enabled (see screen shot).  
      
    ![swat_http_on.png](https://support.magento.com/hc/article_attachments/360090443631/swat_http_on.png)

If when you next try to access the Site-Wide Analysis Tool there is still a 403 error, you may not have added the _Site-Wide Analysis Tool _role also known as _Super Admin_ to your Admin profile. The_ Site-Wide Analysis Tool _role is not assigned by default. It must be added manually, by the Customer Account Owner/Admin to each Customer Admin that wants access to the Site-Wide Analysis Tool:

<ol><li>Go to System > Permissions > User Roles. In the upper-right corner, click Add New Role. </li><li>On the Role Info tab under ROLE INFORMATION enter a descriptive role name and under Current User Identity Verification enter your password.
</li><li>
<font>On the </font> Role Resources tab under ROLE INFORMATION s <font>et </font>  Role Scopes to <em>All </em>or<em> Custom</em>.
</li><li>Under <em>Roles Resources</em>, set Resource Access to <em>Custom</em>.
</li><li>
In the tree, select the checkbox next to Site-Wide Analysis Tool, and click Save Role.<br/><br/><img alt="swat_access_role.png" src="https://support.magento.com/hc/article_attachments/360088292072/swat_access_role.png"/>
</li></ol>

You should be able to access the Site-Wide Analysis Tool when you next log in to the Magento Admin panel and navigate to Reports > _System Insights_ > Site-Wide Analysis Tool. If you still get the 403 error [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket). 

## Related Reading

Articles in the Related reading section are visible for Signed in users only.

* [Magento Site-Wide Analysis Tool report explained in details video](https://support.magento.com/hc/en-us/articles/360048981531-Magento-Site-Wide-Analysis-Tool-report-explained-in-details-video)
* [Magento Site-Wide Analysis Tool report, an overview video](https://support.magento.com/hc/en-us/articles/360048980791-Magento-Site-Wide-Analysis-Tool-report-an-overview-video)
* [Magento Site-Wide Analysis Tool report, an introduction video](https://support.magento.com/hc/en-us/articles/360048980691-Magento-Site-Wide-Analysis-Tool-report-an-introduction-video)
* [Magento Site-Wide Analysis Tool Report FAQ](https://support.magento.com/hc/en-us/articles/360048646671-Magento-Site-Wide-Analysis-Tool-Report-FAQ)