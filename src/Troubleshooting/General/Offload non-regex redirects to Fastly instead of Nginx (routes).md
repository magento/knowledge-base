---
title: Offload non-regex redirects to Fastly instead of Nginx (routes)
link: https://support.magento.com/hc/en-us/articles/360035192891-Offload-non-regex-redirects-to-Fastly-instead-of-Nginx-routes-
labels: fastly,Magento Commerce Cloud,VCL snippets,performance,regex,redirects,offload,routes,Nginx,how to
---

This topic suggests a solution to a typical redirects performance issue you might have where you offload non-regex redirects to Fastly instead of Nginx in Magento Commerce Cloud.

### Affected products and versions

* Magento Commerce Cloud, all versions, Master/Production/Staging environments leveraging Fastly

## Issue

In Magento Commerce Cloud, large numbers of non-regex redirects/rewrites cannot be done at the Nginx layer, and as a result can cause performance issues.

## Cause

The routes.yaml file in the .magento/routes.yaml directory defines routes for your Magento Commerce Cloud.

If the size of your routes.yaml file is 32KB or larger, you should offload your non-regex redirects/rewrites to Fastly.

This Nginx layer cannot handle a large number of non-regex redirects/rewrites, or performance issues will result.

## Solution

The solution is to offload those non-regex redirects to Fastly instead. Create a generic error path to redirect to Fastly.

The following steps will detail how to place redirects on Fastly instead of Nginx.

1. 
### Create an Edge Dictionary

First, you can use [VCL snippets in Magento](https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-vcl-custom-snippets.html) to define an edge dictionary. This will contain the redirects.

Some caveats to this:

	
	* Fastly cannot do regex on dictionary entries. It's only exact match. For more on these limitations, please see [Fastly's docs on edge dictionary limitations](https://docs.fastly.com/guides/edge-dictionaries/about-edge-dictionaries#limitations-and-considerations).
	
	* Fastly has a limit of 1000 entries into a single dictionary. Fastly can expand this limit, but that leads to the third caveat:
	
	* Any time you update the entries and deploy that updated VCL to all the nodes, there is a geometric load time increase with expanding dictionaries - meaning, a 2000-entry dictionary will actually load 3x-4x slower than a 1000-entry dictionary. But that is only an issue when you're deploying the VCL (updating the dictionary or changing the VCL function code).
	It does not impact the time it takes Fastly to process a request, it just impacts how long it takes Fastly to push out a new configuration.
	
	
	Generally speaking, configuration changes take a few seconds on average, usually no more than 5-10 seconds. So a 2x increase in dictionary items takes upwards of 30 seconds to get your config rolled out. A 4x increase would take closer to 2 minutes. This leads to the fourth caveat:
	
	
	
	
	* There is a pretty hard limit of 10,000 entries into an edge dictionary.
It is strongly recommended to consolidate down your redirects list. You can use multiple dictionaries, but please just be aware that any update you make to your VCL will take several minutes to actually populate across Fastly.

1. 
### Compare the URL to the Dictionary(ies)

When the URL lookup occurs, this will make the comparison to apply the custom error code if a match is found.

Use another VCL snippet to add something like the following to vcl\_recv:

declare local var.redir-path STRING;
set var.redir-path = table.lookup(redirects, std.tolower(req.url), "");

if (var.redir-path != "") {
 error 912 var.redir-path;
}

Here, we're checking to see if the URL exists in the table entry. If it does, we're calling an internal Fastly error and passing into that error the redirect URL from the table.

1. 
### Manage the Redirect

When a match is found, the action is taken that is defined for that obj.status, in this case a 301 permanent move redirect.

Use a final snippet in vcl\_error to send the 301 error codes back to the client:

if (obj.status == 912) {
 set obj.http.location = obj.response;
 set obj.status = 301;
 set obj.response = "Moved Permanently";
 return(deliver);
}

With this block, we're checking to see if the error code passed in from vcl\_recv matches, and if so, we'll set the location to the error message passed in, then change the status code to 301 and the message to "Moved Permanently". At that point, the response should be ready to go back to the client.

### Stage Service

If you would like to try all of these steps out, it is strongly recommended to setup a Magento staging environment. That way you can run tests against the Fastly service to make sure everything behaves as you would expect.

If you don't want to run a Magento staging environment, but you would like to see how these redirects would look, you can set up a stage account directly on Fastly.

## Related reading

* [Fastly VCL reference](https://docs.fastly.com/vcl/)

* [Configure routes](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_routes.html)

* [Set up Fastly](https://devdocs.magento.com/guides/v2.3/cloud/cdn/configure-fastly.html)

* [VCL regular expression cheat sheet](https://docs.fastly.com/en/guides/vcl-regular-expression-cheat-sheet)

