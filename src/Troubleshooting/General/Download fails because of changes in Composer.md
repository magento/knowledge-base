---
title: Download fails because of changes in Composer
link: https://support.magento.com/hc/en-us/articles/360033818091-Download-fails-because-of-changes-in-Composer
labels: Magento Commerce Cloud,Magento Commerce,composer,download,self-update,2.x.x,how to
---

<p>This article provides a fix for a failed Magento download and exception error.</p>
<h3>Issue</h3>
<p>During download, the following error displays:</p>
<pre><code class="language-php">[ErrorException]
  file_get_contents(app/etc/NonComposerComponentRegistration.php): failed to open stream: No such file or directory</code></pre>
<h3>Cause</h3>
<p>This happens because of changes in certain versions of Composer. The workaround is to downgrade Composer to an earlier version and try your Magento download again.</p>
<h3>Solution</h3>
<p>Any version of Composer dated between November 21 and November 26, 2015 has this issue. To confirm this issue is related to the Composer version, enter the following command:</p>
<pre><code class="language-php">composer -v</code></pre>
<p>The version displays similar to the following:</p>
<pre><code class="language-php">Composer version 1.0-dev (2b14f0a047dd4f3545ec82381f65c36ea93a4c81) 2015-11-25 17:13:09</code></pre>
<p>Note the date is 2015-11-25, which indicates Composer has this issue.</p>
<p>To work around it:</p>
<ol>
<li>
<p>Change your version of Composer to enable you to download the Magento software by doing any of the following:</p>
<ul>
<li>
<p>Downgrade Composer using the following command:</p>
<pre><code class="language-php">composer self-update 1.0.0-alpha11</code></pre>
</li>
<li>
<p>Upgrade Composer to a version later than November 26, 2015:</p>
<pre><code class="language-php">composer self-update</code></pre>
</li>
</ul>
</li>
<li>
<p>Delete your Magento 2 directory and subdirectories.</p>
</li>
<li>Try the download again using either <code><a href="https://devdocs.magento.com/guides/v2.3/install-gde/composer.html">composer create-project</a></code> or <code><a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/dev_install.html">git clone</a></code>.</li>
<li>
<p>After successfully downloading the Magento software, update Composer:</p>
<pre><code class="language-php">composer self-update</code></pre>
</li>
</ol>