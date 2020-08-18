This article talks about how to fix the issues caused by the encryption key not being moved together with DB dump to the other environment.&nbsp;

### Products and versions affected

*   Magento Commerce Cloud 2.2.x, 2.3.x

## Issue

After importing a database dump from Production to Staging/Integration environments, saved credit card numbers appear wrong and/or payments fail for payment integrations requiring usage of merchant credentials.&nbsp;

## Cause

The encryption key used to encrypt sensitive data, like credit card numbers and merchant credentials, is not stored in the database, and therefore does not get transferred to other environment after database dump import/export.&nbsp;

## Solution

You need to copy the encryption key from the source environment and add it to the destination environment.

To copy the encryption key:

1.   SSH to your project that was the source for the database dump, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh" target="_self">SSH to environment</a>.
2.   Open `` app/etc/env.php `` in a text editor.
3.   
    
    Copy the value of `` key `` for `` crypt ``.
    
    
    
    <pre><code class="language-php">return array (
  'crypt' =&gt;
  array (
    'key' =&gt; '&lt;your encryption key&gt;',
   ),
);</code></pre>
    
    

To set the key value for the destination project:

1. Open your Project Web UI and locate your project.&nbsp;

2. Set the value of the <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=CRYPT_KEY#crypt_key" rel="noopener" target="_blank">CRYPT\_KEY</a> variable, as described in <a href="https://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#project-conf-env-var" target="_self">Configure your project.</a> This will trigger the deployment process and `` CRYPT_KEY `` will be overridden in the `` app/etc/env.php `` file on every deployment.

Optionally, you can manually override the encryption key in the `` app/etc/env.php `` file:

1.   SSH to the destination environment.
2.   Open `` app/etc/env.php `` in a text editor.
3.   Paste the copied data as the `` key `` value for `` crypt ``.
4.   Save the edited `` env.php `` .
5.   Clean cache on the destination environment by running `` bin/magento cache:clean `` or in Magento Admin under __System__ &gt; __Tools__ &gt; __Cache Management__.