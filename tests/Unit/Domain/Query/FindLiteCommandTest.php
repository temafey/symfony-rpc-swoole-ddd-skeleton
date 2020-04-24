<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\QueryHandler;

use MicroModule\Base\Domain\Command\CommandInterface;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class FindLiteCommand.
 *
 * @class FindLiteCommandTest
 */
class FindLiteCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Return Uuid.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Query\FindLiteCommand::getUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query\FindLiteCommandDataProvider::getDataForGetUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function FindLiteCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectFindCriteriaMock = $this->createDomainValueObjectFindCriteriaMock($mockArgs['FindCriteria'], $mockTimes['FindCriteria']);
        $test = new FindLiteCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectFindCriteriaMock);
        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['FindCriteria']['toNative'], $test->getFindCriteria()->toNative());
    }
}
