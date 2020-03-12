This article provides the steps you could take to block malicious traffic, when you suspect that your Magento Commerce Cloud store is experiencing a DDoS attack.&nbsp;

Affected products and versions:

*   Magento Commerce Cloud 2.2.x, 2.3.x

In this article we assume that you already have the malicious IPs and/or their country and userAgents. Magento Commerce Cloud users would typically get this information from Magento Support. The following sections provide steps for blocking traffic based on this information. All the changes should be done in the Production environment.

## Block traffic by IP

For the Magento Commerce Cloud store, the most effective way to block traffic by specific IP addresses and subnets is adding an ACL for Fastly in the Magento Admin. Following are the steps with links to more detailed instructions:&nbsp;

1.   In the Magento Admin, navigate to __Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __System__ &gt; __Full Page Cache__ &gt;__ Fastly Configuration__.
2.   <a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/ACL.md" target="_self">Create a new ACL</a> with a list of IP addresses or subnets you're going to block.
3.   Add it to the ACL list and block as described in the <a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/BLOCKING.md" target="_self">Blocking</a> guide for the Fastly\_Cdn Magento module.&nbsp;

## Block traffic by country&nbsp;

For the Magento Commerce Cloud store, the most effective way to block traffic by country(s) is adding an ACL for Fastly in the Magento Admin. &nbsp;

1.   In the Magento Admin, navigate to __Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __System__ &gt; __Full Page Cache__ &gt;__ Fastly Configuration__.
2.   Select the countries and configure blocking using ACL as described&nbsp;in the <a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/BLOCKING.md" target="_self">Blocking</a> guide for the Fastly\_Cdn Magento module.&nbsp;

## Block traffic by user agent

To establish blocking based on user agent, you need add a custom VCL snippet to your Fastly configuration. To do this, take the following steps:

1.   In the Magento Admin, navigate to __Stores__ &gt; __Configuration__ &gt; __Advanced__ &gt; __System__ &gt; __Full Page Cache__ &gt;__ Fastly Configuration&nbsp;__&gt; __Custom VCL Snippets__.
2.   Create the new custom snippet as described in the <a href="https://github.com/fastly/fastly-magento2/blob/master/Documentation/Guides/CUSTOM-VCL-SNIPPETS.md" target="_self">Custom VCL snippets</a>&nbsp;guide for the Fastly\_Cdn module. You can using the following code sample as an example. This sample disallows traffic for the `` AhrefsBot `` and `` SemrushBot `` user agents.

<pre><code class="language-json">name: block_bad_useragents
  type: recv
  priority: 5
  VCL:
  ```
  if ( req.http.User-Agent ~ "(AhrefsBot|SemrushBot)" ) {
  &nbsp;&nbsp;&nbsp; error 405 "Not allowed";<br/>
  }
  ```</code></pre>

&nbsp;
&nbsp;
&nbsp;
&nbsp;