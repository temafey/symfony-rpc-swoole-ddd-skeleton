<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use Exception;
use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryRepository;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\FactoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class QueryRepository.
 *
 * @class QueryRepositoryTest
 */
class QueryRepositoryTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper, FactoryMockHelper, EntityMockHelper;

    /**
     * Test for "Find and return item entity by item uuid".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryRepository::findByUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\QueryRepositoryDataProvider::getDataForFindByUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function findByUuidShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $domainFactoryValueObjectFactoryMock = $this->createDomainFactoryValueObjectFactoryMock($mockArgs['ValueObjectFactory'], $mockTimes['ValueObjectFactory']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $test = new QueryRepository($domainRepositoryReadModelStoreInterfaceMock, $domainFactoryValueObjectFactoryMock, $domainFactoryItemFactoryMock);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $result = $test->findByUuid($domainValueObjectUuidMock);

        self::assertInstanceOf(ItemEntity::class, $result);
    }

    /**
     * Test for "Find and return array of ItemEntity by FindCriteria".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\QueryRepository::findByCriteria
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\QueryRepositoryDataProvider::getDataForFindByCriteriaMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function findByCriteriaShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $domainFactoryValueObjectFactoryMock = $this->createDomainFactoryValueObjectFactoryMock($mockArgs['ValueObjectFactory'], $mockTimes['ValueObjectFactory']);
        $domainFactoryItemFactoryMock = $this->createDomainFactoryItemFactoryMock($mockArgs['ItemFactory'], $mockTimes['ItemFactory']);
        $test = new QueryRepository($domainRepositoryReadModelStoreInterfaceMock, $domainFactoryValueObjectFactoryMock, $domainFactoryItemFactoryMock);

        $domainValueObjectFindCriteriaMock = $this->createDomainValueObjectFindCriteriaMock($mockArgs['FindCriteria'], $mockTimes['FindCriteria']);
        $result = $test->findByCriteria($domainValueObjectFindCriteriaMock);

        self::assertCount(1, $result);

        foreach ($mockArgs['findByCriteria'] as $i => $domainEntityExpected) {
            self::assertEquals($domainEntityExpected['getUuid']['toNative'], $result[$i]->getUuid()->toNative());
            self::assertEquals($domainEntityExpected['getId']['toNative'], $result[$i]->getId()->toNative());
            self::assertEquals($domainEntityExpected['getName']['toNative'], $result[$i]->getName()->toNative());
            self::assertEquals($domainEntityExpected['getParentId']['toNative'], $result[$i]->getParentId()->toNative());
            self::assertEquals($domainEntityExpected['getStatus']['toNative'], $result[$i]->getStatus()->toNative());
            self::assertEquals($domainEntityExpected['getUrl']['toNative'], $result[$i]->getUrl()->toNative());
        }
    }
}
