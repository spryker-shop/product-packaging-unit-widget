<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductPackagingUnitWidget\Dependency\Service;

use Generated\Shared\Transfer\NumberFormatConfigTransfer;

interface ProductPackagingUnitWidgetToUtilNumberServiceInterface
{
    public function getNumberFormatConfig(?string $locale = null): NumberFormatConfigTransfer;
}
