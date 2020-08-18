When a Magento Administrator creates a new user with the Administrator privileges, the password (the Administrator enters as a confirmation) is saved as plain text in the `` magento_logging_event_changes `` database table.

To fix this security issue, install the Magento 2.0.16 and 2.1.9 Security Update. After applying the Security Update, the passwords are encrypted and do not appear as plain text.

<h2 id="Adminpasswordsaresavedasplaintexttoactionslog('magento_logging_event_changes'table)-Affectedversions">Affected versions</h2>

*   Magento Commerce 2.X.X
*   Magento Commerce (Cloud) 2.X.X
*   Magento Open Source 2.X.X

<h2 id="Adminpasswordsaresavedasplaintexttoactionslog('magento_logging_event_changes'table)-Issue">Issue</h2>

When an existing Magento Administrator creates a new user with the Administrator privileges via&nbsp;__System__&nbsp;&gt;&nbsp;__Permissions__&nbsp;&gt;&nbsp;__All Users__&nbsp;&gt;&nbsp;__Add new user__, the password (entered as a confirmation) is saved as plain text in the&nbsp;`` magento_logging_event_changes ``&nbsp;database table.

<h3 id="Adminpasswordsaresavedasplaintexttoactionslog('magento_logging_event_changes'table)-Stepstoreproduce">Steps to reproduce:</h3>

1. Log in as Administrator and create a new user by navigating to this path: __System__ &gt; __Permissions__ &gt; __All Users__ &gt; __Add new user__ page.  
2. Provide your current Administrator's password when prompted.  
3. Go to the __System__ &gt; __Action Log__ &gt; __Report__ page and find the last log entry.  
4. You can see the current password, neither encrypted nor hashed.

<h2 id="Adminpasswordsaresavedasplaintexttoactionslog('magento_logging_event_changes'table)-Solution">Solution</h2>

Install the&nbsp;<a class="external-link" href="https://magento.com/security/patches/magento-2016-and-219-security-update" rel="nofollow">Magento 2.0.16 and 2.1.9 Security Update</a>&nbsp;which fixes the issue.

After installing the Security Update, the password gets encrypted and does not show up in plain text in the&nbsp;`` magento_logging_event_changes ``&nbsp;table.

<h2 id="Adminpasswordsaresavedasplaintexttoactionslog('magento_logging_event_changes'table)-Moreinformation">More information</h2>

<a class="external-link" href="https://magento.com/security/patches/magento-2016-and-219-security-update" rel="nofollow">Magento 2.0.16 and 2.1.9 Security Update page</a>

<a class="external-link" href="http://devdocs.magento.com/guides/v2.1/comp-mgr/bk-compman-upgrade-guide.html" rel="nofollow">Upgrade the Magento application and components</a>&nbsp;(DevDocs article)