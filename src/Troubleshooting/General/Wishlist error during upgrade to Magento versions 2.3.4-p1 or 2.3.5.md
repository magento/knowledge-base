---
title: Wishlist error during upgrade to Magento versions 2.3.4-p1 or 2.3.5 
link: https://support.magento.com/hc/en-us/articles/360042621771-Wishlist-error-during-upgrade-to-Magento-versions-2-3-4-p1-or-2-3-5-
labels: upgrade,Magento Commerce Cloud,Magento Commerce,error,known issues,wishlist,Magento_Wishlist,2.3.4-p1,2.3.5,2.3.5-p1,2.3.4-p2
---

<p>This article provides a fix for the known issue when upgrading to Magento versions 2.3.4-p1 and 2.3.5 related to a wishlist error during the upgrade to these versions.</p>
<h2>Affected products and versions</h2>
<ul>
<ul>
<li>Magento Commerce Cloud versions 2.3.4-p1 and 2.3.5</li>
<li>Magento Commerce versions 2.3.4-p1 and 2.3.5</li>
</ul>
</ul>
<h2>Issue</h2>
<p>During an upgrade to Magento Commerce Cloud/Commerce/Open Source versions 2.3.5 or 2.3.4-p1, you could get a wishlist error (detailed below) from the <code class="language-php">Magento_Wishlist</code> module.</p>
<p>Upgrading:<br/>From Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p1 to version 2.3.4-p2<br/>or from Magento Commerce Cloud/Commerce/Open Source version 2.3.5 to version 2.3.5-p1<br/>will fix the error.</p>
<p>Step to reproduce:</p>
<p>Upgrade your Magento Commerce Cloud/Commerce/Open Source to version 2.3.4-p1 or version 2.3.5.</p>
<p>Expected result:</p>
<p>The upgrade process to Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p1 or version 2.3.5 completes normally.</p>
<p>Actual result:</p>
<p>During the upgrade you get this error:</p>
<pre><code class="language-php">Module ‘Magento_Wishlist’:

Unable to apply data patch Magento\Wishlist\Setup\Patch\Data\CleanUpData for module Magento_Wishlist. Original exception message: Unable to unserialize value. Error: Syntax error  
</code></pre>
<h2>Solutions</h2>
<ul>
<li>If you were upgrading to Magento Commerce Cloud/Commerce/Open Source version 2.3.5, upgrade to version 2.3.5-p1.<br/>Magento Commerce Cloud/Commerce/Open Source version 2.3.5-p1 replaces version 2.3.5.</li>
<li>If you were upgrading to Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p1, upgrade to version 2.3.4-p2.<br/>Magento Commerce Cloud/Commerce/Open Source version 2.3.4-p2 replaces version 2.3.4-p1.</li>
</ul>
<h2>Related reading from Devdocs</h2>
<ul>
<li>
<a href="https://devdocs.magento.com/cloud/bk-cloud.html">Magento Commerce Cloud guide</a> </li>
<li>
<a href="https://devdocs.magento.com/cloud/project/project-upgrade.html">Magento Commerce Cloud - Upgrade Magento version</a> </li>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/bk-compman-upgrade-guide.html">Magento Commerce (On-Prem) And Magento Open Source - Upgrade the Magento application and modules</a> </li>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/layouts/product-layouts.html#wishlist-item-configure-page">Wishlist item configure page</a> </li>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/advanced-reporting/modules.html">Modules providing advanced reporting</a> </li>
</ul>