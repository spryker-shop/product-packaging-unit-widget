<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductPackagingUnitWidget\Dependency\Service;

use Spryker\Service\UtilEncoding\UtilEncodingServiceInterface;

class ProductPackagingUnitWidgetToUtilEncodingServiceBridge implements ProductPackagingUnitWidgetToUtilEncodingServiceInterface
{
    /**
     * @var \Spryker\Service\UtilEncoding\UtilEncodingServiceInterface
     */
    protected $utilEncodingService;

    /**
     * @param \Spryker\Service\UtilEncoding\UtilEncodingServiceInterface $utilEncodingService
     */
    public function __construct(UtilEncodingServiceInterface $utilEncodingService)
    {
        $this->utilEncodingService = $utilEncodingService;
    }

    /**
     * @param mixed $value
     * @param int|null $options
     * @param int|null $depth
     *
     * @return string|null
     */
    public function encodeJson($value, $options = null, $depth = null): ?string
    {
        return $this->utilEncodingService->encodeJson($value, $options, $depth);
    }
}