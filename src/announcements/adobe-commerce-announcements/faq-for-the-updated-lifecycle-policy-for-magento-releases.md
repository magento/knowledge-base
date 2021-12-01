---
title: FAQ for the Updated Lifecycle Policy for Adobe Commerce Releases
labels: 2.3.6,2.3.x,2.4,Elasticsearch,QPT,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,announcements,lifecycle,patches,quality,security,support,upgrade,Adobe Commerce,cloud infrastructure
---

## What’s changing?

Adobe Commerce provides quality fixes for a minor release for a minimum of 12 months from the general availability date of the next minor software release. The manner in which we provide quality fixes during this period is changing:

* **Prior policy:** Currently the quality fixes to the previous line that is in the 12 month EOS window are delivered through our quarterly patch release, hence making the quarterly patches a combination of security + quality.
* **New policy:** Starting with 2.4 as the most current minor release line, release patches for the previous supported line (2.3) will move to security-only. We will still deliver quality fixes for the previous supported line during the 12-month window after release of a minor (like 2.4) and subsequent new minor release lines; but those will be made available through [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) and be focused only on critical issues.

## When does this policy take effect?

Adobe Commerce 2.3.6 is scheduled to be released on October 15, 2020, and is planned to be the last patch release for Adobe Commerce 2.3 that will include both quality + security. After 2.3.6, the 2.3.x line will become security-only and critical quality issues for 2.3 can be fixed via QPT.

>![info]
>
>Note: the only time we’ll release a full version of 2.3 is if we need to maintain compliance with our technology stack, such as for PHP or Elasticsearch. This is happening in Q2 of 2021 with a mandatory update of PHP 7.4, we'll be incrementing the line to 2.3.7. For details, refer to [PHP 7.4 support for Adobe Commerce 2.3.x release line](https://community.magento.com/t5/Magento-DevBlog/PHP-7-4-support-for-Magento-2-3-x-release-line/ba-p/458946) DevBlog post.

## What is a security-only release?

Security-only releases contain security fixes only and no quality fixed. Please note, however, that our security-only releases may include specific hot fixes when we deem these absolutely critical to run Adobe Commerce.

## Will there still be a security-only release for the latest line (as of publication, 2.4)?

Adobe will continue to have security-only releases for the latest release line as well. The process for these are outlined in [Introducing the New Security-only Patch Release](https://community.magento.com/t5/Magento-DevBlog/Introducing-the-New-Security-only-Patch-Release/ba-p/141287) DevBlog post.

## What is Quality Patches Tool?

Please refer to the [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) article in our support knowledge base.

## Who should consider using this new policy?

The new policy is intended to create pathways for merchants to plan strategically for annual Adobe Commerce development costs, while allowing them to maintain security and critical quality during these strategic cycles. It can also be utilized by merchants who care about security over everything else and are generally happy with the stability of older, supported line. Merchants may find it easier to plan and budget for these upgrades as they will be more predictable.

## Should Merchants still upgrade to the latest line?

Ultimately, all Merchants should still prioritize planning to adopt the latest Adobe Commerce line in a timely fashion. The new Security Only line and QPT tool are not intended to supplant the strategic upgrade roadmap for merchants; rather, they offer flexibility for merchants in planning their upgrade roadmap and a means to react quickly to security/quality issues without having to implement an entire upgrade.

## How will I get quality fixes on supported minor versions that are not the latest line?

Fixes will be made available via the [Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047139492).

## How will I get quality fixes on the latest line?

The current line will have quality as part of the quarterly update. In between releases if you contact support for a fix on the most recent line, they will supply it via QPT. Then once you upgrade to the release that has that fix in it, then it will be applied via the quarterly patch.

## What kind of quality issues will be fixed on supported minor versions that are not the latest line?

Only major quality issues that break core flows will be fixed in previous line (2.3) and delivered via QPT.

## Will any quality fixes be part of the quarterly release on supported minor versions that are not the latest line?

Yes, as part of the security-only line, we release what Adobe calls "hot fixes" to that line, these are highly critical issues that affect the Adobe Commerce application.

## Will security improvements and QPT be delivered at the same time?

The security-only line will follow the quarterly release schedule and be released with the -p1 nomenclature. Example 2.3.6-p1. Quality will be released ad hoc as quality issues are discovered and fixed, and they’ll be made available via QPT.

## If I have a quality issue that won’t be resolved in supported minor versions that are not the latest line or QPT, what do I do?

The previous line being security-only means the main benefit is staying secure. Only patches for major issues that break core flows will be made available through QPT.

Issues that do not affect core flows or have workarounds will be fixed in the most recent line only. Adobe encourages those that want both critical and non-critical fixes, to move to the most recent line.

## Will upgrades be more expensive or difficult for Merchants if they remain on the security-only line until it reaches end of Security support?

In theory, they should be equal in cost for the Merchant in terms of development hours as long as they have not adopted a large number of Quality Patches. If a Merchant finds that they need or want more than a handful of patches via the QPT tool, the recommendation is that they prioritize an upgrade to the latest version of Adobe Commerce. Adopting a large number of Quality Patches, in lieu of upgrading to the current version of Adobe Commerce, can increase the development costs and complexities of upgrade once the security-only line reaches end of support.

## Why should I limit the amount of quality patches delivered via QPT?

By applying many individual quality fixes you make your Adobe Commerce code more complex. The added complexity could result in unpredictable changes when upgrading to the most recent release line. That is why we recommend using QPT sparingly and only for the most critical fixes.

## What about compliance for technology stacks?

During the lifetime of a release line there will be updates to various technology stacks like PHP or Elasticsearch that will need to be upgraded to stay compliant. We will give as much notice as possible to our merchants that these are coming.

Note: In Q2 of 2021, we will need to update PHP and Redis on the 2.3.x line to stay compliant. This will cause the line to increment to 2.3.7. For details, refer to [PHP 7.4 support for Adobe Commerce 2.3.x release line](https://community.magento.com/t5/Magento-DevBlog/PHP-7-4-support-for-Magento-2-3-x-release-line/ba-p/458946) DevBlog post.
