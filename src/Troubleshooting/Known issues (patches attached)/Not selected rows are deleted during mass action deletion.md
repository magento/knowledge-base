---
title: Not selected rows are deleted during mass action deletion 
link: https://support.magento.com/hc/en-us/articles/360025901132-Not-selected-rows-are-deleted-during-mass-action-deletion-
labels: Magento Commerce Cloud,patch,troubleshooting,deleted products,deleted customers,known issues,2.2.3,mass update
---

<p>This article provides a patch for the known Magento Сommerce Cloud 2.2.3 issue related to having not selected records being deleted when a bulk deletion is performed in a grid in Magento Admin.</p>
<h2>Issue</h2>
<p>In Magento Admin, if you select customer or client records to be deleted, filter the grid, and then select the Delete action, all records are deleted.</p>
<p>Steps to reproduce (with Products grid for an example):</p>
<ol>
<li>Navigate to Catalog &gt; Products in Magento Admin.</li>
<li>Select a product or multiple products.</li>
<li>Select Delete from the Actions drop-down menu.</li>
</ol>
<p>Expected result:<br/> Only selected products are deleted.</p>
<p>Actual result:<br/> Some other products are deleted as well.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360025343891/MDVA-10600_EE_2.2.3_v1.composer.patch">Download MDVA-10600_EE_2.2.3_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud 2.2.3</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.1.8-2.1.14</li>
<li>Magento Commerce 2.2.0-2.2.2, 2.2.4-2.2.5</li>
<li>Magento Commerce Cloud 2.2.4-2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>