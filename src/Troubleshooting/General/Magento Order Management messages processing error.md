---
title: Magento Order Management messages processing error
link: https://support.magento.com/hc/en-us/articles/360037745212-Magento-Order-Management-messages-processing-error
labels: oms error,Magento Order Management,getMode,MCOM,connector,getMode(),how to,3.1.1,3.2.0,3.3.0
---

<p>This article provides a solution for the issue when you get a <code>getMode()</code> error in the CLI running <code>bin/magento oms:messages:process</code> in the Magento Order Management System (OMS).</p>
<h3>AFFECTED PRODUCTS AND VERSIONS</h3>
<p>This error occurs when using MCOM Connector release 3.1.1 and 3.2.0. It is resolved in MCOM Connector 3.3.0. It is not specific to an MDC or MOM version.</p>
<h2>Issue</h2>
<p>When running the following command in the CLI: </p>
<p><code>bin/magento oms:messages:process</code></p>
<p>An error message similar to the following is outputted in the CLI:</p>
<pre class="line-numbers"><code class="language-clike">&lt;project-id&gt;@&lt;project-id&gt;:~$ php bin/magento oms:messages:process

Processing messages...

PHP Fatal error:  Uncaught Error: Call to a member function getMode()
on null in /app/&lt;project-id&gt;/vendor/magento/module-inventory-message-bus/Handler/OnAggregateStockUpdatedSubscriber.php:64

Stack trace:

  #0 [internal function]: Magento\InventoryMessageBus\Handler\OnAggregateStockUpdatedSubscriber-&gt;onUpdated(Object(Magento\InventoryMessageBus\Model\Event\OnAggregateStockUpdated))


  #1 /app/&lt;project-id&gt;/vendor/magento/module-service-bus/Message/SingleMessageProcessor.php(81):
  call_user_func(Array, Object(Magento\InventoryMessageBus\Model\Event\OnAggregateStockUpdated))


  #2 [internal function]: Magento\ServiceBus\Message\SingleMessageProcessor-&gt;Magento\ServiceBus\Message\\{closure}(Array)


  #3 /app/&lt;project-id&gt;/vendor/magento/module-service-bus/Message/SingleMessageProcessor.php(86):
  array_map(Object(Closure), Array)


  #4 /app/&lt;project-id&gt;/vendor/magento/module-service-bus/Message/Processor.php(110):
  Magento\ServiceBus\Message\SingleMessageProcessor-&gt;process(Object(Magento\CommonMessageBus\Message\Message))


  #5 /app/t in /app/&lt;project-id&gt;/vendor/magento/module-inventory-message-bus/Handler/OnAggregateStockUpdatedSubscriber.php
  on line 64</code></pre>
<h2>Cause</h2>
<p>This occurs when the Connector attempts to process <code>magento.inventory.source_management</code> messages. The Connector attempts to process these messages as if they were a <code>magento.inventory.source_stock_management.update</code> message which does require a mode value. Because there is no mode in the <code>magento.inventory.source_mangement</code> messages, the error occurs.</p>
<h2>Solution</h2>
<p>To resolve the problem run the following SQL statement in the CLI which deletes all records in the <code>mcom_api_messages</code> table:</p>
<p><code>delete from mcom_api_messages;</code></p>
<h2>Related Reading</h2>
<p>See the OMS Docs <a href="https://omsdocs.magento.com/en/integration/connector/setup-tutorial/">OMS Connector Setup Tutorial</a>.</p>