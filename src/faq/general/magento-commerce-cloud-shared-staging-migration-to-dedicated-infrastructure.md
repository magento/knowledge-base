---
title: "Adobe Commerce on cloud infrastructre: shared Staging migration to dedicated infrastructure"
labels: FAQ,Magento Commerce Cloud,Pro,Staging,cloud infrastructure,dedicated,maintenance mode,migration,production,shared,staging,upgrade,Adobe Commerce
---

This Frequently Asked Questions (FAQ) article answers common questions about the process of migrating shared Staging environments to dedicated infrastructure for Adobe Commerce on cloud infrastructure.

## Why is Adobe Commerce upgrading my Staging environment to use Dedicated Staging?

Adobe Commerce is provisioning all Adobe Commerce on cloud infrastructure Pro plan architecture plan accounts that have a shared Staging environment with a separate, dedicated Staging environment. We will migrate your existing shared Staging environment to the dedicated Staging environment as part of the upgrade process. Previously, Production and Staging environments for Pro plan projects were hosted on shared cloud infrastructure, and customers had the option to add a dedicated Staging environment for an additional charge.

Having a dedicated Staging environment allows you to perform activities such as testing service upgrades and running performance tests in a separate environment without impacting your Production environment. You can also upsize your Staging environment independently as needed.

## Is there any cost to me?

No, **there is no cost to you**. Adobe Commerce is upgrading your project with a new dedicated Staging environment at no additional cost.

## How will the upgrade affect my Pro architecture project?

You will have separate IaaS infrastructure for Staging and Production environments. The infrastructure for each environment includes a three-node, high-availability architecture for your data, services, caching, and storage. Adobe Commerce will migrate your existing Staging environment from the shared infrastructure to the new dedicated Staging environment with all environment variables, configurations, and most third-party services. We will migrate the database and all files on the shared mounts to the new dedicated infrastructure.

## How does the migration affect the way that I access and use the Staging environment?

After we move your Staging environment to the dedicated infrastructure, the URLs to access your Staging environment will change. Additionally, you will have three different URLs for SSH access to the environment, one for each node in the cluster. You can find the URLs for web access and SSH access in the Project Web UI similar to the sample image below:

![cloud_project-ssh-three-node-access.jpg](assets/cloud_project-ssh-three-node-access.jpg)

## Will there be any changes to my existing workflow?

If you use a direct URL to connect to the shared Staging environment using SSH, you must replace the existing URL with the SSH access URL for the new dedicated Staging environment. See [SSH to an environment](https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh) in our developer documentation.

If you bypass the Fastly CDN to connect directly to the shared Staging origin, you might need to update the connection URL. For instructions, see [Bypass Fastly to check Staging and Production Sites](https://devdocs.magento.com/cloud/cdn/trouble-fastly.html#cloud-test-stage) in our developer documentation.

## What is the timeline?

Adobe Commerce plans to migrate Adobe Commerce on cloud infrastructure projects with shared Staging environments to dedicated environments on a rolling basis between May 11th and May 31st, 2020. Your team will receive a Support ticket seven days ahead of your upgrade so that you can plan accordingly.

## What action do I need to take?

None. The Adobe Commerce infrastructure team will initiate and complete the migration project using our automated process. When we move your environment, we will make sure that the code is in sync and that the database and media are migrated, including all files on the shared mounts.

The upgrade to the Dedicated Staging environment does create a new AWS instance that has new IP addresses and access points. This will potentially require you to update any dependencies for external systems or integrations. We recommend that you check these items following the upgrade.

If you run into any issues after the upgrade, [submit an Adobe Commerce Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## What should I expect during the migration?

The Support ticket will specify the migration date for the upgrade to Dedicated Staging. On the scheduled date, we will switch your current Staging environment to Maintenance Mode while we complete the migration. Your Staging environment will be offline for about an hour.

## What if I am actively using my staging environment during the migration?

If there is an active deployment to the Staging environment, the migration process will begin after the deployment completes.

## What if my new Dedicated Staging environment is not large enough to support what I had been doing in Shared Staging at the time of upgrade?

If you have issues with the size of your new Dedicated Staging environment after the upgrade is complete, [please submit a Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) with the subject line: **Dedicated Staging Upgrade Upsize**.

## What will happen to my Shared Staging environment?

Your Shared Staging environment will be placed in Maintenance Mode. At some point (at least seven days after upgrade), the old Shared Staging environment will be removed.
