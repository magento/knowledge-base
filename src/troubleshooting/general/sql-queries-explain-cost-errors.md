---
title: "SQL queries: EXPLAIN cost errors"
labels: EXPLAIN cost,Magento Business Intelligence,troubleshooting
---

This article provides solutions for EXPLAIN cost errors when running unsuccessful SQL queries. PostgreSQL uses something called [the EXPLAIN command](https://www.postgresql.org/docs/9.5/static/using-explain.html) to determine the cost of SQL queries. We built the SQL Report Builder to also use this command, meaning that if the cost is deemed to be too high - the amount of resources required to execute the query exceeds our thresholds - the query won't run and an EXPLAIN message will display.

There are a few reasons why this might happen. Here are the messages you might receive, what they mean, and how to troubleshoot them.

## Unable to execute query. The EXPLAIN cost value of \[xxx\] is too high to run this query.

If you see this message, it means that the query was deemed too expensive to execute. We have two recommendations for this situation: one is to eliminate any ORDER BY clauses from your query, as they're costly operations. The second is to follow the tips in our [optimization article](https://support.magento.com/hc/en-us/articles/360016505412-Optimizing-your-SQL-queries) to tweak your query.

## Unable to execute query. This query returns \[xxx\] rows, which exceeds our limit of 10,000

In this case, the possible number of results exceeds the set maximum for the SQL Report Builder. There are a few ways you can reduce the number of results:

* Try adding some filters to your query.
* Use LIMIT, if you can. Some tables have a large number of rows and limiting the results can keep you under the row limit.

## Unable to parse EXPLAIN response.

Whoops. This message typically means something probably went wrong on our end. If you continue to receive this error, please reach out to support.