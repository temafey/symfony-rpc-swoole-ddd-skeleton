<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Service;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;

/**
 * Interface ItemServiceInterface.
 *
 * @category Domain\Service
 */
interface ItemServiceInterface
{
    /**
     * Make and return ItemEntity object.
     *
     * @param UUID $uuid
     * @param Uuid $id
     * @param Item $item
     *
     * @return ItemEntity
     */
    public function getItem(UUID $uuid, Uuid $id, Item $item): ItemEntity;

    /**
     * Make and return ItemEntity object.
     *
     * @param UUID $uuid
     * @param Uuid $id
     *
     * @return ItemEntity
     */
    public function createItem(UUID $uuid, Uuid $id): ItemEntity;

    /**
     * Check is item was imported and assemble it with new data.
     *
     * @param ItemEntity $itemEntity
     *
     * @return ItemEntity
     */
    public function assembleItem(ItemEntity $itemEntity): ItemEntity;
}
