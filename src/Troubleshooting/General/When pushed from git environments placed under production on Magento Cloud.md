---
title: When pushed from git environments placed under production on Magento Cloud
link: https://support.magento.com/hc/en-us/articles/360050455792-When-pushed-from-git-environments-placed-under-production-on-Magento-Cloud
labels: staging,production,Magento Commerce Cloud,troubleshooting,2.3,git,develop,2.3.x,2.4,2.4.x,command line,Magento Cloud CLI
---

<p>This article provides a solution for the issue where new environments are placed under the production environment on Magento Commerce Cloud when pushed from the git version-control system.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">all supported versions</a>.</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<p>Prerequisites: Have a local git controlled clone of the project.</p>
<p>You need to create an integration branch from the staging branch:</p>
<ol>
<li>Switch to the staging branch by running the following command in the local shell:<br/><code>git checkout staging</code>
</li>
<li>Create an integration branch from the staging branch by running the following command in the local shell:<br/><code>git checkout -b &lt;branch&gt; </code>
</li>
<li>Push the branch to the remote repository and set up an upstream branch by running the following command in the local shell:<br/><code>git push --set-upstream origin &lt;branch&gt;</code>
</li>
</ol>
<p>Actual result:</p>
<p>The new branch was created under the production branch.</p>
<p>Expected result:</p>
<p>The new branch is created under the staging branch.</p>
<h2>Cause</h2>
<p>This is not a bug. For setting a parent branch for another branch the merchant should use the magento-cloud CLI.</p>
<h2>Solution</h2>
<p>A parent branch can only be set after the merchant has pushed a newly created branch and activated it. Refer to DevDocs <a href="https://devdocs.magento.com/cloud/integrations/bitbucket-integration.html#create-a-new-cloud-branch">Magento Commerce Cloud &gt; Bitbucket integration</a>. </p>
<p>To update a parent for the existing branch on the server, please use the <code>magento-cloud environment:info</code> command in the magento-cloud CLI.</p>
<p>Example of usage:</p>
<p><code>magento-cloud environment:info parent Staging</code></p>
<p>This will set the parent branch to "Staging" for the currently checked out branch.</p>
<h2>Related reading</h2>
<ul>
<li>DevDocs <a href="https://devdocs.magento.com/cloud/reference/cli-ref-topic.html">Magento Commerce Cloud &gt; Magento Cloud CLI</a>.</li>
</ul>