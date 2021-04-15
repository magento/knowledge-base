---
title: Magento Security Scan VS Source Code Analysis tools (like HP Fortify on Demand)[Internal]
labels: 
---

Magento Customers might claim that their Magento instance has security vulnerabilities. As a proof, they would provide results of scanning Magento with Source Code Analysis tools like HP Fortify on Demand (FoD).

This article explains the differences between Magento Security Scan and Source Code Analysis and states the Magento's position towards such claims.

## Differences between Magento Security Scan and Source Code Analysis

### Magento Security Scan Tool

The Tool runs tests designed to provide the merchant with the state of their Magento site installation. The Tool identifies the Magento version, checks that the target site is fully patched and the necessary security updates have been applied, and verifies the site does not contain known malware signatures.

### Source Code Analysis tools

These 3<sup>rd</sup> party tools provide source code scanning to check the customer’s Magento source code for vulnerabilities such as OWASP Top-10 (SQL Injection, Cross Site Scripting, etc.). The static and dynamic code analysis, run by these tools, interprets code without executing it and looks for patterns that indicate vulnerabilities.

The key factor is that such Source Code Analysis identifies problems in the custom code of the Merchants site — since it cannot separate the Core Magento code from the custom code.

Due to various techniques used in both M1 and M2, static code analysis identifies more false positives than actual vulnerabilities; validating the resulting issues is a very complex and time-consuming process.

### Magento also uses Source Code Analysis

Magento uses Veracode and RIPS technology to scan Magento products as a part of our ongoing security program. Other vendors (such as the mentioned HP FoD) provide similar products.

### Why Magento asks Customers to scan their sites?

When Magento asks Merchants to scan their sites, we are encouraging them to use the Magento Security Scan as part of their ongoing security maintenance. The Scan Tool assists Merchants to identify installation and maintenance security gaps with their site.

## Magento does not address Source Code Analysis issues

Magento Security Team does not have capacities to address issues in the Customer's custom source code. Such reports provided by the Merchant might take several weeks to validate and are likely to produce little (if any) vulnerabilities that we can take action on.

From a higher perspective, in such requests, Merchants are assigning the responsibility for triaging their security source code vulnerability reports to Magento, which is not acceptable.

With this, it is critical to let Customers know Magento also uses the Source Code Analysis in its Core Product development routine; this may be an additional guarantee of the Customer site's security.

### When does Magento consider such issues?

If a Customer identifies a valid security issue, we require a proof of concept with steps to reproduce the security issue; then we can accept this information and add it to the Magento's ongoing product vulnerability program.

## Case Study: Nestle

Nestle has submitted a list of 131 security issues (based on the output from the static scan of the Magento 1.13 code) in Help Center Ticket [73457](https://support.magento.com/agent/tickets/73457). The detailed report has been attached to the Ticket. This case is a good illustration of the problem we are discussing in this article.