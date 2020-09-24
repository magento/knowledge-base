This article talks about static content deploy (SCD) best practices to help avoid issues where the static content would not be available on your website.

### Affected products and versions

*   Magento Commerce, all versions
*   Magento Open Source,&nbsp;all versions
*   Magento Commerce Cloud, all versions

## Best practices

To avoid an issue with static content not being available on your website, follow these best practices to make sure your static content is both configured and deployed correctly:

1.   Make sure to follow deployment guidelines:
    
    *   For Magento Commerce and Magento Open Source, all versions: [Deployment Overview](https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/)
    *   For Magento Commerce Cloud, all versions: [Cloud deployment process](https://devdocs.magento.com/guides/v2.3/cloud/deploy/cloud-deployment-process.html) and also [Static content deployment strategies](https://devdocs.magento.com/guides/v2.3/cloud/deploy/static-content-deployment.html)
    
    
    
2.   For Magento Commerce Cloud, all versions, ensure that ece-tools is on the newest release: [Update ece-tools version](https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html)
3.   For Magento Commerce Cloud, all versions, make sure that static content is deployed during the build phase rather than the deploy phase: [Configuration management for store settings - Static content deployment performance](https://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-over.html#cloud-confman-scd-over)
4.   Make sure that you do not have long-running cron jobs, and kill any long-running cron processes. Long-running cron jobs can take up CPU resources and potentially greatly increase deployment time.
5.   For Magento Commerce and Magento Open Source, all versions, check that the `` php `` process in CLI has access to the `` pub/static `` directory, otherwise you could face an issue where a static content deploy will be unable to write files to that directory. For more information: [File systems access permissions](https://devdocs.magento.com/guides/v2.3/config-guide/prod/prod_file-sys-perms.html)
6.   Ensure the `` generated `` directory is not a shared directory across builds, otherwise builds could fail randomly. For more information:
    
    *   Magento Commerce and Magento Open Source, all versions: [Technical Details](https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/technical-details.html)
    *   Magento Commerce Cloud, all versions: [Deployment process - Phase 2: build](https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#cloud-deploy-over-phases-build)
    
    
    
7.   Check your SCD strategy. The _quick_ strategy is the default. For more information:
    
    *   Magento Commerce and Magento Open Source, all versions: [Static files deployment strategies](https://devdocs.magento.com/guides/v2.2/config-guide/cli/config-cli-subcommands-static-deploy-strategies.html)
    *   Magento Commerce Cloud, all versions: [Deploy variables - SCD\_STRATEGY](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#scd_strategy)
    
    
    

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/pattern-library/containers/staticContentContainer/contentContainer.html" target="_self"><span style="font-size: 15px;">Static Content Container</span></a>
*   [Static Content Signing](https://devdocs.magento.com/guides/v2.3/config-guide/cache/static-content-signing.html)
*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/variables-deploy.html#static_content_symlink" target="_self"><span style="font-size: 15px;">Deploy variables - STATIC\_CONTENT\_SYMLINK</span></a>
*   [Deployment flow](https://devdocs.magento.com/guides/v2.3/performance-best-practices/deployment-flow.html)
*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html" target="_self"><span style="font-size: 15px;">Zero downtime deployment</span></a>
*   [Optimize cloud deployment](https://devdocs.magento.com/guides/v2.3/cloud/deploy/optimize-cloud-deployment.html)
*   [Error running \`setup:static-content:deploy\` manually (deployed\_version.txt is not writable)](https://support.magento.com/hc/en-us/articles/360000338413)