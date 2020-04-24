<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository;

use Backend\Api\RpcSkeleton\Domain\Exception\ItemDeleteException;
use Backend\Api\RpcSkeleton\Domain\Exception\ItemInsertException;
use Backend\Api\RpcSkeleton\Domain\Exception\ItemUpdateException;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\RepositoryMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class CommandRepository.
 *
 * @class CommandRepositoryTest
 */
class CommandRepositoryTest extends UnitTestCase
{
    use RepositoryMockHelper, ValueObjectMockHelper, EntityMockHelper;

    /**
     * Test for "Add new item entity".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository::add
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\CommandRepositoryDataProvider::getDataForAddMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ItemInsertException
     */
    public function addShouldCallInsertOneInStorageTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $test = new CommandRepository($domainRepositoryReadModelStoreInterfaceMock);
        $domainEntityItemEntityMock = $this->createDomainEntityItemEntityMock($mockArgs['ItemEntity'], $mockTimes['ItemEntity']);
        $test->add($domainEntityItemEntityMock);
    }

    /**
     * Test for "Update item entity".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository::update
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\CommandRepositoryDataProvider::getDataForUpdateMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ItemUpdateException
     */
    public function updateShouldCallUpdateOneStorageTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $test = new CommandRepository($domainRepositoryReadModelStoreInterfaceMock);
        $domainEntityItemEntityMock = $this->createDomainEntityItemEntityMock($mockArgs['ItemEntity'], $mockTimes['ItemEntity']);
        $test->update($domainEntityItemEntityMock);
    }

    /**
     * Test for "Delete item entity".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\CommandRepository::delete
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\CommandRepositoryDataProvider::getDataForDeleteMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ItemDeleteException
     */
    public function deleteShouldCallDeleteOneStorageTest(array $mockArgs, array $mockTimes): void
    {
        $domainRepositoryReadModelStoreInterfaceMock = $this->createDomainRepositoryReadModelStoreInterfaceMock($mockArgs['ReadModelStoreInterface'], $mockTimes['ReadModelStoreInterface']);
        $test = new CommandRepository($domainRepositoryReadModelStoreInterfaceMock);
        $domainEntityItemEntityMock = $this->createDomainEntityItemEntityMock($mockArgs['ItemEntity'], $mockTimes['ItemEntity']);
        $test->delete($domainEntityItemEntityMock);
    }
}
