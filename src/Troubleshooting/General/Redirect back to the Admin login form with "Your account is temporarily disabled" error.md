This article provides the possible solutions for the Magento Admin login issue, where you are redirected back to the login form&nbsp;with the following error message: _"Your account is temporarily disabled"_. The suggested solution is checking and correcting the admin user database settings.

### Affected editions and versions:&nbsp;

All Magento versions and editions.

## Issue

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   Go to your Magento Admin page.
2.   Enter your credentials and click Sign in.

<span class="wysiwyg-underline">Expected result:</span>

You get logged in to the Magento Admin.

<span class="wysiwyg-underline">Actual result:</span>

You are redirected back to the login form, with the following error message displayed: _"Your account is temporarily disabled. Please try again later". _

## Solution

1.   Create a database backup.
2.   Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin), or access the DB manually from the command line. In the `` admin_user `` database table, for your admin user record, check if `` is_active `` is set to "1" and `` lock_expires ``&nbsp;is `` NULL ``. Reset these values if required.

## <span class="wysiwyg-color-black70">Related reading</span>

<ul><li>
<p class="article-title" title="Redirect back to the login form with no error, when trying to login to Magento Admin"><a href="https://support.magento.com/hc/en-us/articles/360028606711" target="_self">Redirect back to the login form with no error, when trying to login to Magento Admin</a></p>
</li><li>
<p class="article-title" title="Redirect back to the login form with no error, when trying to login to Magento Admin"><a href="https://support.magento.com/hc/en-us/articles/360028606711" target="_self">Redirect back to the login form with no error, when trying to login to Magento Admin</a></p>
</li></ul>
&nbsp;