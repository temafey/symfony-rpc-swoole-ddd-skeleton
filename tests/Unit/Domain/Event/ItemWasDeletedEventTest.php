<?php

declare(strict_types=1);

namespace Backend\Api\RpcSkeleton\Tests\Unit\Domain\Event;

use Assert\AssertionFailedException;
use Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent;
use Backend\Api\RpcSkeleton\Tests\Unit\Mock\Domain\ValueObjectMockHelper;
use Backend\Api\RpcSkeleton\Tests\Unit\UnitTestCase;

/**
 * Test for class ItemWasDeletedEvent.
 *
 * @class ItemWasDeletedEventTest
 */
class ItemWasDeletedEventTest extends UnitTestCase
{
    use ValueObjectMockHelper;

    /**
     * Test for "Return Id".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent::getProcessUuid
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent::getUuid
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasDeletedEventDataProvider::getDataForGetMethods()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function testGetMethods(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $test = new ItemWasDeletedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock);

        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
    }

    /**
     * Test for "Initialize event from data array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent::deserialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasDeletedEventDataProvider::getDataForDeserializeMethod()
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
        ];
        $test = ItemWasDeletedEvent::deserialize($data);
        self::assertInstanceOf(ItemWasDeletedEvent::class, $test);
        self::assertSame($mockArgs['UUID']['toNative'], $test->getProcessUuid()->toNative());
        self::assertSame($mockArgs['Uuid']['toNative'], $test->getUuid()->toNative());
    }

    /**
     * Test for "Convert event object to array".
     *
     * @test
     *
     * @group unit
     *
     * @covers       \Backend\Api\RpcSkeleton\Domain\Event\ItemWasDeletedEvent::serialize
     *
     * @dataProvider \Backend\Api\RpcSkeleton\Tests\Unit\DataProvider\Domain\Event\ItemWasDeletedEventDataProvider::getDataForSerializeMethod()
     *
     * @param mixed[] $mockArgs
     * @param mixed[] $mockTimes
     */
    public function serializeShouldReturnArrayTest(array $mockArgs, array $mockTimes): void
    {
        $microCommonValueObjectIdentityUUIDMock = $this->createMicroModuleValueObjectIdentityUUIDMock($mockArgs['UUID'], $mockTimes['UUID']);
        $domainValueObjectUuidMock = $this->createDomainValueObjectUuidMock($mockArgs['Uuid'], $mockTimes['Uuid']);
        $test = new ItemWasDeletedEvent($microCommonValueObjectIdentityUUIDMock, $domainValueObjectUuidMock);
        $result = $test->serialize();

        self::assertArrayHasKey('process_uuid', $result);
        self::assertArrayHasKey('uuid', $result);
        self::assertSame($mockArgs['UUID']['toNative'], $result['process_uuid']);
        self::assertSame($mockArgs['Uuid']['toNative'], $result['uuid']);
    }
}
