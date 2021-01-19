---
title: Troubleshooting 503 errors
link: https://support.magento.com/hc/en-us/articles/360034631211-Troubleshooting-503-errors
labels: Magento Commerce,error,cache,503,backend,fetch,how to,Varnish
---

This article provides solutions for troubleshooting 503 errors.

## Backend Fetch Failed errors

If the length of cache tags used by Magento exceed Varnish's default of 8192 bytes, you can see HTTP 503 (Backend Fetch Failed) errors in the browser. The errors might display similar to the following:

Error 503 Backend fetch failed
Backend fetch failed
To resolve this issue, increase the default value of the http\_resp\_hdr\_len parameter in your Varnish configuration file. The http\_resp\_hdr\_len parameter specifies the max header length *within* the total default response size of 323768 bytes.

If the http\_resp\_hdr\_len value exceeds 32K, you must also increase the default response size using the http\_resp\_size parameter.

1. 
As a user with root privileges, open your Vanish configuration file in a text editor:

	
	* CentOS 6: /etc/sysconfig/varnish
	
	
	* CentOS 7: /etc/varnish/varnish.params
	
	
	* Debian: /etc/default/varnish
	
	
	* Ubuntu: /etc/default/varnish

1. 
Search for the http\_resp\_hdr\_len parameter.

1. If the parameter doesn't exist, add it after thread\_pool\_max.

1. 
Set http\_resp\_hdr\_len to a value equal to the product count of your largest category multiplied by 21. (Each product tag is about 21 characters in length.)

For example, setting the value to 65536 bytes should work if your largest category has 3,000 products.

For example:

-p http\_resp\_hdr\_len=65536 \

10. 
Set the http\_resp\_size to a value that accommodates the increased response header length.

For example, using the sum of the increased header length and default response size is a good starting point (e.g., 65536 + 32768 = 98304):

-p http\_resp\_size=98304 \
A snippet follows:

# DAEMON\_OPTS is used by the init script.
DAEMON\_OPTS="-a ${VARNISH\_LISTEN\_ADDRESS}:${VARNISH\_LISTEN\_PORT} \
 -f ${VARNISH\_VCL\_CONF} \
 -T ${VARNISH\_ADMIN\_LISTEN\_ADDRESS}:${VARNISH\_ADMIN\_LISTEN\_PORT} \
 -p thread\_pool\_min=${VARNISH\_MIN\_THREADS} \
 -p thread\_pool\_max=${VARNISH\_MAX\_THREADS} \
 -p http\_resp\_hdr\_len=65536 \
 -p http\_resp\_size=98304 \
 -p workspace\_backend=98304 \
 -S ${VARNISH\_SECRET\_FILE} \
 -s ${VARNISH\_STORAGE}"

## Health check timeouts

If you disable the cache while Varnish is configured as the caching application and while Magento is in developer mode, it might become impossible to log in to the Admin.

This situation could happen because the default health check has a timeout value of 2 seconds. It could take more than 2 seconds for the health check to collect and merge information on every health check request. If this occurs in 6 out of 10 health checks, the Magento server is considered unhealthy. Varnish serves stale content when the server is unhealthy.

Because Admin is accessed through Varnish, you cannot log in to Admin to enable caching (unless Magento becomes healthy again). However, you can use the following command to enable cache:

$ bin/magento cache:enable
For more information about using the command line, see [Get started with command-line configuration](https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands.html).

