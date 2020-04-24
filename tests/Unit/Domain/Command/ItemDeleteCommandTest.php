<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Command;

use MicroModule\Base\Domain\Command\CommandInterface;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemDeleteCommand.
 *
 * @class ItemDeleteCommandTest
 */
class ItemDeleteCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for get methods in ItemDeleteCommand.
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand::__construct
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemDeleteCommand::getItemUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command\ItemDeleteCommandDataProvider::getDataForGetItemUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function ItemDeleteCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $test = new ItemDeleteCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock);

        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getItemUuid()->toNative());
    }
}
