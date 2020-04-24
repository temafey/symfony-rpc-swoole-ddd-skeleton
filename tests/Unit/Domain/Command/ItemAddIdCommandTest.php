<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Command;

use MicroModule\Base\Domain\Command\CommandInterface;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemAddIdCommand.
 *
 * @class ItemAddIdCommandTest
 */
class ItemAddIdCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for get methods in ItemAddIdCommand.
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand::__construct
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand::getItemUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Command\ItemAddIdCommand::getId
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Command\ItemAddIdCommandDataProvider::getItemAddIdCommandData()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function ItemAddIdCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $test = new ItemAddIdCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);

        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getItemUuid()->toNative());
        self::assertSame($mockArgs['Id']['toNative'], $test->getId()->toNative());
    }
}
