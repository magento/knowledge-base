---
title: Maximum number of coupons in Magento
link: https://support.magento.com/hc/en-us/articles/360048171672-Maximum-number-of-coupons-in-Magento
labels: Magento Commerce Cloud,Magento Commerce,coupon,performance,2.3,database,best practices,2.3.x,2.4,2.4.x
---

<p>This article provides recommendations on using coupons functionality in Magento Commerce and Magento Commerce Cloud, aimed at avoiding performance issues.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a> </li>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>
</li>
</ul>
<h2>Best practices</h2>
<p>Creating many coupons could lead to performance issues. Magento recommends keeping the number of coupons in your database (that is the number of records in the <code>salesrule_coupon</code> DB table) below around 250000. </p>
<p>Following approaches will help you in keeping the number of coupons within recommended limit: </p>
<ul>
<li>Remove coupons if they are not needed any more.</li>
<li>Generate the exact number of coupons needed to meet the 'discount' campaign needs.</li>
</ul>
<h2>Related reading</h2>
<p><a href="https://docs.magento.com/user-guide/v2.3/marketing/price-rules-cart-coupon.html?itm_source=merchdocs-23&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=coupon%20code">Coupon codes</a> in Magento User Guide.</p>