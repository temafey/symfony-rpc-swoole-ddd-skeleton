<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Helper;

use MicroModule\Base\Domain\ValueObject\ObjectStorage;
use MicroModule\ValueObject\Identity\UUID as ValueObjectUUID;
use MicroModule\ValueObject\Number\Integer as ValueObjectInteger;
use MicroModule\ValueObject\Number\Natural;
use MicroModule\ValueObject\StringLiteral\StringLiteral;
use MicroModule\ValueObject\Structure\Collection;
use DateTime;
use Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory;
use Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Name;
use Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Status;
use Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Url;
use Mockery;
use Mockery\MockInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Trait ValueObjectMockTrait.
 *
 * @category Tests\Unit\Utils
 */
trait ValueObjectMockTrait
{
    /**
     * Create Uuid mock.
     *
     * @param string      $className
     * @param string|null $uuid
     * @param mixed[]     $times
     *
     * @return MockInterface|Uuid
     *
     * @SuppressWarnings(PHPMD)
     */
    protected function createUuidValueObjectMock(string $className, ?string $uuid, array $times = ['toNative' => 0, 'getUuid' => 0, 'toString' => 0]): MockInterface
    {
        $mock = Mockery::mock($className);
        $uuidMockedToStringMethod = $mock
            ->shouldReceive('toNative');

        if (null === $times['toNative']) {
            $uuidMockedToStringMethod->zeroOrMoreTimes();
        } else {
            $uuidMockedToStringMethod->times($times['toNative']);
        }
        $uuidMockedGetUuidMethod = $mock
            ->shouldReceive('getUuid');

        if (null === $times['getUuid']) {
            $uuidMockedGetUuidMethod->zeroOrMoreTimes();
        } else {
            $uuidMockedGetUuidMethod->times($times['getUuid']);
        }
        $uuidMockedToStringMethod->andReturn($uuid);
        $ramseyUuidMock = $this->createRamseyUuidMock($uuid, $times['toString']);
        $uuidMockedGetUuidMethod->andReturn($ramseyUuidMock);

        return $mock;
    }

    /**
     * Create UuidInterface mock.
     *
     * @param string   $uuid
     * @param int|null $times
     *
     * @return MockInterface|UuidInterface
     *
     * @SuppressWarnings(PHPMD)
     */
    protected function createRamseyUuidMock(string $uuid, ?int $times = 0): MockInterface
    {
        $mock = Mockery::mock(UuidInterface::class);
        $uuidMockedToStringMethod = $mock
            ->shouldReceive('toString');

        if (null === $times) {
            $uuidMockedToStringMethod->zeroOrMoreTimes();
        } else {
            $uuidMockedToStringMethod->times($times);
        }
        $uuidMockedToStringMethod->andReturn($uuid);

        return $mock;
    }

