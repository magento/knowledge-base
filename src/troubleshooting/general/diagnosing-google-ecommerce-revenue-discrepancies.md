---
title: Diagnosing Google eCommerce revenue discrepancies
labels: Google eCommerce,Analytics,Report,Magento Business Intelligence,MBI,troubleshooting,orders,revenue,data discrepancies
---

This article provides solutions for discrepancies between Google and Magento Business Intelligence (MBI). Google eCommerce tracking brings power to both your Google Analytics account and your MBI dashboards, but it results in many clients asking us: Should both tools report the same amount of **orders** and **revenue**?

In our experience, the answer is "no" in almost every instance. This is because Google eCommerce tracking obtains the order information during a button click event on your website, which misses many order attributes recorded later in time in your database - everything from orders not being registered to being later cancelled or refunded.

We know that a discrepancy between Google and MBI can cause uncertainty for you and your team. We want to help you understand the difference between these two numbers, which could reveal adjustments to make in your Google account or database.

## Why does GA report **less** revenue than my database?

When Google Analytics underreports orders and revenue, it's an indication that it's not capturing all of the orders being made on your site. Since you know your database data is the definitive number, you can take a few steps to try to determine the root cause - and possibly help Google capture more information.

* You didn't always have Google eCommerce tracking enabled. Try looking at a smaller, more-recent period.
* Your Google eCommerce tracking isn't set up to capture purchases from certain browsers, operating systems, or devices.
* The click event associated with your Google eCommerce tracking is not correctly tracking tax, shipping, or other fees above the order total.
* Your database timestamp is in a different timezone than your Google Analytics timestamp.
* People may visit your site via incognito windows or with cookies turned off.

## Why does GA report **more** revenue than my database?

We've found that it's more common for Google Analytics to overreport orders and revenue compared to an eCommerce database. This isn't always a bad thing. Your database is the definitive record of transactions made on your website, and there are several reasons Google could be reporting high even when you have set it up perfectly:

* eCommerce tracking is capturing duplicate button clicks only registering as a single order in your database.
* You have a high number of cancelled, refunded, or frauded orders, which is a state change that happens after eCommerce tracks the data.
* Your **Revenue** and **Orders** metrics deliberately exclude test or internal orders, which Google cannot differentiate.
* Orders are failing to be placed in your database under certain circumstances.
* Google eCommerce tracking is not aware of coupons and discounts on the order.
* Your database timestamp is in a different timezone than your Google Analytics timestamp.

Remember, even if Google is reporting a higher number than your database, it is still likely missing some orders for the reasons detailed in the section above.

## Troubleshooting

* Create a clone of your **Revenue** metric with no filters restricting the result. The Orders We Count or Customers We Count filters are important, but Google has no equivalent filter.
* Audit a small recent period, such as a span of a few hours earlier this week.
* Once you have Google eCommerce tracking set up in MBI, use Filter or Group-By to audit a single Source, Medium, or Campaign. Then do the same in Google. A source with less traffic/revenue will be better, as it is like to have less margin for error.
