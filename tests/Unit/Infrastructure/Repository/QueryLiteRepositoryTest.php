<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use Exception;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryLiteRepository;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class QueryLiteRepository.
 *
 * @class QueryLiteRepositoryTest
 */
class QueryLiteRepositoryTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper;

    /**
     * Test for "Find and return item entity by item uuid".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryLiteRepository::findByUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\QueryLiteRepositoryDataProvider::getDataForFindByUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function findByUuidShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $test = new QueryLiteRepository($domainRepositoryReadModelStoreInterfaceMock);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $result = $test->findByUuid($domainValueObjectUuidMock);

        self::assertEquals($mockArgs['ReadModelStoreInterface']['findOne'], $result);
    }

    /**
     * Test for "Find and return array of ItemEntity by FindCriteria".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryLiteRepository::findByCriteria
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\QueryLiteRepositoryDataProvider::getDataForFindByCriteriaMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function findByCriteriaShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $test = new QueryLiteRepository($domainRepositoryReadModelStoreInterfaceMock);
        $domainValueObjectFindCriteriaMock = $this->createDomainValueObjectFindCriteriaMock($mockArgs['FindCriteria'], $mockTimes['FindCriteria']);
        $result = $test->findByCriteria($domainValueObjectFindCriteriaMock);

        self::assertEquals($mockArgs['ReadModelStoreInterface']['findBy'], $result);
    }
}
