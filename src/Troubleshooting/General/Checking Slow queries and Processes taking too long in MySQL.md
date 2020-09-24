This article talks about a couple common MySQL issues (Slow queries, Processes taking too long) that can adversely affect a merchant's site, and the solutions they indicate.

## Checking MySQL "slow queries"

### Description

If you had an outage that was potentially caused by an overloaded database, these steps will help you check the slow queries log of your database.

### Steps

1.   Login to your MySQL command line (Magento Commerce/Magento Open Source) or on your cloud server from the command line (Magento Commerce Cloud).
2.   Examine the slow query log for queries longer than 50 seconds:
    
    <pre><code class="language-yaml">grep 'Query_time: [5-9][0-9]\|Query_time: [0-9][0-9][0-9]' /var/log/mysql/mysql-slow.log -A 3</code></pre>
    
    
3.   Go to <a href="https://www.unixtimestamp.com/" target="_self"><span style="font-size: 15px;">https://www.unixtimestamp.com/</span></a> (or a similar Unix Timestamp Converter) and insert the timestamp of when the slow query was executed.
4.   If the time correlates with any site outage that you experienced, it could be caused by an overloaded database.&nbsp; Check to see what loads were on the database at that time. Examples of such loads could be:

*   Cron processes
*   Traffic (bots or people)
*   Import/Export scripts
*   Creating dumps

&nbsp;

## Checking MySQL "process list"

### Description

This will help to identify if the MySQL server is alive and that there are no stuck queries.

### Steps

<ol><li>Login to your MySQL command line (Magento Commerce/Magento Open Source) or on your cloud server from the command line (Magento Commerce Cloud).</li><li>Login to MySQL using the block of code below. This will automate the process of logging in.
<pre><code class="sql">export DB_NAME=$(grep [\']db[\'] -A 20 app/etc/env.php | grep dbname | head -n1 | sed "s/.*[=][&gt;][ ]*[']//" | sed "s/['][,]//");
export MYSQL_HOST=$(grep [\']db[\'] -A 20 app/etc/env.php | grep host | head -n1 | sed "s/.*[=][&gt;][ ]*[']//" | sed "s/['][,]//");
export DB_USER=$(grep [\']db[\'] -A 20 app/etc/env.php | grep username | head -n1 | sed "s/.*[=][&gt;][ ]*[']//" | sed "s/['][,]//");
export MYSQL_PWD=$(grep [\']db[\'] -A 20 app/etc/env.php | grep password | head -n1 | sed "s/.*[=][&gt;][ ]*[']//" | sed "s/[']$//" | sed "s/['][,]//");
mysql -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -U -A -e 'show processlist;'</code></pre>
</li><li>If you get an error back or it takes more than 30 sec to respond, you should contact Support to check the MySQL server.</li><li>Looking at sample output</li><ol type="a">
<li>Here is some sample output:
<pre><code class="sql">$ mysql -h $MYSQL_HOST -u $DB_USER --password=$MYSQL_PWD $DB_NAME -U -A -e 'show processlist;'
+-----------+---------------+--------------------+---------------+---------+------+----------------+------------------------------------------------------------------------------------------------------+----------+
| Id        | User          | Host               | db            | Command | Time | State          | Info                                                                                                 | Progress |
+-----------+---------------+--------------------+---------------+---------+------+----------------+------------------------------------------------------------------------------------------------------+----------+
| 234061959 | wh2okhswlvpuo | 192.168.7.10:26076 | wh2okhswlvpuo | Query   |    0 | Writing to net | SELECT `magento_versionscms_hierarchy_node`.*, `page_table`.`title` AS `page_title`, `page_table`.`i |    0.000 |
| 234061972 | wh2okhswlvpuo | 192.168.7.10:26166 | wh2okhswlvpuo | Sleep   |    0 |                | NULL                                                                                                 |    0.000 |
| 234061986 | wh2okhswlvpuo | 192.168.7.10:26268 | wh2okhswlvpuo | Sleep   |    0 |                | NULL                                                                                                 |    0.000 |
| 234061987 | wh2okhswlvpuo | 192.168.5.8:63772  | wh2okhswlvpuo | Sleep   |    0 |                | NULL                                                                                                 |    0.000 |
 </code></pre>
</li>
<li>Check the "Time" column for any time greater than 1800 seconds; that indicates a process that is potentially taking too much time to complete. Note the status of the processes in the "State" column.</li>
<li>Review the queries and possibly kill them if they are found not to be expected to run for that length of time.&nbsp;It is possible that the long running queries may be expected.</li>
</ol></ol>
&nbsp;

## Related reading

*   <a href="https://dev.mysql.com/doc/refman/8.0/en/show-processlist.html" target="_self"><span style="font-size: 15px;">MySQL Show Processlist Syntax</span></a>
*   <a href="https://dev.mysql.com/doc/refman/8.0/en/kill.html" target="_self"><span style="font-size: 15px;">MySQL Kill Syntax</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/ext-best-practices/extension-coding/security-performance-data-bp.html" target="_self"><span style="font-size: 15px;">Security, Performance, and Data Handling</span></a>
*   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/mysql.html" target="_self"><span style="font-size: 15px;">MySQL Help</span></a>