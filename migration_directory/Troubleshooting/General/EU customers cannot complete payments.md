This article talks about the issue with customers from European Union not being able to complete payments. &nbsp;

### Affected products and versions

*   Magento Cloud all versions
*   Magento Commerce 2.2.x, 2.3.x
*   Magento Open Source 2.2.x, 2.3.x

## Issue

Customers from EU complaining&nbsp;that their credit card transactions are being declined.

## Cause

The European Union revised a regulation called Payment Services Directive (PSD) with an updated version <a href="https://ec.europa.eu/info/law/payment-services-psd-2-directive-eu-2015-2366_en" rel="noopener nofollow noopener noreferrer" target="_blank">PSD2</a>. This is a European Union (EU) directive, enforced to regulate payment services and&nbsp;payment service providers throughout the EU and European Economic&nbsp;Area (EEA).&nbsp;Strong&nbsp;Customer Authentication (SCA)&nbsp;is a requirement of PSD2 to&nbsp;increase&nbsp;payment data security and authentication. If your payment solutions do not comply with the directive requirements, this may result in customers not being able to complete payments. Please find more details in the <a href="https://community.magento.com/t5/Magento-DevBlog/3D-Secure-2-0-changes/ba-p/136460" target="_self">related Magento DevBlog post</a>.

## Solution

Follow the recommendations from the&nbsp;<a href="https://community.magento.com/t5/Magento-DevBlog/3D-Secure-2-0-changes/ba-p/136460#recommendations" target="_self">Magento Payment Provider Recommendations section of the DevBlog</a>.