---
title: Integration Environment enhancement request - Pro and Starter
labels: Magento Commerce Cloud,Magento Pro,Magento Starter,Staging,announcements,increase performance,performance,reactive integration environment request,upgrade,Pro,Starter,Adobe Commerce,cloud infrastructure
---

If you are an Adobe Commerce on cloud infrastructure Pro plan architecture customer and currently use the standard-sized Integration Environments, or you are an Adobe Commerce on cloud infrastructure Starter plan architecture customer and currently use the standard sized Staging Environment and would like more power, you can request an upgrade to Enhanced Integration Environments, which provide roughly four times the performance. This article separates instructions for Pro customers from Starter customers.

## Pro

1. If you are on Pro, to upgrade, you must reduce the number of Integration branches to two (**the main Integration branch is included in the total**). **Note: Do not count the primary branch in this total. The primary branch is not considered an integration branch.** Follow the steps in [Manage branches with the Project Web Interface](https://devdocs.magento.com/cloud/project/project-webint-branch.html?) in our developer documentation.
1. The merchant needs to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting an Upgrade to Enhanced Integration Environments, using the contact reason "*Request a cloud configuration change*".
1. Adobe Customer Engineering team confirms the number of Integration Environments and begins the change.
1. The merchant will be notified in the ticket when the upgrade is complete.
1. The merchant redeploys the Integration Environments. Follow the steps in [Merge a branch](https://devdocs.magento.com/cloud/env/environments-start.html#merge) in our developer documentation. *Note*: The deployment happens automatically when you run: <pre>git push origin <branch-name></pre>    

Increased performance indicates a successful upgrade to Enhanced Integration Environments.

 **Notes**:

* The standard size and enhanced size are the only two sizes available.
* All the Integration Environments for a given store are the same size – they cannot be sized independently.
* If you need more than two of the Enhanced Integration Environments, please consult your Customer Success Manager.

## Starter

1. The merchant needs to reduce the number of Integration branches to one, leaving only the Staging environments. Follow the steps in [Manage branches with the Project Web Interface](https://devdocs.magento.com/cloud/project/project-webint-branch.html?) in our developer documentation. The number of environments available will be reduced to allow a maximum of one Integration Environment.
1. The merchant needs to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting an Upgrade to Enhanced Integration Environments, using the contact reason *"Request a cloud configuration change"* – **your Staging environment is a named Integration Environment**.
1. Adobe Customer Engineering team confirms the number of Integration Environments and begins the change.
1. The merchant will be notified in the ticket when the upgrade is complete.
1. The merchant redeploys the Integration Environments. Follow the steps in [Merge a branch](https://devdocs.magento.com/cloud/env/environments-start.html#merge) in our developer documentation. *Note*: The deployment happens automatically when you run: <pre>git push origin <branch-name></pre>    

Increased performance indicates a successful upgrade to Enhanced Integration Environments.

 **Notes**:

* The standard size and enhanced size are the only two sizes available.
* All the Integration Environments for a given store are the same size – they cannot be sized independently.
* If you need Integration Environments beyond Staging, please consult your Customer Success Manager.
* In case the purchase is made after 17th September 2020, this enhancement won't be applicable due to enlarged Integration Environments.
