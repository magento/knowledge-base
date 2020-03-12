By default, [Magento Admin](http://docs.magento.com/m2/ee/user_guide/stores/admin.html) URL is set to _&lt;domain\_name&gt;/admin_. This article shows how to change the URL.

## Method 1: Change using Magento Admin

Read the steps: [Using a Custom Admin URL](http://docs.magento.com/m2/ee/user_guide/stores/store-urls-custom-admin.html) &gt; __Change from the Magento Admin__ (Magento User Guide).

## Method 2: Add ADMIN\_URL environment variable

### Integration environment

From your [Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html), add a new variable with:

__Name:__ ADMIN\_URL  
__Value:__ new Admin URL

Read on DevDocs:

*   [add environment variables](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#env) (detailed steps)
*   [Magento environment variables](http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html) (reference)

### When Staging and Production are not available in Project Web Interface

[Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to add the ADMIN\_URL variable for your Staging or Production environment.

If Staging and Production are accessible from your Project Web Interface, add the Environment Variable as described in the _Integration environment_ section above.

### Add variables using Cloud CLI

See [Add environment variables](http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html#addvariables) (DevDocs) for detailed steps.

We don't recommend adding __global__ variables via Cloud CLI (the `` magento-cloud project:variable:set &lt;name&gt; &lt;value&gt; `` command) since such global variables:

*   get inherited by your Staging/Production environments (if these are included in your Project Web Interface)
*   trigger the undesired redeploy process on all branches/environments of your project

We recommend adding environment variables for every branch/environment using the `` magento-cloud variable:set `` command.