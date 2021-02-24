---
title: run `setup:static-content:deploy` deployed_version.txt issue
link: https://support.magento.com/hc/en-us/articles/360000338413-run-setup-static-content-deploy-deployed-version-txt-issue
labels: Magento Commerce Cloud,deploy,troubleshooting,not writable
---

<p>This article provides a fix for <code>deployed_version.txt</code> is not writable error when running the setup:static-content:deploy command manually.</p>
<h2>Issue</h2>
<p>If you follow the Magento Commerce Cloud recommendations to use <a href="https://support.magento.com/hc/en-us/articles/115003169574">Configuration Management</a> (and move static assets generation to the build stage in order to decrease website downtime during deployment), you may face the following error when running the <code>setup:static-content:deploy</code> command manually:</p>
<pre><code class="language-clike">{{cloud-project-id}}_stg@i:~$ php bin/magento setup:static-content:deploy
Requested languages: en_US
Requested areas: frontend, adminhtml
Requested themes: Magento/blank, Magento/luma, Aheadworks/marketplace, Magento/backend
[Magento\Framework\Exception\FileSystemException]
The path "deployed_version.txt:///app/{{cloud-project-id}}_stg/pub/static/app/{{cloud-project-id}}_stg/pub/static/" is not writable </code></pre>
<h2>Cause</h2>
<p>We have optimized the deployment process to decrease downtime and have created symlinks to static assets files instead of copying them. The location where the static assets are stored is read-only, that is why you get the error message above.</p>
<p>We strongly do not recommend to run static content deploy manually because all assets are already generated and there will be no difference between files if you do it manually (the theme files are read-only as well, you cannot change them), so there's no sense in such operation.</p>
<h2>Solution</h2>
<p>If you still want to run static content deployment, remove symlinks in the <code>pub/static</code> directory and run the <code>setup:static-content:deploy</code> command again:</p>
<pre><code class="language-clike">find pub/static/ -maxdepth 1 -type l -delete</code></pre>