---
title: Magento best practice: disable Reports if not using
link: https://support.magento.com/hc/en-us/articles/360048862272-Magento-best-practice-disable-Reports-if-not-using
labels: Magento Commerce Cloud,Magento Commerce,performance,best practices,2.3.x,2.4.0,2.4.x,reports
---

<p>Magento recommends disabling the <a href="https://docs.magento.com/user-guide/configuration/general/reports.html">Reports functionality</a> if you are not using it or the related dynamic customer segments functionality. Having it enabled might slow product pages loading causing performance degradation on the storefront catalog.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">all supported versions</a>
</li>
<li>Magento Commerce Cloud, <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">all supported versions</a>
</li>
</ul>
<h2>Best practice</h2>
<p>If you do not use the Reports or dynamic customer segments, disable the Reports functionality.</p>
<p>To disable the functionality:</p>
<ol>
<li>In Magento Admin, navigate to  Stores &gt; Settings &gt; Configuration &gt; General &gt; Reports.</li>
<li>Under General Options, set Enable Reports to <em>No.</em>
</li>
<li>Flush cache by running  <code>php bin/magento cache:flush</code> or in Magento Admin under  System &gt; Tools &gt; Cache Management.</li>
</ol>