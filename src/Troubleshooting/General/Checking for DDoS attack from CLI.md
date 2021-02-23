---
title: Checking for DDoS attack from CLI
link: https://support.magento.com/hc/en-us/articles/360030941932-Checking-for-DDoS-attack-from-CLI
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,DDOS,attack,netstat,grep
---

<p>This article talks about the issue of how to try to check for Distributed Denial of Service (DDoS) attacks from your server's Command Line Interface (CLI).</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce, all versions</li>
<li>Magento Open Source, all versions</li>
</ul>
<h2>Issue</h2>
<p>Your website is slow, and you do not have access to any other analysis application tools, other than your CLI, to check for a potential DDoS attack.  The symptoms of a DDoS attack can vary widely depending on your network configuration, software used, etc.</p>
<p>However, it is recommended that you utilize analysis software products that are specifically designed to help identify DDoS attacks.</p>
<h2>Cause</h2>
<p>There are multiple possible causes for a slow website, including a slowly performing server, high CPU usage, or misconfiguration in scripts, code, or cheap hardware. Sometimes it could be due to a DDoS attack. Two of the basic tools you have to check for a DDoS attack is your Magento logs and your CLI.</p>
<p>Again it is important to note that using software specifically designed to identify DDoS attacks would be very useful in your investigation.</p>
<h2>Solution steps</h2>
<ol>
<li>Check your Magento logs to see if something else besides a DDoS attack is occurring. For more information:
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html">Magento Commerce and Magento Open Source logs locations</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html">Magento Commerce Cloud logs locations</a></li>
</ul>
</li>
<li>Start using your CLI to check your all your current Internet connections using the <code>netstat</code> command:
<pre><code>netstat -na</code></pre>
This displays all active established connections to the server. Here you might be able to notice too many connections coming from the same IP address.</li>
<li>
<p>To further narrow your established connections results to only those connecting on port 80 (the http port for your website), so that you can sort and recognize too many connections from one IP address or group of IP addresses, use this command:</p>
<pre><code>netstat -an | grep :80 | sort</code></pre>
<p>You may repeat the same command for https on port 443:</p>
<pre><code>netstat -an | grep :443 | sort</code></pre>
<p>Another option is to extend the original command to both ports 80 and 443:</p>
<pre><code>netstat -an | egrep ":80|:443" | sort</code></pre>
</li>
<li>To see if many active <code>SYNC_REC</code> are occurring on the server, use the command:
<pre><code>netstat -n -p|grep SYN_REC | wc -l</code></pre>
This is usually less than 5, but it could be much higher for a DDoS attack, though for some servers a higher number could be a normal condition.</li>
<li>
<p>To list out all the IP addresses sending <code>SYNC_REC</code> statuses, use the command:</p>
<pre><code>netstat -n -p | grep SYN_REC | sort -u</code></pre>
</li>
<li>To further list all the unique IP addresses sending <code>SYNC_REC</code> statuses, use the command:
<pre><code>netstat -n -p | grep SYN_REC | awk ‘{print $5}’ | awk -F: ‘{print $1}’</code></pre>
</li>
<li>You can also use the <code>netstat</code> command to count and calculate the number of connections that each IP address makes to your server:
<pre><code>netstat -ntu | awk ‘{print $5}’ | cut -d: -f1 | sort | uniq -c | sort -n</code></pre>
</li>
<li>For listing the count of UDP or TCP protocol connections connected to your server, use the command:
<pre><code>netstat -anp |grep ‘tcp|udp’ | awk ‘{print $5}’ | cut -d: -f1 | sort | uniq -c | sort -n</code></pre>
</li>
<li>To check established connections, instead of just all connections, and display the connection count for each IP address, use the command:
<pre><code>netstat -ntu | grep ESTAB | awk ‘{print $5}’ | cut -d: -f1 | sort | uniq -c | sort -nr</code></pre>
</li>
<li>To show connection counts listed by IP address to port 80, use the command:
<pre><code>netstat -plan|grep :80|awk {‘print $5’}|cut -d: -f 1|sort|uniq -c|sort -nk 1</code></pre>
</li>
</ol>
<p> </p>
<p>Make sure you have someone to give proper analysis to the data you find to determine if you are in fact having a DDOS attack. Using the <code>netstat</code> commands from your server CLI in these steps above will help you analyze if you are experiencing a DDoS attack, but using software analysis products that are specifically designed to help identify DDoS attacks, along with proper analysis, are your best tools to identify DDoS threats.</p>
<p>If you find that you are under DDoS attack, the steps you can take depend on your network configuration and how the DDoS attack is occurring, but general advice is to contact your ISP,  get a new IP address for your server, and/or consult IT professionals skilled in handling DDoS issues to analyze and advise on your particular situation. </p>
<p> </p>
<h2>Related reading</h2>
<ol>
</ol><ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-fastly.html#ddos-protection">DDoS protection (Magento Commerce Cloud)</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/example/cli.html">Using CLI commands</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/cli-ref-topic.html">Magento Cloud CLI reference</a></li>
</ul>
