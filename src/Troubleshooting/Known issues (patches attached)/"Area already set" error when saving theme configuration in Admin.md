---
title: "Area already set" error when saving theme configuration in Admin
link: https://support.magento.com/hc/en-us/articles/360024918291--Area-already-set-error-when-saving-theme-configuration-in-Admin
labels: Magento Commerce Cloud,patch,theme,troubleshooting,2.2.4,area already set,known issues
---

<p>This article provides a patch for the known Magento Commerce Cloud 2.2.4 issue related to getting the <em>"Area is already set"</em> error message when trying to set a theme for the Default Store View in the Magento Admin.</p>
<h2>Issue</h2>
<p>You get the "<em>Something went wrong while saving this configuration: Area is already set</em>" error message when trying to set a theme for the Default Store View.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Log in to Magento Admin.</li>
<li>Navigate to Content&gt;Design&gt;Configuration.</li>
<li>Set the configuration scope to <em>Default Store View</em>.</li>
<li>Change the theme in the Applied Theme drop-down. For example, from <em>Magento Luma</em> to <em>Magento Blank.</em>
</li>
<li>Click Save Configuration.</li>
</ol>
<p>Expected result:<br/> The selected theme is applied for the default store view.</p>
<p>Actual result:<br/> Theme is not applied, the <em>"Something went wrong while saving this configuration: Area is already set"</em> error message is displayed.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, click the following link or scroll down to the end of the article and click the attached file:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023313871/MDVA-11106_EE_2.2.4_v1.composer.patch">Download MDVA-11106_EE_2.2.4_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.4</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.0.X</li>
<li>Magento Commerce (Cloud) 2.1.X</li>
<li>Magento Commerce (Cloud) from 2.2.0 to 2.2.5</li>
<li>Magento Commerce 2.0.X</li>
<li>Magento Commerce 2.1.X</li>
<li>Magento Commerce from 2.2.0 to 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>