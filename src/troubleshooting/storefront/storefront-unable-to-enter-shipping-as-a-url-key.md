---
title: Cannot save "shipping" as URL key
labels: troubleshooting,2.4.x,Adobe Commerce,cloud infrastructure,on-premises,shipping,URL key,Magento,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3,2.4.4,2.4.4-p1,2.4.5
---

This article provides a workaround for the issue when you are not able to save "shipping" as a URL key (e.g., "/shipping") for products or CMS pages. When you try to save the URL key, you receive an error that indicates that the URL key is a duplicate URL.

## Affected products and versions

Adobe Commerce (all deployment methods) 2.4.x

## Issue

You cannot save a CMS page with the term "shipping" in the URL key.

<ins>Steps to reproduce</ins>:

Create a CMS page with URL key as "shipping".

<ins>Expected result</ins>:

The page saves with "shipping" in the URL key.

<ins>Actual result</ins>:

You cannot save and an error appears: *The value specified in the URL Key field would generate a URL that already exists.*

## Cause

Shipping is a reserved word defined in `vendor/magento/module-shipping/etc/frontend/routes.xml`.

```xml

<router id="standard">
      <route id="shipping" frontName="shipping">
          <module name="Magento_Shipping" />
      </route>
  </router>
  ```

## Solution

You cannot use the term "shipping" in your URL key - however you can use the term "shipping" combined with another letter or number (For example, "shipping1" and "shipping2"). Although the term does not have to be "shipping"+&lt;another number or letter&gt; - the term could be any string as long as the length does not exceed 255 characters.

Perform the following steps:

1. Log in to the Commerce Admin.
1. Go to **Marketing** > SEO & Search > **URL Rewrites**.
1. Click **Add URL Rewrite**.
1. Select *Custom* on the Create URL Rewrite drop down.
    1. Type in the Request Path "shipping". Note: The Request Path is what a user enters in the browser and the Target Path is where it should redirect to. 
    1. Type in the Target Path the new URL key (For example, "shipping1").
    1. Select **No** in the Redirect drop down. 

## Related reading

* [URL Rewrites](https://docs.magento.com/user-guide/marketing/url-rewrite.html) in our user guide.
* [SEO Best Practices](https://docs.magento.com/user-guide/marketing/seo-best-practices.html) in our user guide.
