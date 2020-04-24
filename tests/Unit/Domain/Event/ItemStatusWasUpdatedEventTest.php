<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Event;

use Assert\AssertionFailedException;
use Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent;
use Backend\Api\RpcSkeleton\Domain\Exception\StatusInvalidException;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;
use TypeError;

/**
 * Test for class ItemStatusWasUpdatedEvent.
 *
 * @class ItemStatusWasUpdatedEventTest
 */
class ItemStatusWasUpdatedEventTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Return Id".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::getUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::getStatus
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemStatusWasUpdatedEventDataProvider::getDataForGetMethods()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function testGetMethods(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectStatusMock = $this->createDomainValueObjectStatusMock($mockArgs['Status'], $mockTimes['Status']);
        $test = new ItemStatusWasUpdatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectStatusMock);

        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
        self::assertSame($mockArgs['Status']['toNative'], $test->getStatus()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemStatusWasUpdatedEventDataProvider::getDataForDeserializeMethod()
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
            'status' => $mockArgs['Status']['toNative'],
        ];
        $test = ItemStatusWasUpdatedEvent::deserialize($data);
        self::assertInstanceOf(ItemStatusWasUpdatedEvent::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
        self::assertSame($mockArgs['Status']['toNative'], $test->getStatus()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemStatusWasUpdatedEventDataProvider::getDataForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws AssertionFailedException
     */
    public function eventShouldFailWithTypeErrorWhenDeserializeWithWrongDataTest(array $mockArgs): void
    {
        $data = [
            'process_uuid' => (string)$mockArgs['UUID']['toNative'],
            'uuid' => $mockArgs['Uuid']['toNative'],
            'status' => $mockArgs['UUID']['toNative'],
        ];
        $this->expectException(TypeError::class);
        ItemStatusWasUpdatedEvent::deserialize($data);
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemStatusWasUpdatedEventDataProvider::getDataWithInvalidStatusForDeserializeMethod()
     *
     * @param mixed[] $mockArgs
     *
     * @throws AssertionFailedException
     */
    public function eventShouldFailWithStatusInvalidExceptionWhenDeserializeWithWrongDataTest(array $mockArgs): void
    {
        $data = [
            'process_uuid' => (string)$mockArgs['UUID']['toNative'],
            'uuid' => $mockArgs['Uuid']['toNative'],
            'status' => $mockArgs['Status']['toNative'],
        ];
        $this->expectException(StatusInvalidException::class);
        ItemStatusWasUpdatedEvent::deserialize($data);
    }

    /**
     * Test for "Convert event object to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemStatusWasUpdatedEvent::serialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemStatusWasUpdatedEventDataProvider::getDataForSerializeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function serializeShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $domainValueObjectStatusMock = $this->createDomainValueObjectStatusMock($mockArgs['Status'], $mockTimes['Status']);
        $test = new ItemStatusWasUpdatedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock, $domainValueObjectStatusMock);
        $result = $test->serialize();

        self::assertArrayHasKey('process_uuid', $result);
        self::assertArrayHasKey('uuid', $result);
        self::assertArrayHasKey('status', $result);
        self::assertSame($mockArgs['UUID']['toNative'], $result['process_uuid']);
        self::assertSame($mockArgs['Uuid']['toNative'], $result['uuid']);
        self::assertSame($mockArgs['Status']['toNative'], $result['status']);
    }
}
