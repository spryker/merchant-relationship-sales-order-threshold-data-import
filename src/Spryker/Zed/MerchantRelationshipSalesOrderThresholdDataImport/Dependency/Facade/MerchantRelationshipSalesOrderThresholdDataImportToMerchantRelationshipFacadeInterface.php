<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\MerchantRelationshipSalesOrderThresholdDataImport\Dependency\Facade;

use Generated\Shared\Transfer\MerchantRelationshipTransfer;

interface MerchantRelationshipSalesOrderThresholdDataImportToMerchantRelationshipFacadeInterface
{
    public function findMerchantRelationshipByKey(
        MerchantRelationshipTransfer $merchantRelationshipTransfer
    ): ?MerchantRelationshipTransfer;
}
