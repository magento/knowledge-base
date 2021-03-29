---
title: Redirect to parent environment when accessing new Integration environment 
labels: Magento Commerce Cloud,troubleshooting,redirect,base_url,2.x.x
---

This article provides troubleshooting instructions for the Magento Cloud issue where trying to access the newly created Integration environment takes you to the parent environment instead.

To fix this, you need to correct the base\_url value in the database and make sure that the `` UPDATE_URLS `` variable value is set to `` true ``. Find more details in the sections below.

Affected versions and editions:

* Magento Commerce Cloud 2.X.X

## Issue

Steps to reproduce:

1. Clone the existing Integration branch.
1. Click the URL for accessing the new environment.

Expected result:

You get to the newly created environment.

Actual result:

You get redirected to the environment on the parent branch.

## Solution

To fix the issue, you need to correct the `` base_url `` values (secure and unsecure) in the custom environment database and set the `` UPDATE_URL `` variable in the `` .magento.env.yaml `` file.

### Correct base\_url values in database

Changes in the database can be done either manually or using the Magento CLI, if you are on version 2.2.0 and later.

#### Correct the values in the DB manually

1. Connect to the database 
1. Run the following commands
    
    <pre><code class="language-sql">UPDATE core_config_data SET value = %your_new_environment_unsecure_url% WHERE path="web/unsecure/base_url"</code></pre>
    
    
    
    <pre><code class="language-sql">update core_config_data set value = %your_new_environment_secure_url% where path="web/secure/base_url"<code></code></code></pre>
    
    

#### Correct the database using Magento CLI (available for versions 2.2.X)

1. Log in as, or switch to, the [Magento file system owner.](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/apache-user.html)
1. Run the following commands:
    
    <pre><code class="language-bash">php &lt;your_magento_install_dir>/bin/magento config:set web/unsecure/base_url http://example.com
php &lt;your_magento_install_dir>/bin/magento config:set web/secure/base_url https://example.com</code></pre>
    
    

### Set the `` UPDATE_URLS `` variable

In your local codebase, in the <code class="highlighter-rouge">.magento.env.yaml</code> file set:

    stage:
        deploy:
            UPDATE_URLS: true

###  Clear configuration cache

For the changes to be applied, clean the configuration cache by running the following command:

<pre><code class="language-bash">php &lt;your_magento_install_dir>/bin/magento cache:clean config</code></pre>

## Related documentation:

[Deploy variables](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#update_urls)