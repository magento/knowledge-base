---
title: Redis issue delay Magento Admin login or checkout 
link: https://support.magento.com/hc/en-us/articles/360000448493-Redis-issue-delay-Magento-Admin-login-or-checkout-
labels: Magento Commerce Cloud,Magento Commerce,Redis,2.1.11,2.2.1,troubleshooting,timeout
---

<p>This article provides a fix for the issue when logging in to Magento Admin or opening the checkout page causes lag or timeout (over 30 seconds). The issue occurs when Redis is used for session storage.</p>
<p>Cause: <a href="https://github.com/magento/magento2/issues/12385">Github issue #12385</a>. </p>
<p>Solution: update to the latest Magento patch to fix these issues for all versions of Redis and specific versions of Magento Commerce.</p>
<h2>Affected versions and technologies</h2>
<ul>
<li>Magento Commerce / Magento Commerce Cloud 2.1.11-2.1.13
</li>
<li>Magento Commerce / Magento Commerce (Cloud) 2.2.1
</li>
<li>Redis, all versions</li>
</ul>
<p>If you use Magento Commerce (Cloud) <a href="#h_64593789291526919876198">2.2.0</a>, a workaround is available. </p>
<h2>Issue</h2>
<p>Logging in to Magento Admin or proceeding to the checkout page takes over 30 seconds.</p>
<p>This only occurs when user sessions are stored in Redis.</p>
<h2>Cause</h2>
<p>Magento had an issue with the session locking mechanism that added a 30-seconds timeout to some operations when Redis was used for session storage. For details, see the <a href="https://github.com/magento/magento2/issues/12385">Github issue #12385</a>.</p>
<p>This issue has been fixed in Magento 2.1.14 and 2.2.2 (see <a href="http://devdocs.magento.com/guides/v2.2/release-notes/ReleaseNotes2.2.2CE.html#session-framework">Release Notes</a>).</p>
<h2>Solutions: patch or upgrade</h2>
<h3>Solution 1: Apply the patch with a fix</h3>
<p>To receive a patch, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> requesting the patch. In your ticket, specify your Magento version and the corresponding reference number for the patch:</p>
<ul>
<li>
2.1.11 and later: MDVA-7835</li>
<li>
2.2.1: MDVA-8128</li>
</ul>
<p>The general (version-agnostic) reference number is MAGETWO-84289.</p>
<h3>Solution 2: Upgrade to 2.1.14/2.2.2 or later</h3>
<p>If you have previously considered upgrading to Magento 2.2.2 or later, you may use this update opportunity to fix the issue.</p>
<h2>Workaround: disable session locking</h2>
<p>To disable session locking, set <code>disable_locking</code> to <code>1</code> in the Redis configuration section of the <code>env.php</code> file:</p>
<pre><code class="language-php">'session' =&gt;
  array (
    'save' =&gt; 'redis',
    'redis' =&gt;
    array (
      'host' =&gt; 'redis.internal',
      'port' =&gt; 6379,
      'database' =&gt; '0',
      'disable_locking' =&gt; '1'
    ),
  ),
</code></pre>
<p>This solution does not affect any other Magento functionality.</p>
<h3>Revert workaround after applying the patch</h3>
<p>After applying the patch with the fix, the workaround is not required anymore, so you may revert it (set <code>disable_locking</code> to <code>0</code>).</p>
<h2>Magento (Cloud) 2.2.0: use ECE-Tools v2002.0.8 or later</h2>
<p>The <a href="http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html">ECE-Tools</a> deployment script package with versions 2002.0.3-2002.0.7 <a href="http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html#v200203">applies</a> the workaround automatically, setting <code>disable_locking</code> to <code>1</code>. This disables the session locking mechanism for Magento 2.2.0, on which the original issue does not occur.</p>
<p>If you are running Magento Commerce (Cloud) 2.2.0, upgrade ECE-Tools to v2002.0.8 of later. You may also consider upgrading your Magento Commerce (Cloud) to 2.2.2 or later.</p>