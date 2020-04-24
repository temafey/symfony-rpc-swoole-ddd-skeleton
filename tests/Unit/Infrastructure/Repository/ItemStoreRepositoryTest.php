<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use MicroModule\Snapshotting\EventSourcing\SnapshottingEventSourcingRepositoryException;
use Broadway\Domain\AggregateRoot;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemStoreRepository;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\MicroModule\SnapshottingVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Broadway\EventSourcingVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Broadway\EventStoreVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemStoreRepository.
 *
 * @class ItemStoreRepositoryTest
 */
class ItemStoreRepositoryTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, EventSourcingVendorMockHelper, EventStoreVendorMockHelper, SnapshottingVendorMockHelper;

    /**
     * Test for "Return ItemEntity with applied events".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemStoreRepository::get
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemStoreRepositoryDataProvider::getDataForGetMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function getShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $broadwayEventSourcingEventSourcingRepositoryMock = $this->createBroadwayEventSourcingEventSourcingRepositoryMock($mockArgs['EventSourcingRepository'], $mockTimes['EventSourcingRepository']);
        $broadwayEventStoreEventStoreMock = $this->createBroadwayEventStoreEventStoreMock($mockArgs['EventStore'], $mockTimes['EventStore']);
        $microCommonSnapshottingSnapshotSnapshotRepositoryInterfaceMock = $this->createMicroModuleSnapshotRepositoryInterfaceMock($mockArgs['SnapshotRepositoryInterface'], $mockTimes['SnapshotRepositoryInterface']);
        $microCommonSnapshottingSnapshotTriggerInterfaceMock = $this->createMicroModuleSnapshotTriggerInterfaceMock($mockArgs['TriggerInterface'], $mockTimes['TriggerInterface']);
        $test = new ItemStoreRepository($broadwayEventSourcingEventSourcingRepositoryMock, $broadwayEventStoreEventStoreMock, $microCommonSnapshottingSnapshotSnapshotRepositoryInterfaceMock, $microCommonSnapshottingSnapshotTriggerInterfaceMock);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $result = $test->get($domainValueObjectUuidMock);

        self::assertInstanceOf(ItemEntity::class, $result);
    }

    /**
     * Test for "Save ItemEntity last uncommitted events".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemStoreRepository::store
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemStoreRepositoryDataProvider::getDataForStoreMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws SnapshottingEventSourcingRepositoryException
     */
    public function storeShouldCallSaveInStorageTest(array $mockArgs, array $mockTimes): void
    {
        $broadwayEventSourcingEventSourcingRepositoryMock = $this->createBroadwayEventSourcingEventSourcingRepositoryMock($mockArgs['EventSourcingRepository'], $mockTimes['EventSourcingRepository']);
        $broadwayEventStoreEventStoreMock = $this->createBroadwayEventStoreEventStoreMock($mockArgs['EventStore'], $mockTimes['EventStore']);
        $microCommonSnapshottingSnapshotSnapshotRepositoryInterfaceMock = $this->createMicroModuleSnapshotRepositoryInterfaceMock($mockArgs['SnapshotRepositoryInterface'], $mockTimes['SnapshotRepositoryInterface']);
        $microCommonSnapshottingSnapshotTriggerInterfaceMock = $this->createMicroModuleSnapshotTriggerInterfaceMock($mockArgs['TriggerInterface'], $mockTimes['TriggerInterface']);
        $test = new ItemStoreRepository($broadwayEventSourcingEventSourcingRepositoryMock, $broadwayEventStoreEventStoreMock, $microCommonSnapshottingSnapshotSnapshotRepositoryInterfaceMock, $microCommonSnapshottingSnapshotTriggerInterfaceMock);
        $domainEntityItemEntityMock = $this->createDomainEntityItemEntityMock($mockArgs['ItemEntity'], $mockTimes['ItemEntity']);
        $test->store($domainEntityItemEntityMock);
    }

    /**
     * Test for "{@inheritdoc}".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemStoreRepository::load
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemStoreRepositoryDataProvider::getDataForLoadMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function loadShouldReturnAggregateRootTest(array $mockArgs, array $mockTimes): void
    {
        $broadwayEventSourcingEventSourcingRepositoryMock = $this->createBroadwayEventSourcingEventSourcingRepositoryMock($mockArgs['EventSourcingRepository'], $mockTimes['EventSourcingRepository']);
        $broadwayEventStoreEventStoreMock = $this->createBroadwayEventStoreEventStoreMock($mockArgs['EventStore'], $mockTimes['EventStore']);
        $microCommonSnapshottingSnapshotSnapshotRepositoryInterfaceMock = $this->createMicroModuleSnapshotRepositoryInterfaceMock($mockArgs['SnapshotRepositoryInterface'], $mockTimes['SnapshotRepositoryInterface']);
        $microCommonSnapshottingSnapshotTriggerInterfaceMock = $this->createMicroModuleSnapshotTriggerInterfaceMock($mockArgs['TriggerInterface'], $mockTimes['TriggerInterface']);
        $test = new ItemStoreRepository($broadwayEventSourcingEventSourcingRepositoryMock, $broadwayEventStoreEventStoreMock, $microCommonSnapshottingSnapshotSnapshotRepositoryInterfaceMock, $microCommonSnapshottingSnapshotTriggerInterfaceMock);
        $id = $mockArgs['id'];
        $result = $test->load($id);

        self::assertInstanceOf(AggregateRoot::class, $result);
    }
}
