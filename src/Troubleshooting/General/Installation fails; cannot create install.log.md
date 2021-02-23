---
title: Installation fails; cannot create install.log
link: https://support.magento.com/hc/en-us/articles/360033461912-Installation-fails-cannot-create-install-log
labels: Magento Commerce Cloud,Magento Commerce,installation,php.ini,wizard,install.log,setup,open_basedir,phpinfo.php,how to
---

<p>This article provides a fix for a failed installation due to the Setup Wizard not creating the <code>install.log</code> during the installation.</p>
<h3>Issue</h3>
<p>Running Magento processes at the same time might result in problems creating the installation log. (For example, two different installations in separate tab pages.)</p>
<h3>Cause</h3>
<p>Review your setting for <code>open_basedir</code> in <code>php.ini</code>. The Setup Wizard uses the <a href="http://php.net/manual/en/function.sys-get-temp-dir.php">sys_get_temp_dir ( void )</a> PHP call to get the value of the temporary directory. If <a href="http://php.net/manual/en/ini.core.php#ini.open-basedir">open_basedir</a> is set to refuse connections to a directory specified by <code>sys_get_temp_dir</code>, the installation fails.</p>
<h3>Solution</h3>
<p>To resolve the issue, change the value of <code>open_basedir</code> and restart the web server.</p>
<p>If you're not sure how to change this value, use the following steps:</p>
<ol>
<li>If you haven't already done so, create <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo">phpinfo.php</a>.</li>
<li>
<p>Enter the following URL in your browser's address or location field:</p>
<p><code class="http">http://&lt;your web server IP or hostname&gt;/&lt;path to docroot&gt;/phpinfo.php</code></p>
</li>
<li>
<p>Look for the location of <code>php.ini</code>.</p>
<p><code>php.ini</code> is typically specified as Loaded Configuration File in the displayed results.</p>
</li>
<li>
<p>As a user with root privileges, open <code>php.ini</code> in a text editor.</p>
</li>
<li>Locate the value of <code>open_basedir</code> and change it.</li>
<li>Save your changes to <code>php.ini</code>.</li>
<li>Restart the web server.</li>
</ol>