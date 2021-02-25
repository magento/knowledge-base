---
title:  Web Application Firewall (WAF) powered by Fastly: the FAQ
link: https://support.magento.com/hc/en-us/articles/360016353452--Web-Application-Firewall-WAF-powered-by-Fastly-the-FAQ
labels: Magento Commerce Cloud,Fastly,security,PCI,WAF,FAQ,firewall
---

## How does Magento's Managed Cloud WAF (powered by Fastly) work?

Web Application Firewalls (WAFs) prevent malicious traffic from entering sites and networks by filtering traffic against a set of security rules. Traffic that triggers any of the rules is blocked before it can damage your sites or network.

Magento's Cloud WAF provides a WAF policy with a rule set designed to protect your Magento Commerce web applications from a wide range of attacks. 

The WAF examines web and admin traffic to identify any suspicious activity. It evaluates the GET and the POST traffic (HTTP API calls) and applies the rule set to determine which traffic to block. The WAF can block a wide variety of attacks including SQL injection attacks, cross-site scripting attacks, data exfiltration attacks, and HTTP protocol violations.

As a cloud-based service, the WAF requires no hardware or software to install or maintain. Fastly, an existing technology partner, provides the software and expertise. Their high performance, always on WAF resides in each cache node across Fastly’s global delivery network.

## Is the WAF available for all Cloud customers?

Yes, the Cloud WAF service is included in your Magento Commerce Cloud subscription for both Starter and Pro plans at no additional cost. The WAF service is available in the Production environment only.

## Does WAF comply with PCI DSS 6.6 requirements?

Yes.

## If my Magento Commerce Cloud account manages sites on multiple domains, is the WAF profile tuned for each domain, or collectively for all domains? 

The WAF is tuned collectively for all domains under a single Cloud Account.

## What rules are used for the WAF?

The rule set in the WAF profile applied to your Magento Commerce Cloud production environment is based on the OWASP Top 10 Threat Protection rule set, which covers common exploits to web services. It also contains Magento-specific rules developed by TrustWave SpiderLabs. Fastly’s Security Research team has also added rules which protect your site and network from commonly known attacks: bad IP addresses, bad user agents, and known botnet command and control nodes. We enable rules at OWASP Paranoia Level 3 or less, which provides high security coverage.

## How do I access logs?

To have the logs sent to your logging tool, please work with your Technical Account Manager (TAM) to add a logging endpoint in Fastly.

## What does a block request look like?

A blocked request returns a 403 page with a request identifier.

You can customize this page as long as the customization includes the request identifier. Contact your technical account manager for details.

## How do we update WAF rule sets?  How quickly can a WAF rule be changed or updated and applied globally in production? 

