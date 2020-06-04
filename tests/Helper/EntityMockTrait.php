<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Helper;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory;
use Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Name;
use Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId;
use Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Url;
use MicroModule\ValueObject\Identity\UUID as ValueObjectUUID;
use Mockery;
use Mockery\MockInterface;

/**
 * Trait EntityMockTrait.
 *
 * @category Tests\Unit\Utils
 */
trait EntityMockTrait
{
    /**
     * Create ItemEntity mock.
     *
     * @param mixed[] $item
     * @param mixed[] $times
     *
     * @return MockInterface
     */
    protected function createItemEntityMock(array $item, array $times = []): MockInterface
    {
        $mock = Mockery::mock(ItemEntity::class);

        if (null !== $item['id']) {
            if (!isset($times['id'])) {
                $times['id'] = null;
            }
            $getValueObjectMethod = $mock
                ->shouldReceive('getId');

            if (null === $times['id'][0]) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times($times['id'][0]);
            }
            $getValueObjectMethod->andReturn($this->createUuidValueObjectMock(Id::class, $item['id'], (is_array($times['id']) ? $times['id'][1] : $times['id'])));

            $setValueObjectMethod = $mock
                ->shouldReceive('setId');
            $setValueObjectMethod->zeroOrMoreTimes();
        }

        if (array_key_exists('processUuid', $item)) {
            if (!isset($times['processUuid'])) {
                $times['processUuid'] = null;
            }
            $getValueObjectMethod = $mock
                ->shouldReceive('getProcessUuid');

            if (null === $times['id'][0]) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times($times['processUuid'][0]);
            }
            $getValueObjectMethod->andReturn($this->createUuidValueObjectMock(ValueObjectUUID::class, $item['processUuid'], (is_array($times['processUuid']) ? $times['processUuid'][1] : $times['processUuid'])));
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

        if (array_key_exists('assembleToValueObject', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('assembleToValueObject');

            if (null === $times['assembleToValueObject']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['assembleToValueObject']) ? $times['assembleToValueObject'][0] : $times['assembleToValueObject']));
            }

            if (null === $item['assembleToValueObject']) {
                $getValueObjectMethod->andReturn(null);
            } else {
                $getValueObjectMethod->andReturn($this->createItemValueObjectMock($item['assembleToValueObject'], (is_array($times['assembleToValueObject']) ? $times['assembleToValueObject'][1] : $times['assembleToValueObject'])));
            }
        }

        if (array_key_exists('createActual', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('createActual');

            if (null === $times['createActual']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times((is_array($times['createActual']) ? $times['createActual'][0] : $times['createActual']));
            }

            if (null === $item['createActual']) {
                $getValueObjectMethod->andReturn(null);
            } else {
                $getValueObjectMethod->andReturn($this->createItemValueObjectMock($item['createActual'], (is_array($times['createActual']) ? $times['createActual'][1] : $times['createActual'])));
            }
        }

        if (array_key_exists('create', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('create');

            if (null === $times['create']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times($times['create']);
            }
        }

        if (array_key_exists('update', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('update');

            if (null === $times['update']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times($times['update']);
            }
        }

        if (array_key_exists('delete', $times)) {
            $getValueObjectMethod = $mock
                ->shouldReceive('delete');

            if (null === $times['delete']) {
                $getValueObjectMethod->zeroOrMoreTimes();
            } else {
                $getValueObjectMethod->times($times['delete']);
            }
        }

        return $mock;
    }

    /**
     * Create ItemFactory mock.
     *
     * @param mixed[] $item
     * @param mixed[] $times
     *
     * @return MockInterface
     */
    protected function createItemFactoryMock(array $item, array $times = ['createInstance' => 0, 'makeActualInstance' => 0, 'item' => []]): MockInterface
    {
        $mock = Mockery::mock(ItemFactory::class);
        $makeInstanceMethod = $mock
            ->shouldReceive('createInstance');

        if (null === $times['createInstance']) {
            $makeInstanceMethod->zeroOrMoreTimes();
        } else {
            $makeInstanceMethod->times($times[0]);
        }
        $makeInstanceMethod->andReturn($this->createItemEntityMock($item, $times['item']));

        $makeInstanceMethod = $mock
            ->shouldReceive('makeActualInstance');

        if (null === $times['makeActualInstance']) {
            $makeInstanceMethod->zeroOrMoreTimes();
        } else {
            $makeInstanceMethod->times($times[2]);
        }
        $makeInstanceMethod->andReturn($this->createItemEntityMock($item, $times['item']));

        return $mock;
    }
}
