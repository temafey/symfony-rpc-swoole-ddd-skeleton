<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Factory;

use Backend\Api\RpcSkeleton\Domain\Entity\ItemEntity;
use Backend\Api\RpcSkeleton\Domain\Exception\ValueObjectInvalidException;
use Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemFactory.
 *
 * @class ItemFactoryTest
 */
class ItemFactoryTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Factory method for initialize new ItemEntity object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory::createInstance
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ItemFactoryDataProvider::getDataForCreateInstanceMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function createInstanceShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $test = new ItemFactory();
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $result = $test->createInstance($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);
        self::assertInstanceOf(ItemEntity::class, $result);
    }

    /**
     * Test for "Factory method for initialize actual ItemEntity object".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Factory\ItemFactory::makeActualInstance
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Factory\ItemFactoryDataProvider::getDataForMakeActualInstanceMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws ValueObjectInvalidException
     */
    public function makeActualInstanceShouldReturnItemEntityTest(array $mockArgs, array $mockTimes): void
    {
        $test = new ItemFactory();
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $result = $test->makeActualInstance($domainValueObjectUuidMock, $domainValueObjectItemMock);
        self::assertInstanceOf(ItemEntity::class, $result);
    }
}
