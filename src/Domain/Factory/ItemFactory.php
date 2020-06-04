<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Factory;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item as ItemValueObject;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use MicroModule\ValueObject\Identity\UUID as ProcessUuid;

/**
 * Class ItemFactory.
 *
 * @category Domain\Factory
 */
class ItemFactory
{
    /**
     * Factory method for initialize new ItemEntity object.
     *
     * @param ProcessUuid     $processUuid
     * @param Uuid            $uuid
     * @param ItemValueObject $itemValueObject
     *
     * @return ItemEntity
     */
    public function createInstance(
        ProcessUuid $processUuid,
        Uuid $uuid,
        ItemValueObject $itemValueObject
    ): ItemEntity {
        return ItemEntity::create($processUuid, $uuid, $itemValueObject);
    }

    /**
     * Factory method for initialize actual ItemEntity object.
     *
     * @param Uuid            $uuid
     * @param ItemValueObject $itemValueObject
     *
     * @return ItemEntity
     *
     * @throws ValueObjectInvalidException
     */
    public function makeActualInstance(Uuid $uuid, ItemValueObject $itemValueObject): ItemEntity
    {
        return ItemEntity::createActual($uuid, $itemValueObject);
    }
}
