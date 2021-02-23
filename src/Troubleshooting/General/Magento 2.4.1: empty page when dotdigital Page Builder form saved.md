---
title: Magento 2.4.1: empty page when dotdigital Page Builder form saved
link: https://support.magento.com/hc/en-us/articles/360049819092-Magento-2-4-1-empty-page-when-dotdigital-Page-Builder-form-saved
labels: Magento Commerce Cloud,Magento Commerce,form,known issues,blank,2.4.1,Safari,page builder,dotdigital
---

<p>This article provides a workaround for a known issue in Magento 2.4.1 for showing an empty webpage after saving a dotdigital Page Builder form In the Admin Panel when using the Safari browser. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.1</li>
<li>Magento Commerce Cloud version 2.4.1</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Go to Admin Panel &gt; Content &gt; Pages, and select Edit of any page.</li>
<li>Go to Content and click on the Edit with Page Builder button.</li>
<li>Drag the dotdigital form block and select Edit.</li>
<li>Select one of the test forms, then pick Embedded mode and save the form.</li>
<li>Save the page modification.</li>
</ol>
<p>Expected result</p>
<p>The webpage should be saved successfully.</p>
<p>Actual result</p>
<p>The webpage is empty. After reloading the webpage, the changes are applied.</p>
<h2>Workaround</h2>
<p>The workaround is to use an alternative browser to Safari. The issue is scheduled to be fixed in the next release, Magento version 2.4.2, in Q1 2021.</p>
<h2>Related reading</h2>
<ul>
<li>DevDocs <a href="https://devdocs.magento.com/page-builder/docs/">What is Page Builder?</a>
</li>
<li>DevDocs <a href="https://devdocs.magento.com/page-builder/docs/reference/configurations.html">Page Builder configurations</a>
</li>
<li>Magento User Guide <a href="https://docs.magento.com/user-guide/cms/page-builder.html">Page Builder</a>
</li>
<li>Magento User Guide <a href="https://docs.magento.com/user-guide/cms/page-builder-elements.html">Page Builder - Elements</a>
</li>
</ul>