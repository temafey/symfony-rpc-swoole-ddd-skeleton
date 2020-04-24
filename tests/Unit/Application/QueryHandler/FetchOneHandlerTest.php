<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Application\QueryHandler;

use Exception;
use Backend\Api\RpcSkeleton\Application\Dto\ItemDto;
use Backend\Api\RpcSkeleton\Application\QueryHandler\FetchOneHandler;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\DtoMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\QueryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Application\ServiceMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class FetchOneHandler.
 *
 * @class FetchOneHandlerTest
 */
class FetchOneHandlerTest extends UnitTestCase
{
    use ValueObjectMockHelper, EntityMockHelper, RepositoryMockHelper, DtoMockHelper, ServiceMockHelper, QueryMockHelper;

    /**
     * Test for "Handle FetchOneCommand command.".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Application\QueryHandler\FetchOneHandler::handle
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Query\FetchOneHandlerDataProvider::getFetchOneHandlerData()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function handleShouldProcessCommandAndReturnMasterDataItemDtoTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryQueryRepositoryInterfaceMock = $this->createDomainRepositoryQueryRepositoryInterfaceMock($mockArgs['QueryRepositoryInterface'], $mockTimes['QueryRepositoryInterface']);
        $applicationServiceItemAssemblerMock = $this->createApplicationServiceItemAssemblerMock($mockArgs['ItemAssembler'], $mockTimes['ItemAssembler']);
        $test = new FetchOneHandler($domainRepositoryQueryRepositoryInterfaceMock, $applicationServiceItemAssemblerMock);
        $applicationQueryFetchOneCommandMock = $this->createDomainQueryFetchOneCommandMock($mockArgs['FetchOneCommand'], $mockTimes['FetchOneCommand']);
        $result = $test->handle($applicationQueryFetchOneCommandMock);
        self::assertInstanceOf(ItemDto::class, $result);
    }
}
