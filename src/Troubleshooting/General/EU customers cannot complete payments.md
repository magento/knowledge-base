---
title: EU customers cannot complete payments
link: https://support.magento.com/hc/en-us/articles/360033691871-EU-customers-cannot-complete-payments
labels: Magento Commerce Cloud,Magento Commerce,payments,declined,2.3.x,2.2.x,how to,EU
---

This article provides a fix for the issue of customers from the European Union not being able to complete payments.  

### Affected products and versions

* Magento Cloud all versions
* Magento Commerce 2.2.x, 2.3.x
* Magento Open Source 2.2.x, 2.3.x

## Issue

Customers from EU complaining that their credit card transactions are being declined.

## Cause

The European Union revised a regulation called Payment Services Directive (PSD) with an updated version [PSD2](https://ec.europa.eu/info/law/payment-services-psd-2-directive-eu-2015-2366_en). This is a European Union (EU) directive, enforced to regulate payment services and payment service providers throughout the EU and European Economic Area (EEA). Strong Customer Authentication (SCA) is a requirement of PSD2 to increase payment data security and authentication. If your payment solutions do not comply with the directive requirements, this may result in customers not being able to complete payments. Please find more details in the [related Magento DevBlog post](https://community.magento.com/t5/Magento-DevBlog/3D-Secure-2-0-changes/ba-p/136460).

## Solution

Follow the recommendations from the [Magento Payment Provider Recommendations section of the DevBlog](https://community.magento.com/t5/Magento-DevBlog/3D-Secure-2-0-changes/ba-p/136460#recommendations).