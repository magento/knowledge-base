---
title: Removing staging update deletes related entity
link: https://support.magento.com/hc/en-us/articles/360025963952-Removing-staging-update-deletes-related-entity
labels: Magento Commerce,patch,troubleshooting,staging update,known issues,2.2.3
---

<p>This article provides a patch for the known Magento Commerce 2.2.3 issue related to the entity (category, CMS page, etc) itself being removed when the related schedule update is deleted.</p>
<p class="info">The issue was fixed in Magento Commerce 2.2.6.</p>
<h2>Issue</h2>
<p>When you delete an active schedule update between it's starting and ending dates, the related entity (category, subcategory, CMS page) is also deleted.</p>
<p>Steps to reproduce (with categories):</p>
<ol>
<li>Log in to Magento Admin.</li>
<li>Create a new subcategory under Catalog &gt; Categories.</li>
<li>Create new Staging Update with the start and end time.</li>
<li>Wait until the update is applied, that is the start time comes.</li>
<li>Delete the update, using the View/Edit link.</li>
</ol>
<p>Expected result:<br/> The update is deleted, the subcategory still exists in the Admin.</p>
<p>Actual result:<br/> The update and the subcategory are deleted.</p>
<h2>Solution</h2>
<p>Please apply the patch provided in this article, and clean the cache running <code class="language-bash">bin/magento
  cache:clean</code></p>
<h2>Patch</h2>
<p>The patches are attached to this article. To download a patch, scroll down to the end of the article and click the file name, or click the corresponding link:</p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360025424672/MDVA-11059_EE_2.2.3_COMPOSER_v1.patch">Download MDVA-11059_EE_2.2.3_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360047580191/MDVA-23505_EE_2.2.4_COMPOSER_v1.patch">Download MDVA-23505_EE_2.2.4_COMPOSER_v1.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360047446032/MDVA-12158_EE_2.2.5_COMPOSER_v2.patch">Download MDVA-12158_EE_2.2.5_COMPOSER_v2.patch</a></li>
</ul>
<h3>Compatible Magento versions:</h3>
<p>The patches were created for:</p>
<ul>
<li>MDVA-11059_EE_2.2.3_COMPOSER_v1.patch was created for Magento Commerce 2.2.3</li>
<li>MDVA-23505_EE_2.2.4_COMPOSER_v1.patch was created for Magento Commerce 2.2.4</li>
<li>MDVA-12158_EE_2.2.5_COMPOSER_v2.patch was created for Magento Commerce 2.2.5</li>
</ul>
<p>The MDVA-11059_EE_2.2.3_COMPOSER_v1.patch patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.2.0-2.2.2</li>
<li>Magento Commerce Cloud 2.2.0-2.2.3</li>
</ul>
<p>The MDVA-23505_EE_2.2.4_COMPOSER_v1.patch patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.1.0-2.1.18, 2.2.0-2.2.3</li>
<li>Magento Commerce Cloud 2.1.0-2.1.18, 2.2.0-2.2.3</li>
</ul>
<p>The MDVA-23505_EE_2.2.5_COMPOSER_v1.patch patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce Cloud 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>