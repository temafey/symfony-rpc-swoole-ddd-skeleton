<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Domain\Factory;

use Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Name;
use Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Status;
use Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Url;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Exception;
use MicroModule\ValueObject\DateTime\Exception\InvalidDateException;

/**
 * Class ValueObjectFactory.
 *
 * @category Domain\Factory
 *
 * @SuppressWarnings(PHPMD)
 */
class ValueObjectFactory
{
    /**
     * Factory method for initialize new Item value object.
     *
     * @param mixed $item
     *
     * @return Item
     *
     * @throws Exception
     */
    public function makeItem($item): Item
    {
        return Item::fromNative($item);
    }

    /**
     * Factory method for initialize new itemId value object.
     *
     * @param int|null $itemId
     *
     * @return Id
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeId(?int $itemId = null): Id
    {
        return Id::fromNative($itemId);
    }

    /**
     * Factory method for initialize new uuid value object.
     *
     * @param string|null $uuid
     *
     * @return Uuid
     *
     * @throws Exception
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeUuid(?string $uuid = null): Uuid
    {
        return Uuid::fromNative($uuid);
    }

    /**
     * Factory method for initialize new ParentId value object.
     *
     * @param int $parentId
     *
     * @return ParentId
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeParentId(int $parentId): ParentId
    {
        return ParentId::fromNative($parentId);
    }

    /**
     * Factory method for initialize new Name value object.
     *
     * @param string $name
     *
     * @return Name
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeName(string $name): Name
    {
        return Name::fromNative($name);
    }

    /**
     * Factory method for initialize new Url value object.
     *
     * @param string $url
     *
     * @return Url
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeUrl(string $url): Url
    {
        return Url::fromNative($url);
    }

    /**
     * Factory method for initialize new Status value object.
     *
     * @param int $status
     *
     * @return Status
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeStatus(int $status): Status
    {
        return Status::fromNative($status);
    }

    /**
     * Factory method for initialize new CreatedAt value object.
     *
     * @param string $createdAt
     *
     * @return CreatedAt
     *
     * @throws InvalidDateException
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeCreatedAt(string $createdAt): CreatedAt
    {
        return CreatedAt::fromNative($createdAt);
    }

    /**
     * Factory method for initialize new UpdatedAt value object.
     *
     * @param string $updatedAt
     *
     * @return UpdatedAt
     *
     * @throws InvalidDateException
     *
     * @suppress PhanPartialTypeMismatchReturn
     */
    public function makeUpdatedAt(string $updatedAt): UpdatedAt
    {
        return UpdatedAt::fromNative($updatedAt);
    }
}
