---
title: Rearrange cloud branches on Adobe Commerce
labels: Adobe Commerce,cloud infrastructure,integration,staging,production,environment,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p2,2.4.3,2.4.3-p1
---

This article provides the steps you could take to re-arrange cloud branches on Adobe Commerce, if they are not organized according to the correct hierarchy. If you do not have the branches organized in correct hierarchy, you will not be able to merge to the correct parent branch - it will go to the existing parent branch.

## Affected products and versions:

* Adobe Commerce on cloud infrastructure, 2.3.0-2.3.7-p2, 2.4.0-2.4.3-p1

## Cloud branches organizaton

The correct hierarchy organization for your branches is:

* Master [main] > Production > Staging > Integration
* Master [main] > Production > Staging > Integration2

## Solution for incorrect cloud branches organization

To re-arrange cloud branches:

1. Install the magento-cloud CLI (if you have not done so).
1. Run the following command for the branches that need to be moved:
    `magento-cloud environment:info <branch to move> parent <target parent>`

Note: You can specify the parent branch when creating a new branch. For steps, refer to [Getting Starter creating branches](https://devdocs.magento.com/cloud/env/environments-start.html#getstarted) in our developer documentation.   

You can create a new environment branch using the `branch <environment-name> <parent-environment-ID>` magento-cloud environment command.

It may take some additional time to create and activate a new environment branch.

## Related reading

[Manage branches with the CLI](https://devdocs.magento.com/cloud/env/environments-start.html) in our developer documentation.
