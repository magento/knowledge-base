---
title: "Magento 2.3.6: endless spinner displayed on address save"
labels: 2.3.6,Magento Commerce,Vertex,known issues,spinner,troubleshooting
---

This article describes a known issue Magento 2.3.6, where the waiting spinner is displayed indefinitely when saving an address in My account on storefront.

## Affected products and versions

* Magento Commerce 2.3.6 with Vertex integration enabled (Firefox browser only)

## Issue

When saving an address in My account section on the storefront, sometimes the waiting spinner is displayed indefinitely due to an error in Vertex core JS.

## Workaround

Workaround: use an alternative browser to Firefox.

The issue is scheduled to be fixed in Magento 2.3.1. \#\# Related reading

* [Different addresses not allowed when unselecting 'My billing and shipping address are the same' using VertexAddress Cleansing](https://support.magento.com/hc/en-us/articles/360046998952)
* [Magento 2.4.1 Vertex Address validation message post address update](https://support.magento.com/hc/en-us/articles/360050139631)

