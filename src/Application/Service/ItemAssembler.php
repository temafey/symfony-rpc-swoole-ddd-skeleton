<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Application\Service;

use Exception;
use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;

/**
 * Class ItemAssembler.
 */
class ItemAssembler
{
    /**
     * Assemble ItemDto object from ItemEntity.
     *
     * @param ItemEntity $itemEntity
     *
     * @return ItemDto
     *
     * @throws Exception
     *
     * @suppress PhanPossiblyNonClassMethodCall
     * @psalm-suppress PossiblyNullReference
     * @SuppressWarnings(PHPMD)
     */
    public function writeDto(ItemEntity $itemEntity): ItemDto
    {
        $itemDto = new ItemDto(
            $itemEntity->getParentId()->toNative(),
            $itemEntity->getName()->toNative()
        );

        $itemDto->setUuid($itemEntity->getUuid()->toNative());
        $itemDto->setStatus($itemEntity->getStatus()->toNative());

        if (null !== $itemEntity->getUrl()) {
            $itemDto->setUrl($itemEntity->getUrl()->toNative());
        }

        if (null !== $itemEntity->getCreatedAt()) {
            $itemDto->setCreatedAt((string) $itemEntity->getCreatedAt());
        }

        if (null !== $itemEntity->getUpdatedAt()) {
            $itemDto->setUpdatedAt((string) $itemEntity->getUpdatedAt());
        }

        return $itemDto;
    }
}
