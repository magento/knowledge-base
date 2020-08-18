This article covers the issue when you get a&nbsp;`` getMode() `` error in the<span class="wysiwyg-color-black"> CLI</span> running `` bin/magento
  oms:messages:process `` in the Magento Order Management System (OMS).

### AFFECTED PRODUCTS AND VERSIONS

This error occurs when using MCOM Connector release 3.1.1 and 3.2.0. It is resolved in MCOM Connector 3.3.0. It is not specific to an MDC or MOM version.

## Issue

When running the following command in the <span class="wysiwyg-color-black">CLI</span>:&nbsp;

`` bin/magento oms:messages:process ``

An error message similar to the following is outputted in the<span class="wysiwyg-color-black"> CLI</span>:

<pre class="line-numbers"><code class="language-clike">&lt;project-id&gt;@&lt;project-id&gt;:~$ php bin/magento oms:messages:process

Processing messages...

PHP Fatal error:&nbsp;&nbsp;Uncaught Error: Call to a member function getMode()
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

## Cause

This occurs when the Connector attempts to process `` magento.inventory.source_management `` messages. The Connector attempts to process these messages as if they were a `` magento.inventory.source_stock_management.update `` message which does require a mode value. Because there is no mode in the `` magento.inventory.source_mangement `` messages, the error occurs.

## Solution

To resolve the problem run&nbsp;the following SQL statement in the <span class="wysiwyg-color-black">CLI</span> which&nbsp;deletes all records in the `` mcom_api_messages ``&nbsp;table:

`` delete from mcom_api_messages; ``

## Related Reading

See the OMS Docs&nbsp;<a href="https://omsdocs.magento.com/en/integration/connector/setup-tutorial/" rel="noopener" target="_blank">OMS Connector Setup Tutorial</a>.