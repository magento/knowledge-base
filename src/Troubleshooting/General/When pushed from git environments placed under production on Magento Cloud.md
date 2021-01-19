---
title: When pushed from git environments placed under production on Magento Cloud
link: https://support.magento.com/hc/en-us/articles/360050455792-When-pushed-from-git-environments-placed-under-production-on-Magento-Cloud
labels: staging,production,Magento Commerce Cloud,troubleshooting,2.3,git,develop,2.3.x,2.4,2.4.x,command line,Magento Cloud CLI
---

This article provides a solution for the issue where new environments are placed under the production environment on Magento Commerce Cloud when pushed from the git version-control system.

## Affected products and versions

* Magento Commerce Cloud, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

Steps to reproduce:

Prerequisites: Have a local git controlled clone of the project.

You need to create an integration branch from the staging branch:

1. Switch to the staging branch by running the following command in the local shell:  
git checkout staging

1. Create an integration branch from the staging branch by running the following command in the local shell:  
git checkout -b <branch>

1. Push the branch to the remote repository and set up an upstream branch by running the following command in the local shell:  
git push --set-upstream origin <branch>

Actual result:

The new branch was created under the production branch.

Expected result:

The new branch is created under the staging branch.

## Cause

This is not a bug. For setting a parent branch for another branch the merchant should use the magento-cloud CLI.

## Solution

A parent branch can only be set after the merchant has pushed a newly created branch and activated it. Refer to DevDocs [Magento Commerce Cloud > Bitbucket integration](https://devdocs.magento.com/cloud/integrations/bitbucket-integration.html#create-a-new-cloud-branch).

To update a parent for the existing branch on the server, please use the magento-cloud environment:info command in the magento-cloud CLI.

Example of usage:

magento-cloud environment:info parent Staging

This will set the parent branch to "Staging" for the currently checked out branch.

## Related reading

* DevDocs [Magento Commerce Cloud > Magento Cloud CLI](https://devdocs.magento.com/cloud/reference/cli-ref-topic.html).

