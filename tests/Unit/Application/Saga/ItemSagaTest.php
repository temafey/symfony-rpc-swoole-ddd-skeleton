<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\Saga;

use Broadway\Saga\State;
use Backend\Api\RpcSkeleton\Application\Saga\ItemSaga;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EventMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\MicroModule\BaseVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Broadway\SagaVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\League\TacticianVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemSaga.
 *
 * @class ItemSagaTest
 */
class ItemSagaTest extends UnitTestCase
{
    use BaseVendorMockHelper, ValueObjectMockHelper, EventMockHelper, TacticianVendorMockHelper, SagaVendorMockHelper;

    /**
     * Test for "@return Closure[]".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Saga\ItemSaga::configuration
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Saga\ItemSagaDataProvider::getDataForConfigurationMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function configurationShouldReturnClosureTest(array $mockArgs, array $mockTimes): void
    {
        $configurations = ItemSaga::configuration();

        foreach ($mockArgs['configuration'] as $key => $event) {
            self::arrayHasKey($key)->evaluate($configurations);
            $mockEvent = $this->{'createDomainEvent' . $key . 'Mock'}($mockArgs, $mockTimes);
            $result = $configurations[$key]($mockEvent);

            self::assertEquals($result, $event);
        }
    }

    /**
     * Test for "Handle ItemIdWasCreatedEvent event, initialize and handle ProgramDtoWasImportedEvent.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\Saga\ItemSaga::handleItemIdWasCreatedEvent
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\Saga\ItemSagaDataProvider::getDataForHandleItemIdWasCreatedEventMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function handleItemIdWasCreatedEventShouldReturnStateTest(array $mockArgs, array $mockTimes): void
    {
        $leagueTacticianCommandBusMock = $this->createLeagueTacticianCommandBusMock($mockArgs['CommandBus'], $mockTimes['CommandBus']);
        $microCommonBaseApplicationFactoryCommandFactoryInterfaceMock = $this->createMicroModuleBaseApplicationFactoryCommandFactoryInterfaceMock($mockArgs['CommandFactoryInterface'], $mockTimes['CommandFactoryInterface']);
        $test = new ItemSaga($leagueTacticianCommandBusMock, $microCommonBaseApplicationFactoryCommandFactoryInterfaceMock);
        $broadwaySagaStateMock = $this->createBroadwaySagaStateMock($mockArgs['State'], $mockTimes['State']);
        $domainEventItemIdWasCreatedEventMock = $this->createDomainEventItemIdWasCreatedEventMock($mockArgs['ItemIdWasCreatedEvent'], $mockTimes['ItemIdWasCreatedEvent']);
        $result = $test->handleItemIdWasCreatedEvent($broadwaySagaStateMock, $domainEventItemIdWasCreatedEventMock);

        self::assertInstanceOf(State::class, $result);
    }
}
