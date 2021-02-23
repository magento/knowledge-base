---
title: MySQL server has gone away​ error on Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360050825112-MySQL-server-has-gone-away-error-on-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,error,log,cron,2.3,MySQL,time-out,deployment fails,2.3.x,2.4,2.4.x
---

<p>This article talks about the solution for the issue where you receive an "<em>SQL server has gone away</em>" error message in the <code>cron.log</code> file. A range of symptoms including image file importing issues or deployment failure may be experienced.<em><br/></em></p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>.</li>
</ul>
<h2>Issue</h2>
<p>You receive an "<em>SQL server has gone away</em>" error message in the <code>cron.log</code> file.</p>
<p>Steps to reproduce</p>
<p>Import files and trigger a deployment. </p>
<p>Expected result</p>
<p> Successful deployment.</p>
<p>Actual result</p>
<p>Error message in <code>cron.log</code>:<br/>"<em>SQLSTATE[HY000] [2006] MySQL server has gone away at/app/AAAAAAAAA/vendor/magento/zendframework1/library/Zend/Db/Adapter/Pdo/Abstract.php:144"</em></p>
<h2>Cause</h2>
<p>The <code>default_socket_timeout</code> value is set too low. This is caused by the setting <code>default_socket_timeout</code>. If php doesn't receive anything from the MySQL database within this period, it assumes it is disconnected and throws the error. </p>
<h2>Solution</h2>
<ol>
<li>Check the current timeout period for <code>default_socket_timeout</code> by running in the CLI:<br/>
<pre class="line-numbers"><code class="language-clike">  php -i |grep default_socket_timeout</code></pre>
</li>
<li>Depending on the timeout setting increase, the <code>default_socket_timeout</code> variable to the expected longest possible run time in the <code>/etc/platform/&lt;project_name&gt;/php.ini</code> file. It is suggested that you set between 10-15 mins. </li>
<li>Commit it to GIT and redeploy.</li>
</ol>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360037591172">Database upload loses connection to MySQL</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360041997312">Database best practices for Magento Commerce Cloud</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360041739651">Most common database issues in Magento Commerce Cloud</a></li>
</ul>