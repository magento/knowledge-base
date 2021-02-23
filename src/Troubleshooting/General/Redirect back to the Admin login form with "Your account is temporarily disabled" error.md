---
title: Redirect back to the Admin login form with "Your account is temporarily disabled" error
link: https://support.magento.com/hc/en-us/articles/360028606831-Redirect-back-to-the-Admin-login-form-with-Your-account-is-temporarily-disabled-error
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,admin login
---

<p>This article provides the possible solutions for the Magento Admin login issue, where you are redirected back to the login form with the following error message: <em>"Your account is temporarily disabled"</em>. The suggested solution is checking and correcting the admin user database settings.</p>
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
<p>You are redirected back to the login form, with the following error message displayed: <em>"Your account is temporarily disabled. Please try again later". </em></p>
<h2>Solution</h2>
<ol>
<li>Create a database backup.</li>
<li>Use a database tool such as <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin">phpMyAdmin</a>, or access the DB manually from the command line. In the <code>admin_user</code> database table, for your admin user record, check if <code>is_active</code> is set to "1" and <code>lock_expires</code> is <code>NULL</code>. Reset these values if required.</li>
</ol>
<h2>Related reading</h2>
<ul>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360028606711">Login redirect when trying to login to Magento Admin</a></p>
</li>
</ul>