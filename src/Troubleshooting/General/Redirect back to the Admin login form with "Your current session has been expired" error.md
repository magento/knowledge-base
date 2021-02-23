---
title: Redirect back to the Admin login form with "Your current session has been expired" error
link: https://support.magento.com/hc/en-us/articles/360028441671-Redirect-back-to-the-Admin-login-form-with-Your-current-session-has-been-expired-error
labels: Magento Commerce Cloud,Magento Commerce,admin,troubleshooting,login
---

<p>This article gives the possible solutions for the Magento Admin login issue, where you are redirected back to the login form with the following error message: <em>"Your current session has been expired"</em>. Solutions include checking for server time setting issues and changing session storage settings.</p>
<h3>Affected editions and versions: </h3>
<p>All Magento versions and editions.</p>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Go to your Magento Admin page.</li>
<li>Enter your credentials and click Sign in.</li>
</ol>
<p>Expected result:</p>
<p>You get logged in to the Magento Admin.</p>
<p>Actual result:</p>
<p>You are redirected back to the login form, with the following error message displayed: <em>"Your current session has been expired"</em>.</p>
<h2>Cause</h2>
<p>There could be two possible reasons for the issue:</p>
<ul>
<li>an issue with server time settings</li>
<li>an issue with session storage</li>
</ul>
<p>Check the following section for solutions.</p>
<h2>Solution</h2>
<h3>Check for server time settings issues</h3>
<p>Check the session record created in the <code>admin_user_session</code> table. If the values of <code>created_at</code> and/or <code>updated_at</code> are incorrect, it might be caused by the issue with server time settings. Ask your server system administrator to check that. Note, that time in DB is set to UTC by default.</p>
<h3>Change the session storage</h3>
<p>Try changing the session storage. Use the info from the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/sessions.html">How to locate your session files</a> doc to find out where your session is stored, and change it by editing the <code>app/etc/env.php</code> file.</p>
<p>For example, to start storing session in the file system, change the <code>'session'</code> section as following:</p>
<pre><code class="language-php">....
'session' =&gt; 
    array (
      'save' =&gt; 'files',
),
....</code></pre>
<p>Run the <code>bin/magento app:config:import</code> command to import configuration data.</p>
<p> </p>
<h2>Related reading</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-config-mgmt-import.html">Import data from configuration files</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/config-redis.html">Configure Redis </a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360028606831">Redirect back to the Admin login form with "Your account is temporarily disabled" error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360028606711">Redirect back to the login form with no error, when trying to login to Magento Admin</a></li>
</ul>