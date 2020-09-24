__Issue:__&nbsp;logging in to Magento Admin or opening the checkout page causes lag or&nbsp;timeout (over 30 seconds). The issue occurs when Redis is used for session storage.

__Cause:__&nbsp;[Github issue \#12385](https://github.com/magento/magento2/issues/12385).&nbsp;

__Solution:__ update to the latest Magento patch to fix these issues for all versions of Redis and specific versions of Magento Commerce.

## Affected versions and technologies

*   Magento Commerce / Magento Commerce Cloud&nbsp;__2.1.11-2.1.13__
*   Magento Commerce / Magento Commerce (Cloud) __2.2.1__
*   Redis, all versions

If you use Magento Commerce (Cloud) [2.2.0](#h_64593789291526919876198), a workaround is available.&nbsp;

## Issue

Logging in to Magento Admin or proceeding to the checkout page takes over 30 seconds.

This only occurs when user sessions are stored in Redis.

&nbsp;

## Cause

Magento had an issue with the session locking mechanism that added a 30-seconds timeout to some operations when Redis was used for session storage. For details, see the [Github issue \#12385](https://github.com/magento/magento2/issues/12385).

This issue has been fixed in Magento 2.1.14 and 2.2.2 (see [Release Notes](http://devdocs.magento.com/guides/v2.2/release-notes/ReleaseNotes2.2.2CE.html#session-framework)).

## Solutions: patch or upgrade

### Solution 1: Apply the patch with a fix

To receive a patch, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting the patch. In your ticket, specify your Magento version and the corresponding reference number for the patch:

*   __2.1.11 and later:__ MDVA-7835
*   __2.2.1:__ MDVA-8128

The general (version-agnostic) reference number is MAGETWO-84289.

### Solution 2: Upgrade to 2.1.14/2.2.2 or later

If you have previously considered upgrading to Magento 2.2.2 or later, you may use this update opportunity to fix the issue.

## Workaround: disable session locking

To disable session locking, set `` disable_locking `` to `` 1 `` in the Redis configuration section of the `` env.php `` file:

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

This solution does not affect any other Magento functionality.

### Revert workaround after applying the patch

After applying the patch with the fix, the workaround is not required anymore, so you may revert it (set `` disable_locking `` to `` 0 ``).

<h2 id="h_64593789291526919876198">Magento (Cloud) 2.2.0: use ECE-Tools v2002.0.8 or later</h2>

The [ECE-Tools](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html) deployment script package with versions 2002.0.3-2002.0.7 [applies](http://devdocs.magento.com/guides/v2.2/cloud/composer-packages/ece-tools.html#v200203) the workaround automatically, setting `` disable_locking `` to `` 1 ``. This disables the session locking mechanism for Magento 2.2.0, on which the original issue does not occur.

If you are running Magento Commerce (Cloud) 2.2.0, upgrade ECE-Tools to v2002.0.8 of later. You may also consider upgrading your Magento Commerce (Cloud) to 2.2.2 or later.