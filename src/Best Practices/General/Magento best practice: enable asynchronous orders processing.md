---
title: Magento best practice: enable asynchronous orders processing
link: https://support.magento.com/hc/en-us/articles/360048545492-Magento-best-practice-enable-asynchronous-orders-processing
labels: Magento Commerce Cloud,Magento Commerce,2.3,best practices,2.3.x,2.4,checkout performance,asynchronous orders,2.4.x
---

<p>This article provides best practice for configuration settings that can help improve checkout performance in case of large number of simultaneously created orders.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practice</h2>
<p>If the number of simultaneously placed orders in your store is large enough and has a negative impact on checkout performance, we recommend enabling asynchronous orders processing. </p>
<p>To enable the setting:</p>
<ol>
<li>Run <code>php bin/magento config:set dev/grid/async_indexing 1</code> or enable the Asynchronous indexing option in Magento Admin under Stores &gt; Settings &gt; Configuration &gt; Advanced &gt; Developer &gt; Grid Settings &gt; Asynchronous indexing.<br/><br/><img alt="asynchronous_orders_magento_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360085549312/asynchronous_orders_magento_2.4.1.png"/><br/><br/></li>
<li>Flush cache by running <code>php bin/magento cache:flush</code> or go to Magento Admin under  System &gt; Tools &gt; Cache Management.</li>
</ol>
<p class="warning">Warning: always test in the Staging environment prior to making any changes to the Production environment.</p>
<h2 class="warning">Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360048170772">Best practice Magento order placement performance</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.4/config-guide/prod/config-reference-most.html">Configuration paths reference in Magento Developer Documentation</a></li>
</ul>