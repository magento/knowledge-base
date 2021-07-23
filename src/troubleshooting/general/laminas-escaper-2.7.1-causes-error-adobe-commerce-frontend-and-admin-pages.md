---
title: laminas/laminas-escaper 2.7.1 causes error Adobe Commerce frontend and Admin pages
labels: troubleshooting,Adobe Commerce,laminas-escaper,patch
---
This article provides a solution for the issue where the release of laminas/laminas-escaper:2.7.1 breaks the functionality of Adobe Commerce in product management, categories, and product pages. This issue will be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

* Adobe Commerce on our Cloud Architecture 2.3.5+
* Adobe Commerce 2.3.5+

## Issue

After the update to laminas/laminas-escaper:2.7.1 an error message is displayed on the page.

<ins>Steps to reproduce</ins>:

Update laminas/laminas-escaper to 2.7.1.

<ins>Expected result</ins>:

No error.

<ins>Actual result</ins>:

After update to laminas/laminas-escaper:2.7.1 an error message is displayed on a product edit (or product management) page: *TypeError: rawurlencode() expects parameter 1 to be string, int given in /var/www/magento/vendor/laminas/laminas-escaper/src/Escaper.php:246*
This error occurs on the frontend and Admin pages causing the content of the page to be distorted.

## Cause

laminas/laminas-escaper 2.7.1 started using strict type validation for the Escaper class.

## Solution

Run `composer require laminas/laminas-escaper:2.7.0` in the root directory of each project.

## Related reading

laminas Documentation: [laminas-escaper](https://docs.laminas.dev/laminas-escaper/)
