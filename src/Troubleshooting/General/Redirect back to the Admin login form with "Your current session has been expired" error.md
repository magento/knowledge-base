This article gives the possible solutions for the Magento Admin login issue, where you are redirected back to the login form&nbsp;with the following error message: _"Your current session has been expired"_. Solutions include checking for server time setting issues and changing session storage settings.

### Affected editions and versions:&nbsp;

All Magento versions and editions.

## Issue

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   Go to your Magento Admin page.
2.   Enter your credentials and click Sign in.

<span class="wysiwyg-underline">Expected result:</span>

You get logged in to the Magento Admin.

<span class="wysiwyg-underline">Actual result:</span>

You are redirected back to the login form, with the following error message displayed: _"Your current session has been expired"_.

## Cause

There could be two possible reasons for the issue:

*   an issue with server time settings
*   an issue with session storage

Check the following section for solutions.

## Solution

### Check for server time settings issues

Check the session record created in the `` admin_user_session `` table. If the values of `` created_at ``&nbsp;and/or `` updated_at `` are incorrect, it might be caused by the issue with server time settings. Ask your server system administrator to check that. Note, that time in DB is set to UTC by default.

### Change the session storage

Try changing the session storage. Use the info from the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/sessions.html" target="_self">How to locate your session files</a>&nbsp;doc to find out where your session is stored, and change it by editing the&nbsp;`` app/etc/env.php `` file.

For example, to start storing session in the file system, change the `` 'session' `` section as following:

<pre><code class="language-php">....
'session' =&gt; 
    array (
      'save' =&gt; 'files',
),
....</code></pre>

Run the `` bin/magento app:config:import `` command to import configuration data.

&nbsp;

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-config-mgmt-import.html" target="_self">Import data from configuration files</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html" target="_self">Configure Redis&nbsp;</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360028606831" target="_self">Redirect back to the Admin login form with "Your account is temporarily disabled" error</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360028606711" target="_self">Redirect back to the login form with no error, when trying to login to Magento Admin</a>