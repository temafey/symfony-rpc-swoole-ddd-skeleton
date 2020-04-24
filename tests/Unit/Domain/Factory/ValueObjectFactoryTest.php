<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Factory;

use MicroModule\ValueObject\DateTime\Exception\InvalidDateException;
use Exception;
use Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory;
use Backend\Api\RpcSkeleton\Domain\ValueObject\CreatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Id;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Item;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Name;
use Backend\Api\RpcSkeleton\Domain\ValueObject\ParentId;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Status;
use Backend\Api\RpcSkeleton\Domain\ValueObject\UpdatedAt;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Url;
use Backend\Api\RpcSkeleton\Domain\ValueObject\Uuid;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ValueObjectFactory.
 *
 * @class ValueObjectFactoryTest
 */
class ValueObjectFactoryTest extends UnitTestCase
{
    /**
     * Test for "Factory method for initialize new Item value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeItem
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeItemMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws Exception
     */
    public function makeItemShouldReturnItemTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $item = $mockArgs['Item'];
        $result = $test->makeItem($item);
        self::assertInstanceOf(Item::class, $result);
    }

    /**
     * Test for "Factory method for initialize new itemId value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeId
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeIdMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function makeIdShouldReturnIdTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $itemId = $mockArgs['itemId'];
        $result = $test->makeId($itemId);
        self::assertInstanceOf(Id::class, $result);
    }

    /**
     * Test for "Factory method for initialize new uuid value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeUuidMethod()
     *
     * @param mixed[] $mockArgs
     * @throws Exception
     */
    public function makeUuidShouldReturnUuidTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $uuid = $mockArgs['uuid'];
        $result = $test->makeUuid($uuid);
        self::assertInstanceOf(Uuid::class, $result);
    }

    /**
     * Test for "Factory method for initialize new ParentId value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeParentId
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeParentIdMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function makeParentIdShouldReturnParentIdTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $parentId = $mockArgs['parentId'];
        $result = $test->makeParentId($parentId);
        self::assertInstanceOf(ParentId::class, $result);
    }

    /**
     * Test for "Factory method for initialize new Name value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeName
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeNameMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function makeNameShouldReturnNameTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $name = $mockArgs['name'];
        $result = $test->makeName($name);
        self::assertInstanceOf(Name::class, $result);
    }

    /**
     * Test for "Factory method for initialize new Url value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeUrl
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeUrlMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function makeUrlShouldReturnUrlTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $url = $mockArgs['url'];
        $result = $test->makeUrl($url);
        self::assertInstanceOf(Url::class, $result);
    }

    /**
     * Test for "Factory method for initialize new Status value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeStatus
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeStatusMethod()
     *
     * @param mixed[] $mockArgs
     */
    public function makeStatusShouldReturnStatusTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $status = $mockArgs['status'];
        $result = $test->makeStatus($status);
        self::assertInstanceOf(Status::class, $result);
    }

    /**
     * Test for "Factory method for initialize new CreatedAt value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeCreatedAt
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeCreatedAtMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     */
    public function makeCreatedAtShouldReturnCreatedAtTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $createdAt = $mockArgs['createdAt'];
        $result = $test->makeCreatedAt($createdAt);
        self::assertInstanceOf(CreatedAt::class, $result);
    }

    /**
     * Test for "Factory method for initialize new UpdatedAt value object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ValueObjectFactory::makeUpdatedAt
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ValueObjectFactoryDataProvider::getDataForMakeUpdatedAtMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws InvalidDateException
     */
    public function makeUpdatedAtShouldReturnUpdatedAtTest(array $mockArgs): void
    {
        $test = new ValueObjectFactory();
        $updatedAt = $mockArgs['updatedAt'];
        $result = $test->makeUpdatedAt($updatedAt);
        self::assertInstanceOf(UpdatedAt::class, $result);
    }
}
