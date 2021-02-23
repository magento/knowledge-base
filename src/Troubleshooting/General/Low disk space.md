---
title: Low disk space
link: https://support.magento.com/hc/en-us/articles/360037072592-Low-disk-space
labels: Magento Commerce Cloud,cron,disk space,2.3.x,2.2.x,how to
---

<p>This article suggests solutions for the situation when you run out of space on a certain environment of Magento Commerce Cloud.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Issue</h2>
<p>You are running out of disk space on the disk with writable directories. One symptom can be <a href="https://support.magento.com/hc/en-us/articles/360030662992">stuck deployment</a>. </p>
<p>To check the disk usage, run the following command:</p>
<pre><code class="language-bash">df -h var/
</code></pre>
<h2>Cause</h2>
<p>The <code>var</code> directory is usually the one that could take a lot of space and can be cleaned easily. </p>
<p>Magento stores all log files in the <code>var</code> directory. New log files are created and old ones are archived daily. But if the number of generated errors keeps growing, log files take more and more space.  </p>
<p>Custom import/export files are also stored in the <code>var</code> directory, and take space if their numbers increase. </p>
<h2>Solution </h2>
<p>Solution options:</p>
<ul>
<li>Check if you have large log files and investigate why they are big, fix the issue generating a big amount of log output.</li>
<li>
<p>Clean the <code>var</code> directory.</p>
</li>
<li>Set up a cron job to track the size of the <code>var</code> directory and clean it.</li>
<li>Allocate more disk space, if you have some unused. (See the section below for information on how to check what is your space limit.)
<ul>
<li>For Starter plan, all environments, and Pro plan Integration environments, you can allocate the disk space if you have some unused, as described in <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html#application-disk-space">Manage disk space: Allocating disk space</a>. </li>
<li>For Pro plan Staging and Production environments, contact support to allocate more disk space if you have some unused. </li>
</ul>
</li>
<li>If you have reached your space limit and still experience low space issues, consider buying more disk space, contact your Customer Success Manager (CSM) for details.</li>
</ul>
<h3>Check disk space limit</h3>
<p>To check how much space you have for each environment:</p>
<ol>
<li>
<p>As the Magento Commerce Cloud Account Owner, log in to your project.</p>
</li>
<li>
<p>In the upper right corner, click &lt;your name&gt; &gt; Account Settings.</p>
</li>
<li>On the project tab, see the amount specified, for example:<br/><img alt="project_space.png" src="https://support.magento.com/hc/article_attachments/360045010711/project_space.png"/>
</li>
</ol>
<p> </p>