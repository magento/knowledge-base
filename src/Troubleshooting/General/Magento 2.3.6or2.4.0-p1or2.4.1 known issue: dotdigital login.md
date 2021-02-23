---
title: Magento 2.3.6or2.4.0-p1or2.4.1 known issue: dotdigital login
link: https://support.magento.com/hc/en-us/articles/360050092291-Magento-2-3-6-2-4-0-p1-2-4-1-known-issue-dotdigital-login
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,2.3.6,2.4.1,2.4.0-p1,dotdigital
---

<p>This article describes a Magento 2.3.6, 2.4.0-p1, and 2.4.1 known issue where it is impossible to log in to <a href="https://dotdigital.com/">dotdigital</a> via the Admin Panel when the dotdigital account is enabled.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud and Magento Commerce 2.3.6 (Safari browser only)</li>
<li>Magento Commerce Cloud and Magento Commerce 2.4.0-p1 (Safari browser only)</li>
<li>Magento Commerce Cloud and Magento Commerce 2.4.1 (Safari browser only)</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites:</p>
<ol>
<li>dotdigital account exists.</li>
<li>Valid dotdigital API credentials exist in Magento.</li>
</ol>
<p>Steps to reproduce:</p>
<ol>
<li>Go to Stores &gt; Configuration &gt; DOTDIGITAL &gt; Chat Settings &gt; Enabled is set to <em>Yes.</em>
</li>
<li>Click on Configure in Configure Chat Widget or Configure Chat Teams.</li>
</ol>
<p>Expected result:</p>
<p>Chat settings page should open successfully via Admin Panel.</p>
<p>Actual result:</p>
<p>Unable to log in to dotdigital.</p>
<h2>Solution</h2>
<p>Workaround: use an alternative browser to Safari for this particular situation.</p>
<h2>Related Reading</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360050139631">Magento 2.4.1 Known Issue - Vertex address not validating with different shipping/billing addresses</a></p>