---
title: Deployment fails with "Error building project: The build hook failed with status code 1"
link: https://support.magento.com/hc/en-us/articles/360031098011-Deployment-fails-with-Error-building-project-The-build-hook-failed-with-status-code-1-
labels: Magento Commerce Cloud,build,deployment,troubleshooting,error building
---

<p>This article talks about the causes and solutions for the Magento Commerce Cloud issue, where the build phase of the deployment process fails and the error message is summarized with : <em>"Error building project: The build hook failed with status code 1"</em>.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Trigger the deployment manually or by performing a merge, push, or synchronization of your environment.</li>
</ol>
<p>Actual result</p>
<ol>
<li>The building phase fails, and the whole deployment process gets stuck.</li>
<li>In the deployment error log, the error message ends with: <em>"Error building project: The build hook failed with status code 1. Aborted build".</em>
</li>
</ol>
<p>Expected result</p>
<p>Deployment is completed successfully.</p>
<h2>Cause</h2>
<p>There are multiple reasons why environment building fails. Usually, in the deployment log you will see a long error message, where the first part would be more specific regarding the reason, and the conclusion would be <em>Error building project: The build hook failed with status code 1. Aborted build". </em></p>
<p>Looking closer at the first, problem-specific, part will help you to identify the issue. Here are the most common ones, and the next section provides solutions for them:</p>
<ul>
<li>There is no available storage space.</li>
<li>Incorrect ECE-Tools configuration. </li>
<li>Patch you trying to apply is incompatible with your Magento version, or has conflicts with other patches applied, or your customizations.</li>
<li>Problems with custom modules code are preventing from building successfully.</li>
</ul>
<h2> Solution</h2>
<ul>
<li>Check to ensure that there is enough storage. For information on how to check available space, see the <a href="https://support.magento.com/hc/en-us/articles/360005932713">Check disk space on Cloud environment using CLI</a> article. You can consider cleaning the log directories and/or increasing disk space.</li>
<li>Ensure ECE-Tools are configured correctly.</li>
<li>Check if it is the patch that is causing the problem. Resolve the conflict, or contact Magento Support. See below for details.</li>
<li>Check if it is the custom extension that is causing the problem. Resolve the conflict, or contact the extension developers for solution.</li>
</ul>
<p>The following paragraphs provide some more details.</p>
<h3>Clean logs and/or increase space</h3>
<p>Directories that be considered for clean up:</p>
<ul>
<li><code>var/log</code></li>
<li><code>var/report</code></li>
<li><code>var/debug/</code></li>
<li><code>var</code></li>
</ul>
<p>For details on how increase disk space if you on the Starter plan, see the <a href="https://support.magento.com/hc/en-us/articles/360005189554-Increase-disk-space-for-Integration-environment-on-Cloud">Increase disk space for Integration environment on Cloud</a>. The same instructions can be used for increasing space of Pro plan Integration environment.<br/> For Pro Production/Staging, you need to file a ticket to Magento Support and request increase disk space. But it is monitored by Platform. But typically, you will not have to deal with this on Staging/Production of Pro plan, cause Magento monitors these parameters for you, and alerts you and/or takes actions, according to the contract.</p>
<h3>Ensure ECE-tools are configured correctly</h3>
<ol>
<li>Ensure that build hooks are defined properly in the <code>magento.app.yaml</code> file. If you are on Magento Commerce 2.2.X, building hooks should be defined as follows:
<pre><code class="language-yaml">    # We run build hooks before your application has been packaged.
    build: |
        php ./vendor/bin/ece-tools build
    # We run deploy hook after your application has been deployed and started.
    deploy: |
        php ./vendor/bin/ece-tools deploy<br/></code></pre>
Use the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/ece-tools-upgrade-project.html">Upgrade to ece-tools</a> article for reference.</li>
<li>Ensure that ECE-tools package is present in the <code>composer.lock</code> file by running the following command:
<pre><code class="language-bash">grep '<code class="language-yaml">"name": "magento/ece-tools"</code>' composer.lock</code></pre>
If they are specified, the response would look like the following example:
<pre><code class="language-bash">"name": "magento/ece-tools",
"version": "2002.0.20",</code></pre>
</li>
</ol>
<p>See the <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/ece-tools-upgrade-project.html">Upgrade to ece-tools</a> article for reference.</p>
<h3>Is patch causing the issue?</h3>
<p>If it is the applied patch that is preventing the environment to build successfully, you see something similar to the following in the deploy log:</p>
<pre><code class="language-bash">%patch_name%.composer.patch 
[2019-02-19 18:12:59] CRITICAL: 
....
[2019-02-19 18:12:59] CRITICAL: Command git apply --check --reverse /app/m2-hotfixes/%patch_name%.composer.patch returned code 1 
...
W: 
W: Command git apply --check --reverse /app/m2-hotfixes/%patch_name%.composer.patch returned code 1 
W: 
W: 
W: build 
...
E: Error building project: The build hook failed with status code 1. Aborted build.</code></pre>
<p>These error messages mean that the patch you are trying to apply either was created for a different Magento version, or has conflicts with your customizations or previously applied patches. Try to resolve the conflict, or contact Magento Support.</p>
<h3>Is extension causing the issue?</h3>
<p>If it is the custom extension that is preventing the environment to build successfully, you will see the custom module(s) name(s) mentioned in the deployment log, along with the particular conflict caused by this module. Resolve the conflict, or contact the extension developers for solution.</p>
<h3>Make sure changes are applied</h3>
<p>Commit and push your changes. This will trigger the deployment automatically.</p>
<p> </p>
<p><code></code></p>