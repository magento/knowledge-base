<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\Framework\App\Bootstrap;
use Magento\Framework\DB\Query\Generator;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Quote\Setup\QuoteSetupFactory;
use Magento\Sales\Setup\SalesSetupFactory;

if (PHP_SAPI !== 'cli') {
    echo 'Clean up script must be run as a CLI application';
    exit(1);
}

try {
    require __DIR__ . '/app/bootstrap.php';
} catch (Exception $e) {
    echo 'Autoload error: ' . $e->getMessage();
    exit(1);
}
try {
    $params = $_SERVER;
    $bootstrap = Bootstrap::create(BP, $params);
    /** @var CleanupData $cleanup */
    $cleanup = $bootstrap->getObjectManager()->get(CleanupData::class);
    $cleanup->cleanAllTables();
    exit(0);
} catch (Exception $e) {
    while ($e) {
        echo $e->getMessage();
        echo $e->getTraceAsString();
        echo "\n\n";
        $e = $e->getPrevious();
    }
    exit(1);
}

class CleanUpData
{
    const BATCH_SIZE = 1000;
    /**
     * @var Generator
     */
    private $queryGenerator;

    /**
     * @var Json
     */
    private $json;

    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;

    /**
     * @var QuoteSetupFactory
     */
    private $quoteSetupFactory;

    /**
     * @var SalesSetupFactory
     */
    private $salesSetupFactory;

    /**
     * Constructor
     * @param Json|null $json
     * @param Generator|null $queryGenerator
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param QuoteSetupFactory $quoteSetupFactory
     * @param SalesSetupFactory $salesSetupFactory
     */
    public function __construct(
        Json $json,
        Generator $queryGenerator,
        ModuleDataSetupInterface $moduleDataSetup,
        QuoteSetupFactory $quoteSetupFactory,
        SalesSetupFactory $salesSetupFactory
    ) {
        $this->queryGenerator = $queryGenerator;
        $this->json = $json;
        $this->moduleDataSetup = $moduleDataSetup;
        $this->quoteSetupFactory = $quoteSetupFactory;
        $this->salesSetupFactory = $salesSetupFactory;
    }

    /**
     * Clean up all the tables that are known to contain failed login data
     * @throws LocalizedException
     */
    public function cleanAllTables()
    {
        $results = [];
        $results['wishlist_item_option'] = $this->cleanWishlistItemOption();
        $results['quote_item_option'] = $this->cleanQuoteItemOption();
        $results['sales_order_item'] = $this->cleanSalesOrderItem();
        $results['magento_giftregistry_item_option'] = $this->cleanMagentoGiftregistryItemOption();
        $results['magento_rma_item_entity'] = $this->cleanMagentoRmaItemEntity();
        $results['negotiable_quote'] = $this->cleanNegotiableQuote();
        echo "\n# of rows cleaned up:\n";
        echo "----------------------\n";
        foreach ($results as $key => $result) {
            if ($result !== false) {
                echo $key . ": " . $result . "\n";
            }
        }
    }

