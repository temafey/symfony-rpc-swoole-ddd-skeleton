<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Infrastructure\Repository\Storage;

use Doctrine\DBAL\ConnectionException;
use Doctrine\DBAL\DBALException;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALEventStoreException as DBALEventStoreExceptionAlias;
use Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\EntityMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Vendor\Doctrine\DBALVendorMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class DBALReadModelStore.
 *
 * @class DBALReadModelStoreTest
 */
class DBALReadModelStoreTest extends UnitTestCase
{
    use EntityMockHelper, DBALVendorMockHelper;

    /**
     * Test for "Finds an object by its primary key / identifier".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::findOne
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForFindOneMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws DBALException
     */
    public function findOneShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $uuid = $mockArgs['uuid'];
        $result = $test->findOne($uuid);

        self::assertEquals($mockArgs['findOne'], $result);
    }

    /**
     * Test for "Finds all objects in the repository".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::findAll
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForFindAllMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws DBALException
     */
    public function findAllShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $result = $test->findAll();

        self::assertEquals($mockArgs['findAll'], $result);
    }

    /**
     * Test for "Finds objects by a set of criteria".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::findBy
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForFindByMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws DBALException
     */
    public function findByShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $criteria = $mockArgs['criteria'];
        $orderBy = null;
        $limit = null;
        $offset = null;
        $result = $test->findBy($criteria, $orderBy, $limit, $offset);

        self::assertEquals($mockArgs['findBy'], $result);
    }

    /**
     * Test for "Finds a single object by a set of criteria".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::findOneBy
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForFindOneByMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws DBALException
     */
    public function findOneByShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $criteria = $mockArgs['criteria'];
        $result = $test->findOneBy($criteria);

        self::assertEquals($mockArgs['findOneBy'], $result);
    }

    /**
     * Test for "Insert new item into storage".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::insertOne
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForInsertOneMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ConnectionException
     * @throws DBALEventStoreExceptionAlias
     */
    public function insertOneShouldCallInsertInStorageInTransactionModeTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $domainEntityEntityInterfaceMock = $this->createDomainEntityEntityInterfaceMock($mockArgs['EntityInterface'], $mockTimes['EntityInterface']);
        $test->insertOne($domainEntityEntityInterfaceMock);
    }

    /**
     * Test for "Update one item in store".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::updateOne
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForUpdateOneMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ConnectionException
     * @throws DBALEventStoreExceptionAlias
     */
    public function updateOneShouldCallUpdateInStorageInTransactionModeTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $domainEntityEntityInterfaceMock = $this->createDomainEntityEntityInterfaceMock($mockArgs['EntityInterface'], $mockTimes['EntityInterface']);
        $test->updateOne($domainEntityEntityInterfaceMock);
    }

    /**
     * Test for "Append new snapshot payload into storage".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Infrastructure\Repository\Storage\DBALReadModelStore::deleteOne
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Infrastructure\Repository\Storage\DBALReadModelStoreDataProvider::getDataForDeleteOneMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ConnectionException
     * @throws DBALEventStoreExceptionAlias
     */
    public function deleteOneShouldCallDeleteInStorageInTransactionModeTest(array $mockArgs, array $mockTimes): void
    {
        $doctrineDBALConnectionMock = $this->createDoctrineDBALConnectionMock($mockArgs['Connection'], $mockTimes['Connection']);
        $tableName = $mockArgs['tableName'];
        $primaryKey = $mockArgs['primaryKey'];
        $test = new DBALReadModelStore($doctrineDBALConnectionMock, $tableName, $primaryKey);
        $domainEntityEntityInterfaceMock = $this->createDomainEntityEntityInterfaceMock($mockArgs['EntityInterface'], $mockTimes['EntityInterface']);
        $test->deleteOne($domainEntityEntityInterfaceMock);
    }
}
