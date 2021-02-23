---
title: Database upload loses connection to MySQL
link: https://support.magento.com/hc/en-us/articles/360037591172-Database-upload-loses-connection-to-MySQL
labels: Magento Commerce Cloud,database,disk space,lost connection,Lost connection to MySQL server,2.3.x,2.2.x,how to
---

<p>This article provides a solution for when the database upload loses connection to MySQL.</p>
<h2>AFFECTED VERSIONS AND PRODUCTS</h2>
<p>Magento Commerce Cloud 2.2.x., 2.3.x</p>
<h2>Issue</h2>
<p>The database does not upload to primary/integration branches on Pro, or any branch on Starter with the symptom being the inability to connect. You see this error in the CLI.   </p>
<pre class="line-numbers"><code class="language-clike">web@ddc35c264bd89a72042f1f3e5a:~$ mysql -h database.internal -u user -p main
Enter password:
ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"
</code></pre>
<h2>Cause</h2>
<p>This is usually due to a lack of disk space for importing the database.</p>
<h2>Solution</h2>
<p>First, check if there is a lack of disk space. To do so run the <code>netcat</code> command in the CLI against the database port 3306, there will be a disk full message if it is full: </p>
<pre class="line-numbers"><code class="language-clike">web@ddc35c264bd89a72042f1f3e5a:~$ nc database.internal 3306 <br/>
Database out of space</code></pre>
<p>You will need to allocate more space for the database in your <code>services.yaml</code> and deploy, if you have some space unused. For steps see <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html#service-disk-space">Service Disk Space</a>.</p>
<p>Note: On the Pro plan, you can check the allocated space on your partition by running the following command:<br/> <code class="c-mrkdwn__code" data-stringify-type="code">df -h</code></p>
<p>Expect output similar to the following output. In this example, 10GB of the 25GB allocated is used, with 15GB of MySQL space not being used.</p>
<pre class="line-numbers"><code class="language-clike">f240jestone3wt@i-087r2a25fdac80726:~$ df -h|grep 'File\|xvd'<br/>
Filesystem                                         Size  Used Avail Use% Mounted on<br/>
/dev/xvda1                                          59G   15G   42G  26% /<br/>
/dev/xvdj                                           25G   10G   15G  41% /data/mysql<br/>
/dev/xvdi                                           25G   22G  2.6G  90% /data/exports</code></pre>
<h2>Related reading</h2>
<p>DevDocs <a href="https://devdocs.magento.com/cloud/project/manage-disk-space.html">Manage Disk Space</a></p>