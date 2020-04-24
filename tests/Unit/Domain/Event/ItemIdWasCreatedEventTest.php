<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Event;

use Assert\AssertionFailedException;
use InvalidArgumentException;
use Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemIdWasCreatedEvent.
 *
 * @class ItemIdWasCreatedEventTest
 */
class ItemIdWasCreatedEventTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Return Id".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent::getId
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemIdWasCreatedEventDataProvider::getDataForGetMethods()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function testGetMethods(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $test = new ItemIdWasCreatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);

        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
        self::assertSame($mockArgs['Id']['toNative'], $test->getId()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemIdWasCreatedEventDataProvider::getDataForDeserializeMethod()
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
            'id' => $mockArgs['Id']['toNative'],
        ];
        $test = ItemIdWasCreatedEvent::deserialize($data);
        self::assertInstanceOf(ItemIdWasCreatedEvent::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
        self::assertSame($mockArgs['Id']['toNative'], $test->getId()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemIdWasCreatedEventDataProvider::getDataForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws AssertionFailedException
     */
    public function eventShouldFailWhenDeserializeWithWrongDataTest(array $mockArgs): void
    {
        $data = [
            'process_uuid' => (string)$mockArgs['Id']['toNative'],
            'uuid' => $mockArgs['Uuid']['toNative'],
            'id' => $mockArgs['UUID']['toNative'],
        ];
        $this->expectException(InvalidArgumentException::class);
        ItemIdWasCreatedEvent::deserialize($data);
    }

    /**
     * Test for "Convert event object to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemIdWasCreatedEvent::serialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemIdWasCreatedEventDataProvider::getDataForSerializeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function serializeShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectIdMock = $this->createDomainValueObjectIdMock($mockArgs['Id'], $mockTimes['Id']);
        $test = new ItemIdWasCreatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectIdMock);
        $result = $test->serialize();

        self::assertArrayHasKey('process_uuid', $result);
        self::assertArrayHasKey('uuid', $result);
        self::assertArrayHasKey('id', $result);
        self::assertSame($mockArgs['UUID']['toNative'], $result['process_uuid']);
        self::assertSame($mockArgs['Uuid']['toNative'], $result['uuid']);
        self::assertSame($mockArgs['Id']['toNative'], $result['id']);
    }
}
