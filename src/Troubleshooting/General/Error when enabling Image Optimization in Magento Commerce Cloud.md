---
title: Error when enabling Image Optimization in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360036557771-Error-when-enabling-Image-Optimization-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,Fastly,image optimization,2.3.x,2.2.x,how to
---

<p>This article provides a solution for the issue when Fastly Image Optimization (IO) is disabled by default with a notification to contact Fastly to enable image optimization. (The Fastly Cloud Image Optimizer is a real-time image manipulation and optimization service that speeds up image delivery by serving bandwidth-efficient images.)</p>
<h3>AFFECTED VERSIONS</h3>
<ul>
<li>Magento Commerce Cloud 2.2.x., 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>On the Fastly Configuration page, next to the Fastly IO Snippet, you see the Current state: <em>disabled </em>with the following message underneath: Please contact your sales rep or send an email to <a href="mailto:support@fastly">support@fastly.com</a> to request image optimization activation for your Fastly service.</p>
<h2>Cause</h2>
<p>The site may not be live yet. There are processes in place to pre-load the site when it goes live in the Fastly database.</p>
<h2>Solution</h2>
<p>Create a <a href="https://support.magento.com/hc/en-us/articles/360019088251">Support ticket</a> and request image optimization.</p>