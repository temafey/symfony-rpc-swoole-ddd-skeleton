<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use Exception;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Enqueue\ClientVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemAddTaskRepository.
 *
 * @class ItemAddTaskRepositoryTest
 */
class ItemAddTaskRepositoryTest extends UnitTestCase
{
    use ValueObjectMockHelper, ClientVendorMockHelper;

    /**
     * Test for "Send job task to queue".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository::addCreateTask
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemAddTaskRepositoryDataProvider::getDataForAddCreateTaskMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function addCreateTaskCallSendCommandInQueueProducerTest(array $mockArgs, array $mockTimes): void
    {
        $enqueueClientProducerInterfaceMock = $this->createEnqueueClientProducerInterfaceMock($mockArgs['ProducerInterface'], $mockTimes['ProducerInterface']);
        $test = new ItemAddTaskRepository($enqueueClientProducerInterfaceMock);
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test->addCreateTask($microCommonValueObjectIdentityUUIDMock, $domainValueObjectItemMock);
    }

    /**
     * Test for "Send job task to queue".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository::addUpdateTask
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemAddTaskRepositoryDataProvider::getDataForAddUpdateTaskMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function addUpdateTaskCallSendCommandInQueueProducedTest(array $mockArgs, array $mockTimes): void
    {
        $enqueueClientProducerInterfaceMock = $this->createEnqueueClientProducerInterfaceMock($mockArgs['ProducerInterface'], $mockTimes['ProducerInterface']);
        $test = new ItemAddTaskRepository($enqueueClientProducerInterfaceMock);
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test->addUpdateTask($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);
    }

    /**
     * Test for "Send job task to queue".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\ItemAddTaskRepository::addDeleteTask
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\ItemAddTaskRepositoryDataProvider::getDataForAddDeleteTaskMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function addDeleteTaskShouldCallSendCommandInQueueProduceTest(array $mockArgs, array $mockTimes): void
    {
        $enqueueClientProducerInterfaceMock = $this->createEnqueueClientProducerInterfaceMock($mockArgs['ProducerInterface'], $mockTimes['ProducerInterface']);
        $test = new ItemAddTaskRepository($enqueueClientProducerInterfaceMock);
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $test->addDeleteTask($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock);
    }
}
