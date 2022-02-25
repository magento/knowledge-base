---
title: Checking slow queries and processes MySQL
labels: Magento Commerce,Magento Commerce Cloud,MySQL,log,queries,slow,troubleshooting,Adobe Commerce,on-premises,cloud infrastructure
---

This article talks about a couple of common MySQL issues (Slow queries, Processes taking too long) that can adversely affect a merchant's site and the solutions they indicate.

## Checking MySQL "slow queries"

### Description

If you had an outage that was potentially caused by an overloaded database, these steps will help you check the slow queries log of your database.

### Steps

1. Log in to your MySQL command line (Adobe Commerce on-premises/Magento Open Source) or on your cloud server from the command line (Adobe Commerce on cloud infrastructure).
1. Examine the slow query log for queries longer than 50 seconds:
   ```bash
   grep 'Query_time: [5-9][0-9]\|Query_time: [0-9][0-9][0-9]' /var/log/mysql/mysql-slow.log -A 3    
   ```    
1. Go to <https://www.unixtimestamp.com/> (or a similar Unix Timestamp Converter) and insert the timestamp of when the slow query was executed.
1. If the time correlates with any site outage that you experienced, it could be caused by an overloaded database. Check to see what loads were on the database at that time. Examples of such loads could be:

* Cron processes
* Traffic (bots or people)
* Import/Export scripts
* Creating dumps

## Checking MySQL "process list"

### Description

This will help to identify if the MySQL server is alive and that there are no stuck queries.

### Steps

1. Log in to your MySQL command line (Adobe Commerce on-premises/Magento Open Source) or on your cloud server from the command line (Adobe Commerce on cloud infrastructure).
1. Log in to MySQL using the block of code below. This will automate the process of logging in.     

    ```MySQL
    `export DB_NAME=$(grep [\']db[\'] -A 20 app/etc/env.php | grep dbname | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/['][,]//");    export MYSQL_HOST=$(grep [\']db[\'] -A 20 app/etc/env.php | grep host | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/['][,]//");    export DB_USER=$(grep [\']db[\'] -A 20 app/etc/env.php | grep username | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/['][,]//");    export MYSQL_PWD=$(grep [\']db[\'] -A 20 app/etc/env.php | grep password | head -n1 | sed "s/.*[=][>][ ]*[']//" | sed "s/[']$//" | sed "s/['][,]//");    mysql -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -U -A -e 'show processlist;`
    ```

1. If you get an error back or it takes more than 30 sec to respond, you should contact Support to check the MySQL server.
1. Looking at sample output.

1. Here is some sample output:     

    ```MySQL
    `$ mysql -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -U -A -e 'show processlist;'    +-----------+---------------+--------------------+---------------+---------+------+----------------+------------------------------------------------------------------------------------------------------+----------+    | Id        | User          | Host               | db            | Command | Time | State          | Info                                                                                                 | Progress |    +-----------+---------------+--------------------+---------------+---------+------+----------------+------------------------------------------------------------------------------------------------------+----------+    | 123456789 | abcdefghijklm | 192.168.7.10:12345 | abcdefghijklm | Query   |    0 | Writing to net | SELECT `magento_versionscms_hierarchy_node`.*, `page_table`.`title` AS `page_title`, `page_table`.`i |    0.000 |    | 123456788 | abcdefghijklm | 192.168.7.10:12344 | abcdefghijklm | Sleep   |    0 |                | NULL                                                                                                 |    0.000 |    | 123456777 | abcdefghijklm | 192.168.7.10:12333 | abcdefghijklm | Sleep   |    0 |                | NULL                                                                                                 |    0.000 |    | 123456666 | abcdefghijklm | 192.168.5.8:12222  | abcdefghijklm | Sleep   |    0 |                | NULL                                                                                                 |    0.000 |`   
    ```

1. Check the "Time" column for any time greater than 1800 seconds; that indicates a process that is potentially taking too much time to complete. Note the status of the processes in the "State" column.
1. Review the queries and possibly kill them if they are found not to be expected to run for that length of time. It is possible that the long running queries may be expected.


## Related reading

* [MySQL Show Processlist Syntax](https://dev.mysql.com/doc/refman/8.0/en/show-processlist.html) in dev.mysql.com.
* [MySQL Kill Syntax](https://dev.mysql.com/doc/refman/8.0/en/kill.html) in dev.mysql.com.
* [Security, Performance, and Data Handling](https://devdocs.magento.com/guides/v2.3/ext-best-practices/extension-coding/security-performance-data-bp.html) in our developer documentation.
* [MySQL Help](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/mysql.html) in our developer documentation.
