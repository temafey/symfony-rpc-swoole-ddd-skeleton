<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\QueryHandler;

use Backend\Api\RpcSkeleton\Application\QueryHandler\FindHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\DtoMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\ServiceMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\QueryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;

/**
 * Test for class FindHandler.
 *
 * @class FindHandlerTest
 */
class FindHandlerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, RepositoryMockHelper, DtoMockHelper, ServiceMockHelper, QueryMockHelper;

    /**
     * Test for "Handle FindCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\QueryHandler\FindHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Application\QueryHandler\FindHandlerDataProvider::getDataForHandleMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function handleShouldProcessCommandAndReturnItemDtoTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryQueryRepositoryInterfaceMock = $this->createDomainRepositoryQueryRepositoryInterfaceMock($mockArgs['QueryRepositoryInterface'], $mockTimes['QueryRepositoryInterface']);
        $applicationServiceItemAssemblerMock = $this->createApplicationServiceItemAssemblerMock($mockArgs['ItemAssembler'], $mockTimes['ItemAssembler']);
        $test = new FindHandler($domainRepositoryQueryRepositoryInterfaceMock, $applicationServiceItemAssemblerMock);
        $handles = [];

        foreach ($mockArgs['handle'] as $i => $domainDtoItemDtoMock) {
            $handles[] = $this->createApplicationDtoItemDtoMock($domainDtoItemDtoMock, $mockTimes['handle'][$i]);
        }
        $applicationQueryFindCommandMock = $this->createDomainQueryFindCommandMock($mockArgs['FindCommand'], $mockTimes['FindCommand']);
        $result = $test->handle($applicationQueryFindCommandMock);
        self::assertEquals($handles, $result);
    }
}