    /**
     * Create StringLiteral mock.
     *
     * @param string      $className
     * @param string|null $value
     * @param int|null    $times
     *
     * @return MockInterface|StringLiteral
     */
    protected function createStringLiteralValueObjectMock(string $className, $value, ?int $times = 0): MockInterface
    {
        $mock = Mockery::mock($className);
        $mockedToNativeMethod = $mock
            ->shouldReceive('toNative');

        if (null === $times) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times);
        }
        $mockedToNativeMethod->andReturn($value);

        return $mock;
    }

    /**
     * Create Integer mock.
     *
     * @param string          $className
     * @param int|string|null $value
     * @param int|null        $times
     *
     * @return MockInterface|ValueObjectInteger
     */
    protected function createIntegerValueObjectMock(string $className, $value, ?int $times = 0): MockInterface
    {
        $mock = Mockery::mock($className);
        $mockedToNativeMethod = $mock
            ->shouldReceive('toNative');

        if (null === $times) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times);
        }
        $mockedToNativeMethod->andReturn($value);

        $mock
            ->shouldReceive('inc')
            ->times(0)
            ->andReturn(++$value);

        return $mock;
    }

    /**
     * Create Natural mock.
     *
     * @param string   $className
     * @param int|null $value
     * @param int|null $times
     *
     * @return MockInterface|ValueObjectInteger
     */
    protected function createNaturalValueObjectMock(string $className, $value, ?int $times = 0): MockInterface
    {
        return $this->createIntegerValueObjectMock($className, $value, $times);
    }

    /**
     * Create Date mock.
     *
     * @param string      $className
     * @param string|null $value
     * @param int|null    $times
     *
     * @return MockInterface|StringLiteral
     */
    protected function createDateValueObjectMock(string $className, $value, ?int $times = 0): MockInterface
    {
        $mock = Mockery::mock($className);
        $mockedToNativeMethod = $mock
            ->shouldReceive('toNative');

        if (null === $times) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times);
        }

        $mockDate = Mockery::mock(DateTime::class);
        $mockedFormatMethod = $mockDate
            ->shouldReceive('format');

        if (null === $times) {
            $mockedFormatMethod->zeroOrMoreTimes();
        } else {
            $mockedFormatMethod->times($times);
        }
        $mockedFormatMethod->andReturn($value);

        $mockedToNativeMethod->andReturn($mockDate);

        return $mock;
    }

    /**
     * Create ObjectStorage mock.
     *
     * @param string       $className
     * @param mixed[]|null $value
     * @param int|null     $times
     *
     * @return MockInterface|ObjectStorage
     */
    protected function createObjectStorageValueObjectMock(string $className, ?array $value, ?int $times = 0): MockInterface
    {
        $mock = Mockery::mock($className);
        $mockedToNativeMethod = $mock
            ->shouldReceive('toArray');

        if (null === $times) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times);
        }
        $mockedToNativeMethod->andReturn($value);

        return $mock;
    }

    /**
     * Create Collection mock.
     *
     * @param string       $className
     * @param mixed[]|null $value
     * @param mixed[]|null $times
     *
     * @return MockInterface|Collection
     */
    protected function createCollectionValueObjectMock(string $className, ?array $value, $times = null): MockInterface
    {
        $mock = Mockery::mock($className);

        if (null === $times) {
            $times = [
                'toNative' => null,
                'toArray' => null,
                'count' => null,
            ];
        } elseif (!is_array($times)) {
            $times = [
                'toNative' => $times,
                'toArray' => $times,
                'count' => null,
            ];
        }

        $valueObjects = [];

        foreach ($value as $item) {
            $valueObjects[] = StringLiteral::fromNative($item);
        }

        $mockedToNativeMethod = $mock
            ->shouldReceive('toNative');

        if (null === $times['toNative']) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times['toNative']);
        }
        $mockedToNativeMethod->andReturn($value);

        $mockedToNativeMethod = $mock
            ->shouldReceive('toArray');

        if (null === $times['toArray']) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times['toArray']);
        }
        $mockedToNativeMethod->andReturnUsing(static function ($argument = true) use ($valueObjects, $value) {
            if (false === $argument) {
                return $valueObjects;
            }

            return $value;
        });

        $mockedToNativeMethod = $mock
            ->shouldReceive('count');

        if (null === $times['count']) {
            $mockedToNativeMethod->zeroOrMoreTimes();
        } else {
            $mockedToNativeMethod->times($times['count']);
        }
        $mockedToNativeMethod->andReturn($this->createNaturalValueObjectMock(Natural::class, count($value), $times['count']));

        return $mock;
    }

    /**
     * Create Program mock.
     *
     * @param mixed[] $item
     * @param mixed[] $times
     *
     * @return MockInterface
     */
    protected function createItemValueObjectMock(array $item, array $times = []): MockInterface
    {
        $mock = Mockery::mock(Item::class);

        if (array_key_exists('toNative', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('toNative');

            if (null === $times['toNative']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times($times['toNative']);
            }
            $getValueObjectMethod->andReturn($item);
        }

        if (array_key_exists('id', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getId');

            if (null === $times['id']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['id']) ? $times['id']['getId'] : $times['id']));
            }

            if (null === $item['id']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $getValueObjectMethod->andReturn($this->createIntegerValueObjectMock(Id::class, $item['id'], (is_array($times['id']) ? $times['id']['toNative'] : $times['id'])));
            }
        }

        if (array_key_exists('parentId', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getParentId');

            if (null === $times['parentId']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['parentId']) ? $times['parentId']['getParentId'] : $times['parentId']));
            }

            if (null === $item['parentId']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $getValueObjectMethod->andReturn($this->createIntegerValueObjectMock(ParentId::class, $item['parentId'], (is_array($times['parentId']) ? $times['parentId']['toNative'] : $times['parentId'])));
            }
        }

        if (array_key_exists('name', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getName');

            if (null === $times['name']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['name']) ? $times['name']['getName'] : $times['name']));
            }

            if (null === $item['name']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $getValueObjectMethod->andReturn($this->createStringLiteralValueObjectMock(Name::class, $item['name'], (is_array($times['name']) ? $times['name']['toNative'] : $times['name'])));
            }
        }

        if (array_key_exists('status', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getStatus');

            if (null === $times['status']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['status']) ? $times['status']['getStatus'] : $times['status']));
            }

            if (null === $item['status']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $statusValueObjectMock = $this->createStatusValueObject($item['status'], $times['status']);
                $getValueObjectMethod->andReturn($statusValueObjectMock);
            }
        }

        if (array_key_exists('url', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getUrl');

            if (null === $times['url']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['url']) ? $times['url']['getUrl'] : $times['url']));
            }

            if (null === $item['url']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $getValueObjectMethod->andReturn($this->createStringLiteralValueObjectMock(Url::class, $item['url'], (is_array($times['url']) ? $times['url']['toNative'] : $times['url'])));
            }
        }

        if (array_key_exists('createdAt', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getCreatedAt');

            if (null === $times['createdAt']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['createdAt']) ? $times['createdAt']['getCreatedAt'] : $times['createdAt']));
            }

            if (null === $item['createdAt']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $getValueObjectMethod->andReturn($this->createDateValueObjectMock(CreatedAt::class, $item['createdAt'], (is_array($times['createdAt']) ? $times['createdAt']['toNative'] : $times['createdAt'])));
            }
        }

        if (array_key_exists('updatedAt', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('getUpdatedAt');

            if (null === $times['updatedAt']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['updatedAt']) ? $times['updatedAt']['getUpdatedAt'] : $times['updatedAt']));
            }

            if (null === $item['updatedAt']) {
                $getValueObjectMethod->andReturnNull();
            } else {
                $getValueObjectMethod->andReturn($this->createDateValueObjectMock(UpdatedAt::class, $item['updatedAt'], (is_array($times['updatedAt']) ? $times['updatedAt']['toNative'] : $times['createdAt'])));
            }
        }

        return $mock;
    }

    /**
     * Create ValueObjectFactory mock.
     *
     * @param mixed[] $item
     * @param mixed[] $times
     *
     * @return MockInterface
     */
    protected function createValueObjectFactoryMock(array $item, array $times = []): MockInterface
    {
        $mock = Mockery::mock(ValueObjectFactory::class);

        if (array_key_exists('item', $item)) {
            if (!isset($times['item'])) {
                $times['item'] = null;
            }
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeItem');

            if (null === $times['item']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['item']) ? $times['item']['makeItem'] : $times['item']));
            }
            $makeValueObjectMethod->andReturn($this->createItemValueObjectMock($item['item'], (is_array($times['item']) ? $times['item']['toNative'] : $times['item'])));
        }

        if (array_key_exists('uuid', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeUuid');

            if (null === $times['uuid']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['uuid']) ? $times['uuid']['makeUuid'] : $times['uuid']));
            }
            $makeValueObjectMethod->andReturn($this->createUuidValueObjectMock(ValueObjectUUID::class, $item['uuid'], (is_array($times['uuid']) ? $times['uuid']['toNative'] : $times['uuid'])));
        }

        if (array_key_exists('uuid', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeUuid');

            if (null === $times['uuid']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['uuid']) ? $times['uuid']['makeUuid'] : $times['uuid']));
            }
            $makeValueObjectMethod->andReturn($this->createUuidValueObjectMock(\Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid::class, $item['uuid'], (is_array($times['uuid']) ? $times['uuid']['toNative'] : $times['uuid'])));
        }

        if (array_key_exists('id', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeId');

            if (null === $times['id']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['id']) ? $times['id']['makeId'] : $times['id']));
            }

            if (null === $item['id']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $makeValueObjectMethod->andReturn($this->createIntegerValueObjectMock(Id::class, $item['id'], (is_array($times['id']) ? $times['id']['toNative'] : $times['id'])));
            }
        }

        if (array_key_exists('parentId', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeParentId');

            if (null === $times['parentId']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['parentId']) ? $times['parentId']['makeParentId'] : $times['parentId']));
            }

            if (null === $item['parentId']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $makeValueObjectMethod->andReturn($this->createIntegerValueObjectMock(ParentId::class, $item['parentId'], (is_array($times['parentId']) ? $times['parentId']['toNative'] : $times['parentId'])));
            }
        }

        if (array_key_exists('name', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeName');

            if (null === $times['name']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['name']) ? $times['name']['makeName'] : $times['name']));
            }

            if (null === $item['name']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $makeValueObjectMethod->andReturn($this->createStringLiteralValueObjectMock(Name::class, $item['name'], (is_array($times['name']) ? $times['name']['toNative'] : $times['name'])));
            }
        }

        if (array_key_exists('status', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeStatus');

            if (null === $times['status']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['status']) ? $times['status']['makeStatus'] : $times['status']));
            }

            if (null === $item['status']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $statusValueObjectMock = $this->createStatusValueObject($item['status'], $times['status']);
                $makeValueObjectMethod->andReturn($statusValueObjectMock);
            }
        }

        if (array_key_exists('url', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeUrl');

            if (null === $times['url']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['url']) ? $times['url']['makeUrl'] : $times['url']));
            }

            if (null === $item['url']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $makeValueObjectMethod->andReturn($this->createStringLiteralValueObjectMock(Url::class, $item['url'], (is_array($times['url']) ? $times['url']['toNative'] : $times['url'])));
            }
        }

        if (array_key_exists('createdAt', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeCreatedAt');

            if (null === $times['createdAt']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['createdAt']) ? $times['createdAt']['makeCreatedAt'] : $times['createdAt']));
            }

            if (null === $item['createdAt']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $makeValueObjectMethod->andReturn($this->createDateValueObjectMock(CreatedAt::class, $item['createdAt'], (is_array($times['createdAt']) ? $times['createdAt']['toNative'] : $times['createdAt'])));
            }
        }

        if (array_key_exists('updatedAt', $times)) {
            $makeValueObjectMethod = $mock
                ->shouldReceive('makeUpdatedAt');

            if (null === $times['updatedAt']) {
                $makeValueObjectMethod->zeroOrMoreTimes();
            } else {
                $makeValueObjectMethod->times((is_array($times['updatedAt']) ? $times['updatedAt']['makeUpdatedAt'] : $times['updatedAt']));
            }

            if (null === $item['updatedAt']) {
                $makeValueObjectMethod->andReturnNull();
            } else {
                $makeValueObjectMethod->andReturn($this->createDateValueObjectMock(UpdatedAt::class, $item['updatedAt'], (is_array($times['updatedAt']) ? $times['updatedAt']['toNative'] : $times['createdAt'])));
            }
        }

        return $mock;
    }

    /**
     * Create Status value object mock.
     *
     * @param mixed $value
     * @param mixed $times
     *
     * @return MockInterface
     */
    protected function createStatusValueObject($value, $times): MockInterface
    {
        $externalStatusValueObjectMock = $this->createStringLiteralValueObjectMock(Status::class, $value, $times['toNative']);

        if (array_key_exists('isActive', $times)) {
            $externalStatusValueObjectMethod = $externalStatusValueObjectMock
                ->shouldReceive('isActive');

            if (null === $times['isActive']) {
                $externalStatusValueObjectMethod->zeroOrMoreTimes();
            } else {
                $externalStatusValueObjectMethod->times($times['isActive']);
            }
            $externalStatusValueObjectMethod->andReturn(Status::ITEM_STATUS_ACTIVE === $value);
        }

        return $externalStatusValueObjectMock;
    }

    /**
     * Build and return array with item data mock structure and methods calling times structure.
     *
     * @param int         $id
     * @param int         $parentId
     * @param string      $name
     * @param string      $url
     * @param int         $status
     * @param string|null $createdAt
     * @param string|null $updatedAt
     *
     * @return mixed[]
     */
    protected function buildItemValueObject(
        int $id,
        int $parentId,
        string $name,
        string $url,
        int $status,
        ?string $createdAt,
        ?string $updatedAt
    ): array {
        $item = [
            'id' => $id,
            'parentId' => $parentId,
            'name' => $name,
            'url' => $url,
            'status' => $status,
            'createdAt' => $createdAt,
            'updatedAt' => $updatedAt,
        ];
        $times = [
            'toNative' => 0,
            'id' => ['getId' => 0, 'toNative' => 0],
            'parentId' => ['getParentId' => 0, 'toNative' => 0],
            'name' => ['getName' => 0, 'toNative' => 0],
            'url' => ['getUrl' => 0, 'toNative' => 0],
            'status' => ['getStatus' => 0, 'toNative' => 0],
            'createdAt' => ['getCreatedAt' => 0, 'toNative' => 0],
            'updatedAt' => ['getUpdatedAt' => 0, 'toNative' => 0],
        ];

        return [$item, $times];
    }
}
