<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductPackagingUnitWidget\Dependency\Client;

use Generated\Shared\Transfer\ProductConcreteMeasurementUnitStorageTransfer;
use Generated\Shared\Transfer\ProductMeasurementUnitStorageTransfer;
use Generated\Shared\Transfer\ProductMeasurementUnitTransfer;

class ProductPackagingUnitWidgetToProductMeasurementUnitStorageClientBridge implements ProductPackagingUnitWidgetToProductMeasurementUnitStorageClientInterface
{
    /**
     * @var \Spryker\Client\ProductMeasurementUnitStorage\ProductMeasurementUnitStorageClientInterface
     */
    protected $productMeasurementUnitStorageClient;

    /**
     * @param \Spryker\Client\ProductMeasurementUnitStorage\ProductMeasurementUnitStorageClientInterface $productMeasurementUnitStorageClient
     */
    public function __construct($productMeasurementUnitStorageClient)
    {
        $this->productMeasurementUnitStorageClient = $productMeasurementUnitStorageClient;
    }

    public function findProductMeasurementUnitStorage(
        int $idProductMeasurementUnit
    ): ?ProductMeasurementUnitStorageTransfer {
        return $this->productMeasurementUnitStorageClient->findProductMeasurementUnitStorage($idProductMeasurementUnit);
    }

    public function findProductConcreteMeasurementUnitStorage(
        int $idProduct
    ): ?ProductConcreteMeasurementUnitStorageTransfer {
        return $this->productMeasurementUnitStorageClient->findProductConcreteMeasurementUnitStorage($idProduct);
    }

    public function findProductMeasurementUnit(int $idProductMeasurementUnit): ?ProductMeasurementUnitTransfer
    {
        return $this->productMeasurementUnitStorageClient->findProductMeasurementUnit($idProductMeasurementUnit);
    }

    /**
     * @param int $idProduct
     *
     * @return array<\Generated\Shared\Transfer\ProductMeasurementSalesUnitTransfer>|null
     */
    public function findProductMeasurementSalesUnitByIdProduct(int $idProduct): ?array
    {
        return $this->productMeasurementUnitStorageClient->findProductMeasurementSalesUnitByIdProduct($idProduct);
    }

    public function findProductMeasurementBaseUnitByIdProduct(int $idProduct): ?ProductMeasurementUnitTransfer
    {
        return $this->productMeasurementUnitStorageClient->findProductMeasurementBaseUnitByIdProduct($idProduct);
    }
}
