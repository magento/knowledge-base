---
title: Cannot save "shipping" as URL key
labels: troubleshooting,2.4.x,Adobe Commerce,cloud infrastructure,on-premises,shipping,URL key
---

You are not able to save "shipping" as a URL key (e.g., "/shipping") for products or CMS pages and get an error that indicates that the URL key is a duplicate URL.

## Affected products and versions

Adobe Commerce (all deployment methods) 2.4.x

## Issue

You cannot save a CMS page with the term "shipping" in the URL key.

<ins>Steps to reproduce</ins>:

1. Go to CMS pages.
1. Search for the page you want to edit the URL key for.
1. Edit the URL key to "shipping" in **Page Title**.
1. Click **Save**.

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

Set up the URL as a redirect:

1. Log in to the Admin.
1. In the page you want to edit the URL key for enter a URL key in **Page Title** and click **Save**.
1. Go to **Marketing** > SEO & Seatch > **URL Rewrites**.
1. Click **Add URL Rewrite**.
1. Select *Custom* on the Create URL Rewrite drop down.
    1. Type in the Request Path "shipping".
    1. Type in the Target Path the new URL key.
    1. Select **No** in the Redirect drop down.

## Related reading

* [URL Rewrites](https://docs.magento.com/user-guide/marketing/url-rewrite.html) in our user guide.
* [SEO Best Practices](https://docs.magento.com/user-guide/marketing/seo-best-practices.html) in our user guide.
