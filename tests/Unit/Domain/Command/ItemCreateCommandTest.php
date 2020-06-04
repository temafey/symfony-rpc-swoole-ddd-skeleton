<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Command;

use Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;
use MicroModule\Base\Domain\Command\CommandInterface;

/**
 * Test for class ItemCreateCommand.
 *
 * @class ItemCreateCommandTest
 */
class ItemCreateCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for get methods in ItemCreateCommand.
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand::__construct
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand::getItemUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemCreateCommand::getItem
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command\ItemCreateCommandDataProvider::getDataForGetItemUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function ItemCreateCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test = new ItemCreateCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);

        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getItemUuid()->toNative());
        self::assertSame($mockArgs['Item']['toNative'], $test->getItem()->toNative());
    }
}
