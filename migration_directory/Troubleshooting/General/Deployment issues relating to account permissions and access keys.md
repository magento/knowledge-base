This article talks about the issues you might have deploying Magento Cloud caused by access key ownership conflict.

### Affected products and versions

*   Magento Commerce Cloud, all supported versions

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

Prerequisites: The Cloud license is associated with Contact A (email address: _<u>first@e.mail</u>_)

1.   Contact A created Magento Commerce access keys on their account (Key X) and installs it on the Cloud.
2.   Contact B (email address:&nbsp;_<u>second@e.mail</u>_) purchased an extension using his account and created the access keys for installing the extension (Key Y).
3.   Contact A then left the company, and the license (ownership) was then transferred to Contact B.
4.   System integrator tries to install the extension on the Cloud environment using Key X.

<span class="wysiwyg-underline">Expected result</span>

Extension is successfully installed.

<span class="wysiwyg-underline">Actual result</span>

Extension is not installed, because deployment fails.

## Cause

Both keys were are seen to be assigned to the contact role, which causes a conflict.

## Solution

If a deployment failed after a change was made to the Primary Contact&nbsp;on the account (with both the original account and the new account each having their own access keys), and the keys have been transferred from the original account to the new account, you need to disable the keys from the original account. In the terms of the example above, the key X should be disabled.

### How to disable the access key

If you do not have access to the <a href="https://marketplace.magento.com/" target="_self">Magento Marketplace</a> account associated with the old key, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" target="_self">contact Magento Support</a> to have the key disabled.

If you have access to the Marketplace account associated with the old key, take the following steps to disable the key:&nbsp;

1.   Log in to the <a href="https://marketplace.magento.com/" rel="noopener" target="_blank">Magento Marketplace</a> using the credentials from the old account.
2.   
    
    Click the account name in the top-right of the page and select __My Profile__.
    
    
3.   
    
    Click __Access Keys__ in the Marketplace tab.
    
    
4.   Click __Disable__ next to the access key.&nbsp;

## Related reading

*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/connect-auth.html" target="_self">Get your authentication keys</a>

&nbsp;