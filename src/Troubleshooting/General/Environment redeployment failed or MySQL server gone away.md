---
title: Environment redeployment failed or MySQL server gone away
link: https://support.magento.com/hc/en-us/articles/360031096931-Environment-redeployment-failed-or-MySQL-server-gone-away
labels: Magento Commerce Cloud,Magento Commerce,deployment,troubleshooting,mysql
---

<p>This article provides a solution for Magento Commerce and Cloud issues, where the outage of space allocated for MySQL causes stuck deployment or database connection errors.</p>
<h3> Affected products and versions</h3>
<ul>
<li>Magento Commerce, Magento Cloud</li>
<li>all versions</li>
</ul>
<h2>Issue</h2>
<ul>
<li>Deploy process fails with the following error in the deploy log (command line and UI log):
<pre><code class="language-bash"> Re-deploying environment abcdefghijklm-master-7rqtwti  
    E: Environment redeployment failed</code></pre>
</li>
<li>
<p>Magento responds with 503 error, and the following error message is displayed in application logs:</p>
<pre><code class="language-bash">SQLSTATE[HY000] [2006] MySQL server has gone away </code></pre>
<p>and the following error appears when you connect to a MySQL server:</p>
<pre><code class="language-bash">ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"</code>  </pre>
</li>
</ul>
<h2>Cause</h2>
<p>The most probable cause of the issues is the MySQL database allocated space being too low. To make sure this is the case, check the space available for MySQL as described further.</p>
<h3>Check if there's enough space for MySQL</h3>
<p>For the all Starter plan environments, and Integration environment of the Pro plan, <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to the environment</a> and run the <code class="language-bash">magento-cloud db:size</code> command.</p>
<p>For Staging or Production environment of the Pro plan, <a href="https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to the environment</a>,  and run the <code>df -h</code> <code> | grep mysql.</code>The result will look similar to the following:</p>
<pre><code class="language-bash">sxpe7gigd5ok2@i-00baa9e24f31dba41:~$ df -h | grep mysql
/dev/xvdj                                          40G  7.4G   32G  19% /data/mysql</code></pre>
<h2>Solution</h2>
<h2>To solve the issue, you need to allocate more space for MySQL.</h2>
<p>For all Starter plan environments and Pro plan Integration environment, this is done in the <code style="font-size: 15px;">.magento/services.yaml</code> file, by increasing the <code>mysql: disk:</code> parameter. For example:</p>
<pre><code class="language-yaml">mysql:
    type: mysql:10.0
    disk: 2048
</code></pre>
<p>See the  <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-mysql.html">Set up MySQL service</a> article for reference.</p>
<p>To make these changes for the Staging or Production environment of the Pro plan, you must create a <a href="http://support.magento.com/">Support ticket</a>. But typically, you will not have to deal with this on Staging/Production of the Pro plan, cause Magento monitors these parameters for you, and alerts you and/or takes actions, according to the contract.</p>
<h3>Applying the changes</h3>
<p>Once you change the <code style="font-size: 15px;">.magento/services.yaml</code> file, you need to commit and push your changes, for them to be applied. The push will trigger the deployment process.</p>
<p><code class="language-bash"><code class="language-bash"></code></code></p>
<p> </p>