---
title: Error when enabling Image Optimization in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360036557771-Error-when-enabling-Image-Optimization-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,Fastly,image optimization,2.3.x,2.2.x,how to
---

This article provides a solution for the issue when Fastly Image Optimization (IO) is disabled by default with a notification to contact Fastly to enable image optimization. (The Fastly Cloud Image Optimizer is a real-time image manipulation and optimization service that speeds up image delivery by serving bandwidth-efficient images.)

 ### AFFECTED VERSIONS

 
 * Magento Commerce Cloud 2.2.x., 2.3.x
 
 Issue
-----

 On the **Fastly Configuration** page, next to the **Fastly IO Snippet**, you see the **Current state**: *disabled* with the following message underneath: **Please contact your sales rep or send an email to [support@fastly.com](mailto:support@fastly) to request image optimization activation for your Fastly service.**

 Cause
-----

 The site may not be live yet. There are processes in place to pre-load the site when it goes live in the Fastly database.

 Solution
--------

 Create a [Support ticket](https://support.magento.com/hc/en-us/articles/360019088251) and request image optimization.

