---
title: Static content deploy best practices in Adobe Commerce
labels: Magento Commerce,Magento Commerce Cloud,best practices,configuration,content,deploy,deployment,ece-tools,static,Adobe Commerce,cloud infrastructure,on-premises
---

This article talks about static content deploy (SCD) best practices in Adobe Commerce to help avoid issues where the static content would not be available on your website.

## Affected products and versions

* Adobe Commerce on-premises, all versions
* Magento Open Source, all versions
* Adobe Commerce on cloud infrastructure, all versions

## Best practices

To avoid an issue with static content not being available on your website, follow these best practices to make sure your static content is both configured and deployed correctly:

1. Make sure to follow deployment guidelines:
    * For Adobe Commerce on-premises and Magento Open Source (all versions), see [Deployment Overview](https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/) in our developer documentation.
    * For Adobe Commerce on cloud infrastructure (all versions), see [Cloud deployment process](https://devdocs.magento.com/guides/v2.3/cloud/deploy/cloud-deployment-process.html) and [Static content deployment strategies](https://devdocs.magento.com/guides/v2.3/cloud/deploy/static-content-deployment.html) in our developer documentation.
1. For Adobe Commerce on cloud infrastructure (all versions), ensure that ece-tools is on the newest release. See: [Update ece-tools version](https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html) in our developer documentation.
1. For Adobe Commerce on cloud infrastructure (all versions), make sure that static content is deployed during the build phase rather than the deployment phase. See: [Configuration management for store settings - Static content deployment performance](https://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-over.html#cloud-confman-scd-over) in our developer documentation.
1. Make sure that you do not have long-running cron jobs and kill any long-running cron processes. Long-running cron jobs can take up CPU resources and potentially greatly increase deployment time.
1. For Adobe Commerce on-premises and Magento Open Source (all versions), check that the `php` process in CLI has access to the `pub/static` directory. Otherwise, you could face an issue where a static content deploy will be unable to write files to that directory. For more information: [File systems access permissions](https://devdocs.magento.com/guides/v2.3/config-guide/prod/prod_file-sys-perms.html) in our developer documentation.
1. Ensure the `generated` directory is not a shared directory across builds; otherwise, builds could fail randomly. For more information:
    * Adobe Commerce on-premises and Magento Open Source (all versions): [Technical Details](https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/technical-details.html) in our developer documentation.
    * Adobe Commerce on cloud infrastructure (all versions): [Deployment process - Phase 2: build](https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-build) in our developer documentation.
1. Check your SCD strategy. The *quick* strategy is the default. For more information:
    * Adobe Commerce on-premises and Magento Open Source (all versions): [Static files deployment strategies](https://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-static-deploy-strategies.html) in our developer documentation.
    * Adobe Commerce on cloud infrastructure (all versions): [Deploy variables - SCD\_STRATEGY](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#scd_strategy) in our developer documentation.

## Related reading

In our developer documentation:

* [Static Content Container](https://devdocs.magento.com/guides/v2.3/pattern-library/containers/staticContentContainer/contentContainer.html)
* [Static Content Signing](https://devdocs.magento.com/guides/v2.3/config-guide/cache/static-content-signing.html)
* [Deploy variables - STATIC\_CONTENT\_SYMLINK](https://devdocs.magento.com/guides/v2.3/cloud/env/variables-deploy.html#static_content_symlink)
* [Deployment flow](https://devdocs.magento.com/guides/v2.3/performance-best-practices/deployment-flow.html)
* [Zero downtime deployment](https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html)
* [Optimize cloud deployment](https://devdocs.magento.com/guides/v2.3/cloud/deploy/optimize-cloud-deployment.html)

In our support knowledge base:

* [Error running \`setup:static-content:deploy\` manually (deployed\_version.txt is not writable)](https://support.magento.com/hc/en-us/articles/360000338413)
