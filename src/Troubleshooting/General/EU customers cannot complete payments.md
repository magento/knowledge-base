---
title: EU customers cannot complete payments
link: https://support.magento.com/hc/en-us/articles/360033691871-EU-customers-cannot-complete-payments
labels: Magento Commerce Cloud,Magento Commerce,payments,declined,2.3.x,2.2.x,how to,EU
---

<p>This article provides a fix for the issue of customers from the European Union not being able to complete payments.  </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Cloud all versions</li>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Customers from EU complaining that their credit card transactions are being declined.</p>
<h2>Cause</h2>
<p>The European Union revised a regulation called Payment Services Directive (PSD) with an updated version <a href="https://ec.europa.eu/info/law/payment-services-psd-2-directive-eu-2015-2366_en">PSD2</a>. This is a European Union (EU) directive, enforced to regulate payment services and payment service providers throughout the EU and European Economic Area (EEA). Strong Customer Authentication (SCA) is a requirement of PSD2 to increase payment data security and authentication. If your payment solutions do not comply with the directive requirements, this may result in customers not being able to complete payments. Please find more details in the <a href="https://community.magento.com/t5/Magento-DevBlog/3D-Secure-2-0-changes/ba-p/136460">related Magento DevBlog post</a>.</p>
<h2>Solution</h2>
<p>Follow the recommendations from the <a href="https://community.magento.com/t5/Magento-DevBlog/3D-Secure-2-0-changes/ba-p/136460#recommendations">Magento Payment Provider Recommendations section of the DevBlog</a>.</p>