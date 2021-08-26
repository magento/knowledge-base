---
title: Integration Environment enhancement request - Pro and Starter
labels: Magento Commerce Cloud,Magento Pro,Magento Starter,Staging,announcements,increase performance,performance,reactive integration environment request,upgrade
---

If you are a Pro customer and currently use the standard-sized Integration Environments, or you are a Starter customer and currently use the standard sized Staging environment and would like more power, you can request an upgrade to Enhanced Integration Environments, which provide roughly 4 times the performance. This article separates instructions for Pro customers from Starter customers.

## Pro

1. If you are on Pro, to upgrade, you must reduce the number of Integration branches to two total (**the main Integration branch is included in the two total**). **Note: Do not count the primary branch in this total. The primary branch is not considered an integration branch.** Follow the steps in DevDocs' [Manage branches with the Project Web Interface](https://devdocs.magento.com/cloud/project/project-webint-branch.html?).
1. The merchant needs to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting an Upgrade to Enhanced Integration Environments, using the contact reason "*Request a cloud configuration change*".
1. Magento Customer Engineering team confirms the number of Integration environments and begins the change.
1. The merchant will be notified in the ticket when the upgrade is complete.
1. The merchant redeploys the Integration environments. Follow the steps in DevDocs' [Merge a branch](https://devdocs.magento.com/cloud/env/environments-start.html#merge). *Note*: The deployment happens automatically when you run:    <pre>git push origin <branch-name></pre>    

Increased performance indicates a successful upgrade to Enhanced Integration Environments.

 **Notes**:

* The standard size and enhanced size are the only two sizes available.
* All the Integration environments for a given store are the same size – they cannot be sized independently.
* If you need more than two of the Enhanced Integration Environments, please consult your Customer Success Manager.

## Starter

1. The merchant needs to reduce the number of Integration branches to one total, leaving only the Staging environments. Follow the steps in DevDocs' [Manage branches with the Project Web Interface](https://devdocs.magento.com/cloud/project/project-webint-branch.html?). The number of environments available will be reduced to allow a maximum of one Integration environment.
1. The merchant needs to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting an Upgrade to Enhanced Integration Environments, using the contact reason *"Request a cloud configuration change"* – **your Staging environment is a named Integration environment**.
1. Magento Customer Engineering team confirms the number of Integration environments and begins the change.
1. The merchant will be notified in the ticket when the upgrade is complete.
1. The merchant redeploys the Integration environments. Follow the steps in DevDocs' [Merge a branch](https://devdocs.magento.com/cloud/env/environments-start.html#merge). *Note*: The deployment happens automatically when you run:    <pre>git push origin <branch-name></pre>    

Increased performance indicates a successful upgrade to Enhanced Integration Environments.

 **Notes**:

* The standard size and enhanced size are the only two sizes available.
* All the Integration environments for a given store are the same size – they cannot be sized independently.
* If you need Integration environments beyond Staging, please consult your Customer Success Manager.
* In case the purchase is made after 17th September 2020, this enhancement won't be applicable due to enlarged Integration environments.
