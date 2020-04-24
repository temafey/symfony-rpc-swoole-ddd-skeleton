<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Command;

use MicroModule\Base\Domain\Command\CommandInterface;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemUpdateTaskCommand.
 *
 * @class ItemUpdateTaskCommandTest
 */
class ItemUpdateTaskCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for get methods in ItemUpdateTaskCommand.
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand::__construct
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemUpdateTaskCommand::getItemUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command\ItemUpdateTaskCommandDataProvider::getDataForGetItemUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function ItemUpdateTaskCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test = new ItemUpdateTaskCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);

        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getItemUuid()->toNative());
        self::assertSame($mockArgs['Item']['toNative'], $test->getItem()->toNative());
    }
}
