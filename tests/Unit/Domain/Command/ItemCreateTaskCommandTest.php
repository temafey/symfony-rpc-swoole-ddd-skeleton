<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Command;

use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;
use MicroModule\Base\Domain\Command\CommandInterface;

/**
 * Test for class ItemCreateTaskCommand.
 *
 * @class ItemCreateTaskCommandTest
 */
class ItemCreateTaskCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for get methods in ItemCreateTaskCommand.
     *
     * @test
     *
     * @group unit
     *
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand::__construct
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateTaskCommand::getItem
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command\ItemCreateTaskCommandDataProvider::getDataForGetItemMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function ItemCreateTaskCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test = new ItemCreateTaskCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectItemMock);

        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['Item']['toNative'], $test->getItem()->toNative());
    }
}
