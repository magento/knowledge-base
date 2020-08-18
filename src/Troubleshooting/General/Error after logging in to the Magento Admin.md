<h3 id="details">Details</h3>

The requested URL /magento2index.php/admin/admin/dashboard/index/key/0c81957145a968b697c32a846598dc2e/ was not found on this server.

Note the lack of a slash character between `` magento2 `` and `` index.php `` in the URL.

<h3 id="solution">Solution</h3>

The base URL is not correct. The base URL must:

*   Start with `` http:// `` or `` https:// ``
*   End with a slash (`` / ``)
*   Match the case of the `` web/unsecure/base_url `` record in the `` core_config_data `` database table

Re-run the installation using a valid value.