As a part of the Cloud WAF service, Fastly manages rule updates from commercial third parties, Fastly research, and open sources. They update published rules into a policy as needed, or when changes to the rules are available from their respective sources. New rules that match the published classes of rules are also inserted into the WAF instance of any service once it is enabled. This helps ensure immediate coverage for new or evolving exploits. You can review information [about rule updates and maintenance](https://docs.fastly.com/guides/web-application-firewall/fastly-waf-rule-set-updates-maintenance#rule-set-maintenance) on the Fastly documentation site.

## How is Magento Cloud WAF different from the WAF solution Fastly offers to its direct customers?

The WAF solution that is sold directly by Fastly is a paid offering that includes broader rule sets and additional features like rule customization and malware protection. Magento's Cloud WAF solution includes a subset of rules targeted at the Magento application and includes only one rule set for each customer's Production environment.

## What types of security threats does WAF protect against?

<table>
<tbody>
<tr>
<th>Threat</th>
<th>WAF protection</th>
</tr>
<tr>
<td>SQL injection attacks</td>
<td>Both the OWASP ModSecurity Core Rule Set and the TrustWave commercial rule set include specific filters for SQL injection attacks and its variants.</td>
</tr>
<tr>
<td>
<p>Cross-site injection</p>
</td>
<td>The OWASP rule set protects against cross-site injection attacks. Fastly leverages a scoring mechanism for each request looking for cross-site injection and other threats to the origin. We score every request against the entire core rule set and validate that the request score is below a configurable threshold in order for it to pass.</td>
</tr>
<tr>
<td>Brute force attacks</td>
<td>Covered by the OWASP rule set. Fastly also blocks brute force activity by using VCL code that recognizes specific sources, requests, or attempts to brute force or overwhelm security controls prior to any traffic reaching the origin datacenter.</td>
</tr>
<tr>
<td>Network attacks</td>
<td>Network attacks, or attacks targeting network infrastructure, are managed automatically by Fastly. Fastly does not pass DNS to origin, and traffic that does not match a narrow HTTP, HTTPS or DNS profile is discarded at the edge of the network. Attacks targeting control protocols are defended against through authentication of endpoints throughout the network. Additionally, network protocols used within the Fastly network are hardened to ensure that they cannot be leveraged as a means of amplification or reflection. Customers are responsible for protecting against attacks that bypass the Fastly network by leveraging the Fastly Cache IP address space, published to our customers as a component of our CDN service. It's recommended that origin IP address space not be published in public DNS to ensure bypass attacks cannot use these addresses as targets.</td>
</tr>
<tr>
<td>JavaScript injection attacks</td>
<td> WAF rules protect against malicious JavaScript code being inserted into client communications with web services. Common exploit patterns or scores are filtered through the WAF to ensure the integrity of the origin service.</td>
</tr>
</tbody>
</table>

## Are additional features and functionality offered?

Magento's WAF offering includes protection against OWASP Top-10 threats as part of PCI requirements, 24x7 support, including triage for false positives, and version upgrades. The following features are not supported in the standard offer:

* rate limiting
* rule customizations
* bot mitigation
* malware protection

 
 

## How is my site performance affected by the WAF?

An estimated 1.5 milliseconds (ms) to 20 ms of latency is introduced to every non-cached request.

## Can customers create and modify IP blacklists to block traffic?

Yes, customers can enable blocking by country and access control list (ACL) from the Magento Commerce Cloud Admin UI. Use these features in cases where you want to block access for visitors coming from specific countries or certain IPs or IP ranges. If you want blocked visitors to see a custom page rather than an error code, you can create a custom error page by uploading HTML in the Fastly Configuration menu. See [Create a custom error/maintenance page](https://devdocs.magento.com/guides/v2.2/cloud/cdn/configure-fastly.html#fastly-errpg) in the Magento Commerce Cloud Guide.

## Where can I check the operational status of my WAF service?

Overall WAF service availability is reported on the [Fastly Status page](https://status.fastly.com/). Availability reporting for individual customers' WAF is not provided.

## Does Magento provide Incident Management for the WAF service?

At this time, Incident Management is not offered.

## Does Magento have a Security Operations Center?

Although Magento does not have a Security Operations Center, we do have a security operations process that allows us to engage the right resources to respond to security incidents in real-time. We also offer 24/7/365 follow-the-sun support.

You can also get Magento-related security news and updates from the [Security Center](https://magento.com/security).

## What Support is available?

WAF Support offers the following resources to assist you with mitigating the service impacts of unwanted or malicious requests:

* Onboarding: enabling, initial setup and limited monitoring of the Fastly service(s) that support the Magento Managed Cloud WAF
* Ongoing false positive triage to address instances where the WAF blocks legitimate traffic
* Configuration of any new standard rules introduced as part of WAF version upgrades

See the [Cloud SLA](https://magento.com/sites/default/files/magento-support-services-terms-and-conditions.pdf) terms for additional support information including severity definitions, response times, channels, and availability.

## If the WAF is blocking legitimate traffic or causing other issues, how can I get help?

[Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) at the [Magento Help Center](https://support.magento.com). Please include indicate that the ticket is related to the WAF service and include the blocked request identifier (ID).

The Magento support ticketing system tracks communication between our support engineers and a customer's personnel. This system provides a time-stamped transcript of communications, and sends emails to customer and Magento staff as tickets are updated.

For all Incidents submitted online, Incident receipt will be confirmed via Magento's Customer Help Center ticketing system. Upon receipt of a properly submitted Incident, Support Services shall be prioritized in accordance with the Priority levels set forth above.

The following table summarizes support channels and availability for WAF Support:

<table>
<tbody>
<tr>
<th>Support offering</th>
<th>Details</th>
</tr>
<tr>
<td>Online self-service help</td>
<td>Unlimited access</td>
</tr>
<tr>
<td>Availability for incident reports</td>
<td>24/7</td>
</tr>
<tr>
<td>Web portal</td>
<td>Available via Zendesk</td>
</tr>
<tr>
<td>Emergency escalation*</td>
<td>US toll-free: (877)-282-7436; International: (310)-945-1310</td>
</tr>
</tbody>
</table>

_\* Magento's toll-free Support telephone line is reserved for Priority 1 Incidents only. Non-Priority 1 calls will slow down overall response to issues_

## How are false positives triaged?

We have a false positive triage process (available 24x7) to quickly address and resolve instances  where legitimate requests have triggered a WAF rule. False positive events are treated as Priority 1 issues. As a default action, our support team can update the WAF policy immediately to disable the rule that triggered the blocking event and allow the legitimate request to pass through the WAF.

## What if traffic to admin section of Magento Cloud site triggers WAF rules? Will Magento Support resolve issues with blocked admin traffic?

Yes, blocked admin traffic is treated as a Priority 1 issue.