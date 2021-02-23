---
title: Login redirect when trying to login to Magento Admin
link: https://support.magento.com/hc/en-us/articles/360028606711-Login-redirect-when-trying-to-login-to-Magento-Admin
labels: Magento Commerce Cloud,Magento Commerce,admin,troubleshooting,login
---

<p>This article gives the possible solutions for the Magento Admin login issue, where you are redirected back to the login form when trying to log in to the Magento Admin, and no error message is displayed. These include correcting the server timezone settings and clearing the cookies settings in Magento.</p>
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
<p>You are redirected back to the login form, with no error messages.</p>
<h2>Cause</h2>
<p>There are couple of possible reasons for the issue:</p>
<ul>
<li>Incorrect timezone set on browser level (which leads to the admin session being considered expired even if its actual lifetime hasn't yet expired).</li>
<li>Incorrect cookies settings, which leads to the established session not being used by Magento. </li>
</ul>
<p>See the next paragraphs for solutions in each case.</p>
<h2>Solutions</h2>
<h3>Admin session lifetime issue</h3>
<p>Try to use different browser and increase the admin session lifetime, if it is less than one hour.</p>
<p>To increase the admin session lifetime, take the following steps:</p>
<ol>
<li>Create a database backup.</li>
<li>Use a database tool such as <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin">phpMyAdmin</a>, or access the DB manually from the command line to run the following SQL query:<br/>
<pre><code class="language-sql">UPDATE core_config_data SET value = 7200 WHERE path = 'admin/security/session_lifetime';
</code></pre>
</li>
<li>Clean the configuration cache by running the following command:
<pre><code class="language-bash">php &lt;your_magento_install_dir&gt;/bin/magento cache:clean config</code></pre>
</li>
</ol>
<h3>Incorrect cookies settings</h3>
<p>To check the cookies settings values and clear them, take the following steps:</p>
<ol>
<li>Create a database backup.</li>
<li>Use a database tool such as <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin">phpMyAdmin</a>, or access the DB manually from the command line to run the following SQL query:<br/>
<pre><code class="language-sql">SELECT * FROM core_config_data WHERE (path = "web/cookie/cookie_domain" OR path = "web/cookie/cookie_path");</code></pre>
</li>
<li>If the values' responses are not empty, set them to NULL by running:
<pre><code class="language-sql">UPDATE core_config_data SET value = NULL WHERE (path = "web/cookie/cookie_domain" OR path = "web/cookie/cookie_path");</code></pre>
</li>
<li>Clean the configuration cache by running the following command:
<pre><code class="language-bash">php &lt;your_magento_install_dir&gt;/bin/magento cache:clean config</code></pre>
</li>
</ol>
<h2>Related articles</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360028606831">Redirect back to the Admin login form with "Your account is temporarily disabled" error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360028441671">Redirect back to the Admin login form with "Your current session has been expired" error</a></li>
</ul>
<p> </p>