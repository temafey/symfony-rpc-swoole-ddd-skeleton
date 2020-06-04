<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Factory;

use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasAddedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasUpdatedEvent;
use Backend\Api\RpcSkeleton\Domain\Factory\EventFactory;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EventMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Broadway\Domain\DomainEventStream;

/**
 * Test for class EventFactory.
 *
 * @class EventFactoryTest
 */
class EventFactoryTest extends UnitTestCase
{
    use ValueObjectMockHelper, EventMockHelper;

    /**
     * Test for "Factory method for initialize new ItemEvent object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\EventFactory::makeItemWasCreatedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\EventFactoryDataProvider::getDataForMakeItemWasCreatedEventMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeItemWasCreatedEventShouldReturnItemWasCreatedEventTest(array $mockArgs, array $mockTimes): void
    {
        $test = new EventFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $result = $test->makeItemWasCreatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);
        self::assertInstanceOf(ItemWasCreatedEvent::class, $result);
    }

    /**
     * Test for "Factory method for initialize new ItemEvent object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\EventFactory::makeItemWasUpdatedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\EventFactoryDataProvider::getDataForMakeItemWasUpdatedEventMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeItemWasUpdatedEventShouldReturnItemWasUpdatedEventTest(array $mockArgs, array $mockTimes): void
    {
        $test = new EventFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $result = $test->makeItemWasUpdatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);
        self::assertInstanceOf(ItemWasUpdatedEvent::class, $result);
    }

    /**
     * Test for "Factory method for initialize new ItemEvent object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\EventFactory::makeItemWasDeletedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\EventFactoryDataProvider::getDataForMakeItemWasDeletedEventMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeItemWasDeletedEventShouldReturnItemWasDeletedEventTest(array $mockArgs, array $mockTimes): void
    {
        $test = new EventFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $result = $test->makeItemWasDeletedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock);
        self::assertInstanceOf(ItemWasDeletedEvent::class, $result);
    }

    /**
     * Test for "Factory method for initialize new ItemEvent object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\EventFactory::makeItemIdWasCreatedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\EventFactoryDataProvider::getDataForMakeItemIdWasCreatedEventMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeItemIdWasCreatedEventShouldReturnItemIdWasCreatedEventTest(array $mockArgs, array $mockTimes): void
    {
        $test = new EventFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $result = $test->makeItemIdWasCreatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);
        self::assertInstanceOf(ItemIdWasCreatedEvent::class, $result);
    }

    /**
     * Test for "Factory method for initialize new ItemEvent object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\EventFactory::makeItemIdWasAddedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\EventFactoryDataProvider::getDataForMakeItemIdWasAddedEventMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeItemIdWasAddedEventShouldReturnItemIdWasAddedEventTest(array $mockArgs, array $mockTimes): void
    {
        $test = new EventFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $result = $test->makeItemIdWasAddedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);
        self::assertInstanceOf(ItemIdWasAddedEvent::class, $result);
    }

    /**
     * Test for "Make and return event stream aggregator".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\EventFactory::makeEventStream
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\EventFactoryDataProvider::getDataForMakeEventStreamMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function makeEventStreamShouldReturnDomainEventStreamTest(array $mockArgs, array $mockTimes): void
    {
        $test = new EventFactory();
        $domainEventItemEventMock = $this->createDomainEventItemEventMock($mockArgs['ItemEvent'], $mockTimes['ItemEvent']);
        $result = $test->makeEventStream($domainEventItemEventMock);
        self::assertInstanceOf(DomainEventStream::class, $result);
    }
}
