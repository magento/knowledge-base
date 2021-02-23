---
title: "Updater application is not available" error
link: https://support.magento.com/hc/en-us/articles/360033352071--Updater-application-is-not-available-error
labels: Magento Commerce,update,install,web setup wizard,updater,2.3.x,2.2.x,how to
---

<p>This article talks about the solution for the "updater application is not available" issue you might face when trying to update/install Magento using the Web Setup Wizard.</p>
<h2>Issue</h2>
<p>The following message is displayed in the readiness check:</p>
<p><img alt="Screen_Shot_2019-08-29_at_1.39.12_PM.png" src="https://support.magento.com/hc/article_attachments/360037722712/Screen_Shot_2019-08-29_at_1.39.12_PM.png"/></p>
<h3>Affected products/versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<p> </p>
<h2>Solution</h2>
<p>To resolve this issue, see if there is a <code class="highlighter-rouge">&lt;magento_root&gt;/update</code> directory that contains files and subdirectories. Otherwise, see <a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/updater/update-updater.html">Set up the updater</a>.</p>