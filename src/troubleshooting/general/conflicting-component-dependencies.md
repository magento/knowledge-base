---
title: Conflicting component dependencies
labels: 2.2.x,2.3.x,Magento Commerce Cloud,conflicting component dependencies,troubleshooting,web setup wizard,Adobe Commerce,on-premises
---

This article provides a solution for conflicting component dependencies. When trying to setup or update Adobe Commerce using the Web Setup Wizard, you see the *"We found conflicting component dependencies"* Composer error message.

<h3 id="conflicting-dependencies-trouble-depend-conflict-">Affected products and versions</h3>

* Adobe Commerce on-premises 2.2.x, 2.3.x
* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x
* Magento Open Source 2.2.x, 2.3.x


<h2 id="example">Issue</h2>

A conflicting component dependencies error message similar to the following (actual package names and versions will vary):

```bash
We found conflicting component dependencies.
You are trying to update package(s) magento/module-sample-data to 1.0.0-beta
We have detected conflicts with the following packages:
- magento/sample-data version 0.74.0-beta15. Please try to update it to one of the following package versions: 0.74.0-beta16, 0.74.0-beta14, 0.74.0-beta13, 0.74.0-beta12, 0.74.0-beta11, 0.74.0-beta10, 0.74.0-beta9, 0.74.0-beta8, 0.74.0-beta7
```

## Cause

This message is displayed if Composer cannot determine which components to install or update.

## Solution

Two main scenarios can lead to conflicting component dependencies. Click on your scenario to get troubleshooting steps.

* [Upgrading Adobe Commerce](https://support.magento.com/hc/en-us/articles/360044010932#upgrading_magento)
* [Incompatibility with third-party modules:](https://support.magento.com/hc/en-us/articles/360044010932#incompatibility_third_party_modules)
    * [Adobe Commerce (all deployment types)](https://support.magento.com/hc/en-us/articles/360044010932#magento_commerce_magento_commerce_cloud)
    * [Magento Open Source](https://support.magento.com/hc/en-us/articles/360044010932#opensource)

<h2 id="upgrading_magento">Upgrading Adobe Commerce</h2>

If you are upgrading Adobe Commerce on cloud infrastructure, try the following to resolve conflicting component dependencies:

* Check the keys being used to upgrade. Are the keys being generated from the correct email account?
* Check permissions and make sure that they match the Magento upgrade requirements. Review [Magento Upgrade Overview > Update and Upgrade Checklist > File System Permissions](https://devdocs.magento.com/guides/v2.3/comp-mgr/prereq/prereq_compman-checklist.html#perms) in our developer documentation.

<h2 id="incompatibility_third_party_modules">Incompatibility with third-party modules:</h2>

Conflicting component dependencies can also be caused by third-party modules that depend on earlier Commerce components than the ones you have installed. Try the following:

1. In the preceding [example](https://support.magento.com/hc/en-us/articles/360044010932#example), the installed package magento/sample-data version 0.74.0-beta15 cannot be upgraded to 1.0.0-beta. However, 0.74.0-beta15 can be upgraded to 0.74.0-beta16 (or others). Edit `composer.json` to make any of these changes. Typically, the versions your project is requesting will be defined in the `require` or `require-dev` property of the object in that JSON file. Depending on the options of package versions provided, they might specify a specific version or a constraint. For general guidance on how to use composer, if you are on our cloud infrastructure, you can refer to [Cloud for Adobe Commerce > Technologies and Requirements > Composer](https://devdocs.magento.com/cloud/reference/cloud-composer.html#files) in our developer documentation. If you are on Adobe Commerce on-premises, refer to [Adobe Commerce > Installation Guide > Install Adobe Commerce Using the Composer](https://devdocs.magento.com/guides/v2.4/install-gde/composer.html) .
1. Now try the readiness check. Review [Adobe Commerce Upgrade Overview > Run the Module Manager > Step 1 Readiness Check](https://devdocs.magento.com/guides/v2.3/comp-mgr/module-man/compman-readiness.html) in our developer documentation.
1. If the readiness check fails with another Component dependency check failure message, click on the following links depending on whether you are using [Adobe Commerce (https://support.magento.com/hc/en-us/articles/360044010932#magento_commerce_magento_commerce_cloud) or [Magento Open Source](https://support.magento.com/hc/en-us/articles/360044010932#opensource) to get further troubleshooting steps.

<h2 id="magento_commerce_magento_commerce_cloud">Adobe Commerce</h2>

1. Reach out to the developer of the extension so they can assist you. You can find their contact information on the page you purchased the extension from on the Commerce Marketplace. Look for the **Contact Seller** button shown on the right panel. All Commerce developers are required to provide a user's and installation guide when they publish an extension on Marketplace. You can find both on the right side of their landing page.
1. If you do not receive a response from the Seller in a reasonable amount of time, please [let Commerce Marketplace know](https://marketplacesupport.magento.com/hc/en-us) so that we can remind them of their customer support commitments.

<h2 id="opensource">Magento Open Source</h2>

Request assistance at [our main forum](https://community.magento.com/) or [contact an Adobe Commerce Partner](https://magento.com/find-a-partner) that assists in Open Source issues.
