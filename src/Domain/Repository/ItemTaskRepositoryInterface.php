<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Repository;

use MicroModule\ValueObject\Identity\UUID as ProcessUuid;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Interface ItemTaskRepositoryInterface.
 *
 * @category Domain\Query\Repository
 */
interface ItemTaskRepositoryInterface
{
    /**
     * Send job task to queue.
     *
     * @param ProcessUuid $processUuid
     * @param Item        $item
     */
    public function addCreateTask(ProcessUuid $processUuid, Item $item): void;

    /**
     * Send job task to queue.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $itemUuid
     * @param Item        $item
     */
    public function addUpdateTask(ProcessUuid $processUuid, Uuid $itemUuid, Item $item): void;

    /**
     * Send job task to queue.
     *
     * @param ProcessUuid $processUuid
     * @param Uuid        $itemUuid
     */
    public function addDeleteTask(ProcessUuid $processUuid, Uuid $itemUuid): void;
}
