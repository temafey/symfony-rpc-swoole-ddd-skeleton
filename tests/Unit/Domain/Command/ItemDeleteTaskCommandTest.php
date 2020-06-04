<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Command;

use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;
use MicroModule\Base\Domain\Command\CommandInterface;

/**
 * Test for class ItemDeleteTaskCommand.
 *
 * @class ItemDeleteTaskCommandTest
 */
class ItemDeleteTaskCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for get methods in ItemDeleteTaskCommand.
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand::__construct
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteTaskCommand::getItemUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command\ItemDeleteTaskCommandDataProvider::getDataForGetItemUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function ItemDeleteTaskCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $test = new ItemDeleteTaskCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock);

        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getItemUuid()->toNative());
    }
}
