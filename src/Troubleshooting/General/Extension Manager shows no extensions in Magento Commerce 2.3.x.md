---
title: Extension Manager shows no extensions in Magento Commerce 2.3.x
link: https://support.magento.com/hc/en-us/articles/360043980352-Extension-Manager-shows-no-extensions-in-Magento-Commerce-2-3-x
labels: Magento Commerce,known issues,marketplace,extensions,extension manager,2.3.x,command line
---

<p>This article provides a workaround for missing extensions in the Admin Extension Manager in Magento Commerce 2.3.x after you purchase extensions via the Magento Marketplace.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>When you purchase extensions via the Magento Marketplace, you are unable to install them using the core Magento Extension Manager. When you add your access keys and sync to the Marketplace, the Extension Manager shows no extensions.</p>
<p>The Workaround for the issue is to use the command line Magento installation as shown in DevDocs' <a href="https://devdocs.magento.com/extensions/install/">General CLI installation</a>.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Purchase an extension via the Magento Marketplace.</li>
<li>Add your extension's access keys and sync to the Marketplace.</li>
<li>Go to the Extension Manager section of the Magento Admin.</li>
</ol>
<p>Expected result:<br/> The extension appears on the Extension Manager section of the Magento Admin.</p>
<p>Actual result:<br/> No extension appears on the Extension Manager section of the Magento Admin, similar to the image below:</p>
<p><img alt="KB-607_Image_1.png" src="https://support.magento.com/hc/article_attachments/360058742771/KB-607_Image_1.png"/></p>
<h2>Workaround</h2>
<p>Use the command line Magento installation as shown in DevDocs' <a href="https://devdocs.magento.com/extensions/install/">General CLI installation</a>.</p>