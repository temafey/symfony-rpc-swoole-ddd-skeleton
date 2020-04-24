<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\Projector;

use Backend\Api\RpcSkeleton\Application\Projector\ItemProjector;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EventMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\FactoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Broadway\EventHandlingVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemProjector.
 *
 * @class ItemProjectorTest
 */
class ItemProjectorTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper, EntityMockHelper, FactoryMockHelper, EventMockHelper, EventHandlingVendorMockHelper;

    /**
     * Test for "Apply ItemWasCreatedEvent event.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Projector\ItemProjector::applyItemWasCreatedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Projector\ItemProjectorDataProvider::getAddNewItemData()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function applyItemWasCreatedEventShouldAddNewItemToDatabaseAndApplyItemIdWasCreatedEventTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryCommandRepositoryInterfaceMock = $this->createDomainRepositoryCommandRepositoryInterfaceMock($mockTimes['CommandRepositoryInterface']);
        $domainRepositoryQueryRepositoryInterfaceMock = $this->createDomainRepositoryQueryRepositoryInterfaceMock($mockArgs['QueryRepositoryInterface'], $mockTimes['QueryRepositoryInterface']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $broadwayEventHandlingEventBusMock = $this->createBroadwayEventHandlingEventBusMock($mockTimes['EventBus']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = new ItemProjector($domainRepositoryCommandRepositoryInterfaceMock, $domainRepositoryQueryRepositoryInterfaceMock, $domainFactoryItemFactoryMock, $broadwayEventHandlingEventBusMock, $domainFactoryEventFactoryMock);
        $domainEventItemWasCreatedEventMock = $this->createDomainEventItemWasCreatedEventMock($mockArgs['ItemWasCreatedEvent'], $mockTimes['ItemWasCreatedEvent']);
        $test->applyItemWasCreatedEvent($domainEventItemWasCreatedEventMock);
    }

    /**
     * Test for "Apply ItemWasCreatedEvent event.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Projector\ItemProjector::applyItemWasUpdatedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Projector\ItemProjectorDataProvider::getUpdateItemData()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function applyItemWasUpdatedEventShouldUpdateItemInDatabaseTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryCommandRepositoryInterfaceMock = $this->createDomainRepositoryCommandRepositoryInterfaceMock($mockTimes['CommandRepositoryInterface']);
        $domainRepositoryQueryRepositoryInterfaceMock = $this->createDomainRepositoryQueryRepositoryInterfaceMock($mockArgs['QueryRepositoryInterface'], $mockTimes['QueryRepositoryInterface']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $broadwayEventHandlingEventBusMock = $this->createBroadwayEventHandlingEventBusMock($mockTimes['EventBus']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = new ItemProjector($domainRepositoryCommandRepositoryInterfaceMock, $domainRepositoryQueryRepositoryInterfaceMock, $domainFactoryItemFactoryMock, $broadwayEventHandlingEventBusMock, $domainFactoryEventFactoryMock);
        $domainEventItemWasUpdatedEventMock = $this->createDomainEventItemWasUpdatedEventMock($mockArgs['ItemWasUpdatedEvent'], $mockTimes['ItemWasUpdatedEvent']);
        $test->applyItemWasUpdatedEvent($domainEventItemWasUpdatedEventMock);
    }

    /**
     * Test for "Apply ItemWasCreatedEvent event.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Projector\ItemProjector::applyItemWasDeletedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Projector\ItemProjectorDataProvider::getDeleteItemData()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function applyItemWasDeletedEventShouldDeleteItemFromDatabaseTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryCommandRepositoryInterfaceMock = $this->createDomainRepositoryCommandRepositoryInterfaceMock($mockTimes['CommandRepositoryInterface']);
        $domainRepositoryQueryRepositoryInterfaceMock = $this->createDomainRepositoryQueryRepositoryInterfaceMock($mockArgs['QueryRepositoryInterface'], $mockTimes['QueryRepositoryInterface']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $broadwayEventHandlingEventBusMock = $this->createBroadwayEventHandlingEventBusMock($mockTimes['EventBus']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = new ItemProjector($domainRepositoryCommandRepositoryInterfaceMock, $domainRepositoryQueryRepositoryInterfaceMock, $domainFactoryItemFactoryMock, $broadwayEventHandlingEventBusMock, $domainFactoryEventFactoryMock);
        $domainEventItemWasDeletedEventMock = $this->createDomainEventItemWasDeletedEventMock($mockArgs['ItemWasDeletedEvent'], $mockTimes['ItemWasDeletedEvent']);
        $test->applyItemWasDeletedEvent($domainEventItemWasDeletedEventMock);
    }

    /**
     * Test for "Applies an event. The event is added to the AggregateRoot's list of uncommitted events.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Projector\ItemProjector::apply
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Projector\ItemProjectorDataProvider::getPublishEventData()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function applyShouldPublishEventToEventBusTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryCommandRepositoryInterfaceMock = $this->createDomainRepositoryCommandRepositoryInterfaceMock($mockTimes['CommandRepositoryInterface']);
        $domainRepositoryQueryRepositoryInterfaceMock = $this->createDomainRepositoryQueryRepositoryInterfaceMock($mockArgs['QueryRepositoryInterface'], $mockTimes['QueryRepositoryInterface']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $broadwayEventHandlingEventBusMock = $this->createBroadwayEventHandlingEventBusMock($mockTimes['EventBus']);
        $domainFactoryEventFactoryMock = $this->createDomainFactoryEventFactoryMock($mockArgs['EventFactory'], $mockTimes['EventFactory']);
        $test = new ItemProjector($domainRepositoryCommandRepositoryInterfaceMock, $domainRepositoryQueryRepositoryInterfaceMock, $domainFactoryItemFactoryMock, $broadwayEventHandlingEventBusMock, $domainFactoryEventFactoryMock);
        $domainEventItemEventMock = $this->createDomainEventItemEventMock($mockArgs['ItemEvent'], $mockTimes['ItemEvent']);
        $test->apply($domainEventItemEventMock);
    }
}
