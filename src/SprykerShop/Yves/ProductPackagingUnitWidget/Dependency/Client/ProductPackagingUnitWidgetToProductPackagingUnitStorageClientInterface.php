<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductPackagingUnitWidget\Dependency\Client;

use Generated\Shared\Transfer\ItemTransfer;
use Generated\Shared\Transfer\ProductPackagingUnitStorageTransfer;

interface ProductPackagingUnitWidgetToProductPackagingUnitStorageClientInterface
{
    public function findProductPackagingUnitById(int $idProductConcrete): ?ProductPackagingUnitStorageTransfer;

    public function expandItemTransferWithDefaultPackagingUnit(ItemTransfer $itemTransfer): ItemTransfer;
}
