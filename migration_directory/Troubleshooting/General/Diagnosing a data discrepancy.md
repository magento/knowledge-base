Come across some data that just doesn't make sense? Found a discrepancy between an Magento BIreport and a query or third-party report?&nbsp;

Depending on the complexity of your analysis, generating the corresponding Magento BI report may require familiarity with a number of different facets of the platform. This checklist and the related links will help you understand the logic behind your report, allowing you to identify the source of any discrepancies.____&nbsp;____

1.   If another member of your team created the report, begin by confirming the objective and parameters of their analysis
2.   Generate expected data points to compare to the Magento BI report based on a query, a third-party reporting tool, or a formula
3.   Review and confirm the <a href="https://support.magento.com/hc/en-us/articles/360016504592-Create-metrics" rel="noopener" target="_blank">metric</a> definition(s), either from the metric link in Report Builder or by visiting&nbsp;the <a href="https://support.magento.com/hc/en-us/articles/360016730971-Understand-View-definitions-of-metrics-filters-columns-and-column-references-in-the-System-Summary" rel="noopener" target="_blank">System Summary</a>&nbsp;tab:

*   Data table
*   Operation
*   Operand column, including its calculation if it is derived (via System Summary)
*   Timestamp
*   For subscription metrics: start and end dates
*   Filters, including those contained in any <a href="https://support.magento.com/hc/en-us/articles/360016505492-Create-filter-sets" rel="noopener" style="background-color: #ffffff;" target="_blank">filter sets</a> applied
*   Review and confirm other data manipulation within the report:

<li>Formulas calculated</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016730831-Create-analyses-using-the-Report-Builder#groupsegment" rel="noopener" target="_blank">Groupings</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016730831-Create-analyses-using-the-Report-Builder#filtersperspectivetime" rel="noopener" target="_blank">Perspectives</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016730831-Create-analyses-using-the-Report-Builder#settime" rel="noopener" target="_blank">Time options</a></li>
<li>For <a href="https://support.magento.com/hc/en-us/articles/360016504632-Create-cohort-analysis" rel="noopener" target="_blank">cohort analysis</a>: Cohort date</li>
<li>For <a href="https://support.magento.com/hc/en-us/articles/360016504632-Create-cohort-analysis" rel="noopener" target="_blank">cohort analysis</a>: Cohort perspective</li>
<li>If the discrepancy involves recent data, confirm the latest available data point by consulting the <strong>Update Details</strong> section on the Connections page</li>
<li>If a metric used in the analysis is built on a table from your database where rows are ever deleted from that table, confirm with the Magento BI Support Team that the table is being checked for deleted rows, as well as the frequency of the recheck and the <a href="https://support.magento.com/hc/en-us/articles/360016731631-Best-practice-Optimizing-your-database-for-analysis" rel="noopener" target="_blank">replication method</a> for the table</li>
<li>Similarly, if columns used in the analysis can be modified after a row is added, confirm with support&nbsp;that these columns are being <a href="https://support.magento.com/hc/en-us/articles/360016506452-Configuring-data-rechecks" rel="noopener" target="_blank">checked for modifications</a>, as well as the frequency of the recheck</li>

__Still stumped?__ Don't worry - we're here to help. Send us a request using&nbsp;[these instructions](https://support.magento.com/hc/en-us/articles/360016505312)__.__