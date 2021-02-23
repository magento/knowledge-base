---
title: Changes in .magento.env.yaml not reflected in env.php after deployment
link: https://support.magento.com/hc/en-us/articles/360050422532-Changes-in-magento-env-yaml-not-reflected-in-env-php-after-deployment
labels: Magento Commerce Cloud,deploy,deployment,troubleshooting,php.ini,deployment error,environment variables,app/etc/env.php,.magento.env.yaml,env.php
---

<p>This article provides a solution for the issue where changes in <code> .magento.env.yaml</code> file are not reflected in <code>app/etc/env.php</code> after deployment.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>.</li>
</ul>
<h2>Issue</h2>
<p>Changes made in the<code>.magento.env.yaml</code> file do not affect the <code>app/etc/env.php</code> generated.</p>
<p>Steps to reproduce<br/><br/>Change any value in <code>.magento.env.yaml</code> and push to the server, where it should define the configuration (and deployment settings) for the currently checked-out environment. For steps, refer to Magento DevDocs <a href="https://devdocs.magento.com/cloud/env/variables-deploy.html">Environment Variables &gt; Deploy Variables</a>.</p>
<p>Expected result</p>
<p>Changes made in the <code>.magento.env.yaml</code> file affect the <code>app/etc/env.php</code> generated.</p>
<p>Actual result</p>
<p>The changes have no effect on the <code>app/etc/env.php</code> variables after deployment.</p>
<h2>Cause</h2>
<p>The issue could be caused by the incorrect value of the <code>opcache.enable_cli</code> parameter in the <code>php.ini</code> file.</p>
<h2>Solution</h2>
<ol>
<li>Check that the system is configured according to <a href="https://devdocs.magento.com/guides/v2.4/performance-best-practices/software.html">Magento Performance Best Practices &gt; Software recommendations</a>.</li>
<li>Check if <code style="font-size: 15px;">opcache.enable_cli</code> directive in <code style="font-size: 15px;">php.ini</code> is set to <code style="font-size: 15px;">0</code> by executing:<br/><code>php -i | grep opcache.enable_cli</code><br/>
</li>
<li>If the output looks like <code>opcache.enable_cli=1</code>, edit the <code>php.ini</code> file in the project root directory and change <code>opcache.enable_cli=1</code> to <code>opcache.enable_cli=0</code>
</li>
<li>Redeploy the project.</li>
</ol>
<h2>Related reading</h2>
<ul>
<li>DevDocs <a href="https://devdocs.magento.com/cloud/project/magento-env-yaml.html">Magento Commerce Cloud  &gt; Build and deploy</a>.</li>
</ul>