This article provides a solution for Magento Commerce and Cloud issues, where the outage of space allocated for MySQL causes stuck deployment or database connection errors.

### &nbsp;Affected products and versions

*   Magento Commerce, Magento Cloud
*   all versions

## Issue

*   Deploy process fails with the following error in the deploy log (command line and UI log):
    
    <pre><code class="language-bash">&nbsp;Re-deploying environment abcdefghijklm-master-7rqtwti &nbsp;
    E: Environment redeployment failed</code></pre>
    
    
*   
    
    Magento responds with 503 error, and the following error message is displayed in&nbsp;application logs:
    
    
    
    <pre><code class="language-bash">SQLSTATE[HY000] [2006] MySQL server has gone away&nbsp;</code></pre>
    
    
    
    and the following error appears when you connect to a MySQL server:
    
    
    
    <pre><code class="language-bash">ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"</code>&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif; background-color: #ffffff;">&nbsp;</span></pre>
    
    

## Cause

<span style="font-size: 15px;">The most probable cause of the issues is the MySQL database allocated space being too low. To make sure this is the case, check the space available for MySQL as described further.</span>

### <span style="font-size: 15px;">Check if there's enough space for MySQL</span>

For the all Starter plan environments, and Integration environment of the Pro plan, <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh" target="_self">SSH to the environment</a> and run the <code class="language-bash">magento-cloud db:size</code> command.

For Staging or Production environment of the Pro plan, <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh" target="_self">SSH to the environment</a>, &nbsp;and run the&nbsp;`` df -h `` ``  | grep mysql. ``The result will look similar to the following:

<pre><code class="language-bash">sxpe7gigd5ok2@i-00baa9e24f31dba41:~$ df -h | grep mysql
/dev/xvdj                                          40G  7.4G   32G  19% /data/mysql</code></pre>

## Solution

## <span style="font-size: 15px;">To solve the issue, you need to allocate more space for MySQL.</span>

For all Starter plan environments and Pro plan Integration environment, this is done in the <code style="font-size: 15px;">.magento/services.yaml</code> file, by increasing the `` mysql: disk: `` parameter. For example:

<pre><code class="language-yaml">mysql:
    type: mysql:10.0
    disk: 2048
</code></pre>

See the &nbsp;<a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-mysql.html" target="_self">Set up MySQL service</a> article for reference.

To make these changes for the Staging or Production environment of the Pro plan, you must create a [Support ticket](http://support.magento.com/). But typically, you will not have to deal with this on Staging/Production of the Pro plan, cause Magento monitors these parameters for you, and alerts you and/or takes actions, according to the contract.

### Applying the changes

Once you change the&nbsp;<code style="font-size: 15px;">.magento/services.yaml</code> file, you need to commit and push your changes, for them to be applied. The push will trigger the deployment process.

<code class="language-bash"><code class="language-bash"></code></code>

<p dir="auto">&nbsp;</p>