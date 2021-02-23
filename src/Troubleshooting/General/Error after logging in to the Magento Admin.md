---
title: Error after logging in to the Magento Admin
link: https://support.magento.com/hc/en-us/articles/360033771391-Error-after-logging-in-to-the-Magento-Admin
labels: Magento Commerce Cloud,Magento Commerce,error,admin,base_url,slash,2.x.x,how to,base URL
---

<p>This article provides a solution for the issue where you receive an error message saying that the requested URL was not found on this server.</p>
<h3>Details</h3>
<p>The requested URL /magento2index.php/admin/admin/dashboard/index/key/0c81957145a968b697c32a846598dc2e/ was not found on this server.</p>
<p>Note the lack of a slash character between <code>magento2</code> and <code>index.php</code> in the URL.</p>
<h3>Solution</h3>
<p>The base URL is not correct. The base URL must:</p>
<ul>
<li>Start with <code>http://</code> or <code>https://</code>
</li>
<li>End with a slash (<code>/</code>)</li>
<li>Match the case of the <code>web/unsecure/base_url</code> record in the <code>core_config_data</code> database table</li>
</ul>
<p>Re-run the installation using a valid value.</p>