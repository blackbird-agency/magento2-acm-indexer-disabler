<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Blackbird\ContentManagerIndexerDisabler\Model\Indexer;

use Magento\Framework\Indexer\ActionInterface;
use Magento\Framework\Indexer\DimensionalIndexerInterface;
use Magento\Framework\Mview\ActionInterface as MviewActionInterface;
use Traversable;

/**
 * Dummy Indexer
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 *
 * @api
 * @since 100.0.2
 */
class Fulltext implements
    ActionInterface,
    MviewActionInterface,
    DimensionalIndexerInterface
{
    /**
     * Execute materialization on ids entities
     *
     * @param int[] $entityIds
     * @return void
     */
    public function execute($entityIds)
    {
        return;
    }

    /**
     * @param array $dimensions
     * @param Traversable|null $entityIds
     * @return void
     */
    public function executeByDimensions(array $dimensions, ?Traversable $entityIds = null)
    {
        return;
    }


    /**
     * @return void
     */
    public function executeFull()
    {
        return;
    }

    /**
     * @param int[] $ids
     * @return void
     */
    public function executeList(array $ids)
    {
        return;
    }

    /**
     * @param int $id
     * @return void
     */
    public function executeRow($id)
    {
        return;
    }
}
