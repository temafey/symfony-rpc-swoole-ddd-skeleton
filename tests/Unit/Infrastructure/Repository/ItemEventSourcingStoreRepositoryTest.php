<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemEventSourcingStoreRepository;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Broadway\EventHandlingVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Broadway\EventStoreVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemEventSourcingStoreRepository.
 *
 * @class ItemEventSourcingStoreRepositoryTest
 */
class ItemEventSourcingStoreRepositoryTest extends UnitTestCase
{
    use EntityMockHelper, ValueObjectMockHelper, EventStoreVendorMockHelper, EventHandlingVendorMockHelper;

    /**
     * Test for "{@inheritdoc}".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemEventSourcingStoreRepository::load
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemEventSourcingStoreRepositoryDataProvider::getDataForLoadMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function loadShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $broadwayEventStoreEventStoreMock = $this->createBroadwayEventStoreEventStoreMock($mockArgs['EventStore'], $mockTimes['EventStore']);
        $broadwayEventHandlingEventBusMock = $this->createBroadwayEventHandlingEventBusMock($mockTimes['EventBus']);
        $eventStreamDecorators = [];
        $test = new ItemEventSourcingStoreRepository($broadwayEventStoreEventStoreMock, $broadwayEventHandlingEventBusMock, $eventStreamDecorators);
        $id = $mockArgs['id'];
        $result = $test->load($id);
        self::assertInstanceOf(ItemEntity::class, $result);
    }

    /**
     * Test for "{@inheritdoc}".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemEventSourcingStoreRepository::save
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemEventSourcingStoreRepositoryDataProvider::getDataForSaveMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function saveShouldPublishEventToEventBusTest(array $mockArgs, array $mockTimes): void
    {
        $broadwayEventStoreEventStoreMock = $this->createBroadwayEventStoreEventStoreMock($mockArgs['EventStore'], $mockTimes['EventStore']);
        $broadwayEventHandlingEventBusMock = $this->createBroadwayEventHandlingEventBusMock($mockTimes['EventBus']);
        $eventStreamDecorators = [];
        $test = new ItemEventSourcingStoreRepository($broadwayEventStoreEventStoreMock, $broadwayEventHandlingEventBusMock, $eventStreamDecorators);
        $broadwayDomainAggregateRootMock = $this->createDomainEntityItemEntityMock($mockArgs['ItemEntity'], $mockTimes['ItemEntity']);
        $test->save($broadwayDomainAggregateRootMock);
    }
}
