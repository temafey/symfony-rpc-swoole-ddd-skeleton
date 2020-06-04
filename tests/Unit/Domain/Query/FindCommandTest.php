<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Query;

use Backend\Api\RpcSkeleton\Domain\Query\FindCommand;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;
use MicroModule\Base\Domain\Command\CommandInterface;

/**
 * Test for class FindCommand.
 *
 * @class FindCommandTest
 */
class FindCommandTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Return FindCriteria ValueObject.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Query\FindCommand::getFindCriteria
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query\FindCommandDataProvider::getDataForGetFindCriteriaMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function FindCommandShouldInstanceOfCommandInterfaceTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectFindCriteriaMock = $this->createDomainValueObjectFindCriteriaMock($mockArgs['FindCriteria'], $mockTimes['FindCriteria']);
        $test = new FindCommand($microCommonValueObjectIdentityUUIDMock, $domainValueObjectFindCriteriaMock);
        self::assertInstanceOf(CommandInterface::class, $test);
        self::assertSame($mockArgs['UUID']['getUuid']['toString'], $test->getUuid()->toString());
        self::assertSame($mockArgs['FindCriteria']['toNative'], $test->getFindCriteria()->toNative());
    }
}