    /**
     * Clean up wishlist_item_option table value column
     * @return int | boolean
     * @throws LocalizedException
     */
    private function cleanWishlistItemOption()
    {
        $tableName = $this->moduleDataSetup->getTable('wishlist_item_option');
        if ($this->moduleDataSetup->getConnection()->isTableExists($tableName)) {
            $timeStart = microtime(true);
            $rowsCleaned = 0;
            $countSelect = $this->moduleDataSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['COUNT(*)']
                )->where(
                    'value' . ' LIKE ?',
                    '%login%'
                );
            $batches =  ceil(floatval($this->moduleDataSetup->getConnection()->fetchRow($countSelect)['COUNT(*)']) / self::BATCH_SIZE);
            $select = $this->moduleDataSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['option_id', 'value']
                )
                ->where(
                    'value LIKE ?',
                    '%login%'
                );
            $iterator = $this->queryGenerator->generate('option_id', $select, self::BATCH_SIZE);
            foreach ($iterator as $key => $selectByRange) {
                $optionRows = $this->moduleDataSetup->getConnection()->fetchAll($selectByRange);
                foreach ($optionRows as $optionRow) {
                    $rowValue = $this->json->unserialize($optionRow['value']);
                    if (is_array($rowValue)
                        && array_key_exists('login', $rowValue)
                    ) {
                        unset($rowValue['login']);
                        $rowsCleaned++;
                    }
                    $rowValue = $this->json->serialize($rowValue);
                    $this->moduleDataSetup->getConnection()->update(
                        $tableName,
                        ['value' => $rowValue],
                        ['option_id = ?' => $optionRow['option_id']]
                    );
                }
                echo 'Batch ' . ($key + 1) . ' out of ' . $batches . " for " . $tableName . " completed" . PHP_EOL;
            }
            $timeEnd = microtime(true);
            echo $tableName . ' table entry clean-up completed in ' . (int)($timeEnd - $timeStart) . ' seconds' . PHP_EOL;
            return $rowsCleaned;
        }
        return false;
    }

    /**
     * Clean up quote_item_option table value column
     * @return int | boolean
     * @throws LocalizedException
     */
    private function cleanQuoteItemOption()
    {
        $quoteSetup = $this->quoteSetupFactory->create();
        $tableName = $quoteSetup->getTable('quote_item_option');
        if ($quoteSetup->getConnection()->isTableExists($tableName)) {
            $timeStart = microtime(true);
            $rowsCleaned = 0;
            $countSelect = $quoteSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['COUNT(*)']
                )->where(
                    'value' . ' LIKE ?',
                    '%login%'
                );
            $batches = ceil(floatval($quoteSetup->getConnection()->fetchRow($countSelect)['COUNT(*)']) / self::BATCH_SIZE);
            $select = $quoteSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['option_id', 'value']
                )
                ->where(
                    'value LIKE ?',
                    '%login%'
                );
            $iterator = $this->queryGenerator->generate('option_id', $select, self::BATCH_SIZE);
            foreach ($iterator as $key => $selectByRange) {
                $optionRows = $quoteSetup->getConnection()->fetchAll($selectByRange);
                foreach ($optionRows as $optionRow) {
                    $rowValue = $this->json->unserialize($optionRow['value']);
                    if (is_array($rowValue)
                        && array_key_exists('login', $rowValue)
                    ) {
                        unset($rowValue['login']);
                        $rowsCleaned++;
                    }
                    $rowValue = $this->json->serialize($rowValue);
                    $quoteSetup->getConnection()->update(
                        $tableName,
                        ['value' => $rowValue],
                        ['option_id = ?' => $optionRow['option_id']]
                    );
                }
                echo 'Batch ' . ($key + 1) . ' out of ' . $batches . " for " . $tableName . " completed" . PHP_EOL;
            }
            $timeEnd = microtime(true);
            echo $tableName . ' table entry clean-up completed in ' . (int)($timeEnd - $timeStart) . ' seconds' . PHP_EOL;
            return $rowsCleaned;
        }
        return false;
    }

    /**
     * Clean up sales_order_item table product_options column
     * @return int | boolean
     * @throws LocalizedException
     */
    private function cleanSalesOrderItem()
    {
        $salesSetup = $this->salesSetupFactory->create();
        $tableName = $salesSetup->getTable('sales_order_item');
        if ($salesSetup->getConnection()->isTableExists($tableName)) {
            $timeStart = microtime(true);
            $rowsCleaned = 0;
            $countSelect = $salesSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['COUNT(*)']
                )->where(
                    'product_options' . ' LIKE ?',
                    '%login%'
                );
            $batches =  ceil(floatval($salesSetup->getConnection()->fetchRow($countSelect)['COUNT(*)']) / self::BATCH_SIZE);
            $select = $salesSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['item_id', 'product_options']
                )
                ->where(
                    'product_options LIKE ?',
                    '%login%'
                );
            $iterator = $this->queryGenerator->generate('item_id', $select, self::BATCH_SIZE);
            foreach ($iterator as $key => $selectByRange) {
                $itemRows = $salesSetup->getConnection()->fetchAll($selectByRange);
                foreach ($itemRows as $itemRow) {
                    $rowValue = $this->json->unserialize($itemRow['product_options']);
                    if (is_array($rowValue)
                        && array_key_exists('info_buyRequest', $rowValue)
                        && array_key_exists('login', $rowValue['info_buyRequest'])
                    ) {
                        unset($rowValue['info_buyRequest']['login']);
                        $rowsCleaned++;
                    }
                    $rowValue = $this->json->serialize($rowValue);
                    $salesSetup->getConnection()->update(
                        $tableName,
                        ['product_options' => $rowValue],
                        ['item_id = ?' => $itemRow['item_id']]
                    );
                }
                echo 'Batch ' . ($key + 1) . ' out of ' . $batches . " for " . $tableName . " completed" . PHP_EOL;
            }
            $timeEnd = microtime(true);
            echo $tableName . ' table entry clean-up completed in ' . (int)($timeEnd - $timeStart) . ' seconds' . PHP_EOL;
            return $rowsCleaned;
        }
        return false;
    }

    /**
     * Clean up magento_giftregistry_item_option table value column
     * @return int | boolean
     * @throws LocalizedException
     */
    private function cleanMagentoGiftregistryItemOption()
    {
        $tableName = $this->moduleDataSetup->getTable('magento_giftregistry_item_option');
        if ($this->moduleDataSetup->getConnection()->isTableExists($tableName)) {
            $timeStart = microtime(true);
            $rowsCleaned = 0;
            $countSelect = $this->moduleDataSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['COUNT(*)']
                )->where(
                    'value' . ' LIKE ?',
                    '%login%'
                );
            $batches =  ceil(floatval($this->moduleDataSetup->getConnection()->fetchRow($countSelect)['COUNT(*)']) / self::BATCH_SIZE);
            $select = $this->moduleDataSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['option_id', 'value']
                )
                ->where(
                    'value LIKE ?',
                    '%login%'
                );
            $iterator = $this->queryGenerator->generate('option_id', $select, self::BATCH_SIZE);
            foreach ($iterator as $key => $selectByRange) {
                $optionRows = $this->moduleDataSetup->getConnection()->fetchAll($selectByRange);
                foreach ($optionRows as $optionRow) {
                    $rowValue = $this->json->unserialize($optionRow['value']);
                    if (is_array($rowValue)
                        && array_key_exists('login', $rowValue)
                    ) {
                        unset($rowValue['login']);
                        $rowsCleaned++;
                    }
                    $rowValue = $this->json->serialize($rowValue);
                    $this->moduleDataSetup->getConnection()->update(
                        $tableName,
                        ['value' => $rowValue],
                        ['option_id = ?' => $optionRow['option_id']]
                    );
                }
                echo 'Batch ' . ($key + 1) . ' out of ' . $batches . " for " . $tableName . " completed" . PHP_EOL;
            }
            $timeEnd = microtime(true);
            echo $tableName . ' table entry clean-up completed in ' . (int)($timeEnd - $timeStart) . ' seconds' . PHP_EOL;
            return $rowsCleaned;
        }
        return false;
    }

    /**
     * Clean up magento_rma_item_entity table product_options column
     * @return int | boolean
     * @throws LocalizedException
     */
    private function cleanMagentoRmaItemEntity()
    {
        $tableName = $this->moduleDataSetup->getTable('magento_rma_item_entity');
        if ($this->moduleDataSetup->getConnection()->isTableExists($tableName)) {
            $timeStart = microtime(true);
            $rowsCleaned = 0;
            $countSelect = $this->moduleDataSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['COUNT(*)']
                )->where(
                    'product_options' . ' LIKE ?',
                    '%login%'
                );
            $batches =  ceil(floatval($this->moduleDataSetup->getConnection()->fetchRow($countSelect)['COUNT(*)']) / self::BATCH_SIZE);
            $select = $this->moduleDataSetup
                ->getConnection()
                ->select()
                ->from(
                    $tableName,
                    ['entity_id', 'product_options']
                )
                ->where(
                    'product_options LIKE ?',
                    '%login%'
                );
            $iterator = $this->queryGenerator->generate('entity_id', $select, self::BATCH_SIZE);
            foreach ($iterator as $key => $selectByRange) {
                $entityRows = $this->moduleDataSetup->getConnection()->fetchAll($selectByRange);
                foreach ($entityRows as $entityRow) {
                    $rowValue = $this->json->unserialize($entityRow['product_options']);
                    if (is_array($rowValue)
                        && array_key_exists('info_buyRequest', $rowValue)
                        && array_key_exists('login', $rowValue['info_buyRequest'])
                    ) {
                        unset($rowValue['info_buyRequest']['login']);
                        $rowsCleaned++;
                    }
                    $rowValue = $this->json->serialize($rowValue);
                    $this->moduleDataSetup->getConnection()->update(
                        $tableName,
                        ['product_options' => $rowValue],
                        ['entity_id = ?' => $entityRow['entity_id']]
                    );
                }
                echo 'Batch ' . ($key + 1) . ' out of ' . $batches . " for " . $tableName . " completed" . PHP_EOL;
            }
            $timeEnd = microtime(true);
            echo $tableName . ' table entry clean-up completed in ' . (int)($timeEnd - $timeStart) . ' seconds' . PHP_EOL;
            return $rowsCleaned;
        }
        return false;
    }

    /**
     * Clean up negotiable_quote table snapshot column
     * @return int | boolean
     * @throws LocalizedException
     */
    private function cleanNegotiableQuote()
    {
        $tableName = $this->moduleDataSetup->getTable('negotiable_quote', 'checkout');
        if ($this->moduleDataSetup->getConnection('checkout')->isTableExists($tableName)) {
            $timeStart = microtime(true);
            $rowsCleaned = 0;
            $countSelect = $this->moduleDataSetup
                ->getConnection('checkout')
                ->select()
                ->from(
                    $tableName,
                    ['COUNT(*)']
                )->where(
                    'snapshot' . ' LIKE ?',
                    '%login%'
                );
            $batches =  ceil(floatval($this->moduleDataSetup->getConnection('checkout')->fetchRow($countSelect)['COUNT(*)']) / self::BATCH_SIZE);
            $select = $this->moduleDataSetup
                ->getConnection('checkout')
                ->select()
                ->from(
                    $tableName,
                    ['quote_id', 'snapshot']
                )
                ->where(
                    'snapshot LIKE ?',
                    '%login%'
                );
            $iterator = $this->queryGenerator->generate('quote_id', $select, self::BATCH_SIZE);
            foreach ($iterator as $key => $selectByRange) {
                $quoteRows = $this->moduleDataSetup->getConnection('checkout')->fetchAll($selectByRange);
                foreach ($quoteRows as $quoteRow) {
                    $rowValue = $this->json->unserialize($quoteRow['snapshot']);
                    if (is_array($rowValue)
                        && is_array($rowValue['items'])
                    ) {
                        foreach ($rowValue['items'] as $itemIndex => $item) {
                            if (is_array($item['options'])
                            ) {
                                foreach ($item['options'] as $optionIndex => $option) {
                                    $optionValue = $this->json->unserialize($option['value']);
                                    if (is_array($optionValue)
                                        && array_key_exists('login', $optionValue)
                                    ) {
                                        unset($optionValue['login']);
                                        $rowsCleaned++;
                                        $optionValue = $this->json->serialize($optionValue);
                                        $rowValue['items'][$itemIndex]['options'][$optionIndex]['value'] = $optionValue;
                                    }
                                }
                            }
                        }
                    }
                    $rowValue = $this->json->serialize($rowValue);
                    $this->moduleDataSetup->getConnection('checkout')->update(
                        $tableName,
                        ['snapshot' => $rowValue],
                        ['quote_id = ?' => $quoteRow['quote_id']]
                    );
                }
                echo 'Batch ' . ($key + 1) . ' out of ' . $batches . " for " . $tableName . " completed" . PHP_EOL;
            }
            $timeEnd = microtime(true);
            echo $tableName . ' table entry clean-up completed in ' . (int)($timeEnd - $timeStart) . ' seconds' . PHP_EOL;
            return $rowsCleaned;
        }
        return false;
    }
}
