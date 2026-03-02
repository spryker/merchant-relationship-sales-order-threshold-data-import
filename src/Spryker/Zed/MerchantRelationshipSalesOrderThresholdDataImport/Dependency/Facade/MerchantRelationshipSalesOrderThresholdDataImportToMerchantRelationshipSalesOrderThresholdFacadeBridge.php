<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\MerchantRelationshipSalesOrderThresholdDataImport\Dependency\Facade;

use Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer;

class MerchantRelationshipSalesOrderThresholdDataImportToMerchantRelationshipSalesOrderThresholdFacadeBridge implements MerchantRelationshipSalesOrderThresholdDataImportToMerchantRelationshipSalesOrderThresholdFacadeInterface
{
    /**
     * @var \Spryker\Zed\MerchantRelationshipSalesOrderThreshold\Business\MerchantRelationshipSalesOrderThresholdFacadeInterface
     */
    protected $merchantRelationshipSalesOrderThresholdFacade;

    /**
     * @param \Spryker\Zed\MerchantRelationshipSalesOrderThreshold\Business\MerchantRelationshipSalesOrderThresholdFacadeInterface $merchantRelationshipSalesOrderThresholdFacade
     */
    public function __construct($merchantRelationshipSalesOrderThresholdFacade)
    {
        $this->merchantRelationshipSalesOrderThresholdFacade = $merchantRelationshipSalesOrderThresholdFacade;
    }

    public function saveMerchantRelationshipSalesOrderThreshold(
        MerchantRelationshipSalesOrderThresholdTransfer $merchantRelationshipSalesOrderThresholdTransfer
    ): MerchantRelationshipSalesOrderThresholdTransfer {
        return $this->merchantRelationshipSalesOrderThresholdFacade->saveMerchantRelationshipSalesOrderThreshold(
            $merchantRelationshipSalesOrderThresholdTransfer,
        );
    }
}
