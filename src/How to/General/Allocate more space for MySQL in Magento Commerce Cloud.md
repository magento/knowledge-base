For all Starter plan environments and Pro plan Integration environment, you can allocate more space for MySQL in the <code style="font-size: 15px;">.magento/services.yaml</code> file, by increasing the `` mysql: disk: `` parameter. For example:

<pre><code class="language-yaml">mysql:
    type: mysql:10.0
    disk: 2048
</code></pre>

See the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-mysql.html" target="_self">Set up MySQL service</a> article for reference.

To make these changes for the Staging or Production environment of the Pro plan, you must create a <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" target="_self">Support ticket</a>. But typically, you will not have to deal with this on Staging/Production of the Pro plan, cause Magento monitors these parameters for you, and alerts you and/or takes actions, according to the contract.

#### Applying the changes

Once you change the&nbsp;<code style="font-size: 15px;">.magento/services.yaml</code> file, you need to commit and push your changes, for them to be applied. The push will trigger the deployment process.&nbsp;