---
title: Google Analytics is not tracking conversion data
link: https://support.magento.com/hc/en-us/articles/360026402831-Google-Analytics-is-not-tracking-conversion-data
labels: Magento Commerce,patch,troubleshooting,known issues,2.2.6,Google Analytics
---

<p>This article provides a patch for the known Magento Commerce 2.2.4 issue related to Google Analytics not tracking the conversion data.</p>
<p class="info">The issue was fixed in Magento Commerce 2.2.6.</p>
<h2>Issue</h2>
<p>The conversion data was not tracked by Google Analytics due to an error in the Google Analytics component code.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Enable and configure the Google Analytics functionality in Magento Admin under Stores &gt; Settings &gt; Configuration &gt; Sales &gt; Google API &gt; Google Analytics
</li>
<li>Click Save Config.</li>
<li>Place an order on the storefront. </li>
<li>Go to Google Analytics dashboard &gt; Conversions &gt; Overview.</li>
<li>Set the date range to the current date.</li>
</ol>
<p>Expected result:</p>
<p>The order appears in the conversions data.</p>
<p>Actual result:</p>
<p>The order does not appear in the conversion data.</p>
<h2>Solution</h2>
<p>The patch fixes the error in the Google Analytics component code. After applying the patch conversion data will be tracked by Google Analytics.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360025558831/MDVA-11263_EE_2.2.4_v1.composer.patch">Download MDVA-11263_EE_2.2.4_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.4</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.2.5</li>
<li>Magento Commerce Cloud 2.2.4, 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>