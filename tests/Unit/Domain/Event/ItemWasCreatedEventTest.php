<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Event;

use Assert\AssertionFailedException;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use Exception;
use InvalidArgumentException;

/**
 * Test for class ItemWasCreatedEvent.
 *
 * @class ItemWasCreatedEventTest
 */
class ItemWasCreatedEventTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Return Item".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent::getItem
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasCreatedEventDataProvider::getDataForGetMethods()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function testGetMethods(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectItementityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test = new ItemWasCreatedEvent($microCommonValueObjectItementityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);

        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
        self::assertSame($mockArgs['Item']['toNative'], $test->getItem()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasCreatedEventDataProvider::getDataForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws AssertionFailedException
     */
    public function deserializeShouldReturnItemEventTest(array $mockArgs): void
    {
        $data = [
            'process_uuid' => $mockArgs['UUID']['toNative'],
            'uuid' => $mockArgs['Uuid']['toNative'],
            'item' => $mockArgs['Item']['toNative'],
        ];
        $test = ItemWasCreatedEvent::deserialize($data);
        self::assertInstanceOf(ItemWasCreatedEvent::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
        self::assertSame($mockArgs['Item']['toNative'], $test->getItem()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasCreatedEventDataProvider::getDataForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws AssertionFailedException
     */
    public function eventShouldFailWhenDeserializeWithWrongDataTest(array $mockArgs): void
    {
        $data = [
            'process_uuid' => $mockArgs['Item']['toNative']['name'],
            'uuid' => $mockArgs['Uuid']['toNative'],
            'item' => $mockArgs['Item']['toNative'],
        ];
        $this->expectException(InvalidArgumentException::class);
        ItemWasCreatedEvent::deserialize($data);
    }

    /**
     * Test for "Convert event object to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasCreatedEvent::serialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasCreatedEventDataProvider::getDataForSerializeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     *
     * @throws Exception
     */
    public function serializeShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectItementityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectItemMock = $this->createDomainValueObjectItemMock($mockArgs['Item'], $mockTimes['Item']);
        $test = new ItemWasCreatedEvent($microCommonValueObjectItementityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectItemMock);
        $result = $test->serialize();

        self::assertArrayHasKey('process_uuid', $result);
        self::assertArrayHasKey('uuid', $result);
        self::assertArrayHasKey('item', $result);
        self::assertSame($mockArgs['UUID']['toNative'], $result['process_uuid']);
        self::assertSame($mockArgs['Uuid']['toNative'], $result['uuid']);
        self::assertSame($mockArgs['Item']['toNative'], $result['item']);
    }
}
