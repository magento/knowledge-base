---
title: File permissions readiness check issues
link: https://support.magento.com/hc/en-us/articles/360034224232-File-permissions-readiness-check-issues
labels: Magento Commerce Cloud,Magento Commerce,permissions,web setup wizard,readiness,check,File,how to
---

<p>This article provides a fix for file permissions readiness check issues. Directories in the Magento file system must be writable by the web server user and the Magento file system owner, if applicable. An error similar to the following displays in the Web Setup Wizard if your permissions are not set properly:</p>
<p><img alt="install_rc_file-perms.png" src="https://support.magento.com/hc/article_attachments/360039636431/install_rc_file-perms.png"/></p>
<p>The way you resolve the issue depends on whether you have a one-user or two-user setup:</p>
<ul>
<li>
<em>One user</em> means you log in to the Magento server as the same user that also runs the web server. This type of setup is common in shared hosting environments.</li>
<li>
<em>Two users</em> means you typically <em>cannot</em> log in as, or switch to, the web server user. You typically log in as one user and run the web server as a different user. This is typical in private hosting or if you have your own server.</li>
</ul>
<h3>One-user resolution</h3>
<p>If you have command-line access, enter the following command assuming Magento is installed in <code>/var/www/html/magento2</code>:</p>
<pre><code class="language-bash">$ cd /var/www/html/magento2 &amp;&amp; find var vendor pub/static pub/media app/etc -type f -exec chmod g+w {} + &amp;&amp; find var vendor pub/static pub/media app/etc -type d -exec chmod g+w {} + &amp;&amp; chmod u+x bin/magento</code></pre>
<p>If you do not have command-line access, use an FTP client or a file manager application provided by your hosting provider to set permissions.</p>
<h3>Two-user resolution</h3>
<p>To optionally enter all commands on one line, enter the following assuming Magento is installed in <code>/var/www/html/magento2</code> and the web server group name is <code>apache</code>:</p>
<pre><code class="language-bash">$ cd /var/www/html/magento2 &amp;&amp; find var vendor pub/static pub/media app/etc -type f -exec chmod g+w {} + &amp;&amp; find var vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} + &amp;&amp; chown -R :apache . &amp;&amp; chmod u+x bin/magento</code></pre>
<p>In the event file system permissions are set improperly and can't be changed by the Magento file system owner, you can enter the command as a user with <code>root</code> privileges:</p>
<pre><code class="language-bash">$ cd /var/www/html/magento2 &amp;&amp; sudo find var vendor
  pub/static pub/media app/etc -type f -exec chmod g+w {} + &amp;&amp; sudo find
  var vendor pub/static pub/media app/etc -type d -exec chmod g+ws {} + &amp;&amp;
  sudo chown -R :apache . &amp;&amp; sudo chmod u+x bin/magento</code></pre>